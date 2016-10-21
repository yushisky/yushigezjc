//增加表单验证规则
//extend the 'equals' rule   
$.extend($.fn.validatebox.defaults.rules, {
	minLeast:{
		validator: function(value, param){
			return Number(value) >= Number(param[0]);
		},
		message: '不能少于 {0}个字符！'
	},
	equals:{
		validator: function(value,param){
			return value == $(param[0]).val();
		},
		message: '两次填写不一致！'
	},
	mobile:{
		validator: function(value,param){
			var re = /^13[0-9]{9}$|14[0-9]{9}|15[0-9]{9}$|18[0-9]{9}$/;
			return re.test(value);
		},
		message: '请填写正确的手机号码！'
	},
	minLength:{
		validator: function(value, param){
			return value.length >= param[0];
		},
		message: '至少要填写 {0} 个字符！'
	},
	username:{
		validator: function(value,param){
//			var re = /^(\w){6,20}$/;
			var re = /^[0-9a-zA-Z_.@]{6,20}$/;
			return re.test(value);
		},
		message: '必须6-20位由数字、英文字母或者下划线组成的用户名！'
	},
	zh:{
		validator: function(value,param){
			var re = /^[\u4e00-\u9fa5]{2,4}$/;
			return re.test(value);   
		},   
		message: '请填写2到4个中文字！'
	},
	date:{
		validator: function(value,param){
			var re = /^(?:(?:1[6-9]|[2-9][0-9])[0-9]{2}([-/.]?)(?:(?:0?[1-9]|1[0-2])\1(?:0?[1-9]|1[0-9]|2[0-8])|(?:0?[13-9]|1[0-2])\1(?:29|30)|(?:0?[13578]|1[02])\1(?:31))|(?:(?:1[6-9]|[2-9][0-9])(?:0[48]|[2468][048]|[13579][26])|(?:16|[2468][048]|[3579][26])00)([-/.]?)0?2\2(?:29))(\s+([01][0-9]:|2[0-3]:)?[0-5][0-9]:[0-5][0-9])?$/;
			return re.test(value);   
		},   
		message: '请填写正确的日期时间！'
	},
	tel:{
		validator: function(value,param){
			var re = /^((\+?[0-9]{2,4}\-[0-9]{3,4}\-)|([0-9]{3,4}\-))?([0-9]{7,8})(\-[0-9]+)?$/;
			return re.test(value);   
		},   
		message: '请填写正确的电话号码！'		
	},
	num:{
		validator: function(value,param){
			var re = /^(\d+[\s,]*)+\.?\d*$/;
			return re.test(value);   
		},   
		message: '请填写数值！'		
	},
	qq:{
		validator: function(value,param){
			var re = /^[1-9][0-9]{4,}$/;
			return re.test(value);   
		},   
		message: '请填写正确的QQ号码！'		
	},
	minNum: {   
		validator: function(value, param){
		    return Number(value) > Number(param[0])-Number(1);
		},
		message: '数值至少  {0}'
	}
});