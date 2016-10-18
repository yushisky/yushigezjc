<?php if (!defined('THINK_PATH')) exit();?><div class="banner">
	<div class="effect">
                <div id="slideBox" class="slideBox">
                    <div class="hd">
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>

                        </ul>
                    </div>
                    <div class="bd">
                        <ul>
                            <li><img src="images/banner.jpg" /></li>
                            <li><img src="images/lrgimg5.jpg" /></li>
                            <li><img src="images/lrgimg6.jpg" /></li>
                        </ul>
                    </div>
                </div>
        </div>
</div>
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">联系我们<b class="cGrey fn">Contact us</b></h2>
        </div>
        <div class="intro" style="height:167px">
        	地址：广东省广州市广州大道北<br />
            联系人：乐可<br />
            移动电话：13619829982<br />
            固定电话：020-1234567<br />
            传真：020-1234567
        </div>
        <div class="title">
        	<h2 class="cBlue fB">我的位置<b class="cGrey fn">Map</b></h2>
        </div>
        <div class="intro">
        	<img src="images/map.jpg" />
        </div>
    </div>
	   <div class="righter">
    	<div class="rightBox">
        	<a href="#" class="btn_s">我要留言</a>
        </div>
        <div class="blank10"></div>
    	<div class="rightBox">
        	<h3>最新公告<b class="cGrey fn">News</b></h3>
            <ul class="list_r">
             <?php if(is_array($art_data1)): foreach($art_data1 as $key=>$val): ?><li><a href="<?php echo U('home/index/detail',array('art_id'=>$val['id']));?>"><?php echo ($val["article_title"]); ?></a></li><?php endforeach; endif; ?>
            	<!-- <li><a href="#">祝贺公司网站正式上线</a></li> -->
                <!-- <li><a href="#">禁止保温材料现场调配 保证...</a></li>
                <li><a href="#">节能65%烧结页岩空心砖面世</a></li> -->
            </ul>
        </div>
        <div class="blank10"></div>
        <div class="rightBox">
        	<h3>友情链接<b class="cGrey fn">Links</b></h3>
            <ul class="list_r">
            <?php if(is_array($link_ionf)): foreach($link_ionf as $key=>$val): ?><li><a href="<?php echo U('home/index/detail',array('art_id'=>$val['id']));?>"><?php echo ($val["flink_name"]); ?></a></li><?php endforeach; endif; ?>
            	<!--<li><a href="#">卓越网上购物</a></li>
                 <li><a href="#">京东网上商城</a></li>
                <li><a href="#">携程旅行网</a></li> -->
            </ul>
        </div>
    </div>
    <div class="hackbox"></div>
    
    
</div>
        <div class="footer">
    <p>地址：广东省广州市广州大道北  联系人：乐可   移动电话：13619829982 固定电话：020-1234567 传 真：020-1234567</p>
    <p>Copyright @ 2009 金陵贸易有限公司 版权所有</p>
    <p><a href="#">粤ICP备08108790号</a></p>
    <div class="qqImg"><img src="/Public/home/images/qq.jpg" alt="" /></div>
</div>
<script type="text/javascript" src="/Public/home/js/js.js"></script>
<script type="text/javascript">
    jQuery(".slideBox").slide( { mainCell:".bd ul",autoPlay:true} );
</script>
</body>
</html>