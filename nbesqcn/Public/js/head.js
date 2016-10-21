// JavaScript Document
$(function(){
	//搜索框
	$("#input-box").css({"border":"none"});
	//走进黔通
	$(".nav-center").find("li#products").mouseover(function(){
		$(".product-hover").show();
		$(".product-select").show();
		$("#sub-prod").slideDown(300);
		/*$("#sub-prod").slideDown(300);*/
	});
	$(".nav-center").find("li#products").mouseleave(function(){
		$(".product-hover").hide();
		$("#sub-prod").hide();

	});
	$(".product-hover").mouseover(function(){
		$("#second-nav-show").find(".second-nav").hide();	
		$(this).show();	
	});
	$(".product-select").mouseleave(function(){
		$(".product-hover").hide();
		$("#second-nav-show").find(".second-nav").hide();	
		$(".product-select").hide();
	});
	var mouseover_tid = [];
	$("#sub-prod li.nav-hover").each(function(index){
		$(this).mouseenter(function(){
			var navli = $(this).index()-1;
			var that = $("#second-nav-show").find(".second-nav").eq(navli);
			clearTimeout(mouseover_tid[index]);
			mouseover_tid[index]=setTimeout(function(){
				that.slideDown(250).siblings().hide();
			},200);
			
		});
	});
	$("#second-nav-show").mouseenter(function(){
		$(this).show();	
		$(".product-hover").show();
	});
	$("#second-nav-show").mouseleave(function(){
		$(".product-hover").hide();
	});
	

	//设备租赁
	$(".nav-center").find("li#support").mouseover(function(){
		$(".supports-hover").show();
		$(".supports-select").show();
		$("#sub-supp").slideDown(300);
		/*$("#sub-prod").slideDown(300);*/
	});
	$(".nav-center").find("li#support").mouseleave(function(){
		$(".supports-hover").hide();
		$("#sub-supp").hide();

	});
	$(".supports-hover").mouseover(function(){
		$("#tree-nav-show").find(".tree-nav").hide();	
		$(this).show();	
	});
	$(".supports-select").mouseleave(function(){
		$(".supports-hover").hide();
		$("#tree-nav-show").find(".tree-nav").hide();	
		$(".supports-select").hide();
	});
	var mouseover_tid = [];
	$("#sub-supp li.nav-hover").each(function(index){
		$(this).mouseenter(function(){
			var navli = $(this).index()-1;
			var that = $("#tree-nav-show").find(".tree-nav").eq(navli);
			clearTimeout(mouseover_tid[index]);
			mouseover_tid[index]=setTimeout(function(){
				that.slideDown(250).siblings().hide();
			},200);
			
		});
	});
	$("#tree-nav-show").mouseenter(function(){
		$(this).show();	
		$(".supports-hover").show();
	});
	$("#tree-nav-show").mouseleave(function(){
		$(".supports-hover").hide();
	});
	 
//企业文化 一流素材网www.16sucai.com
	$(".nav-center").find("li#company").mouseover(function(){
		$(".companys-hover").show();
		$(".companys-select").show();
		$("#sub-comp").slideDown(300);
		/*$("#sub-prod").slideDown(300);*/
	});
	$(".nav-center").find("li#company").mouseleave(function(){
		$(".companys-hover").hide();
		$("#sub-comp").hide();

	});
	$(".companys-hover").mouseover(function(){
		$("#four-nav-show").find(".four-nav").hide();	
		$(this).show();	
	});
	$(".companys-select").mouseleave(function(){
		$(".companys-hover").hide();
		$("#four-nav-show").find(".four-nav").hide();	
		$(".companys-select").hide();
	});
	var mouseover_tid = [];
	$("#sub-comp li.nav-hover").each(function(index){
		$(this).mouseenter(function(){
			var navli = $(this).index()-1;
			var that = $("#four-nav-show").find(".four-nav").eq(navli);
			clearTimeout(mouseover_tid[index]);
			mouseover_tid[index]=setTimeout(function(){
				that.slideDown(250).siblings().hide();
			},200);
			
		});
	});
	$("#four-nav-show").mouseenter(function(){
		$(this).show();	
		$(".companys-hover").show();
	});
	$("#four-nav-show").mouseleave(function(){
		$(".companys-hover").hide();
	});
	
//人才招聘
	$(".nav-center").find("li#job").mouseover(function(){
		$(".jobs-hover").show();
		$(".jobs-select").show();
		$("#sub-job").slideDown(300);
		/*$("#sub-prod").slideDown(300);*/
	});
	$(".nav-center").find("li#job").mouseleave(function(){
		$(".jobs-hover").hide();
		$("#sub-job").hide();

	});
	$(".jobs-hover").mouseover(function(){
		$("#five-nav-show").find(".five-nav").hide();	
		$(this).show();	
	});
	$(".jobs-select").mouseleave(function(){
		$(".jobs-hover").hide();
		$("#five-nav-show").find(".five-nav").hide();	
		$(".jobs-select").hide();
	});
	var mouseover_tid = [];
	$("#sub-job li.nav-hover").each(function(index){
		$(this).mouseenter(function(){
			var navli = $(this).index()-1;
			var that = $("#four-nav-show").find(".five-nav").eq(navli);
			clearTimeout(mouseover_tid[index]);
			mouseover_tid[index]=setTimeout(function(){
				that.slideDown(250).siblings().hide();
			},200);
			
		});
	});
	$("#five-nav-show").mouseenter(function(){
		$(this).show();	
		$(".jobs-hover").show();
	});
	$("#five-nav-show").mouseleave(function(){
		$(".jobs-hover").hide();
	});

	//产品样式切换
	$(".two-products .list-m").each(function(){
		$(this).find(".pro-first").mouseover(function(){
			$(this).attr("id","pro-first-hover").next().attr("id","");
			$(this).parents(".two-products").find(".list-m").eq(0).show().siblings().hide();
		});
		$(this).find(".pro-second").mouseover(function(){
			$(this).attr("id","pro-second-hover").prev().attr("id","");
			$(this).parents(".two-products").find(".list-m").eq(1).show().siblings().hide();
		});
		
	});
	
	//返顶 一流素材网www.16sucai.com
	$(".main-left .model-box-top").each(function(){
		$(this).find('.list-top').click(function(){$("html,body").animate({scrollTop: "0px"}, 1000);});
		
	});

});

$(function(){
   $('#navigation .nav-list').hover(
		function () {
   			 $(this).find('span').animate(
			 {opacity: 1},500
			 )
  		},
  		function () {
  			  $(this).find('span').animate(
			 {'opacity': 0},500
			 )
  		})
		 
});	