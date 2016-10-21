$(function(){
		var slideHeight = 296; // px
		var defHeight = $('#wrap').height();
		if(defHeight >= slideHeight){
			$('#wrap').css('height' , slideHeight + 'px');
			$('#read-more').append('<a class="more1" href="#">点击查看更多</a>');
			$('#read-more a').click(function(){
				var curHeight = $('#wrap').height();
				if(curHeight == slideHeight){
					$('#wrap').animate({
					  height: defHeight
					}, "normal");
					$('#read-more a').html('点击收起');
					$('#gradient').fadeOut();
				}else{
					$('#wrap').animate({
					  height: slideHeight
					}, "normal");
					$('#read-more a').html('点击查看更多');
					$('#gradient').fadeIn();
				}
				return false;
			});		
		}
});