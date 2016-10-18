 <?php
//===========函数只能引入一次
include('session.php');
include('config/common.conf.php');
//先获取到数据
//先声明一个条件变量
$where = '';
if(!empty($_GET)){
    //获取分类id
    // print_r($_ GET);die;
    $cat_id = $_GET['fan_an_nav'];
    $where = " fan_an_nav = {$fan_an_nav}";
    // print_r($where);die;
}

$sql = 'select * from wd_banner where banner_class =1';
			$banner_data = get_all($sql);
//=========================================
$sql = 'select * from wd_banner where banner_class =2';
			$banner_date = get_all($sql);
			
$sql = 'select * from wd_news where new_class ="方案内容"';
$wd_index_textfan = get_all($sql);
$sql = 'select * from wd_news where new_class ="方案标题1"';
$wd_index_fan = get_all($sql);
$sql = 'select * from wd_news where new_class ="资讯中心"';
$wd_index_fana = get_all($sql);
$sql = 'select * from wd_web where web_class ="首页内容"';
// p($sql);die;
$wd_wed = get_one($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文豆首页界面</title>
    <link rel="stylesheet" type="text/css" href="./css/public.css"/>
    <link rel="stylesheet" type="text/css" href="./css/index.css"/>
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
</head>
"
<body>
<!--文豆首页 Start-->
    <div id="container">
    <!--header Start-->
        <div class="header_box"> <?php include('header.php');?></div>
        <div class="clear"></div>
    <!--header End-->
    <!--轮播图 Start-->
        <div id="banner_index" class="banner">
                <div class="slideBox" id="slideBox">
                    <div class="hd">
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="bd">
                        <ul>	
						<?php foreach($banner_data as $val){?>									
                            <li><a href="#"><img src="./images/<?php echo $val['banner_img_url'];?>"></a></li>
							<?php };?>   						
                        </ul>
                    </div>
                </div>
            </div>
    <!--轮播图 End-->
    <!--页面主体 Start-->
        <div class="main">
            <div id="service_news_cases">
                <div class="area_box"></div>
                <div id="main_top">
                    <div class="service">
                        <ul>
                             <?php foreach($wd_index_fan as $val){?>
							<li>
                                <a href="index.php"><img src="./images/<?php echo $val['new_img'];?>" alt="<?php echo $val['new_title'];?>"/></a>
                                <a href="index.php"><?php echo $val['new_title'];?></a></a>
                            </li>
							 <?php };?>
                        </ul>
						<?php foreach($wd_index_textfan as $val){?>			
                        <div class="service_detail">						
                            <h2><?php echo $val['new_title'];?></h2>
                            <p class="service_state"><?php echo $val['new_mintitle'];?></p>
                            <p class="service_introduce"><?php echo $val['new_label'];?></p>		
                        </div>
						<?php };?>
                        
                    </div>
                    <div class="news">
                        <div class="news_top">
                            <h2>资讯中心</h2>
                            <p><a href="./news.php">More<img src="./images/more_bg.gif" alt="more图标"/></a></p>
                        </div>
                        <div class="clear"></div>
                        <ul>
                            <?php foreach($wd_index_fana as $val){?>
                           <li>
                                <a href="news_detail.php?new_id=<?php echo $val['new_id'];?>">
                                    <?php echo $val['new_label'];?>
                                </a>
                                <span>
                                    <?php echo date($val['new_date']);?>
                                </span>
                            </li>
                            <?php };?> 
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="area_box"></div>
                <div id="main_middle" class="cont-center">
                    <div class="case_title">
                        <img src="./images/case_title.gif" alt="案例头部"/>
                        <a href="./cases.php">More<img src="./images/more_bg.gif" alt="more图标"/></a>
                    </div>
                    <div class="area_box"></div>
                    <div class="case_pre_next hd">
                        <div class="case_left"><a class="next"><img class="case_pre" src="./images/case_pre.png" alt="pre 箭头图"/></a></div>
                        <div class="case_right"><a class="prev"><img class="case_next" src="./images/case_next.png" alt="next 箭头图"/></a></div>
                    </div>
					
                    <div class="cases_list bd">
                        <ul class="picList">
						<?php foreach($banner_date as $val){?>
                            <li><div class="pic"><img src="./images/<?php echo $val['banner_img_url'];?>" />
							<span><a href="#"><?php echo $val['title'];?></a></span></div></li>
                            <?php }?>

                        </ul>				
                    </div>
					
                </div>
                <div class="area_box"></div>
            </div>
            <div id="main_bottom">
                <div class="about_us">
                    <div class="select_why about_fl about_com">
                        <h2>为什么选择文豆</h2>
                        <p><span>文豆集团</span>是一家提供互联网服务的高科技集团公司，集策划、设计、前端优化、研发、测试、系统运维、网站推广、运营、团队外包及互联网人才培养为一体的成熟业务体系；<br/>
                        主要提供高品质网站建设方案，移动端应用开发方案，微应用、微商城、微官网、微互动营销解决方案，企业信息化解决方案，以及PHP网站开发、Java开发、UI设计、淘宝美工人才培养服务，人才外包服务，高端IT人才猎头服务。</p>
                        <a href="#"><img class="detail_click" src="./images/index_46.png" alt="详情点击"/></a>
                    </div>
                    <div class="service_point about_fl about_com">
                        <h2>服务特色</h2>
                        <div class="service_point_detail">
                            <p class="about_fl point_img"><img src="./images/service_point.jpg" alt="服务特色图"/></p>
                            <div class="detail_con about_fl">
                                <h3>网站建设</h3>
                                <p>文豆集团，是一家具有独立注册商标的网络科技公司。</p>
                                <h3>营销推广</h3>
                                <p>网络推广就是利用互联网进行宣传推广活动 。被推广对象可以是企业、产品、政府以及个人 的信息和网站等。据09年调查显示，中国93% 的企业.</p>
                            </div>
                            <a href="#"><img class="detail_click" src="./images/index_46.png" alt="详情点击"/></a>
                        </div>
                    </div>
                    <div class="call_us about_fl about_com">
                        <h2>联系我们</h2>
                        <div class="area_box"></div>
                        <div class="phone">
                            <img class="about_fl" src="./images/index_41.png" alt="电话图标">
                            <p class="about_fl">
                                <span>广州：</span>400-889-7654<br/>
                                <span>深圳：</span>400-889-8076
                            </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    <!--页面主体 End-->
    <!--footet Start-->
       <?php include('footer.php');?>
    <!--footet End-->
    </div>
<!--文豆首页 End-->
</body>
</html>
<script src="./js/select_nav.js"></script>
<script src="js/jq/jquery-1.11.3.js"></script>
<script src="js/jq/jquery-ui.min.js"></script>
<script src="./js/slide_js.js"></script>
<script src="js/jq/jquery.SuperSlide.2.1.1.js"></script>