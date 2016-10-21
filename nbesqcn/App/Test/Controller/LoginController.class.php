<?php
/**
 * 登录操作类
*/
namespace Test\Controller;
class LoginController extends BaseController {
    /**
     * 首页
     */
    public function index(){
       	$this->display();
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