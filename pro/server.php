<?php
		// include('mysql.class.php');
		// $mysql = new mysql('localhost','root','','pro _list');
		// 	$id =isset($_POST['id'])?$_POST['id']:'';
		// 	$name =isset($_POST['name'])?$_POST['name']:'';
		// 	$price =isset($_POST['price'])?$_POST['price']:'';
		// 	if($id){//修改数据
		// 		$data = array(
		// 			'name'=>$name,
		// 			'price'=>$price

		// 		);
		// 		$table = 'pro_list';
		// 		$where = 'id ='.$id;
		// 		//print_r($table);print_r($where);print_r($data);die;
		// 		$res = $mysql->edit($table,$data,$where);
		// 		//print_r($res);die;
		// 		if($res){
		// 		$resule = array('error'=>1,'data'=>$data);
		// 		}else{
		// 		$resule = array('error'=>0);
		// 		}	
		// 		echo json_encode($resule);//将数组转化json格式
		// 	}
			
			
	include('mysql.class.php');
	$mysql = new Mysql('localhost','root','','pro_list');
	$id = isset($_POST['id'])?$_POST['id']:'';
	$name = isset($_POST['name'])?$_POST['name']:'';
	$price = isset($_POST['price'])?$_POST['price']:'';
	$del_id =isset($_POST['del_id'])?$_POST['del_id']:'';
	if($id){
		$data = array(
			'name'=>$name,
			'price'=>$price
		);
		$table = 'pro_list';
		$where = ' id = '.$id;
		$res = $mysql->edit($table,$data,$where);
		if($res){
			$resule = array('error'=>1,'data'=>$data);
		}else{
			$resule = array('error'=>0);
		}
		echo json_encode($resule);//将数组转化json格式
	}else if(empty($id)&&!empty($name)){//添加数据
		// print_r($_POST;die;
		$data = array(
			'name'=>$name,
			'price'=>$price,
			);
		$table ='pro_list';
		$res= $mysql->add($table,$data);
		if($res){
			$sql ='select * from pro_list order by id desc';
			$info = $mysql->get_one($sql);
			// 
$str =<<<HTML
<tr class="tr">
    <td class="width60px">{$info['id']}</td>
    <td class="good_name">
        <span>{$info['name']}</span>
        <input type="text" value="{$info['name']}" name="good_name" style="display:none;" class="input-control">
    </td>
    <td class="good_price">
        <span>{$info['price']}</span>
        <input type="text" value="{$info['price']}" name="good_price" style="display:none;" class="input-control">
    </td>
    <td>
        <input type="button" value="保存" class="button my-button-state primary save-btn" style="display:none;">
        <input type="button" value="删除" class="button my-button-state primary del-btn" id="del_id">
    </td>
</tr>
HTML;
		$resule = array('error'=>1,'data'=>$data,'str'=>$str);
		}else{
			$resule = array('error'=>1);
		}
		echo json_encode($resule);
		//将数组转化json格式
		////del删除
	}else if(!empty($del_id)){//del删除//del删除//del删除
		$table = 'pro_list';
		$where ='id='.$del_id;
		$res = $mysql ->del($table,$where);
		if($res){
			$resule = array('resule'=>1);

		}else{
			$resule = array('resule'=>0);
		}
		echo json_encode($resule);//将数组转化json格式
	}
	//唯一性判断
	if(isset($_GET['name'])&&!empty($_GET['name'])){
		// print_r($_GET);die;
		$name =$_GET['name'];
		$sql='select * from pro_list where name="'.$name.'"';
		// echo $sql;die;
			$res = $mysql->get_one($sql);
			if($res){
				$resule = array('error'=>1,'data'=>$name);

			}else{
				$resule = array('error'=>0,'data'=>$name);
			}
			echo json_encode($resule);//将数组转化json格式
	}
 ?>