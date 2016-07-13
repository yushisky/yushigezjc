<?php
namespace Admin\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class IndexController extends Controller {
	public  function __construct(){
		parent::__construct();
		header("Content-type:text/html;charset=utf-8");
		$is_login = session('is_login');
		if(!$is_login){
			// $this->error('请先登录','http://www.jinling.com/admin/login');die;
			$this->success('请先登录,斗笔','http://www.jinling.com',22222);die;
			// $this->success('请先登录','http://www.jinling.com',10);die;
			// redirect('http://www.jinling.com', 5, '<h1>aaa</h1>页面跳转中...');
		}
	}
    public function index(){
    	


        $this->display('index/index');
      }
      public function file_up(){
      	if(IS_POST){
      		$upload = new \Think\Upload();// 实例化上传类   
      		$upload->maxSize = 3145728 ;// 设置附件上传大小  
	        $upload->exts  = array('jpg','gif','png','jpeg');
	        // 设置附件上传类型    
	        $rootpath = $upload->rootPath = './Public/Uploads/';
	        $savepath = $upload->savePath = '';
	         // 设置附件上传目录    // 上传文件
	         $a = $upload->subName = array('date','Y-m-d');    
	         $info =  $upload->upload();  
	         echo '<pre>';
	         	//==缩略图处理====上传多个文件的时候数据表的字段的默认值一定设为NULL	
	         	$image = new \Think\Image();//实例化 
	       foreach ($info as $key => $value) {
	    		$pic_data[$key]  = $info[$key]['savepath'].$info[$key]['savename'];
	    	$image->open($rootpath.$pic_data[$key]);//打开源文件路径

	    	$min_img = $rootpath.$info[$key]['savepath'].'min_'.$info[$key]['savename'];//路径写入
	    	// $min_img = $rootpath.$info['ads_pic1']['savename'].'min_'.$info['ads_pic1']['savename'];
	    	// echo $rootpath.$pic_data['ads_pic'].'<br>';
	    	// echo $min_img;die;
    		// $image->open($rootpath.$pic_data['ads_pic1']);
    		$image->thumb(100,200)->save($min_img);
	    	}
	         if(!$info){
	        	 // 上传错误提示错误信息        
			         $this->error($upload->getError());die;   
			    }else{
		         	$ads = M('ads');
		         	$data = array(
		         		'ads_pic' =>$pic_data['ads_pic'],
		         		'ads_pic1' =>$pic_data['ads_pic1'],
		         	); 
 	         	$res = $ads->data($data)->add();
	    		if($res){
	    			$this->success('上传成功！');die;  
	    		}else{
	    			$this->error('上传失败！');die;
	    		} 
	         	}
      	}
			$this->display('index/file');
			// http://www.jinling.com/admin/index/file_up	
      }
       public function session(){
       		session('is_login',null); // 删除is_login
       		session('username',null);//删除删除username
       		session(null);///删除所有
       		// $this->error('退出成功', 1,'http://www.jinling.com/admin/login');die;
       		$this->success('退出成功','http://www.jinling.com/admin/login',1);die;
			// redirect('退出成功','http://www.jinling.com', 5, '页面跳转中...');
       		$this->display('index/session');
      }
       public function artcat(){
		if(!empty($_GET['del'])){
				$id = I('get.id');
				$cat= D('Artcat');
       			 $res = $cat->get_del($id);
				// print_r($cat_data);die;
				if($res){
					$this->success('删除成功','http://www.jinling.com/index.php/Admin/Index/artcat.html',1);die;			
				}else{
					$this->success('删除失败','http://www.jinling.com/index.php/Admin/Index/artcat.html',1);die;
				}
				}
				// http://www.jinling.com/index.php/Admin/Index/artcat.html
				// 
				// =======分页码======
				 	$Artc = D('Artcat');
			        $count = $Artc->art_count();
			        // print_r($count);die;
			        $Page = new \Think\Page($count,5);
			        $Page -> rollPage = 3;//显示多少
			        $Page -> lastSuffix = false;
			        $Page -> setConfig('prev','上一页');
			        $Page -> setConfig('next','下一页');
			        $Page -> setConfig('first','首页');
			        $Page -> setConfig('last','伟业');
			        $Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
			         // print_r($art_data);die;
			          $show =$Page->show();
			            // echo $show;
			            // echo $count.'条记录';die;
			         $this->assign('Page',$show);
			        // $art_data = $article->cat_list($cat_id,$Page->firstRow.','.$Page->listRows);
			        // $art_data = $article->cat_list($cat_id);
			        $Artc_data = $Artc->limit($Page->firstRow.','.$Page->listRows)->select();
			        // //源生方法
			         // $art_data = $article->where('article_aid ='.$cat_id)->limit($Page->firstRow.','.$limit)->order('id desc')->select();
			        $this->assign('Artc_data',$Artc_data);
			        $this->display('index/artcat_list');
			      }
      public function artcat_add(){
      			if(IS_POST){
		  			$name  = I('name');  // 获取post变量
		  			$enname = I('enname');  // 获取post变量	
		  			$time  = I('time');  // 获取post变量
		         	$data = array(
		         		'artcat_name' =>$name,
		         		'artcat_enname' =>$enname,
		         		'artcat_addtime' =>$time,
		         			);
				        $Art = D("Artcat");
			 	        $res = $Art->add($data);
			 	        // print_r($res);die;
				    	if($res){
				    		$this->success('上传成功！');die;  
			    		}else{
			    			$this->error('上传失败！');die;
			    		} 
      		}
        		$this->display('index/artcat_add');
      }
 	 public function artcat_edit(){
 	 			  $id = I('get.id');
				  $edit= D('Artcat');
		 		  $info_data = $edit->get_all1($id);
		 		  // print_r($info_data);die;

 	 		if(!empty($_GET['update'])){
				 // $id = $_GET['id'];
				  $id = I('get.id');
				  $edit= D('Artcat');
		 		  $info = $edit->get_edit($id);
	       			 // echo  $edit->getlastsql();die;
					// print_r($info);die;
				  }else{
				  		$this->success('非法进入');die; 
				  }
 	 		if(IS_POST){
			  // print_r(is_POST);die;
				 		$name  = I('name');  // 获取post变量
		                $enname  = I('enname');  // 获取post变量   
		                $addtime  = I('addtime');  // 获取post变量 
	 	 			$data = array(
 	 					'id' => $id,
						'artcat_name'=> $name,
						'artcat_enname'=> $enname,
						'artcat_addtime' =>$addtime,
			      	 );
					$cat= M('Artcat');
			       	$res = $cat->save($data);
			       	// print_r($res);die;
				    if($res){
				    	 $this->success('成功');die; 
				    }else{
				      	$this->success('失败');die; 
				    }
		   // print_r($data);die;
			}  
			$this->assign('info',$info);
      		$this->display('index/artcat_edit');
      }
      public function article_list(){
      		if(!empty($_GET['del'])){
					$id = I('get.id');
					$cat= D('Article');
	       			 $res = $cat->get_del($id);
					// print_r($cat_data);die;
					if($res){
						$this->success('删除成功','http://www.jinling.com/index.php/Admin/Index/article_list',1);die;			
					}else{
						$this->success('删除失败','http://www.jinling.com/index.php/Admin/Index/article_list',1);die;
					}
				}
      			$Artc = D('article');
			        $count = $Artc->art_count();
			        // print_r($count);die;
			        $Page = new \Think\Page($count,5);
			        $Page -> rollPage = 3;//显示多少
			        $Page -> lastSuffix = false;
			        $Page -> setConfig('prev','上一页');
			        $Page -> setConfig('next','下一页');
			        $Page -> setConfig('first','首页');
			        $Page -> setConfig('last','伟业');
			        $Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
			         // print_r($art_data);die;
			         $show =$Page->show();
			            // echo $show;
			            // echo $count.'条记录';die;
			         $this->assign('Page',$show);
			        // $art_data = $article->cat_list($cat_id,$Page->firstRow.','.$Page->listRows);
			        // $art_data = $article->cat_list($cat_id);
			        $Artc_data = $Artc->limit($Page->firstRow.','.$Page->listRows)->select();
			        // //源生方法
			         // $art_data = $article->where('article_aid ='.$cat_id)->limit($Page->firstRow.','.$limit)->order('id desc')->select();
				$this->assign('Artc_data',$Artc_data);
		      	$this->display('index/article_list');
      }
      public function article_add(){
      			if(IS_POST){
      			$title  = I('title');  // 获取post变量
      			$content = I('content');  // 获取post变量	
      			$time  = I('time');  // 获取post变量
	         	$data = array(
	         		'article_title' =>$title,
	         		'article_content' =>$content,
	         		'article_addtime' =>$time,
	         	);
		        $Art = D("article");
	 	        $res = $Art->add($data);
	 	        // print_r($res);die;
		    	if($res){
		    		$this->success('上传成功！');die;  
	    		}else{
	    			$this->error('上传失败！');die;
	    		} 
      		}
      		$this->display('index/article_add');
      }
      public function article_edit(){		
      			  $id = I('get.id');
				  $edit= D('article');
		 		  $info_data = $edit->get_all1($id);
		 		  // print_r($info_data);die;
 	 		if(!empty($_GET['update'])){
				 // $id = $_GET['id'];
				  $id = I('get.id');
				  $edit= D('article');
		 		  $info = $edit->get_edit($id);
	       			 // echo  $edit->getlastsql();die;
					// print_r($info);die;
				  }else{
				  		$this->success('非法进入');die; 
				  }
 	 		if(IS_POST){
			  // print_r(is_POST);die;
			 		 $title  = I('title');  // 获取post变量
	                $content  = I('content');  // 获取post变量   
	                $time  = I('time');  // 获取post变量 
 	 				$data = array(
 	 					'id' => $id,
						'article_title'=> $title,
						'article_content'=> $content,
						'article_addtime' =>$time,
			      	 );
			$cat= M('article');
	       	$res = $cat->save($data);
	       	// print_r($res);die;
		    if($res){
		    	 $this->success('成功');die; 
		    }else{
		      	$this->success('失败');die; 
		    }
		   // print_r($data);die;
		}  
			$this->assign('info',$info);
      		$this->display('index/article_edit');
      }
       public function message_list(){
      		if(!empty($_GET['del'])){
					$id = I('get.id');
					$mag= D('message');
	       			 $res = $mag->get_del($id);
					// print_r($cat_data);die;
					if($res){
						$this->success('删除成功','http://www.jinling.com/index.php/Admin/Index/message_list',1);die;			
					}else{
						$this->success('删除失败','http://www.jinling.com/index.php/Admin/Index/message_list',1);die;
					}
				}
      			$mags = D('message');
			        $count = $mags->art_count();
			        // print_r($count);die;
			        $Page = new \Think\Page($count,5);
			        $Page -> rollPage = 3;//显示多少
			        $Page -> lastSuffix = false;
			        $Page -> setConfig('prev','上一页');
			        $Page -> setConfig('next','下一页');
			        $Page -> setConfig('first','首页');
			        $Page -> setConfig('last','伟业');
			        $Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
			         // print_r($art_data);die;
			         $show =$Page->show();
			            // echo $show;
			            // echo $count.'条记录';die;
			         $this->assign('Page',$show);
			        // $art_data = $article->cat_list($cat_id,$Page->firstRow.','.$Page->listRows);
			        // $art_data = $article->cat_list($cat_id);
			        $mag_data = $mags->limit($Page->firstRow.','.$Page->listRows)->select();
			        // //源生方法
			         // $art_data = $article->where('article_aid ='.$cat_id)->limit($Page->firstRow.','.$limit)->order('id desc')->select();
				$this->assign('mag_data',$mag_data);
		      	$this->display('index/message_list');
      }
       public function message_add(){
      			if(IS_POST){
      			$author  = I('author');  // 获取post变量
      			$content = I('content');  // 获取post变量	
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
      		$this->display('index/message_add');
      }
      public function message_edit(){		
      			  $id = I('get.id');
				  $edit= D('article');
		 		  $info_data = $edit->get_all1($id);
		 		  // print_r($info_data);die;
 	 		if(!empty($_GET['update'])){
				 // $id = $_GET['id'];
				  $id = I('get.id');
				  $edit= D('message');
		 		  $info = $edit->get_edit($id);
	       			 // echo  $edit->getlastsql();die;
					// print_r($info);die;
				  }else{
				  		$this->success('非法进入');die; 
				  }
 	 		if(IS_POST){
			  // print_r(is_POST);die;
			 		 $author  = I('author');  // 获取post变量
	                $content  = I('content');  // 获取post变量   
	                $time  = I('time');  // 获取post变量 
 	 				$data = array(
 	 					'id' => $id,
						'message_author'=> $author,
						'message_content'=> $content,
						'message_addtime' =>$time,
			      	 );
			$cat= M('message');
	       	$res = $cat->save($data);
	       	// print_r($res);die;
		    if($res){
		    	 $this->success('成功');die; 
		    }else{
		      	$this->success('失败');die; 
		    }
		   // print_r($data);die;
		}  
			$this->assign('info',$info);
      		$this->display('index/message_edit');
      }

} 