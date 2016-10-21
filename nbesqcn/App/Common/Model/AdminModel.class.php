<?php
namespace Common\Model;
class AdminModel extends BaseModel{
	protected $_validate = array(
		array('username','','{%USERNAME_EXISTS}',0,'unique',1), // 在新增的时候验证name字段是否唯一
		array('password','require','{%PASSWORD_MUST}',0,'',1), //在新增的时候密码必填
	);
	protected $_auto = array (
		array('password','md5_exist',3,'function') , // 对password字段在新增编辑md5函数处理
		array('addtime','time',1,'function')
	);
	/**
	 * 获取单个用户数据
	 * @param 	array|string	$where
	 * @param 	string			$field
	 * @return	array			结果集
	 */
	public function getAdmin($where,$field = '*'){
		if($field == '*' || strstr($field,',') !== false){
			return $this->where($where)->field($field)->find();
		}else{
			return $this->where($where)->getField($field);;
		}
	}
	/**
	 * 获取多个用户数据
	 * @param 	array|string	$where
	 * @param 	string			$field
	 * @return	array			结果集
	 */
	public function getAllAdmin($where,$field = '*'){
		return $this->where($where)->field($field)->select();
	}
	/**
	 * 更新用户数据
	 * @param 	array|string	$where
	 * @param 	array 			$data
	 * @return	boolean			true&false
	 */
	public function updateAdmin($where,$data){
		$ok = $this->where($where)->save($data);
		return $ok !== false?true:false;
	}
	/**
	 * 更新会员SESSION
	 * @param array $data
	 */
	public function updateSession($data){
		return M('AdminSession')->add($data,array(),true);
	}
}