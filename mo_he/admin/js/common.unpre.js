/**
 * 公共js
 * common.unpre.js
 * @date    2015-11-10 11:41:41
 * 
 */

/**
 * 时间选择器
 */
if( $(".date-picker").length ){
	$('.date-picker').datepicker({autoclose:true}).next().on("click", function(){
		$(this).prev().focus();
	});
}


//全选
if( $("#selectAll").length ){
	$("#selectAll").click(function(){
		
		$('[name="idarr[]"]').prop("checked",true);

		return false;
	});

}

