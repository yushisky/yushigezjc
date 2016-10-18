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
                            <li><img src="/Public/home/images/banner.jpg" /></li>
                            <li><img src="/Public/home/images/lrgimg5.jpg" /></li>
                            <li><img src="/Public/home/images/lrgimg6.jpg" /></li>
                        </ul>
                    </div>
                </div>
        </div>
</div>
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">产品展示<b  class="cGrey fn">Products</b></h2>
        </div>
        <ul class="list_l">
        <p><?php echo ($a); ?></p>
        <?php if(is_array($Pro_data)): foreach($Pro_data as $key=>$val): ?><li>
                <span class="listimg">
                    <img src="/Public/home/images/tran.gif" class="blank" /><a href="#"><img src="/Public/home/images/<{$val.product_pic}}" alt="产品1" /></a>
                </span>
                <span class="listtxt"><{$val.product_name}</span>
            </li><?php endforeach; endif; ?>
        </ul>
        <div class="blank10"></div>
        <div class="pages"><a href="#" class="pre">上一页</a><a class="current">1</a><a href="#?page=2">2</a><a href="#?page=3">3</a><a href="#?page=2" class="next">下一页</a></div>
        <div class="blank6"></div>
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