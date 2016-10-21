<?php
/**
 * 会员操作类
 */
namespace Test\Controller;
class MemberController extends BaseController {
	protected function _initialize() {
		parent::_initialize ();
		// 检测登录状态		
		// if (!$this->_G['uid']) {
		// 	redirect(U('Test/Login/index'));
		// }
		
	}
	/**
	 * 基本信息
	 */
	public function index(){
		$birthday = birthday();		
		if($this->_G['birthday']){
			$time = substr(str_replace(array('年','月','日'),'-',$this->_G['birthday']),0,-1);
			$time = strtotime($time);
			$year= date('Y',$time);
			$month = date('m',$time);
			$day = date('d',$time);
		}
		$this->assign(array(
			'birthday'=>$birthday['year'],
			'feb'=>json_encode($birthday['feb']),
			'year'=>$year,
			'month'=>$month,
			'day'=>$day			
		));
		$this->display('Member_set');
	}
	/**
	 * 修改会员信息
	 */
	public function modifyMember(){
		$data = I('post.');
		if($_FILES['photo']['tmp_name']){
			vendor('Hpr.Hprose');
			$byte = new \HproseBytesIO();
			$byte->load($_FILES['photo']['tmp_name']);
			$data['photo'] = $byte->readfull();//获取二进制图片
		}
		if($data){
			$data['uid'] = $this->_G['uid'];
			$data['token'] = $this->_G['token'];
			$data['realname'] = $data['realname'];
			$data['birthday'] = $data['year'].'-'.$data['month'].'-'.$data['day'];
			$client = $this->hprose('http://api.nbesq.com/Member');
			$this->ajax_return = $client->modifyMember($data);
		}
		return_json($this->ajax_return);
	}
	/**
	 * 安全中心
	 */
	public function conter(){




		$this->display('Member_conter');
	}
	/**
	 * 修改密码
	 */
	public function pass_view(){
		$this->display();
	}
	/**
	 * 修改密码保存
	 */
	public function modifyPwd(){
		$data = I('post.');
		if($data){
			$data['uid'] = $this->_G['uid'];
			$data['token'] = $this->_G['token'];
			$client = $this->hprose('http://api.nbesq.com/Member');
			$this->ajax_return = $client->modifyPwd($data);
		}
		return_json($this->ajax_return);
	}
	/**
	 * 设置支付密码验证
	 */
	public function pay_view(){
		$data = I('post.');
		$op = I('get.op','check_phone');
		switch($data['op']){
			case 'check_phone':
				if($data['phone'] && $data['code']){
					$client = $this->hprose('http://api.nbesq.com/Tool');
					$this->ajax_return = $client->checkSms($data);
					$result = json_decode(json_encode($this->ajax_return),true);
					if($result['status']){
						$this->ajax_return['op'] = 'submit_info';
					}										
				}
				return_json($this->ajax_return);
				break;
			case 'submit_info':
				if($data){
					$client = $this->hprose('http://api.nbesq.com/Member');
					$data['uid'] = $this->_G['uid'];
					$data['token'] = $this->_G['token'];
					if(!$this->_G['has_pay_pwd']){						
						$this->ajax_return = $client->setPayPwd($data);						
					}
					else{
						$this->ajax_return = $client->modifyPayPwd($data);						
					}	
					$result = json_decode(json_encode($this->ajax_return),true);
					if($result['status']){
						$this->ajax_return['op'] = 'success';
					}				
				}	
				return_json($this->ajax_return);
				break;
		}
		$this->assign(array(
			'op'=>$op
		));
		$this->display();		
	}		
	/**
	 * 我的代金券
	 */
	public function ticket(){




		$this->display('Member_ticket');
	}
	/**
	 * 我的余额
	 */
	public function balance(){



		$this->display('Member_idset');
	}
	/**
	 * 充值
	 */
	public function recharge(){


		$this->display('Member_pay');
	}
	/**
	 * 待评价
	 */
	public function stayapp(){

		
		$this->display('Member_stayappraise');
	}
	/**
	 * 已评价
	 */
	public function appraise(){

		
		$this->display('Member_appraise');
	}

	/**
	 * 个人资料
	 */
	public function prodata(){

		
		$this->display('Member_prodata');
	}
	/**
	 * 充值记录
	 */
	public function recharge_record(){
		$client = $this->hprose('http://api.nbesq.com/Member');
		$list = $client->getCharge(array('uid'=>$this->_G['uid'],'token'=>$this->_G['token']));
		print_r($list);
		$this->display();
	}
}