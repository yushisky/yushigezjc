<?php
/**
 * mysql操作类
 */
class Mysql{
  private $comm = ''; #数据库连接标识符
  private $db   = ''; #数据库名称
  private $user = ''; #用户名
  private $pwd  = ''; #密码
  private $host = ''; #地址
  private $char = ''; #编码

  #构造方法 , 初始化参数
  public function __construct($host,$user,$pwd,$db,$char='utf8'){
    $this->host = $host;
    $this->user = $user;
    $this->pwd  = $pwd;
    $this->db   = $db;
    $this->char = $char;
    $this->conn(); # 连接数据库
  }

  #连接mysql,并选择数据库和编码
  private function conn(){
    $this->conn = @mysql_connect($this->host,$this->user,$this->pwd) or exit('连接失败');
    $this->query('use '.$this->db);
    $this->query('set names '.$this->char);
  }

  public function query($sql){
    return mysql_query($sql,$this->conn);
  }

  public function get_all($sql){
    $data = array();
    $result = $this->query($sql);
    #获取数据 mysql_fetch_object();
    while($row = @mysql_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
  }

  /**
   * fucntion 查询一条数据
   * param    string        $sql          查询语句
   * return   array         $data         查询的数据[]
   */
  public function get_one($sql){
    $result = $this->query($sql);
    // print_r($result);die;
    $data = mysql_fetch_assoc($result);
    // print_r($data);die;
    return $data;
  }

  /**
   * 判断操作结果函数
   */
  private function res($result){
    if($result && mysql_affected_rows()>0){
        return true;
    }else{
        return false;
    }
  }

  /**
   * fucntion   删除指定条件的数据
   * param      string    $table           表名
   * param      string    $where           条件
   * return     boolean                    执行结果 [true/false]
   */
  public function del($table,$where){
      $sql = "DELETE FROM `$table` WHERE $where";
      $result = $this->query($sql);
      return $this->res($result);
  }

/**
 * function 添加数据
 * param  string    $table  要添加数据的表名
 * param  array     $data   要添加的数据数组[字段名为数组的键, 字段值为数组的值]
 * return boolean   true/false
 **/
  public function add($table,$data){
    #使用数组函数 array_keys和array_values进行SQL拼接
    $sql = "INSERT INTO `$table` (`";
    $sql .= implode('`,`',array_keys($data)); #获取数组的键
    $sql .= "`) VALUES ('";
    $sql .= implode("','",array_values($data)) ."')"; ##获取数组的值
    // p($sql);die;
    $result = $this->query($sql);
    return $this->res($result);
  }

  /**
   * function 数据更新函数
   * param    string      $table        表名 
   * param    array       $data         修改的数据
   * param    string      $where        条件
   * return   boolean                   执行的结果[true/false]
   */

  public function edit($table,$data,$where){
      $sql = "update `$table` SET ";
      foreach($data as $key=>$value){
          $sql .="`$key` = '$value',";
      }
      $sql = rtrim($sql,','); #rtrim 去掉右边指定的字符
      $sql .=' WHERE '.$where;
      print_r($sql);die;
      $result = $this->query($sql);
      // print_r($result);die;
      return $this->res($result);
  }
}

/*
#测试使用

$wd = new Mysql('localhost','root','123456','wengdo');

#查询所有的产品
$pro = $wd->get_all('SELECT * FROM `wd_pro_cat` WHERE `is_show`=1');

#查询一篇单页文档
$doc = $wd->get_one('SELECT * FROM `wd_doc` WHERE `is_show`=1 limit 1');
print_r($doc);

#添加一篇单页文档
$tb = 'wd_doc';
$data = array(
  'title'=>'新文章',
  'en_title'=>'new art',
  'content'=>'1111111111111111111111111111111111111111111111111111',
  'position'=>'index_left',
  'addtime'=>time(),
  'order'=>1,
  'is_show'=>1,
);
$res = $wd->add($tb,$data);

作业：
  1. 自己尝试封装一个数据库操作类,并使用我给的或者你自己封装的数据库操作类把文豆电子网修改成面向对象的方式
  2. 自己把分页函数[图像操作函数]封装成类

  clas Page{
  
    #生成首页

    #生成尾页

    #生成页码

    #生成上一页

  }

*/


?>