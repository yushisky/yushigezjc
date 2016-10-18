<?php
	//要先声明jpeg的文件
	header('Content-Type:image/jpeg');
	//新建一张画布
	$img = imagecreatetruecolor(60,40);
	#给验证码添加背景颜色[参数分别是图片资源, (r)红, (g)绿 , (b)蓝] 
	$bgcolor = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
	
	#填充颜色[参数分别是 图片资源, 填充的左上角x轴坐标,填充的左上角y轴坐标,填充范围的宽度,填充范围的高度, 填充的颜色]
	imagefilledrectangle($img,0,0,100,100,$bgcolor);
	
	$fontcolor = imagecolorallocate($img,255,0,0);
	
	#能自动生成随机字符的函数
	function random($length){
		$arr = 'ABCDEFGasdasdasdasdsaIJKLNdadadasdasdMOPQSIadsfsfdffdZUVWfgfdgfgfgXWY0123456789';
		return substr(str_shuffle($arr),0,$length);
	}
	$str = random(4);//调用
	#给图片写字[参数分别是 图片资源, 字体的大小(1-5),字体所在的x轴坐标,字体所在的y轴坐标,字体的内容]
	imagestring($img,5,10,14,$str,$fontcolor);
	session_start();
	$_SESSION['code'] = strtolower($str);
	
	#保存图片
	imagejpeg($img);
	#销毁图片
	imagedestory($img);
	
	for($i = 0;$i<100;++$i){
        $linecolor = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
        #
        imageline($img,mt_rand(0,20),mt_rand(0,40),mt_rand(0,60),mt_rand(0,30),10);
    }

	for($i = 0;$i<10000;++$i){
        $pixel = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
        #参数是图片资源, 干扰点的x轴坐标,干扰点的y轴坐标和干扰点的颜色
        imagesetpixel($img,mt_rand(0,-30),mt_rand(0,20),$pixel);
    }
		imagedestroy($img);
	
?>





















