<?php
		include ('config/common.conf.php');	
			$sql = "SELECT * FROM `mh_serve`";
			$label_data= get_one($sql);
			//p($label_data);die;
			$sql = "SELECT * FROM `mh_serve` where class=1";
			$serve_data= get_all($sql);
			$sql = "SELECT * FROM `mh_serve` where class=2";
			$serve_datail= get_all($sql);
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/hotel.css">
		<link href="css/lanrenzhijia.css" rel="stylesheet" />
		<link href="css/lanrenzhijiss.css" rel="stylesheet" />
	</head>
<body>
	<div class="big_box">
				<!--头部结束-->
				<?php include('header.php');?>
					<!--中部内容-->
					<div class="header_top">
						<img src="images/11_02.png" alt=""/>
					</div>
				<div class="small_box">
					<div class="lu_xian" align="center" style="position:relative">
						<img src="images/13_b1ex.jpg" alt="" />
						<p>酒店预订</p>
					</div>
					<div class="jiud_yud">
							<ul>
								<li>&nbsp &nbsp &nbsp  &nbsp&nbsp
								由于漠河的火车或航班抵达漠河的时间多为下午，加之漠河地理位置纬度较高，天黑时间较早。所以在您第一天抵达漠河的时候是要下榻在漠河<br />的，以下提供漠河的各个酒店展示，可以提前为您预订好酒店宾馆！北红村或北极村的住宿多为农家院家庭宾馆，您可根据自身生活习惯随意选择农家<br />院住宿，两村农家院较多这里不做过多展示！</li>
							</ul>					
					</div>
					<div class="clear_float"></div>
					<div class="jiu_dian">
						<!-- <ul class="r_guan">
							<li>红金鼎大酒店</li>
							<li>金马宾馆</li>
							<li>宏鑫假日宾馆</li>
						</ul> -->
						
						<!-- <ul class="jiu_diana">
							<li><img src="images/index_data/00007xrk_qy7c.jpg" alt="" /></li>
							<li><img src="images/index_data_002/0000ihim_c9qa.jpg" alt="" /></li>
							<li><img src="images/index_data_003/7cgz.jpg" alt="" /></li>
						</ul> -->
						<!-- <div class="clear_float"></div> -->
						<!-- <ul class="r_guanb">
							<li>龙源宾馆</li>
							<li>农家院家庭宾馆</li>
							<li>圣源宾馆</li>
						</ul> -->
						<p class="title">红金鼎大酒店</p>
						<ul id="photoss" class="jiu_dianb">
								
							  <li><a href="" style="background-image:url(images/index_data/0000eycm_uual.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/0000gjaa_daub.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/0000ixli_iyh0.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/0000zrcb_3t7r.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/00007xrk_qy7c.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/00009duy_zo9z.jpg)"></a></li>
							</ul>


							
						<ul id="photoss" class="jiu_dians">
						<p class="title1">红金鼎大酒店</p>
							  <li><a href="" style="background-image:url(images/index_data/0000eycm_uual.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/0000gjaa_daub.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/0000ixli_iyh0.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/0000zrcb_3t7r.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/00007xrk_qy7c.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/00009duy_zo9z.jpg)"></a></li>
							</ul>
						<ul id="photoss" class="jiu_diana">
							<p class="title2">红金鼎大酒店</p>
							  <li><a href="" style="background-image:url(images/index_data/0000eycm_uual.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/0000gjaa_daub.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/0000ixli_iyh0.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/0000zrcb_3t7r.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/00007xrk_qy7c.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/00009duy_zo9z.jpg)"></a></li>
						</ul><br>
						<ul id="photoss" class="jiu_dianc">
							<p class="title3">红金鼎大酒店</p>
							  <li><a href="" style="background-image:url(images/index_data/0000eycm_uual.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/0000gjaa_daub.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/0000ixli_iyh0.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/0000zrcb_3t7r.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/00007xrk_qy7c.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/00009duy_zo9z.jpg)"></a></li>
						</ul>

						<ul id="photoss" class="jiu_diand">
							<p class="title4">红金鼎大酒店</p>
							  <li><a href="" style="background-image:url(images/index_data/0000eycm_uual.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/0000gjaa_daub.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/0000ixli_iyh0.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/0000zrcb_3t7r.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/00007xrk_qy7c.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/00009duy_zo9z.jpg)"></a></li>
						</ul>
						<a href="#" class="arrow previous"></a> <a href="#" class="arrow next"></a>
						<script src="js/jquery-1.9.1.min.js"></script>
						<script src="js/lanrenzhijias.js"></script>
						<ul id="photoss" class="jiu_dianq">
							<p class="title5">红金鼎大酒店</p>
							  <li><a href="" style="background-image:url(images/index_data/0000eycm_uual.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/0000gjaa_daub.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/0000ixli_iyh0.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/0000zrcb_3t7r.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/00007xrk_qy7c.jpg)"></a></li>
							  <li><a href="" style="background-image:url(images/index_data/00009duy_zo9z.jpg)"></a></li>
						</ul>


						<a href="#" class="arrow previous"></a> <a href="#" class="arrow next"></a>
						<script src="js/jquery-1.9.1.min.js"></script>
						<script src="js/lanrenzhijias.js"></script>
						<!-- <ul class="jiu_dianb">
							<li><img src="images/index_data_004/00008lpd_owp0.jpg" alt="" /></li>
							<li><img src="images/index_data_005/__43838826__2671420_9gd9.jpg" alt="" /></li>
							<li><img src="images/index_data_006/00008wrk_33oz.jpg" alt="" /></li>
						</ul> -->
					</div>	
				</div>	
			<!--中部内容结束-->
			<div class="foot_text">
				<ul>
					<li class="foot_texts"><img src="images/e0218634cf3ca0e_6a63.png" alt="" /></li>
					<li class="di_zhi">地址: 黑龙江省漠河县朝林路     电话: 18604576766    邮箱: cn_mohe@163.com <br />版权所有 © 2012-2016  指北针官方网站 www.cn-mohe.com  保留所有权利<br /><a href=""><img src="images/22_sc4u.gif" alt="" /></a>&nbsp黑ICP备16000953号</li>
					<li class="foot_texta"><a href=""><img src="images/sina_mcq9.png" alt="" /> </a> <br /> 新浪微博 </li>
					<li  class="foot_texte"> <a href=""><img src="images/weixin_oaiw.png" alt="" /></a> <br /> 微信公共平台</li>
				</ul>
					<ul  class="foot_texti">					
						<li class="foot_textg"><a href=""><img src="images/484_03.png" alt="" /></a></li>
						<li><a href=""><img src="images/484_05.png" alt="" /></a></li>
						<li><a href=""><img src="images/484_07.png" alt="" /></a></li>
						<li><a href=""><img src="images/484_09.png" alt="" /></a></li>
						<li><a href=""><img src="images/484_11.png" alt="" /></a></li>
						<li><a href=""><img src="images/484_13.png" alt="" /></a></li>				
					</ul>	
			</div>
	</div>
</body>
</html>