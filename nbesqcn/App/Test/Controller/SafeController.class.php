<?php
/**
 * 安全中心操作类
 */
namespace Test\Controller;
class SafeController extends BaseController {
	protected function _initialize() {
		parent::_initialize ();		
		
	}
	/**
	 * 找回登录密码
	 */
	public function find_pass_view(){
		$data = I('post.');
		switch($data['op']){
			case 'check_phone':
				if($data['phone'] && $data['code']){
					$client = $this->hprose('http://api.nbesq.com/Tool');
					$this->ajax_return = $client->checkSms($data);
					$result = json_decode(json_encode($this->ajax_return),true);					
				}
				if(!$result['status']){
					$this->showMessage($result['msg'], 0);
				}
				else{
					$this->assign(array(
							'op'=>'submit_info',
							'phone'=>$data['phone']
					));
				}
				break;
			case 'submit_info':
				if($data){
					if($data['password'] and $data['repassword']){
						$data['password'] = md5($data['password']);
						$data['repassword'] = md5($data['repassword']);
						$client = $this->hprose('http://api.nbesq.com/Member');
						$this->ajax_return = $client->getForgetPwd($data);
						$result = json_decode(json_encode($this->ajax_return),true);
					}					
					if(!$result['status']){
						$this->showMessage($result['msg'], 0);
					}
					else{
						$this->assign(array(
							'op'=>'success'
						));
					}
				}
				break;
			default:
				$this->assign(array(
						'op'=>'check_phone'
				));
				
		}		
		$this->display();
	}
}