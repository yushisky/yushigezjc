<?php
 namespace Home\MOdel;
 use Think\Model;
	Class ConfigModel extends Model{
		public function get_all($limit){
		return $this->limit($limit)->select();
		}
		public function get_one($limit){
		return $this->limit($limit)->select();
		}

}


?>