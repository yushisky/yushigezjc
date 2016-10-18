<?php
 namespace Home\Model;
 use Think\Model;
	Class MessageModel extends Model{
		public function get_add(){
		return $this->add();
		}
	}
?>