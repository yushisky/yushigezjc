/**
 * 用户自定义js脚本
 * user.js
 * @date    2015-12-03 08:21:31
 */
$(function(){
////script start////

//双击 变为编辑框
$("#main_table_list tr td").dblclick(function(){
	$(this).find("span").hide().siblings().show().parent().siblings("td").find(".save-btn").show();
});

// 隐藏 :编辑框变为span标签
$("input.save-btn").click(function(){
	$(this).hide().parent().siblings("td").find("input").hide().prev("span").show();
});



})
