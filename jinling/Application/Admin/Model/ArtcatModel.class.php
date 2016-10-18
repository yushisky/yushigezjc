<?php
 namespace Admin\Model;
 use Think\Model;
	Class ArtcatModel extends Model{
		public function get_add(){
		return $this->add();
		}

		public function get_del($id){
		return $this->where('id ='.$id)->delete(); 
		}
		public function get_edit($id){
		return $this->where('id ='.$id)->find(); 
		}
		public function get_all1(){
		return $this->select();
		}
		public function art_count(){
		return $this->count();
		}

	}
?>