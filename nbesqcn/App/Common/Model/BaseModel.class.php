<?php
namespace Common\Model;
use Think\Model;
class BaseModel extends Model{
	/**
	 * 添加编辑删除数据
	 * @param object $model	数据表
	 */
	static public function saveGrid($m,$array=array()){
		$model = M($m)?M($m):$this;
		if (I('post.inserted')) {
			$list = json_decode (I('post.inserted','','stripslashes'), true );
			$i = 0;
			foreach ( $list as $key => $value ) {
				if ($value) {
					if($array) $value = array_merge($value,$array);
					$ok = $model->add($value);
					if ($ok !== false)
						$i ++;
				}
			}
		}
		if (I('post.updated')) {
			$list = json_decode (I('post.updated','','stripslashes'), true );
			$i = 0;
			foreach ( $list as $key => $value ) {
				if ($value ['id']) {
					if($array) $value = array_merge($value,$array);
					$ok = $model->where("id='{$value['id']}'")->save($value);
					if ($ok !== false)
						$i ++;
				}
			}
		}
		if (I('post.deleted')) {
			$list = json_decode (I('post.deleted','','stripslashes'),true );
			$i = 0;
			foreach ( $list as $key => $value ) {
				if ($value ['id']) {
					$ok = $model->where("id='{$value['id']}'")->delete();
					if ($ok !== false)
						$i ++;
				}
			}
		}
		if ($i > 0) {
			$ajax_return ['status'] = '1';
			$ajax_return ['data'] = L ( 'DONE_SUCCESS' );
		} else {
			$ajax_return ['status'] = '0';			
			$ajax_return ['data'] = L ( 'DONE_FAIL' );
		}
		return $ajax_return;
	}
	/**
	 * 删除有图的数据
	 * @param object $model	数据表
	 * $imagefield 图片字段
	 * $relation 关联数据表
	 * $refield 关联字段
	 * $tip 提示
	 */
	static public function delImageGrid($m,$imagefield='thumb',$relation=array()){
		$model = M($m)?M($m):$this;
		if (I('post.deleted')) {
			$list = json_decode (I('post.deleted','','stripslashes'),true );
			$i = 0;
			foreach ( $list as $key => $value ) {
				if ($value ['id']) {					
					if(count($relation)){
						$j = 0;
						foreach($relation as $k=>$v){
							$count = M($v['db'])->where("{$v['p_id']}='{$value['id']}'")->count('id');
							if($count > 0) $j++;
							
						}
						if($j > 0){
							$ajax_return ['status'] = '0';
							$ajax_return ['data'] = $v['tip']?$v['tip']:L('DONE_FAIL');
							return $ajax_return;
						}
					}
					self::delThumb($m,array('id'=>$value ['id']),$imagefield);
					$ok = $model->where("id='{$value['id']}'")->delete();
					if($ok !== false) $i ++;    
				}
			}
		}
		if ($i > 0) {
			$ajax_return ['status'] = '1';
			$ajax_return ['data'] = L ( 'DONE_SUCCESS' );
		} else {
			$ajax_return ['status'] = '0';
			$ajax_return ['data'] = L ( 'DONE_FAIL' );
		}
		return $ajax_return;
	}
	/**
	 * 删除缩略图
	 * $model 删除缩略图的数据库
	 */
	static public function delThumb($model,$where,$field='thumb'){
		$ok = false;
		$thumb = M($model)->where($where)->field($field)->find();
		if($thumb){
			$field_arr = explode(',',$field);
			foreach($field_arr as $key=>$value){
				unlink($thumb[$value]);
				$ok = M($model)->where($where)->save(array("{$value}"=>''));
			}
		}
		if ($ok) {
			$ajax_return ['status'] = 1;
			$ajax_return ['data'] = L ( 'DONE_SUCCESS' );
		} else {
			$ajax_return ['status'] = '0';
			$ajax_return ['data'] = L( 'DONE_FAIL' );
		}
		return $ajax_return;
	}
	/**
	 * 处理搜索条件
	 * @param array $intkeys	条件为整数
	 * @param array $strkeys	提交为字符串
	 * @param array $randkeys	范围搜索	$vars = array('strtotime','addtime')
	 * @param array $likekeys	模糊搜索
	 * @param array $pre		表的前缀
	 * 		$wheresql = '1';
			$param = grid_param('addtime','desc');
			$list = array ();
			$intkeys = array('cid','is_top');
			$strkeys = array();
			$randkeys = array(array('strtotime','addtime'));
			$likekeys = array('title','short_title');
			$wheresql .= \Admin\Model\BaseModel::bulidSearch($intkeys, $strkeys, $randkeys, $likekeys);
	 */
	static public function bulidSearch($intkeys, $strkeys, $randkeys, $likekeys, $pre = ''){
		$wherearr = array ();
		foreach ( $intkeys as $var ) {
			$value = I('get.'.$var);
			if($value !== ''){//不为空 但是可以为0
				$wherearr [] = "{$pre}{$var}='" . intval ( $value ) . "'";
			}
		}
		foreach ( $strkeys as $var ) {
			$value = I('get.'.$var);
			if($value !== ''){
				$wherearr [] = "{$pre}{$var}='$value'";
			}
		}
		foreach ( $randkeys as $vars ) {
			$value1 = I('get.'.$vars['1'].'1');
			$value2 = I('get.'.$vars['1'].'2');
			if($value1 !== ''){
				$wherearr [] = "{$pre}{$vars[1]}>='".$vars['0']($value1)."'";
			}
			if($value2 !== ''){
				$wherearr [] = "{$pre}{$vars[1]}<='".$vars['0']($value2)."'";
			}
		}
		foreach ( $likekeys as $var ) {
			if(I('get.'.$var) !== ''){
				$value_arr = explode (' ',I('get.'.$var));
				if(count($value_arr) == '1' && $value_arr ['0'] !== ''){
					$value = strip_search_key($value_arr['0']);
					$where = "{$pre}{$var} LIKE '%$value%'";
				}else{
					$where = '(';
					foreach($value_arr as $v){
						if($v !== ''){
							$v = strip_search_key($v['0']);
							$where .= "{$pre}{$var} LIKE '%$v%' or ";
						}
					}
					$where = substr ( $where, 0, - 4 ) . ")";
				}
				$wherearr [] = $where;
			}
		}
		return $wherearr?' AND '.implode(' AND ',$wherearr):'';
	}
	/**
	 * 获取指定单条数据表的信息
	 * $model 数据表
	 * $field 字段
	 * $where 条件
	 */	
	static public function getOneInfo($model,$where,$field='*'){
		if($field == '*' || strstr($field,',') !== false){
			return M($model)->where($where)->field($field)->find();
		}else{
			return M($model)->where($where)->getField($field);;
		}
	}
	/**
	 * 获取统计条数
	 */
	static public function getListCount($model,$where){
		return D($model)->where($where)->count();
	}
	/**
	 * 会员信誉积分
	 * $credit 积分
	 * $type_id 会员类型
	 */
	static public function memberGroupCredit($credit,$type_id="1"){
		$member_group = F( 'member_group');
		$member_groups = array();
		foreach($member_group as $k=>$v){
			$member_groups[$v['type_id']][] = $v;
		}
		foreach($member_groups[$type_id] as $k=>$v){
			if($credit >= $v['begin_credit'] && $credit <=  $v['end_credit'] ){
				return  $v['thumb'];
			}
		}
	}
}