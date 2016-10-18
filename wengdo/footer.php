<!--数据库公共样式-->
<?php 
$sql="select * from wd_nav";
$nav_info= get_all($sql);


?>
<!--尾部连接数据库公共样式-->
 <div class="footer">
            <div class="area_box footer_box_border_top"></div>
            <div class="footer_nav">
            <?php foreach($nav_info as $key => $val){?>
                <p><a href="<?php echo $val['nav_url']?>"><?php echo $val['nav_name']?>
				</a><?php echo $key+1 == count($nav_info)?'':'<i> | </i>';?>
                </p> 
            <?php }?>
               </div>
            <div class="area_box footer_box_border_bottom"></div>

            <div class="copyright">
                <div class="area_box"></div>
                <div class="copyright_area about_fl">
                    <p>文豆集团 Copyright 2009-2015 All Rights Reserved wengdo<span>粤ICP备12022584号－3</span></p>
                    <p>法律顾问：广东晟晨律师事务所－张勇律师</p>
                </div>
                <div class=" communication_area about_fl">
                    <p>
                        <span>分享到：</span>
                        <a href=""><img src="./images/index_50.png" alt="微信图标"></a>
                        <a href=""><img src="./images/index_52.png" alt="腾讯微博图标"></a>
                        <a href=""><img src="./images/index_54.png" alt="新浪微博图标"></a>
                    </p>
                </div>
                <div class="footer_area clear"></div>
            </div>
        </div>