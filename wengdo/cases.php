<?php 
include('session.php');
include('pagination.php');
include('config/common.conf.php');
//先获取到数据
//先声明一个条件变量
$where = '';
if(!empty($_GET)){
    //获取分类id
    // print_r($_ GET);die;
    $cat_id = $_GET['cat_id'];
    $where = " where case_class = {$cat_id}";
    // print_r($where);die;
}
//语句拼接
$sql = 'select * from wd_cases '.$where;
// print_r($sql);
$case_data = get_all($sql);
// p($case_data);die;
//案例分类的数据
$sql = 'select * from wd_case_cat';
$case_cat_data = get_all($sql);
//============================
//============================================================
	$sql_count = "select count(*) as c from wd_cases".$where;
	$count = get_one($sql_count);
	$total = $count['c'];
	//我们需要规定我们每页需要多少条数据
	$limit = 6;
	//当前页码，第一页还是第二页
	//判断我们当前的页面
	if(!empty($_GET['page'])){
		$current = $_GET['page']+0;
	}else{
		$current = 1;
	}
	//我们要显示的页码数
	$size = 3;//如果总共有10页，只显示5页
	//====//确定我们的总页码数,向上？向下？
	//第二种页码插入方式============
	//确定我们的总页码数,向上？向下？
	//
	// 确定要从第几条记录开始获取
		 $conf=array();//框框输入
		 $data = array();
	$a= pagination($total,$current,$limit,$size,$conf,"digg");
	$start = ($current-1)*$limit;
	$sql = "select * from wd_cases {$where} limit {$start},{$limit}";
	$case_data = get_all($sql);
?>
<html>
	<head>
		<title>文豆案例</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="./css/public.css"/>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/cases.css">
		<link rel="stylesheet" href="pagination/page.css" />
		<!-- <link rel="stylesheet" href="/page.css" /> -->

		<style>

		</style>
	</head>
<body>
	<div class="big_boss">
		<!--头部开始-->
			<?php include('header.php');?>
	<div class="clear_float"></div>
	<!--头部结束-->
	<!--nav开始-->
	<div class="nav"><img src="images/cases_04.png" /> </div>
	<div class="nav_a">
		<ul>
        <?php foreach($case_cat_data as $val){?>
        <li><a href="cases.php?cat_id=<?php echo $val['cat_id'];?>"><?php echo $val['case_cat_title'];?></a></li>
        <?php }?>
        
	</ul>
	</div>
	<!--nav结束-->
	<div class="clear_float"></div>
	<!--中部内容开始-->
	<div class="he_zuo">
		 <ul>
                    <?php foreach($case_data as $val){?>
                    <li>
                        <a href="cases_detail.php"><img src="./images/<?php echo $val['case_img']?>" alt="<?php echo $val['case_title'];?>"/></a>
                        <p><a href="cases_detail.php"><?php echo $val['case_title'];?></a></p>
                    </li>
                    <?php }?>
					
				</ul>
	</div>
	<div class="clear_float"></div>
	
	<div class="clear_float"></div>
	<div class="ye_tiao">
			 <?php
						
				echo pagination($total,$current,$limit,$size,$conf,'digg');
				?>
	</div>
	<div class="clear_float"></div>
		
    <!--中部内容结束-->
	<!--尾部开始-->
	<?php include('footer.php');?>
	<!--尾部结束-->
</div>
 </body>
</html>
