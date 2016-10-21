<?php
/**
 * 注册操作类
 */
namespace Test\Controller;
class RegisterController extends BaseController {
	public function _initialize() {
		parent::_initialize();
		if ($this->_G ['uid']) {
			$this->showMessage ( L ( 'ALREADY_LOGIN' ), 0, U ( 'Index/index' ) );
		}
	}
    /**
     * 首页
     */
    public function index(){
       	$this->display();
    }
    /**
     * 注册
     */
    public function register(){
        $data = I('post.');
        if($data){
        	$data['reg_from'] = '0';
        	$client = $this->hprose('http://api.nbesq.com/Member');    	
        	$this->ajax_return = $client->register($data);
        	if($this->ajax_return['status']){
        		$auth = $this->ajax_return['data']['token'] . "\t" . $this->ajax_return['data']['uid'];
        		$auth = \Think\Crypt::encrypt ( $auth, C ( 'AUTH_KEY' ) );
        		cookie ( 'member_auth', $auth );
        	}
        	return_json($this->ajax_return);
        }
    }
    /**
     * 获取手机验证码
     */
    public function sendVeri(){    	
    	$phone = I('post.phone');
    	if($phone){
    		$client = $this->hprose('http://api.nbesq.com/Member');    		
    		$client->sendVeri(array('phone'=>$phone));
    	}
    }
}