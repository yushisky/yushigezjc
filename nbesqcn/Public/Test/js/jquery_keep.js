$(function(){
		var slideHeight = 299; // px
		var defHeight = $('#qwer').height();
		if(defHeight >= slideHeight){
			$('#qwer').css('height' , slideHeight + 'px');
			$('#read-more').append('<a class="more1" href="#">点击查看更多</a>');
			$('#read-more a').click(function(){
				var curHeight = $('#qwer').height();
				if(curHeight == slideHeight){
					$('#qwer').animate({
					  height: defHeight
					}, "normal");
					$('#read-more a').html('点击收起');
					$('#gradient').fadeOut();
				}else{
					$('#qwer').animate({
					  height: slideHeight
					}, "normal");
					$('#read-more a').html('点击查看更多');
					$('#gradient').fadeIn();
				}
				return false;
			});		
		}
});