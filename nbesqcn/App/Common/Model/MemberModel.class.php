<?php
namespace Common\Model;
class MemberModel extends BaseModel{
	protected $_validate = array(
			array('username','require','{%USRERNAME_NOT_NULL}',0,'',1),
			array('username','','{%USRERNAME_EXIST}',0,'unique',1), // 在新增的时候验证name字段是否唯一
			array('password','require','{%PWD_NOT_NULL}',0,'',1), //在新增的时候密码必填
			array('confirm_password','password','{%PWD_NOT_SAME}',0,'confirm'),
			array('phone','require','{%PHONE_NOT_NULL}',0,'',1),
			array('phone','check_phone','{%PHONE_FORMAT_ERROR}',0,'function'),
			array('phone','','{%PHONE_EXISTS}',0,'unique',1),
			array('email','require','{%EMAIL_NOT_NULL}',0,'',1),
			array('email','check_email','{%EMAIL_FORMAT_ERROR}',0,'function'),
			array('email','','{%EMAIL_EXISTS}',0,'unique',1)
	);
	protected $_auto = array (
			array('password','md5_exist',3,'function'), // 对password字段在新增编辑md5函数处理
			array('password','',2,'ignore'),//编辑时候留空可忽略
			array('pwd_key','rand_string',1,'function'),
			array('regtime','time',1,'function'),
			array('regip','get_client_ip',1,'function'),
			array('logintime','time',1,'function'),
			array('loginip','get_client_ip',1,'function'),
			array('status',1),
			array('type_id',1)
	);
	
	static public function getMember($where){
		return nabang('member')->where($where)->find();
	}
	static public function getMemberField($where){
		return nabang('member_field')->where($where)->find();
	}
	static public function getMemberSaler($where,$field='*'){
		return nabang('member_saler')->where($where)->field($field)->select();
	}
}