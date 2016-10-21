<?php
/**
 * 会员操作类
 */
namespace Test\Controller;
class CommentController extends BaseController {
	protected function _initialize() {
		parent::_initialize ();
		// 检测登录状态		
		if (!$this->_G['uid']) {
			redirect(U('Test/Login/index'));
		}
		
	}
	/**
	 * 待评价
	 */
	public function wait(){
		$this->display();
	}
	/**
	 * 已评价
	 */
	public function already(){
		$this->display();
	}
}