<?php
namespace Home\Controller;
use Think\Controller;
//M的方法是不需要模型   $nav_data = $nav->where($where)->select();
//而D方法一定要模型  对应的模板Model名字 //模板的名字对应mysql数据库的表名 class mysql数据库的表名Controller extends Controller {
header("Content-type:text/html;charset=utf-8");
class IndexController extends Controller {
    public  function __construct(){
        parent::__construct();
         $nav = M('nav');
         $where = 'nav_pid = 1';
         $nav_data = $nav->where($where)->select();
         // echo $nav->get_all2();die;
         $this->assign('nav_data',$nav_data);
// $this->display('/index/header');
        // ===我要留言====
        $article1 = D('article');
        $where = 'article_aid = 5';
        $order ='article_addtime desc';
        $limit =  3;
        $art_data1 = $article1->get_one1($where,$order,$limit);
         $this->assign('art_data1',$art_data1);
         //=======================
        $flink = M('flink');
        $where = 'flink_order = 2';
        $limit =  3;
        $link_ionf = $flink->where($where)->limit($limit)->select();
        $this->assign('link_ionf',$link_ionf);

        // ===footer=======
        $limit = 6;
        $con = D('config');
        $us_datail = $con->get_one($limit);
        $this->assign('us_datail',$us_datail);

        }
    
    // public function aa(){
    // 	$msg = D('message');//实例化
    //     // print_r($msg);die;
    //     $data = $msg->get_one('4');//get_one出model的内容
    //     print_r($data);die;
    //     // echo $msg->getLastSql();die;
    //     $conf = D('config');
    //     $conf_data = $conf->where('id <5')->limit(3)->select();
    //    // print_r($conf_data);die;
    // 	$this->assign('conf_data',$conf_data);
    // 	$this->a = 'hello';
    //     $this->display('noBB/aa');//加载视图的方法
    //     }
    //  public function bb(){
    //     $this->display();//加载视图的方法
    //     }
    //     public function aaa(){
    //         $this->assign('b','world');
    //         $this->a = 'hello';
    //         $this->display('./cc');
    //         $this->display('aa');
    //         $this->display('noBB/aa');
    //         // http://www.jinling.com/home/Index/aaa
    //     }
     public function index(){
        echo"22222222";
        // load ('@.three');
        // echo one();
        $article = D('article');
        $where = 'article_aid = 3';
        $order ='article_addtime desc';
        $limit =  5;
        $art_data = $article->get_one1($where,$order,$limit);

        $article1 = D('article');
        $where = 'article_aid = 5';
        $order ='article_addtime desc';
        $limit =  5;
        $art_data1 = $article1->get_one1($where,$order,$limit);

        $article1 = D('article');
        $where = 'article_aid = 6';
        $order ='article_addtime desc';
        $limit =  1;
        $art_datail = $article1->get_one1($where,$order,$limit);
        // print_r($art_data);die;
        // echo $article1->getlastsql();die;
        // print_r($art_data);die;
        // $data = $na->get_all('1');//get_one出model的内容
         // print_r($data);die;
         
          $this->assign('art_datail',$art_datail);
         $this->assign('art_data1',$art_data1);
        $this->assign('art_data',$art_data);
        $this->display('index/index');
        // http://www.jinling.com/home/Index/indexone
        
    }
     public function detail(){
        //====最新公告News====
        $article1 = D('article');
        $art_id = I('get.art_id');
        $where = 'article_aid = 5';
        $order ='article_addtime desc';
        $art_info = $article1->get_one1($where,$order,$art_id);
        // print_r($art_info);die;
        // =======行业知识Knowlege=======
        $art_id = I('get.art_id');
        $article = D('article');
        // print_r($article);die;
         $art_info = $article->get_one($art_id);
          // print_r($art_info);die;
         // echo $article->getlastsql();die;
        $this->assign('art_info',$art_info);
        $this->display('index/detail');
     }
     public function about_us(){
        //====公司简介Aboutus====
        $article1 = D('article');
        $art_id = I('get.art_id');
        $where = 'article_aid = 6';
        $order ='article_addtime desc';
        $limit = 1;
        $us_info = $article1->get_all1($where,$limit,$order,$art_id);
        $art_id = '1';
        $article = D('article');
        $us_data = $article->get_one($art_id);
        // echo $article->getlastsql();die;
        $this->assign('us_data',$us_data);
        $this->assign('us_info',$us_info);
        $this->display('index/about_us');
     }
     public function art_list(){
        
        // layout(false);
        // print_r(I('get.'));die;
        $cat_id = I('get.cat_id');
        $article = D('article');
		$limit = 8;
        $count= $article->cat_count($cat_id,$limit);
		//echo $article->getlastsql();die;
        $Page = new \Think\Page($count,5);
        $Page -> rollPage = 5;
        $Page -> lastSuffix = false;
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('first','首页');
        $Page -> setConfig('last','伟业');
          $show =$Page->show();
        // echo $show;
        // echo $count.'条记录';die;
         $this-> assign('Page',$show);
		 $art_data = $article->where('article_aid ='.$cat_id)->limit($Page->firstRow.','.$limit)->order('id desc')->select();//源生方法
        $this->assign('art_data',$art_data);
        // print_r($art_data);die;
        // echo $show;
        // echo $count.'条记录';die;
        $this->display('index/list');
     }
	 public function list_data(){
		$article = D('article');
		$limit = 8;
        $list_datail = $article->cat_alll($limit);
			//echo $list_datail->getlastsql();die;
		$this->assign('list_datail',$list_datail);
		$this->display('/index/list_data');

      }
    public function products(){
        $Product = D('product');
        $count = $Product->Pro_count();
        // print_r($count);die;
        $Page = new \Think\Page($count,8);
        $Page -> rollPage = 5;//显示多少
        $Page -> lastSuffix = false;
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('first','首页');
        $Page -> setConfig('last','伟业');
        //$Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
         // print_r($art_data);die;
          $show =$Page->show();
            // echo $show;
            // echo $count.'条记录';die;
         $this->assign('Page',$show);
        // $art_data = $article->cat_list($cat_id,$Page->firstRow.','.$Page->listRows);
        // $art_data = $article->cat_list($cat_id);
        $Pro_data = $Product->limit($Page->firstRow.','.$Page->listRows)->select();
        // //源生方法
         // $art_data = $article->where('article_aid ='.$cat_id)->limit($Page->firstRow.','.$limit)->order('id desc')->select();
        $this->assign('Pro_data',$Pro_data);
        $this->display('index/products');
    }
     public function guestbook(){
            if(IS_POST){
                $author  = I('author');  // 获取post变量
                $content  = I('content');  // 获取post变量   
                $time  = I('time');  // 获取post变量 
                $data = array(
                    'message_author' =>$author,
                    'message_content' =>$content,
                    'message_addtime' =>$time,
                        );
                    $mag = D("message");
                    $res = $mag->add($data);
                    // print_r($res);die;
                    if($res){
                            $this->success('上传成功！');die;  
                    }else{
                        $this->error('上传失败！');die;
                    } 
            }
        $this->display('index/guestbook');
     }
     public function contact_us(){
        $limit = 6;
        $con = D('config');
        $us_datail = $con->get_all($limit);
        $this->assign('us_datail',$us_datail);
        $this->display('index/contact_us');

     }







}