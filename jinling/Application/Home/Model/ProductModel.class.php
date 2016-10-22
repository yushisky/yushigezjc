<?php
 namespace Home\Model;
 use Think\Model;
	Class ProductModel extends Model{
		public function Pro_count(){
		return $this->count();
		}
		
	}


?>