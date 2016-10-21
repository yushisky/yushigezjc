<?php
namespace Test\Controller;
use Common\Controller\GlobalController;
class BaseController extends GlobalController {
    protected $is_mobile = false;
	protected function _initialize() {
		parent::_initialize();
		$domain = $_SERVER['SERVER_NAME'];
		$domain_prefix = substr($domain,0,strpos($domain,'.'));
		if($this->isMobile() || $domain_prefix == 'm'){
		    C('DEFAULT_V_LAYER','Mobile');
		    $this->is_mobile = true;
		}
		C('TMPL_ACTION_ERROR' ,THINK_PATH . 'Tpl/dispatch_jump.tpl');
		C('TMPL_ACTION_SUCCESS' ,THINK_PATH . 'Tpl/dispatch_jump.tpl');
	}
	/**
	 * 发送短信验证码
	 */
	public function sendPhone(){
		$phone = I('post.phone');
		$this->sendSms($phone);
	}
	/**
	 * 生成验证码
	 */
	public function verify($config=array()){
		$config = $config?$config:array('fontSize'=>18,'length'=>5,'useCurve'=>false,'useNoise'=>false,'useImgBg'=>true,'imageW'=>'160','imageH'=>'35','fontttf'=>'1.ttf','reset'=>false);
		$verify = new \Think\Verify($config);
		$verify->entry();
	}
	/**
	 * 检测验证码是否正确
	 * @param string $code	用户输入的验证码
	 * @param string $id	
	 * @return boolean	true|false
	 */
	protected function checkVerify($code, $id = ''){
		$verify = new \Think\Verify();
		return $verify->check($code, $id);
	}
}