<?php
 namespace Admin\Model;
 use Think\Model;
	Class ArticleModel extends Model{
		public function get_del($id){
		return $this->where('id ='.$id)->delete(); 
		}
		public function art_count(){
		return $this->count();
		}
		public function get_add(){
		return $this->add();
		}
		public function get_all1(){
		return $this->select();
		}
		public function get_edit($id){
		return $this->where('id ='.$id)->find(); 
		}
	}
?>