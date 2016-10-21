<?php
namespace Common\Model;
class MemberAddressModel extends BaseModel{
	protected $_validate = array(
			array('title','require','请输入别名',0,'',1),
			array('realname','require','请输入别名',0,'',1),
			array('province','require','请选择省份',0,'',1),
			array('city','require','请选择城市',0,'',1),
			array('zone','require','请选择地区',0,'',1),
			array('address','require','请输入详细地址',0,'',1),
			array('phone','require','请输入手机号码',0,'',1),
			array('phone','check_phone','{%PHONE_FORMAT_ERROR}',0,'function')
//			array('email','require','请输入邮箱',0,'',1),
//			array('email','check_email','{%EMAIL_FORMAT_ERROR}',0,'function')
	);
	protected $_auto = array (
			array('addtime','time',1,'function')
	);
	static public function getAddress($where){
		return D('MemberAddress')->where($where)->find();
	}
	static public function getCount($where){
		return D('MemberAddress')->where($where)->count();
	}
}