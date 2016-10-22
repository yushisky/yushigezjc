<?php
		//==========引用函数库============\
		include('session.php');
		include('pagination.php');
		include('config/common.conf.php');
		//查询新闻列表
		$sql = "select * from wd_news ";
		// print_r($sql);die;
		$news_list = get_all($sql);
		// p($news_list);die;
		//================页码插件========================================
			$sql_count = "select count(*) as c from wd_news";
			$count = get_one($sql_count);
			$total = $count['c'];
				//我们需要规定我们每页需要多少条数据
			$limit = 5;
			//当前页码，第一页还是第二页
			//判断我们当前的页面
			if(!empty($_GET['page'])){
				$current = $_GET['page']+0;
			}else{
				$current = 1;
			}
			//我们要显示的页码数
			$size = 5;//如果总共有10页，只显示5页
				$conf=array('start','end');
					
				// 确定要从第几条记录开始获取
			$start = ($current-1)*$limit;
			$sql = "select * from wd_news limit {$start},{$limit}";
			//$sql = "select * from student limit 0,{$limit}";
			$news_list = get_all($sql);
?>
<html>
	<head>
		<title>文豆</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/news.css">
		<link rel="stylesheet" type="text/css" href="./css/public.css"/>
		<style>

		</style>
	</head>
<body>
	<div class="big_boss">
		<!--头部开始-->
		<?php include('header.php'); ?>
	<div class="clear_float"></div>
	<!--头部结束-->
	<!--nav开始-->
	<div class="nav"><img src="images/cases_04.png" /> </div>
	<div class="nav_a">
		<div class="so_ye">
			<p><a href="">首页 &gt </a>
			<a href="">咨询中心</a></p>
		</div>		
	</div>
	<!--nav结束-->
	<div class="clear_float"></div>
	<!--中部内容开始-->
	
	<div class="box">
	 <div class="news_list">
            <?php foreach($news_list as $val){?>
              <div class="news_introduce">
			 
                  <h2><?php echo $val['new_title'];?>
				  <span>发布日期：<?php echo date($val['addtime']);?></span>
				  </h2>
                  <p><?php echo $val['new_label'];?></p>				   
                  <p class="read"><img src="images/news_03.png" /><a href=" news_detail.php?new_id=<?php echo $val['new_id'];?>">阅读全文...</a></p>
				  
			  </div>
			  <?php }?>		
           </div>
	<div class="clear_float"></div>
	<div class="">
	<?php
						//$conf=array();
				echo pagination($total,$current,$limit,$size,$conf,'digg');
				?>
	</div>
	<div class="clear_float"></div>
		
    <!--中部内容结束-->
	<!--尾部开始-->
	<?php include('footers.php'); ?>
	<!--尾部结束 -->
</div>
 </body>
</html>