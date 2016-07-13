<?php
namespace Admin\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class LoginController extends Controller {
    public function index(){
		layout(false);
      // echo 22222222;
        if(IS_POST){
          $code = I('post.code');
          $user = I('post.username');
          $pass = I('post.password');
          $res = $this->check_code($code);
          // print_r($res);die;
          // print_r($_SESSION);die;
          if($res){
          $admin = M('admin');
          $data = array(
          'admin_name'=>$user,
          'admin_pwd'=>md5($pass),
          );
        //判断用户是否存在
        $admin_info = $admin -> where($data)->find();
        // echo $admin->getlastsql();die;
        // print_r($admin_info);die;
        if($admin_info){
          session('is_login',1);
          session('username',$admin_info['admin_name']);
          $this->success('登录成功！','http://www.jinling.com/admin/index',1);die;
        }else{
          $this->error('用户名或密码错误','http://www.jinling.com/admin/login');die;
        }
        }else{
          // $this->error('验证码错误！','http://www.jinling.com/admin/login');die;
          $this->success('验证码错误！','http://www.jinling.com/admin/login',1);die;
        }
      }
        $this->display('index/login');
    }
      public function code(){
          $Verify = new \Think\Verify();
          $Verify->fontSize = 25;// 验证码字体大小 
          $Verify->length  = 2;// 验证码位数   
          $Verify->useNoise = false;// 关闭验证码杂点
          $Verify->fontttf = '1.ttf';
          $Verify->useImgBg = true; 
          $Verify->codeSet = '0';//123456789qwertyuiopasdfghjklzxcvbnm
          
          $Verify->imageH = 80;
          $Verify->imageW = 200;
          // $Verify->useZh = true;// 设置验证码字符
          // $Verify->zhSet = '小白小黑'; 
          $Verify->entry();

      }
      public function check_code($code,$id = ''){
          $Verify = new \Think\Verify();
          return $Verify->check($code,$id);
      }
} 