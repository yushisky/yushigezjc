<?php
namespace Home\Controller;
use Think\Controller;
//M的方法是不需要模型   $nav_data = $nav->where($where)->select();
//而D方法一定要模型  对应的模板名字 class IndexController extends Controller {
header("Content-type:text/html;charset=utf-8");
class ProController extends Controller {
    public  function __construct(){
        parent::__construct();
    }
    public function pr(){
    	$Product = D('product');
    	// print_r($Product);die;
    	$limit = 12;
    	$art_datail = $Product->get_all();
    	// print_r($art_datail);die;
    	echo $Product->getlastsql();die;
    	$this->assign('Pro_data',$Pro_data);
        $this->display('index/products');


        //  $cat_id = I('get.cat_id');
        // $article = D('article');
        // $count= $article->cat_count($cat_id);
        // $Page = new \Think\Page($count,5);
        // $Page -> rollPage = 5;
        // $Page -> lastSuffix = false;
        // $Page -> setConfig('prev','上一页');
        // $Page -> setConfig('next','下一页');
        // $Page -> setConfig('first','首页');
        // $Page -> setConfig('last','伟业');
        // //$Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        //  // print_r($art_data);die;
        //   $show =$Page->show();
        // // echo $show;
        // // echo $count.'条记录';die;
        //  $this-> assign('Page',$show);
        // // $art_data = $article->cat_list($cat_id,$Page->firstRow.','.$Page->listRows);
        // // $art_data = $article->cat_list($cat_id);
        // $art_data = $article->where('article_aid ='.$cat_id)->limit($Page->firstRow.','.$Page->listRows)->order('id desc')->select();//源生方法
        //  // $art_data = $article->where('article_aid ='.$cat_id)->limit($Page->firstRow.','.$limit)->order('id desc')->select();
        // $this->assign('art_data',$art_data);
    }

}