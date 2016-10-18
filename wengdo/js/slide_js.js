$(document).ready(function(){
 /*轮播图*/
        $(".slideBox").slide({
            mainCell:".bd ul",
            effect:"fold",
            autoPlay:true,
            mouseOverStop:false,
            delayTime:2000,
            interTime:3000
        });
 /*轮播图*/
 /*服务切换*/
 	var a = [
 		'./images/service_mobile.png',
 		'./images/service_tv.png',
 		'./images/service_electron.png',
 		'./images/service_wechat.png',
 		'./images/service_talent.png',
 		'./images/service_infor.png',
 		];
    var arr = [
        './images/service_mobile_g.png',
        './images/service_tv_g.png',
        './images/service_electron_g.png',
        './images/service_wechat_g.png',
        './images/service_talent_g.png',
        './images/service_infor_g.png',
    ];
    $(".service ul li").each(function(){
        
     	$(".service ul li").mouseenter(function(){
            for(var k=0;k<a.length;k++){
                $(".service ul li").eq(k).find("img").attr("src",a[k]);
            }
     		var i =$(this).index();
     		$(this).find("img").attr("src",arr[i]);
     		$('.service_detail').eq(i).css("display","block");
     		$('.service_detail').eq(i).siblings(".service_detail").css("display","none");
     	});
    });


/*服务切换*/    
 /*案例轮播*/
        jQuery(".cont-center").slide({
        	// titCell:".hd ul",
        	mainCell:".bd ul",
        	autoPage:true,
        	effect:"leftLoop",
        	autoPlay:true,
        	vis:3,
        	delayTime:1000
        });

 	$(".cont-center .bd ul li").mouseover(function(){

            $(this).children(".pic").children("span").stop().animate({top:0,opacity:0.8},100);

        });
        $(".cont-center .bd ul li").mouseout(function(){
            $(this).children(".pic").children("span").stop().animate({top:"250px",opacity:0},250);
        });
/*案例轮播*/
});
