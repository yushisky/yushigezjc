<?php
 namespace Home\Model;
 use Think\Model;
	Class ArticleModel extends Model{
		// public function get_all(){
		// return $this->select();
		// }
		// public function get_one($where){
		// return $this->where('id = '.$where)->find();
		// }
		// public function get_all($where){
		// return $this->where('id = '.$where)->select();
		// }
		public function get_one1($where,$order,$limit){
		return $this->where($where)->order($order)->limit($limit)->select();
		}
		public function get_all1($where,$order,$limit){
		return $this->where($where)->order($order)->limit($limit)->select();
		}
		public function get_one($id){
		return $this->join('jl_artcat on jl_artcat.id = article_aid')->where('jl_article.id = '.$id)->find();
		}
		public function cat_list($cat_id,$limit){
		return $this->where('article_aid = '.$cat_id)->limit($limit)->order('id desc')->select();
		}
		public function cat_count($cat_id){
		return $this->where('article_aid =' .$cat_id)->count();
		}
		

}
?>