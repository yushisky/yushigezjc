<?php
/**
 * 会员操作类
 */
namespace Test\Controller;
class BusinessController extends BaseController {
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
		$this->display('Business_set');
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
	public function secure(){
	    
	    
	    
	    
		$this->display('Business_secure');
	}
	/**
	 * 交易记录 
	 */
	public function keep(){
		

		$this->display('Business_keep');
	}
	/**
	 * 全部评价
	 * 
	 */
	public function appraise(){
		

		$this->display('Business_appraise');
	}
	/**
	 * 全部评价1
	 * 
	 */
	public function appraise1(){
		

		$this->display('Business_appraise1');
	}
	
	/**
	 * 全部评价2
	 * 
	 */
	public function appraise2(){
		

		$this->display('Business_appraise2');
	}
	
	/**
	 * 登录
	 */
	public function login(){
	    $data = I('post.');
	    if($data){
	        $client = $this->hprose('http://api.nbesq.com/Member');
	        $this->ajax_return = $client->login($data);
	        if($this->ajax_return['status']){//登录成功，保存cookie
	            $this->cookie_auth($this->ajax_return['data']['token'],$this->ajax_return['data']['uid']);
	        }
	    }
	    else{
	        $this->ajax_return['msg'] = '缺少参数';
	    }
	    return_json($this->ajax_return);
	    $this->display('Business/Business_login');
	}
	
	/**
	 * 退出
	 */
	public function logout(){
	    // 清空COOKIE
	    cookie ( 'member_auth', null );
	    $this->redirect ('Business/Business_login');
	}
}