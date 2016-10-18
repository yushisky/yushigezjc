<!-- 头部内容 -->
<?php
	$sql = "SELECT * FROM `mh_nav`";
	$nav_data = get_all($sql);

?>
	<div class="big_box">
		<div class="header_box" >
			<ul>
				<li class="logo_img"><img src="images/py38.png" alt="" /></li>
				<li class="zhi_zhan"><b>指北针</b><br /><br>品牌 • 诚信 • 规范</li>
				<li class="wz_soye">
							<?php foreach ($nav_data as $val){?>
							<a href="<?php echo $val['nav_url'];?>"><b><?php echo $val['nav_name'];?></b></a>
							<?php }?>
						</li>
					<li class="wei_du">
					<span>&nbsp &nbsp &nbsp &nbsp  北纬53度，不只是一个数字！中国的最北点！和朋友一起远离<br />城市的喧嚣，去追寻那一刻的宁静，偶尔的一次户外旅行抚慰我们时<br />时刻刻紧张的心灵，背起行囊，一路向北！</span>
					</li>
			</ul>
	<ul class="hu_wai">
			<li>
				<span>
				指北针<br/>
				指北针户外旅行俱乐部为您提<br />
				供漠河实时旅游信息资讯、酒<br />
				店预订、旅游包车、旅游线路<br />
				定制、旅游景点资讯、自然气<br />
				候资讯，带您一路向北，寻找<br />
				最美！
				</span>
			</li>
	</ul>
	<ul class="lian_xing">
		<li class="lian_xi">联 系 我 们<br />
				TEL 18604576766 <br />
				QQ  616600121	<br />
				微信<br />
				微信号  cnmohe <br />
				微信公众号  cn_mohe
				
		</li>
		<li class="lian_ima"><img src="images/ni7f.jpg" alt="" /></li>
	</ul>
<ul id="photos">
  <li><a href="" style="background-image:url(images/indeximg2.jpg)"></a></li>
  <li><a href="" style="background-image:url(images/indeximg2.jpg)"></a></li>
  <li><a href="" style="background-image:url(images/indeximg3.jpg)"></a></li>
  <li><a href="" style="background-image:url(images/indeximg4.jpg)"></a></li>
  <li><a href="" style="background-image:url(images/indeximg2.jpg)"></a></li>
</ul>
</div>
<a href="#" class="arrow previous"></a> <a href="#" class="arrow next"></a>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/lanrenzhijia.js"></script>