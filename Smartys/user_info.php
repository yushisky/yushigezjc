<?php
	include('smarty.conf.php');	
 
  $sql = 'select * from wd_user1';
 // p($sql);die;
  $detail_info = $conn->get_one($sql);
  // echo WEB_PATH.'/images/'.$banner_info['banner_img_url'];die;
 // p($detail_info);die;
  
if(isset($_POST['active'])&&!empty($_POST['active'])){
          $user_id = $_POST['user_id'];
          $username = $_POST['username'];
          $email = $_POST['email'];
          $sex = $_POST['sex'];
           $address = $_POST['address'];
          $company_name = $_POST['company_name'];
          $job = $_POST['job'];
          $sign = $_POST['sign'];
           $data = array(
			      'user_id'=>$user_id,
			      'username' =>$username,
			      'email' =>$email,
			      'sex'=>$sex,
			      'address'=>$address,
			      'company_name' =>$company_name,
			      'job'=>$job,
			      'sign'=>$sign,
			    );

    // p($data);die;
    $table = 'wd_user1';
    $where = 'user_id ='.$user_id;
     // p($where);die;
    $res = $conn->edit($table,$data,$where);
    // p($res);die;
    if($res){
      show_msg('修改成功','');
    }else{
      show_msg('修改失败');
    }

} 

// if(!isset($name)){
//         show_msg('非法进入','login.php');die;
//       }

	$smarty->assign('info',$detail_info);
	$smarty->display('user_info.html')
	
  ?>