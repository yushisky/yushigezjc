$(document).ready(function(){
$('#nav').find('.active').next().css('display','block');
var left=[11,-47,-76,-206];
$('#nav').children('li').on('mouseover',function(){
	
	$(this).find('.nav-child').css('display','block').css('left',left[$(this).index()]);
	$(this).siblings().find('.nav-child').css('display','none');

});
$('#nav').children('li').on('mouseout',function(){
	$('.nav-child').css('display','none');
	$('#nav').find('.active').next().css('display','block');
});

});