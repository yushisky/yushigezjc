<?php
header("Content-type:text/html;charset=utf-8");
/**
 * 替换语言包里面的	{变量}
 * @param	string	$langvar	语言
 * @param	array	$vars		要替换的变量和对应的值,必须是数组形式
 * @return	string
 */
function lang($langvar, $vars = array()) {
	$searchs = $replaces = array ();
	if ($vars && is_array ( $vars )) {
		foreach ( $vars as $k => $v ) {
			$searchs [] = '{' . $k . '}'; // 查找替换的字符串
			$replaces [] = $v; // 替换后的值
		}
	}
	return str_replace ( $searchs, $replaces, $langvar );
}
/**
 * 对有值的字符串MD5加密
 * @param string $str
 * @return string
 */
function md5_exist($str){
	return $str?md5($str):'';
}
/**
 * 返回JSON数据格式到客户端
 * @param array $data
 */
function return_json($data) {
//	header ( 'Content-Type:application/json; charset=utf-8' );
	exit ( json_encode ( $data ) );
}
/**
 * 表格返回过来的基本参数(分页,排序)
 * @param string $defaultSort
 */
function grid_param($defaultSort, $order = 'desc') {
	$result ['sort'] = I('get.sort',$defaultSort);
	$result ['order'] = I('get.order',$order);
	$result ['nowPage'] = I('get.page',1); // 当前页
	$result ['rows'] = I('get.rows',20); // 默认列表每页显示行数
	$result ['firstRow'] = $result ['rows'] * ($result ['nowPage'] - 1); // 起始行数
	$result ['url'] = "sort=" . $result ['sort'] . "&order=" . $result ['order'];
	return $result;
}
/**
 * 把返回的数据集转换成Tree
 * @param array $list 要转换的数据集
 * @param string $pid parent标记字段
 * @param string $level level标记字段
 * @return array
 */
function list_to_tree($list, $pk='id', $pid = 'pid', $child = '_child', $root = 0) {
	// 创建Tree
	$tree = array();
	if(is_array($list)) {
		// 创建基于主键的数组引用
		$refer = array();
		foreach ($list as $key => $data) {
			$refer[$data[$pk]] =& $list[$key];
		}
		foreach ($list as $key => $data) {
			// 判断是否存在parent
			$parentId =  $data[$pid];
			if ($root == $parentId) {
				$tree[] =& $list[$key];
			}else{
				if (isset($refer[$parentId])) {
					$parent =& $refer[$parentId];
					$parent[$child][] =& $list[$key];
				}
			}
		}
	}
	return $tree;
}
/**
 +----------------------------------------------------------
 * 字符串截取，支持中文和其他编码
 +----------------------------------------------------------
 * @static
 * @access public
 +----------------------------------------------------------
 * @param string $str 需要转换的字符串
 * @param string $start 开始位置
 * @param string $length 截取长度
 * @param string $charset 编码格式
 * @param string $suffix 截断显示字符
 +----------------------------------------------------------
 * @return string
 +----------------------------------------------------------
 */
function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=false) {
	if(function_exists("mb_substr"))
		$slice = mb_substr($str, $start, $length, $charset);
	elseif(function_exists('iconv_substr')) {
		$slice = iconv_substr($str,$start,$length,$charset);
		if(false === $slice) {
			$slice = '';
		}
	}else{
		$re['utf-8']   = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
		$re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
		$re['gbk']    = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
		$re['big5']   = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
		preg_match_all($re[$charset], $str, $match);
		$slice = join("",array_slice($match[0], $start, $length));
	}
	return $suffix ? $slice.'...' : $slice;
}
//截取字符
function getStr($str,$start,$length){
	$return = mb_substr($str, $start, $length,'utf-8');
	$strLength = mb_strlen($str,'UTF8');//strlen($str);
	if($strLength>$length){
		return $return.'...';
	}
	else{
		return $return;
	}
}
/**
 +----------------------------------------------------------
 * 产生随机字串，可用来自动生成密码 默认长度6位 字母和数字混合
 +----------------------------------------------------------
 * @param string $len 长度
 * @param string $type 字串类型
 * 0 字母 1 数字 其它 混合
 * @param string $addChars 额外字符
 +----------------------------------------------------------
 * @return string
 +----------------------------------------------------------
 */
function rand_string($len=6,$type='',$addChars='') {
	$str ='';
	switch($type) {
		case 0:
			$chars='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.$addChars;
			break;
		case 1:
			$chars= str_repeat('0123456789',3);
			break;
		case 2:
			$chars='ABCDEFGHIJKLMNOPQRSTUVWXYZ'.$addChars;
			break;
		case 3:
			$chars='abcdefghijklmnopqrstuvwxyz'.$addChars;
			break;
		case 4:
			$chars = "们以我到他会作时要动国产的一是工就年阶义发成部民可出能方进在了不和有大这主中人上为来分生对于学下级地个用同行面说种过命度革而多子后自社加小机也经力线本电高量长党得实家定深法表着水理化争现所二起政三好十战无农使性前等反体合斗路图把结第里正新开论之物从当两些还天资事队批点育重其思与间内去因件日利相由压员气业代全组数果期导平各基或月毛然如应形想制心样干都向变关问比展那它最及外没看治提五解系林者米群头意只明四道马认次文通但条较克又公孔领军流入接席位情运器并飞原油放立题质指建区验活众很教决特此常石强极土少已根共直团统式转别造切九你取西持总料连任志观调七么山程百报更见必真保热委手改管处己将修支识病象几先老光专什六型具示复安带每东增则完风回南广劳轮科北打积车计给节做务被整联步类集号列温装即毫知轴研单色坚据速防史拉世设达尔场织历花受求传口断况采精金界品判参层止边清至万确究书术状厂须离再目海交权且儿青才证低越际八试规斯近注办布门铁需走议县兵固除般引齿千胜细影济白格效置推空配刀叶率述今选养德话查差半敌始片施响收华觉备名红续均药标记难存测士身紧液派准斤角降维板许破述技消底床田势端感往神便贺村构照容非搞亚磨族火段算适讲按值美态黄易彪服早班麦削信排台声该击素张密害侯草何树肥继右属市严径螺检左页抗苏显苦英快称坏移约巴材省黑武培著河帝仅针怎植京助升王眼她抓含苗副杂普谈围食射源例致酸旧却充足短划剂宣环落首尺波承粉践府鱼随考刻靠够满夫失包住促枝局菌杆周护岩师举曲春元超负砂封换太模贫减阳扬江析亩木言球朝医校古呢稻宋听唯输滑站另卫字鼓刚写刘微略范供阿块某功套友限项余倒卷创律雨让骨远帮初皮播优占死毒圈伟季训控激找叫云互跟裂粮粒母练塞钢顶策双留误础吸阻故寸盾晚丝女散焊功株亲院冷彻弹错散商视艺灭版烈零室轻血倍缺厘泵察绝富城冲喷壤简否柱李望盘磁雄似困巩益洲脱投送奴侧润盖挥距触星松送获兴独官混纪依未突架宽冬章湿偏纹吃执阀矿寨责熟稳夺硬价努翻奇甲预职评读背协损棉侵灰虽矛厚罗泥辟告卵箱掌氧恩爱停曾溶营终纲孟钱待尽俄缩沙退陈讨奋械载胞幼哪剥迫旋征槽倒握担仍呀鲜吧卡粗介钻逐弱脚怕盐末阴丰雾冠丙街莱贝辐肠付吉渗瑞惊顿挤秒悬姆烂森糖圣凹陶词迟蚕亿矩康遵牧遭幅园腔订香肉弟屋敏恢忘编印蜂急拿扩伤飞露核缘游振操央伍域甚迅辉异序免纸夜乡久隶缸夹念兰映沟乙吗儒杀汽磷艰晶插埃燃欢铁补咱芽永瓦倾阵碳演威附牙芽永瓦斜灌欧献顺猪洋腐请透司危括脉宜笑若尾束壮暴企菜穗楚汉愈绿拖牛份染既秋遍锻玉夏疗尖殖井费州访吹荣铜沿替滚客召旱悟刺脑措贯藏敢令隙炉壳硫煤迎铸粘探临薄旬善福纵择礼愿伏残雷延烟句纯渐耕跑泽慢栽鲁赤繁境潮横掉锥希池败船假亮谓托伙哲怀割摆贡呈劲财仪沉炼麻罪祖息车穿货销齐鼠抽画饲龙库守筑房歌寒喜哥洗蚀废纳腹乎录镜妇恶脂庄擦险赞钟摇典柄辩竹谷卖乱虚桥奥伯赶垂途额壁网截野遗静谋弄挂课镇妄盛耐援扎虑键归符庆聚绕摩忙舞遇索顾胶羊湖钉仁音迹碎伸灯避泛亡答勇频皇柳哈揭甘诺概宪浓岛袭谁洪谢炮浇斑讯懂灵蛋闭孩释乳巨徒私银伊景坦累匀霉杜乐勒隔弯绩招绍胡呼痛峰零柴簧午跳居尚丁秦稍追梁折耗碱殊岗挖氏刃剧堆赫荷胸衡勤膜篇登驻案刊秧缓凸役剪川雪链渔啦脸户洛孢勃盟买杨宗焦赛旗滤硅炭股坐蒸凝竟陷枪黎救冒暗洞犯筒您宋弧爆谬涂味津臂障褐陆啊健尊豆拔莫抵桑坡缝警挑污冰柬嘴啥饭塑寄赵喊垫丹渡耳刨虎笔稀昆浪萨茶滴浅拥穴覆伦娘吨浸袖珠雌妈紫戏塔锤震岁貌洁剖牢锋疑霸闪埔猛诉刷狠忽灾闹乔唐漏闻沈熔氯荒茎男凡抢像浆旁玻亦忠唱蒙予纷捕锁尤乘乌智淡允叛畜俘摸锈扫毕璃宝芯爷鉴秘净蒋钙肩腾枯抛轨堂拌爸循诱祝励肯酒绳穷塘燥泡袋朗喂铝软渠颗惯贸粪综墙趋彼届墨碍启逆卸航衣孙龄岭骗休借".$addChars;
			break;
		default :
			// 默认去掉了容易混淆的字符oOLl和数字01，要添加请使用addChars参数
			$chars='ABCDEFGHIJKMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz23456789'.$addChars;
			break;
	}
	if($len>10 ) {//位数过长重复字符串一定次数
		$chars= $type==1? str_repeat($chars,$len) : str_repeat($chars,5);
	}
	if($type!=4) {
		$chars   =   str_shuffle($chars);
		$str     =   substr($chars,0,$len);
	}else{
		// 中文随机字
		for($i=0;$i<$len;$i++){
			$str.= msubstr($chars, floor(mt_rand(0,mb_strlen($chars,'utf-8')-1)),1);
		}
	}
	return $str;
}
/**
 * 导入缓存数据
 */
function importGlobalData(){
	$dataPath = list_file ('./Config/', '*.php');
	foreach ( $dataPath as $key => $value ) {
		$filename = substr ( $value ['filename'], 0, - 4 );
		$filedata = @require $value ['path'] . '/' . $value ['filename'];
		$globalData [$filename] = $filedata;
	}
	return $globalData;
}
/**
 * 取得目录下面的文件信息
 */
function list_file($pathname,$pattern='*'){
	$list = glob($pathname.$pattern);
	$dir = array();
	foreach ($list as $i=>$file){
		$dir[$i]['filename'] = basename($file);
		$dir[$i]['pathname'] = realpath($file);
		$dir[$i]['owner'] = fileowner($file);
		$dir[$i]['perms'] = fileperms($file);
		$dir[$i]['inode'] = fileinode($file);
		$dir[$i]['group'] = filegroup($file);
		$dir[$i]['path'] = dirname($file);
		$dir[$i]['atime'] = fileatime($file);
		$dir[$i]['ctime'] = filectime($file);
		$dir[$i]['size'] = filesize($file);
		$dir[$i]['type'] = filetype($file);
		$dir[$i]['ext'] = is_file($file)?strtolower(substr(strrchr(basename($file), '.'),1)):'';
		$dir[$i]['mtime'] = filemtime($file);
		$dir[$i]['isDir'] = is_dir($file);
		$dir[$i]['isFile'] = is_file($file);
		$dir[$i]['isLink'] = is_link($file);
		//$dir[$i]['isExecutable']= function_exists('is_executable')?is_executable($file):'';
		$dir[$i]['isReadable'] = is_readable($file);
		$dir[$i]['isWritable'] = is_writable($file);
	}
	$cmp_func = create_function('$a,$b','
		$k  =  "isDir";
		if($a[$k]  ==  $b[$k])  return  0;
		return  $a[$k]>$b[$k]?-1:1;
		');
	// 对结果排序 保证目录在前面
	usort($dir,$cmp_func);
	return $dir;
}
/**
 * 通过树型数组生成树型option，以字符串形式返回
 * @param	array	$list	树型数组
 * @param	int		$pid	父级id
 * @param	string	$child	树型下标
 * @param	string	$mark	生成树型字符串的标记
 * @param	int		$count	记录层数，与$mark关联
 * @return	string	$tree	返回字符串树型
 */
function list_option_tree($list,$pid,$child='_child',$mark='|-',$count=0){
	static $tree='';
	$new_mark = '';
	for($i=0;$i<$count;$i++){
		$new_mark .= $mark;
	}
	foreach ($list as $key=>$value){
		$select = ($value['id']==$pid)?'selected':'';
		$tree .= '<option value="'.$value['id'].'"'.$select.'>'.$new_mark.$value['name'].'</option>';
		if(isset($value[$child]) and $count<1){
			$newCount = $count+1;
			list_option_tree($value[$child],$pid,$child,$mark,$newCount);
		}
	}
	return $tree;
}
/**
 * 通过数组和元素id，递归到最顶层父级,返回关联的数组
 * @param	array	$list	数组
 * @param	int		$id		元素id
 * @param	string	$pid	父级关联下标，默认为pid
 * @return	array	$parent	返回关联的数组
 */
function get_option_parent($list,$id,$pid='pid'){
	static $parent=array();
	if($list[$id]){
		$parent[] = $list[$id];
		$id = $list[$id][$pid];
		get_option_parent($list,$id,$pid);
	}
	return array_reverse($parent);
	
}
/**
 * 时间转为时间戳
 * @param	(Y-m-d H:i:s)	$time
 * @return	string	$time	时间戳
 */
function ymktime($time){
	$time = explode ( ' ', $time );
	$time_b = explode ( '-', $time [0] ); // 年月日

	if ($time [1]) {
		$time_h = explode ( ':', $time [1] ); // 时分秒
	}
	return mktime ( $time_h [0], $time_h [1], $time_h [2], $time_b [1], $time_b [2], $time_b [0] );
}
/**
 * 手机号码验证格式
 * @param string $value
 */
function check_phone($value){
	$rule  = "/^((13[0-9])|147|(15[0-35-9])|180|182|(18[5-9]))[0-9]{8}$/A";
	$result = preg_match($rule,$value);
	return $result?true:false;
}
/**
 * EMAIL验证格式
 * @param string $value
 */
function check_email($value){
	$rule = '/^[a-zA-Z0-9][a-zA-Z0-9._-]*\@[a-zA-Z0-9]+\.[a-zA-Z0-9\.]+$/A';
	$result = preg_match($rule,$value);
	return $result?true:false;
}
/**
 * 固话验证格式
 * 例如：(010) 12345678  或者 (010)12345678 或者 010  12345678 或者 010--12345678
 * @param string $value
 */
function check_tel($value){
	$rule = '/^(\(((010)|(021)|(0\d{3,4}))\)( ?)([0-9]{7,8}))|((010|021|0\d{3,4}))([- ]{1,2})([0-9]{7,8})$/A';
	$result = preg_match($rule,$value);
	return $result?true:false;
}
/**
 * URL验证格式
 * @param string $value
 */
function check_url($value){
	$rule = '/^(([a-zA-Z]+)(:\/\/))?([a-zA-Z]+)\.(\w+)\.([\w.]+)(\/([\w]+)\/?)*(\/[a-zA-Z0-9]+\.(\w+))*(\/([\w]+)\/?)*(\?(\w+=?[\w]*))*((&?\w+=?[\w]*))*$/';
	$result = preg_match($rule,$value);
	return $result?true:false;
}
/**
 * 身份证号验证格式
 * @param string $value
 */
function check_ic($value){
	$rule = '/^(([0-9]{15})|([0-9]{18})|([0-9]{17}x))$/';
	$result = preg_match($rule,$value);
	return $result?true:false;
}
/**
 * 邮编验证格式
 * @param string $value
 */
function check_pos($value){
	$rule ='/^[1-9]\d{5}$/';
	$result = preg_match($rule,$value);
	return $result?true:false;
}
/**
 * ip验证格式
 * @param string $value
 */
function check_ip($value){
	$rule = '/^((([1-9])|((0[1-9])|([1-9][0-9]))|((00[1-9])|(0[1-9][0-9])|((1[0-9]{2})|(2[0-4][0-9])|(25[0-5]))))\.)((([0-9]{1,2})|(([0-1][0-9]{2})|(2[0-4][0-9])|(25[0-5])))\.){2}(([1-9])|((0[1-9])|([1-9][0-9]))|(00[1-9])|(0[1-9][0-9])|((1[0-9]{2})|(2[0-4][0-9])|(25[0-5])))$/';
	$result = preg_match($rule,$value);
	return $result?true:false;
}
/**
 * 时间验证格式
 * @param string $value
 */
function check_time($value){
	$rule ='/^(([1-2][0-9]{3}-)((([1-9])|(0[1-9])|(1[0-2]))-)((([1-9])|(0[1-9])|([1-2][0-9])|(3[0-1]))))( ((([0-9])|(([0-1][0-9])|(2[0-3]))):(([0-9])|([0-5][0-9]))(:(([0-9])|([0-5][0-9])))?))?$/';
	$result = preg_match($rule,$value);
	return $result?true:false;
}
/**
 * utf8下匹配中文验证格式
 * @param string $value
 */
function check_zh($value){
	$rule ='/([\x{4e00}-\x{9fa5}]){1}/u';
	$result = preg_match($rule,$value);
	return $result?true:false;
}
/**
 * 对密码MD5加密
 * @param string $pwd MD5加密过
 */
function pwdMd5($pwd,$key){
	return md5($pwd.md5($key));
}
/**
 * 邮件列队
 */
function email_queue($email,$title,$content,$uid='0'){
	$data['uid'] = $uid;
	$data['email'] = $email;
	$data['title'] = $title;
	$data['content'] = $content;
	$data['addtime'] = NOW_TIME;
	$data['is_new'] = '1';
	return D('EmailQueue')->add($data);
}
/**
 * 发送邮件
 *
 * @param $email 可以N个email,每个email用“,”分开,也可以一个email
 * @param $title 标题
 * @param $content 发送内容
 */
function SendEmail($email, $title, $message) {
	//vendor('PHPMailer.class#PHPMailer');
	$mail = new \Org\Util\PHPMailer(); 
	$mail->SetLanguage ( 'zh_cn' );
	$mail->CharSet = "UTF-8";
	$mail->IsSMTP ();
	$mail->SMTPDebug = 0;
	if ($mail->SMTPDebug > 0) {
		$mail->Debugoutput = 'html';
	}
	$mail->Host = $this->config['emaildomain'];
	$mail->Port = $this->config['emailport'];
	$mail->SMTPAuth = true;
	$mail->Username = $this->config ['smtpaccount'];
	$mail->Password = $this->config ['emailpassword'];
	$mail->SetFrom ( $this->config ['fromemail'], $this->config ['fromname'] );
	$mail->AddReplyTo ( $this->config ['fromemail'], $this->config ['fromname'] );
	$emails = explode ( ',', $email );
	foreach ( $emails as $key => $value ) {
		$mail->AddAddress ( $value );
	}
	$mail->Subject = $title;
	$mail->IsHTML ( true );
	$this->assign ( 'message', $message );
	$message = $this->fetch ( 'Public:sendmail' );
	$mail->MsgHTML ( $message );
	if (! $mail->Send ()) { 
		Think\LOG::write ( "Mailer Error: " . $mail->ErrorInfo );
	} else {
		return true;
	}
}
/**
 * SMS列队
 */
function sms_queue($phone,$content,$uid='0'){
	$data['serialnumber'] = buildnum();
	$sms = new \Org\Util\Sms();
	$result = $sms->sendSms($content, $phone, $data['serialnumber']);
	$data['status'] = $result['status'];//错误描述
	$data['description'] = $result['description'];//错误描述
	//$data['faillist'] = $result['2'];//失败的手机号码
	$data['content'] = $content;
	$data['addtime'] = NOW_TIME;
	$data['is_new'] = '1';
	$data['uid'] = $uid;
	if(strstr($phone,',') !== false){
		$phones = explode(',',$data['phone']);
		foreach($phones as $key=>$value){
			$data['phone'] = $value;
			$add_data[] = $data;
		}
		$ok = D('SmsQueue')->addAll($add_data);
	}else{
		$data['phone'] = $phone;
		$ok = D('SmsQueue')->add($data);
	}
	return $ok;
}
function buildnum(){
	list($usec, $sec) = explode(" ", microtime());
	$usec = substr(str_replace('0.', '', $usec), 0 ,4);
	$str  = rand_string(2,1);
	return  date("YmdHis").$usec.$str;
}
/**
 * 短信回执
 */
function sms_response(){
	$data = $all_data =  array();
	$sms = new \Org\Util\Sms();
	$result = $sms->getReportResponse();
	foreach(explode(';',$result['out']) as $key=>$value){
		$arr = explode(',',$value);
		$data['serialnumber'] = $arr[0];
		$data['phone'] = $arr[1];
		$data['status'] = $arr[2];
		//$all_data[] = $data;
		D('SmsQueue')->where(array('serialnumber'=>$data['serialnumber'],'phone'=>$data['phone']))->save($data);
	}
	//return D('SmsResponse')->addAll($all_data);
}
/**
 * 短信回复内容
 */
function get_reply_response(){
	$sms = new \Org\Util\Sms();
	$result = $sms->getReplyResponse();
	if($result['replys']){
		$all_arr = array();
		foreach($result['replys'] as $key=>$value){}
	}
}
/**
 * 生成EMAIL或手机验证码
 */
function build_es_code($type){
	switch($type){
		case 'phone'://手机号码
			return rand_string(6,1);
			break;
		case 'email'://邮箱
			return rand_string();
			break;
	}
}
/**
 * 保存EMAIL或手机验证码
 */
function save_es_code($type,$code){
	$data['type'] = $type;
	$data['code'] = $code;
	$data['addtime'] = NOW_TIME;
	return D('CheckCode')->add($data);
}
/**
 * 跨域跳转（替换U方法）
 */
function CU($url,$array=array()){
	return U ( $url,$array,true,true );
}
/**
 * 分页样式
 */
function page_css() {
	return '<li><span aria-hidden="true">共%TOTAL_ROW%条记录</span></li> %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% <li><span aria-hidden="true">共%TOTAL_PAGE%页</span></li>';
}

/**
 * 年月日
 */
function birthday(){
	$current_year = date('Y');
	$before_year_70 = $current_year - 70;//70年前
	$date = new \Org\Util\Date;
	for($i = $before_year_70;$i<=$current_year;$i++){
		$year[$i] = $i;
		$feb[$i] = $date->isLeapYear($i)?'29':'28';
	}
	krsort($year);
	return array('year'=>$year,'feb'=>$feb);
}
/**
 * 时间格式化
 */
function time_format($time = NULL,$format='Y-m-d H:i'){
	$time = $time === NULL ? NOW_TIME : intval($time);
	return date($format, $time);
}
/**
 * 通过分类数组，返回子分类id字符串	
 */
function list_child_id($list,$child='_child'){
	if($list['_child']){
		foreach($list['_child'] as $k=>$v){
			$idStr .=','.$v['id'];
			$idStr .= list_child_id($v,$child);
		}
	}
	return $idStr;
}
/**
 * 返回商品图片路径
 * @param unknown $uid 商店UID
 * @param unknown $product_id 产品ID
 * @param unknown $photo 图片
 * @param unknown $thumb 缩略图格式
 * @return string
 */
function product_pic_path($uid,$product_id,$photo,$thumb){
	$path = lang(C('PRODUCT_PIC_PATH'),array('uid'=>$uid,'product_id'=>$product_id));
	return ($thumb?$path.$thumb.'/':$path).$photo;
}
/**
 * 返回二维数组下，每个元素的组合
 * @param array $CombinList 二维数组 
 * 1-2-3,4-5-6
 * $CombinList = array(
			1 => array("1", "2",'3'),//1-2-3
			2 => array("4", "5", "6"),
			3 => array("7"),
			4 => array("8", "9", "10", "11")
	);
 * @return array
 */
function list_child_group($CombinList){
	/* 计算C(a,1) * C(b, 1) * ... * C(n, 1)的值 */
	$CombineCount = 1;
	foreach($CombinList as $Key => $Value){
		$CombineCount *= count($Value);
	}
	$RepeatTime = $CombineCount;
	foreach($CombinList as $ClassNo => $StudentList){
		// $StudentList中的元素在拆分成组合后纵向出现的最大重复次数
		$RepeatTime = $RepeatTime / count($StudentList);
		$StartPosition = 0;
		// 开始对每个班级的学生进行循环
		foreach($StudentList as $Student){
			$TempStartPosition = $StartPosition;
			$SpaceCount = $CombineCount / count($StudentList) / $RepeatTime;
			for($J = 1; $J <= $SpaceCount; $J ++){
				for($I = 0; $I < $RepeatTime; $I ++){
					$Result[$TempStartPosition + $I] .= ($ClassNo==0)?$Student:','.$Student;
					//$Result[$TempStartPosition + $I][$ClassNo] = $Student;
				}
				$TempStartPosition += $RepeatTime * count($StudentList);
			}
			$StartPosition += $RepeatTime;
		}
	}
	return $Result;
}
/**
 * 删除文件夹及其文件夹下所有文件
 * @param str $dir 文件或文件夹路径
 * @return bool
 */
function deldir($dir,$file_name){
  //先删除目录下的文件：
	$dh=opendir($dir);
  	while(($file=readdir($dh))!=false){
		if($file!="." && $file!=".."){
			$fullpath=$dir."/".$file;
			if($file_name){
				$thefilepath = $dir."/".$file_name;
			}
	      	if(!is_dir($fullpath)) {	 
	      		if($thefilepath){
	      			if($fullpath==$thefilepath){
	      				unlink($thefilepath);
	      			}
	      		}
	      		else{
	      			unlink($fullpath);
	      		}     		        
	      	}
	      	else{
	          deldir($fullpath,$file_name);
	      	}
	    }
  	} 
	closedir($dh);
  	//删除当前文件夹：(如果目录不是空的话，是删不掉的)
  	if(rmdir($dir)){
  		return true;
  	}
  	else{
  		return false;
  	} 
}
/**
 * 获取商品的属性，若有则返回最低积分
 * @param str $dir 文件或文件夹路径
 * @return bool
 */
function min_value($id,$value,$field='score'){
	$min = D('ProductAttributeValGroup')->where("product_id='{$id}'")->min($field);
	return (isset($min))?$min:$value;
}
/**
 * 获取验证信息和有效时间
 */
function getDbCheckCode($phone,$time){
	$db_code = M('SmsCheckCode')->where(array('phone'=>$phone))->field('code,addtime')->find();
	$effective_time = $time?$time:1; //有效时间
	$db_code['end_time'] = strtotime("+{$effective_time} minutes",$db_code['addtime']);
	return $db_code?$db_code:array();
}
/**
 * 对树型数组进行关键字筛选，返回数组
 * @param array $three
 */
function getKeyWords($list,$keywords,$child='_child'){
	foreach($list as $k=>$v){
		if(strpos($v['name'],$keywords)===false){
			$count = count($v[$child]);
			if($count){	
				$list[$k][$child] = getKeyWords($list[$k][$child],$keywords,$child);
				if(!$list[$k][$child]){
					unset($list[$k]);				
				}		
			}			
			else{
				unset($list[$k]);
			}
			
		}
	}
	return $list;
}
/**
 * 省市县区域缓存
 */
function shipping_region_cache(){
	$list = M('Region')->field('id,name,pid')->select();
	$new = array();
	foreach($list as $key=>$value){
		$new[$value['id']] = $value;
	}
	F ( 'shipping_region', $new,DATA_PATH);
	$list = list_to_tree($list,'id', 'pid','child');
	$new = array();
	foreach($list as $key=>$value){
		foreach($value['child'] as $k=>$v){
			foreach($v['child'] as $j=>$c){
				$v['child'][$v['id']][] = $c;
				unset($v['child'][$j]);
			}
			$value['child'][$k]=$v;
		}
		$new[$value['id']] = $value;
	}
	$filename = './Public/js/city.min.js';
	$js = "var region=".json_encode($new);
	Think\Storage::put($filename,$js,'F');
}
/**
 * 切换nabang数据库
 */
function nabang($table){
	return D()->db(1,'nabang')->table('nb_'.$table);
	//M($table)->db(1,'DB_CONFIG1');
}
/**
 * 对密码MD5加密
 * @param string $pwd MD5加密过
 */
function pwd_md5($pwd,$key){
	return md5($pwd.md5($key));
}