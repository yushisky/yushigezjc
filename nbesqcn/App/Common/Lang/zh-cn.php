<?php
return array(
		'DONE_SUCCESS' => '操作成功',
		'DONE_FAIL' => '操作失败，请联系客服！',
		'SEND_FAIL' => '发送失败，请联系客服！',
		'NETWORK_ERROR' => '抱歉，网络繁忙，请稍后再试！',
		'IS_ERROR' => '非法操作',
		'ID_ERROR' => 'ID错误',
		'NOT_PERMISSION' => '没有相关权限',
		'VERIFY_CODE_ERROR' => '验证码错误',
		'NOT_LOGIN' => '还没登录',
		'ALREADY_LOGIN' => '已经处于登录状态',
		'LOGIN_SUCCESS' => '登录成功',
		'LOGOUT_SUCCESS' => '退出成功',
		'USERNAME_NOT_NULL' => '帐户不能为空',
		'USERNAME_PWD_ERROR' => '帐户或密码错误',
		'USER_IS_FORBIDDEN' => '此帐户被禁止访问',
		'NOT_IS_YOUR' => '别人的数据，别乱动噢！',
		'REACH_MAX' => '最多只能添加{num}条',
		
		//日志记录
		'LOGIN_LOG'				=>	'于{time}登录系统',
		'LOGOUT_LOG'			=>	'于{time}退出系统',
		'AD_SEAT_ADD_LOG'		=>	'于{time}添加广告位【{name}】',
		'AD_SEAT_EDIT_LOG'		=>	'于{time}编辑广告位【{name}】',
		'AD_SEAT_DEL_LOG'		=>	'于{time}删除广告位【{name}】',
		'AD_ADD_LOG'		    =>	'于{time}添加广告【{name}】',
		'AD_EDIT_LOG'		    =>	'于{time}编辑广告【{name}】',
		'AD_DEL_LOG'		    =>	'于{time}删除广告',
		'AD_POTE_EDIT_LOG'		=>	'于{time}编辑广告推荐位',
		'AD_POTE_DEL_LOG'		=>	'于{time}删除广告推荐位',
		'ARTICLE_ADD_LOG'		=>	'于{time}发布文章【{name}】',
		'ARTICLE_EDIT_LOG'		=>	'于{time}编辑文章【{name}】',
		'ARTICLE_DEL_LOG'		=>	'于{time}删除文章',
		'ARTICLE_COLUMN_ADD_LOG'		=>	'于{time}添加文章栏目【{name}】',
		'ARTICLE_COLUMN_EDIT_LOG'		=>	'于{time}编辑文章栏目【{name}】',
		'ARTICLE_COLUMN_DEL_LOG'		=>	'于{time}删除文章',
		'ARTICLE_CATEGORY_ADD_LOG'		=>	'于{time}添加文章分类【{name}】',
		'ARTICLE_CATEGORY_EDIT_LOG'		=>	'于{time}编辑文章分类【{name}】',
		'ARTICLE_CATEGORY_DEL_LOG'		=>	'于{time}删除文章',
		'ARTICLE_POTE_EDIT_LOG'		    =>	'于{time}编辑文章推荐位',
		'ARTICLE_POTE_DEL_LOG'		    =>	'于{time}删除文章推荐位',
		'ARTICLE_COMMENT_DEL_LOG'		    =>	'于{time}删除文章评论',
		'PAGES_ADD_LOG'					=>	'于{time}添加单页【{name}】',
		'PAGES_EDIT_LOG'				=>	'于{time}编辑单页【{name}】',
		'PAGES_DEL_LOG'					=>	'于{time}删除单页',
		'PAGES_POTE_ADD_LOG'			=>	'于{time}添加单页推荐位【{name}】',
		'PAGES_POTE_EDIT_LOG'			=>	'于{time}编辑单页推荐位【{name}】',
		'PAGES_POTE_DEL_LOG'			=>	'于{time}删除单页推荐位',
		'PAGES_COLUMN_ADD_LOG'			=>	'于{time}添加单页栏目【{name}】',
		'PAGES_COLUMN_EDIT_LOG'			=>	'于{time}编辑单页栏目【{name}】',
		'PAGES_COLUMN_DEL_LOG'		    =>	'于{time}删除单页栏目',
		'WEB_SET_LOG'                   =>  '于{time}编辑系统配置',
		'LOG_DEL_LOG'                   =>  '于{time}删除操作日志',
		'MEMBER_SYSTEM_MESSAGE_EDIT'    =>  '于{time}标记系统消息为已读',
		'MEMBER_SYSTEM_MESSAGE_DEL'     =>  '于{time}删除系统消息',
		
		//会员
		'REALNAME_NOT_NULL' => '真实姓名必填！',
		'ZONE_NOT_NULL' => '所在地必选',
		'ADDRESS_NOT_NULL' => '详细地址必填',
		'PHONE_NOT_NULL' => '手机号码必填！',
		'PHONE_FORMAT_ERROR' => '手机号码格式不正确！',
		'EMAIL_NOT _NULL' => '邮箱必填！',
		'EMAIL_FORMAT_ERROR' => '邮箱格式不正确！',
		'USRERNAME_NOT_NULL' => '必须填写账户名',
		'PWD_NOT_NULL' => '必须填写密码',
		'OLD_PWD_NOT_NULL' => '必须填写原密码',
		'OLD_PWD_ERROR' => '原密码错误',
		'NEW_PWD_NOT_NULL' => '必须填写新密码',
		'USRERNAME_EXIST' => '此账户名已被注册',
		'PHONE_EXISTS' => '此手机号码已被注册',
		'EMAIL_EXISTS' => '此邮箱已被注册',
		'USRERNAME_NOT_EXIST' => '此账户名不存在',
		'IS_ACCEPT' => '您没有阅读和接受服务条款！',
		'PWD_ERROR' => '您的密码错误！',
		'PWD_NOT_SAME' => '您两次输入的账号密码不一致！',
		'LOGIN_PAY_PWD_NOT_SAME' => '支付密码不能与登录密码相同',
		'LOGIN_ERROR_TIMES' => '输错密码{times}次，请{time}分钟后再尝试',
		'LOGIN_AGAIN' => '修改成功，请重新登录！',
		'AUTH_ERROR' => '验证错误，请重新验证！',
		'AUTH_OVERTIME' => '验证超时，请重新验证！',
		'AUTH_SUCCESS' => '恭喜，验证成功！',
		'APPLICATION_SUBMITTED' => '您的申请已经提交，我们尽快为你审核，请耐心等候！',
		'DENY_ACCESS'=> '您的帐号已被禁用！',
		
		'LOGIN_LOG' => '{user}于{time}登录',
		'LOGOUT_LOG' => '{user}于{time}退出',
		
		//手机绑定发送
		'PAY_BIND_CONTENT' => '支付验证码{code},请在{time}分钟之内操作',
		'REGISTER_CONTENT' => '恭喜您已成功注册为纳邦社区会员，请牢记您的账号和密码，为避免损失，账号密码请不要轻易泄露!',//注册
		'GENERAL_CONTENT' => '您的验证码是：{code},请在{time}分钟之内操作,为避免损失,请不要把验证码泄露给其他人,如非本人操作，可不用理会！',//通用短信验证
		
		//手机发送通知
		'SHOP_APPLY_CONTENT' => '您于{time}在{url}提交的开店申请,审核{check}',//商家注册审核通知
		'NO_PASS_REASON' => ',原因:{content}',
		'PASS_NOTICE' => ',欢迎您的加入!',
		
		//邮箱验证
		'EMAIL_BIND_TITLE' => '{web_name}邮箱验证',
		'EMAIL_BIND_CONTENT' => '欢迎加入{web_name}，为方便您找回密码，请点击链接激活：<a href="{url}" target="_blank">{url}</a><br/><br/>为了确保您的帐号安全，该链接仅{time}天之内访问有效。<br/><br/><br/>如果点击链接没反应，请您将上面的链接粘贴到浏览器地址栏中。',
		'PHONE_HAS_BINDED' => '此号码已经被绑定了',
		'EMAIL_HAS_BINDED' => '此邮箱地址已经被绑定了',
		
		//密码找回结果
		'EMAIL_FIND_TITLE' => '{web_name}密码找回结果',
		'EMAIL_FIND_CONTENT' => '请您点击下边的地址进行确认，如果无法点击，可以把地址复制到浏览器上进行验证<br/><a href="{url}" target="_blank">{url}</a><br>（本链接有效期为24小时，并且点击一次后失效）',
		
		
		//文章
		'ARTICLE_COLUMN_NAME_NULL'=>'栏目名称不能为空',
		'ARTICLE_COLUMN_NAME_EXISTS'=>'栏目名称已存在',
		'ARTICLE_POTE_NAME_NULL'=>'推荐位名称不能为空',
		'ARTICLE_POTE_NAME_EXISTS'=>'推荐位名称已存在',
		'ARTICLE_TITLE_NAME_NULL'=>'文章标题不能为空',
		'ARTICLE_TITLE_NAME_EXISTS'=>'文章标题已存在',
		'COLUMN_HAS_CATE_NOT_DEL'=>'栏目下有分类，无法删除',
		'CATE_HAS_ARTICLE_NOT_DEL'=>'分类下有文章，无法删除',
		
		//单页
		'COLUMN_HAS_PAGES_NOT_DEL'=>'栏目下有单页，无法删除',
		'PAGES_TITLE_NAME_NULL'=>'单页标题不能为空',
		'PAGES_TITLE_NAME_EXISTS'=>'单页标题已存在',
		'CATE_HAS_PAHES_NOT_DEL'=>'分类下有单页，无法删除',
		
		//广告
		'AD_NAME_NULL'=>'广告标题不能为空',
		'AD_NAME_EXISTS'=>'广告标题已存在',
		'SEAT_NAME_NULL'=>'位置名称不能为空',
		'SEAT_NAME_EXISTS'=>'位置名称已存在',
		'AD_SEAT_MUST'=>'广告位置必选',
		
		//友情链接
		'LINKS_NAME_NULL'=>'友情链接标题不能为空',
		'LINKS_NAME_EXISTS'=>'友情链接标题已存在',
		'LINKS_CATEGORY_NAME_NULL'=>'友情链接分类名称不能为空',
		'LINKS_CATEGORY_NAME_EXISTS'=>'友情链接分类名称已存在',
		'LINKS_HAS_LINKS_NOT_DEL'=>'友情链接分类下有链接，无法删除',
		'LINKS_CATEGORY_MUST'=>'友情链接分类必选',
		
		//会员管理
		'MEMBER_TYPE_NAME_NOT_NULL'=>'会员类型名称不能为空',
		'MEMBER_TYPE_NAME_EXISTS'=>'会员类型已存在',
		
		//区域管理
		'SHIPPING_AREA_GROUP_NAME_NOT_NULL'=>'区域组名称不能为空',
		'SHIPPING_AREA_GROUP_NAME_EXIT'=>'区域组名称已存在',
		'SHIPPING_COMPANY_NAME_NULL'=>'物流公司名称不能为空',
		'SHIPPING_COMPANY_NAME_EXISTS'=>'物流公司名称已存在',
		'SHIPPING_TEMPLET_NAME_NULL'=>'运费模板名称必填',
		'SHIPPING_TEMPLET_NAME_EXIT'=>'运费模板名称已存在',
		
);