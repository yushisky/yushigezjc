<?php
		header("content-type:text/html;charset=utf-8");	
Class mysql{
	private $url;
	private $user;
	private $password;
	private $database;
	private $charset;
	function __construct($url,$user,$password,$database,$charset="utf8"){
			$this ->url = $url;
			$this ->user = $user;
			$this ->password = $password;
			$this ->database = $database;
			$this ->charset = $charset;
			$this ->conn();

	}
private function conn(){
		$conn = @mysql_connect($this->url,$this->user,$this->password);
	if(!$conn){echo '数据库连接失败，请联系管理员！';die;}
		$db = @mysql_select_db($this->database);
	if(!$db){echo '数据库连接失败，请联系管理员！';die;}
		$this->query('set names '.$this->charset);
	}
	public function query($sql){
		return mysql_query($sql);
}
	/*
*function get_all  查询所有数据
*pream   $sql    查询语句
*return   $data   array
*/
public function get_all($sql){
			$res =$this->query($sql);
			$data =array();
		if(mysql_num_rows($res)>0){
			while($row = mysql_fetch_assoc($res)){
		$data[] = $row;
		}//组合成为一个二维数组
	}
		return $data;
}

/*
*function get_one  查询一条记录数据
*pream   $sql    查询语句
*return   $data   array
*/
public	function get_one($sql){
	$res =$this->query($sql);//数据库的唯一标识
		$data =array();
	$data = "";
	if(mysql_num_rows($res)>0){
		$data = mysql_fetch_assoc($res);
	}
	return $data;
}


	/*
 *functin add   添加数据
 *param   $table    string    表名
 *param   $data    array      数据
 * return   bool
 */
public function add($table,$data){
	// $res =$this->query($sql);
	// 		$data =array();
	// global $conn;//数据库的唯一标识
	$sql = "INSERT INTO {$table}(`";
	$sql .= implode('`,`', array_keys($data));
	$sql .= '`)VALUES("';
	$sql .= implode('","', array_values($data));
	$sql .= '");';
     // print_r($sql);die;
     $res =$this->query($sql);
    // $res = @mysql_query($sql,$conn);
    if(mysql_insert_id()>0&&!empty($res)){
      return true;
    }else{
      return false;
    }
}	

/*
 *function show_msg   弹出提示信息
 *param   $msg   string    输出的信息
 * param  $url   string     跳转的路径（默认为空）
 * 
 */
public function show_msg($msg,$url=''){
	//将跳转的代码封装
	$str =  '<script>alert("'.$msg.'");';
	if($url){
		$str .= 'location.href="'.$url.'";';//跳转到指定页面
	}else{
		$str .= 'history.go(-1);';//退回上一页
	}
	$str .= '</script>';
	// print_r($str);die;
	echo $str;
}
/*
function    updata    修改内容
param     $table    string   	表名
param 		$data    array  	要修改的数据
param      ?$where    string   要修改的记录id
return      bool
 */

public function update($table,$data,$where){
	$sql = "UPDATE `{$table}` SET ";
	foreach ($data as $key => $value) {
		$sql .= "`{$key}` = '{$value}',"; 
	}
	$sql = rtrim($sql,',');
	$sql .= ' where '.$where;
    $res =$this->query($sql);
    if(mysql_affected_rows()>0&&$res){
     	return true;
    }else{
    	return false;
    }
}
/*
 * function    del   删除数据
 * param  $table    string     表名
 * param  $where     string     条件
 * return     bool
 */
public function del($table,$where){
	global $conn;//数据库的唯一标识
	$sql = 'delete from '.$table.' where '.$where;
	// print_r($sql);die;
    $res =$this->query($sql);
    if(mysql_affected_rows()>0){
      return true;
    }else{
      return false;
    }
}





}
$a = new mysql ('localhost','root','','wengdo'); //打印要用到  new  加类名mysql等。。。。
			// $sql = "SELECT * FROM `wd_news`";//直接调用$sql = "SELECT * FROM `wd_news`";//$data = $a->get_all($sql);
			// $data = $a->get_all($sql);
			// print_r($data);
				//$data = $a->get_one($sql);
				// print_r($data);

/*
 *auther      byb1601
 *date        2016-05-06
 *function    打印数组
 *param       $val     被打印的内容
 *return      没有返回值
 *banben      1.0v
 *mail        123456@qq.com
 */
function v($val){
	echo '<pre>';
	var_dump($val);
	echo '</pre>';
}
/*
 *auther      byb1601
 *date        2016-05-06
 *function    打印数组
 *param       $val     被打印的内容
 *return      没有返回值
 *banben      1.0v
 *mail        123456@qq.com
 */
function p($val){
	echo '<pre>'; 
	print_r($val);
	echo '</pre>';
}
			






?>