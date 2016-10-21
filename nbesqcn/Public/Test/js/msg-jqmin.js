$(function(){
	$(".hf").click(function(){	
		var focus = $(this).parents(".wap").find("#focus");
		if(focus.css("display")=="none"){
		   focus.show();this.innerHTML = "收起";
		}else{
		  focus.hide(); this.innerHTML = "展开";
		}
    });
	
});