<?php
namespace Common\Controller;
use Think\Controller;
class GlobalController extends Controller {
	protected $ajax_return = array('status'=>0);// AJAX返回的信息
	protected $_G = array();
	protected $config = array (); //网站的配置
	protected $globalData = array();
	protected $cart = array();
	protected function _initialize() {
		// 检测登录状态
		$this->_G = $this->check_auth();
		// 当前IP
		$this->_G['ip'] = get_client_ip();
		//全局数据(/Config)
		$this->globalData = require './Config/basic.php';
		//系统配置
		$this->config = F('set');
		$this->assign(array(
		    '_G' => $this->_G,
		    'config' => $this->config,
		    'globalData' => $this->globalData
		));
	}
	/**
	 * 提示跳转(成功或失败)
	 * @param string $msg 信息内容
	 * @param string $status 操作状态
	 * @param string $waittime 等待多少秒后跳转，默认2秒
	 * @param string $jumpurl 跳转到哪个页面，默认返回上一步
	 * @param string $ajax 是否AJAX方式提交 ，默认不是AJAX方式提交
	 */
	protected function showMessage($msg,$status,$jumpUrl,$waitTime = '2',$isAjax = false){
		$this->assign('waitSecond',$waitTime);
		if($msg){
			if($status == '1'){
				$this->success($msg,$jumpUrl,$isAjax);
			}elseif($status == '0'){
				$this->error($msg,$jumpUrl,$isAjax);
			}
		}else{
			redirect($jumpUrl,0);
		}
		exit;
	}
	/**
	 * 检测用户登陆状态
	 * 根据cookie获取用户相关信息
	 * 数据表里的UID跟cookie的相关信息不一致时，清空cookie，即清除已登陆状态
	 */
	protected function check_auth() {
		$auth = cookie ( 'member_auth' );
		if ($auth) {
			@list ( $token, $uid) = explode ( "\t", \Think\Crypt::decrypt ( $auth, C ( 'AUTH_KEY' ) ) );			
			if ($token && $uid) {
				$client = $this->hprose('http://api.nbesq.com/Member');
				$member = $client->getPersonDetail(array('uid'=>$uid,'token'=>$token));
				if ($member['data']) {
					$member['data']['token'] = $token;
					return $member['data'];
				} else {
					$_G ['uid'] = 0;
				}
			}
		}
		if (empty ( $_G ['uid'] )) {
			cookie ( 'member_auth', null );
		}
		return $_G;
	}
	/**
	 * 获取当前用户的店铺信息
	 */
	protected function getSaler($member_id,$saler_id){
		$saler = array();
		if($saler_id){
			$list = \Common\Model\MemberModel::getMemberSaler(array('id'=>$saler_id,'is_check'=>'1'));
			$saler = $list['0'];
			if($saler['uid']!=$member_id){
				$saler = $this->getOneSaler(array('uid'=>$member_id,'is_check'=>'1'));
			}
		}
		else{
			$saler = $this->getOneSaler(array('uid'=>$member_id,'is_check'=>'1'));

			
		}
		return $saler;
	}
	/**
	 * 回去当前用户其中一个店铺信息
	 */
	protected function getOneSaler($where){
		$saler = array();
		$list = \Common\Model\MemberModel::getMemberSaler($where);
		$count = count($list);
		if($count==1){
			$saler = $list['0'];
		}
		elseif($count>1){
			foreach($list as $k=>$v){
				if($v['is_default']){
					$saler = $v;
				}
			}
			if(!$saler){
				$saler['is_shop'] = true;
			}
		}
		return $saler;
	}
	/**
	 * 发送邮件
	 * @param	$email		可以N个email,每个email用“,”分开,也可以一个email
	 * @param	$title		标题
	 * @param	$content	发送内容
	 */
	protected function SendEmail($email,$title,$message){
		vendor('PHPMailer.class#phpmailer');
		$mail = new \PHPMailer();
		$mail->SetLanguage('zh_cn');
		$mail->CharSet = "UTF-8";
		$mail->IsSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug  = 0;
		//Ask for HTML-friendly debug output
		if($mail->SMTPDebug>0){
			$mail->Debugoutput = 'html';
		}
		$mail->Host       = $this->config['smtp'];
		$mail->Port       = $this->config['smtp_port'];
		$mail->SMTPAuth   = true;
		$mail->Username   = $this->config['smtp_username'];
		$mail->Password   = $this->config['smtp_password'];
		$mail->SetFrom($this->config['smtp_address'], $this->config['smtp_realname']);
		$mail->AddReplyTo($this->config['smtp_address'], $this->config['smtp_realname']);
		$emails = explode(',', $email);
		foreach($emails as $key=>$value){
			$mail->AddAddress($value);
		}
		$mail->Subject = $title;
		$mail->IsHTML ( true );
		$this->assign ( 'message', $message );
		$message = $this->fetch ( 'Public:sendmail' );
		$mail->MsgHTML($message);
		if(!$mail->Send()) {
			\Think\LOG::write ( "Mailer Error: " . $mail->ErrorInfo );
		} else {
			return true;
		}
	}
	/**
	 * 获取购物车信息
	 */
	protected function getCart(){
		if($this->_G['uid']){
			$cart = D('Cart')->where("uid='{$this->_G['uid']}'")->getField('cart');
			if(!$cart['total_num']){
				$cart = cookie('cart');
				if($cart) $this->putCart(json_decode($cart,true));
			}
		}else{
			$cart = cookie('cart');
		}
		return $cart?json_decode($cart,true):array();
	}
	/**
	 * 组装购物车的信息
	 */
	protected function putCart($cart){
		if($cart){
			if($this->_G['uid']){
				D('Cart')->where("uid='{$this->_G['uid']}'")->add(array('uid'=>$this->_G['uid'],'cart'=>json_encode($cart)),array(),true);
				cookie('cart',null);
			}else{
				cookie('cart',json_encode($cart),864000);
			}			
		}else{
			if($this->_G['uid']){
				D('Cart')->where("uid='{$this->_G['uid']}'")->delete();
			}
			cookie('cart',null);
		}
	}
	/**
	 * 清空购物车信息
	 */
	protected function cleanCart(){
		if($this->_G['uid']){
			D('Cart')->where("uid='{$this->_G['uid']}'")->delete();
		}
		cookie('cart',null);
	}
	/**
	 * 添加积分记录
	 * @param unknown $uid
	 * @param string $type
	 * @param unknown $credit
	 * @param string $remark
	 */
	protected function addCreditRecord($data){
		if($data){
			$data['uid'] = $this->_G['uid'];
			$data['addtime'] = NOW_TIME;
			D('MemberCredit')->add($data);
		}
	}
	/**
	 * 添加收藏
	 * @param int $id
	 * @param string $type product shop
	 */
	protected function _addCollect($id,$type){
		if($id){
			$where = "uid='{$this->_G['uid']}'";
			$data['uid'] = $this->_G['uid'];
			$data['addtime'] = NOW_TIME;
			$ok = false;
			switch($type){
				case 'product':
					$one = D('CollectProduct')->where($where." and product_id='$id'")->find();
					if(!$one){
						$data['product_id'] = $id;
						$ok = D('CollectProduct')->add($data);
					}
					break;
				case 'shop':
					$one = D('CollectSaler')->where($where." and shop_uid='$id'")->find();
					if(!$one){
						$data['shop_uid'] = $id;
						$ok = D('CollectSaler')->add($data);
						M('MemberSaler')->where(array('uid'=>$id))->setInc('collect_count',1);
					}
					break;
			}
			if($ok !== false){
				return array('status'=>1,'data'=>'收藏成功');
			}else{
				return array('status'=>0,'data'=>'您已经收藏过了');
			}
		}
	}
	protected function _saveAddress(){
		$address_model = D('MemberAddress');
		$data = $address_model->create();
		if(!$data){
			$this->ajax_return ['data'] = $address_model->getError();
			return_json($this->ajax_return);
		}else{
			$id = I('post.id');
			if(!$id){
				$count = \Common\Model\MemberAddressModel::getCount(array('id'=>$id,'uid'=>$this->_G['uid']));
				//添加条数限制 $this->config['address_num']=0 无需判断
				if($count < $this->config['address_num'] || !$this->config['address_num']){
					$data['uid'] = $this->_G['uid'];
					$insertId = $address_model->add($data);
				}else{
					$this->ajax_return ['data'] = lang(L('REACH_MAX'),array('num'=>$this->config['address_num']));
				}
			}else{
				$ok = $address_model->where(array('id'=>$id,'uid'=>$this->_G['uid']))->save($data);
				$insertId = $ok !== false?$id:'';
			}
			if($insertId){
				$this->ajax_return ['status'] = '1';
				$this->ajax_return ['data'] = L('DONE_SUCCESS');
				$this->ajax_return ['id'] = $insertId;
			}else{
				$this->ajax_return ['data'] = L('DONE_FAIL');
			}
		}
		return_json($this->ajax_return);		
	}
	/**
	 *	404错误页面
	 */
	public function _empty(){
		header('Location: '.CU('Public/error'));
	}
	/**
	 * 构建模板AJAX验证格式返回
	 * @param unknown $result
	 */
	protected function build_tmpl_ajax_return($result){
		echo $result?json_encode(array('valid'=>'true')):json_encode(array('valid'=>'false'));
		exit;
	}
	// 新信息提示
	public function news() {
		$uid = $this->_G ['uid'];
		if ($uid) {
			$table = C ( 'DB_PREFIX' ) . 'notice';
			$sql = "select n.fromuid,n.type  from $table as n ,(select max(id) as mid from $table where touid='$uid' and is_new='1' and system='0' group by fromuid) as n2 where n.id=n2.mid;";
			$list = D ( 'Notice' )->query ( $sql );
			$html = '';
			foreach ( $list as $key => $value ) {
				$neme = D('MemberSaler')->where("uid='{$value['fromuid']}'")->getField('shop_name');//
				if(!$neme){
					$name = D ('MemberField')->where ( "uid='{$value['fromuid']}'" )->getField( 'realname' );
				}
				$html .= '<p>'.($key + 1).'.'.$name ;
				$html .= '给您发消息，<a href="' . CU ( 'Center/Notice/message',array('uid' => $value ['fromuid']));
				$html .=  '" target="_blank">查看</a></p>';
			}
			if ($html){
				$this->ajax_return ['status'] = 1;
				$this->ajax_return ['data'] = $html;
			}
		}
		return_json( $this->ajax_return );
	}
	/**
	 * 获取验证码
	 */
	function getCheckCode(){
		$code = $this->generate_code();
		$type = I('post.type',1);
		$phone = I('post.phone')?I('post.phone'):$this->_G['phone'];
		switch ($type){
			case 1://手机绑定，解绑等
				$content = lang(L('GENERAL_CONTENT'),array('code'=>$code,'time'=>$this->config['pay_code_min']));
				break;
			case 2:
				$content = lang(L('PAY_BIND_CONTENT'),array('web_name'=>$this->config['name'],'code'=>$code,'time'=>$this->config['sms_code_min']));
				break;
		}
		$ok = sms_queue($phone,$content);
		if($ok){
			//保存数据库
			$this->addSmsCheckCode($phone,MD5($code));
			$this->ajax_return ['status'] = '1';
		}else{
			$this->ajax_return ['data'] = L('DONE_FAIL');
		}
		return_json($this->ajax_return);
	}
	protected function generate_code($length = 6) {
		return str_pad(mt_rand(0, pow(10, $length) - 1), $length, '0', STR_PAD_LEFT);
	}
	function addSmsCheckCode($phone,$code){
		$data['phone'] = $phone;
		$data['code'] = $code;
		$data['addtime'] = NOW_TIME;
		M('SmsCheckCode')->add($data,array(),true);
	}
	/**
	 * 检验是否唯一
	 */
	public function ajax_c_only(){
		$field = I('get.');
		$result = $this->checkOnly($field);
		$this->build_tmpl_ajax_return($result);
	}
	/**
	 * 检验是否唯一
	 * @param array $data 查找条件
	 * @param int $uid
	 * @return boolean true|false
	 */
	public function checkOnly($data=array(),$uid){
		if($data) $one = D('Member')->where($data)->find();
		return $one?false:true;
	}
	/**
	 * 生成验证码
	 */
	public function verify($config=array()){
		//$config = $config?$config:array('fontSize'=>18,'length'=>5,'useCurve'=>false,'useNoise'=>false,'useImgBg'=>true,'imageW'=>'160','imageH'=>'35','fontttf'=>'1.ttf','reset'=>false);
		$config = $config?$config:array('fontSize'=>18,'length'=>5,'useCurve'=>false,'useNoise'=>false,'useImgBg'=>true,'imageW'=>'160','imageH'=>'35','fontttf'=>'6.ttf','reset'=>false);
		$verify = new \Think\Verify($config);
		$verify->entry();
	}
	/**
	 * 判断是否手机
	 * @return boolean
	 */
	protected function isMobile() {
		// 如果有HTTP_X_WAP_PROFILE则一定是移动设备
		if (isset ( $_SERVER ['HTTP_X_WAP_PROFILE'] ))
			return true;
			
		// 此条摘自TPM智能切换模板引擎，适合TPM开发
		if (isset ( $_SERVER ['HTTP_CLIENT'] ) && 'PhoneClient' == $_SERVER ['HTTP_CLIENT'])
			return true;
		// 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
		if (isset ( $_SERVER ['HTTP_VIA'] ))
				
			// 找不到为flase,否则为true
			return stristr ( $_SERVER ['HTTP_VIA'], 'wap' ) ? true : false;
		// 判断手机发送的客户端标志,兼容性有待提高
		if (isset ( $_SERVER ['HTTP_USER_AGENT'] )) {
			$clientkeywords = array ('nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile','MicroMessengers');
			// 从HTTP_USER_AGENT中查找手机浏览器的关键字
			if (preg_match ( "/(" . implode ( '|', $clientkeywords ) . ")/i", strtolower ( $_SERVER ['HTTP_USER_AGENT'] ) )) {
				return true;
			}
		}
		// 协议法，因为有可能不准确，放到最后判断
		if (isset ( $_SERVER ['HTTP_ACCEPT'] )) {
			// 如果只支持wml并且不支持html那一定是移动设备
			// 如果支持wml和html但是wml在html之前则是移动设备
			if ((strpos ( $_SERVER ['HTTP_ACCEPT'], 'vnd.wap.wml' ) !== false) && (strpos ( $_SERVER ['HTTP_ACCEPT'], 'text/html' ) === false || (strpos ( $_SERVER ['HTTP_ACCEPT'], 'vnd.wap.wml' ) < strpos ( $_SERVER ['HTTP_ACCEPT'], 'text/html' )))) {
				return true;
			}
		}
		return false;
	}
	/**
	 * 调用接口
	 * @param string $url 接口地址
	 */
	protected function hprose($url){
		vendor('Hpr.Hprose');
		$client = new \HproseHttpClient($url);
		return $client;
	}
	/**
	 * 生成会员cookie
	 * @param string $url 接口地址
	 */
	protected function cookie_auth($token,$uid){
		$auth = $token . "\t" . $uid;
		$auth = \Think\Crypt::encrypt ( $auth, C ( 'AUTH_KEY' ) );
		cookie ( 'member_auth', $auth );
	}
	/**
	 * 发送验证码
	 */
	public function sendSms($phone){
		if($phone){
			$client = $this->hprose("http://api.nbesq.com/Tool");
			$client->sendSms(array('phone'=>$phone));
		}		
	}
}