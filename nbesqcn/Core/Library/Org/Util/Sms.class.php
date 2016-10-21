<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
namespace Org\Util;
/**
 * ThinkPHP 应用程序类 执行应用过程管理
 */
class Sms {
	//企业编码
	protected $SpCode;
	//帐户
	protected $LoginName;
	//密码
	protected $Password;
	//接口连接
	protected $url;
	//SOAP实例化对象
	protected $client;
	
	/**
	 +----------------------------------------------------------
	 * 架构函数
	 +----------------------------------------------------------
	 * @access public
	 +----------------------------------------------------------
	 * @param string $SpCode  企业编码
	 * @param string $LoginName  帐户
	 * @param string $Password  密码
	 +----------------------------------------------------------
	 */
	public function __construct() {
		$this->SpCode = '220938';
		$this->LoginName = 'admin1';
		$this->Password = 'A123@456';
		$ws = 'http://gd.ums86.com:8899/sms_hb/services/Sms?wsdl';
		//$this->client = new \SoapClient ($ws);
		vendor('nusoap');
		$this->client = new \nusoap_client($ws,true);
		$this->client->soap_defencoding = 'utf-8';
		$this->client->decode_utf8 = false;
		$this->client->xml_encoding = 'utf-8';
	}
	/**
	 * 发送信息
	 * $msg 短信内容, 最大402个字符
	 * $phone 手机号码
	 * $send_time 间隔发送时间,默认立即发送
	 * $microtime 流水号
	 */
	public function sendSms($msg,$phone,$microtime,$send_time=''){
		$param = array(
			'in0' => $this->SpCode,
			'in1' => $this->LoginName,
			'in2' => $this->Password,
			'in3' => $msg,
			'in4' => $phone,
			'in5' => $microtime,
			'in6' => $send_time,
			'in7' => '1',
			'in8' => '',
			'in9' => '',
			'in10' => ''
		);
		//$result = $this->client->Sms($param);
		$result = $this->client->call('Sms', array('parameters' => $param));
		$out = explode('&',$result['out']);
		$arr['status'] = substr($out[0],strpos($out[0],'=')+1);
		$arr['description'] = substr($out[1],strpos($out[1],'=')+1);
		return $arr?$arr:array();
	}
	/**
	 * 回执接口
	 */
	public function getReportResponse(){
		$param = array(
			'in0' => $this->SpCode,
			'in1' => $this->LoginName,
			'in2' =>$this->Password
		);
		//$result = $this->client->report($param);
		$result =  $this->client->call('report', array('parameters' => $param));
		return $result->ReportResponse;
	}
	/**
	 * 上行回复内容查询接口
	 */
	public function getReplyResponse(){
		$param = array(
			'in0' => $this->SpCode,
			'in1' => $this->LoginName,
			'in2' =>$this->Password,
			'in3' =>''
		);
		//$result = $this->client->reply($param);
		$result = $this->client->call('reply', array('parameters' => $param));
		$this->getReplyConfirmResponse($result->ReplyResponse['id']);
		return $result->ReplyResponse;
	}
	/**
	 * 上行回复内容确认接口
	 */
	public function getReplyConfirmResponse($last_id){
		$param = array(
				'in0' => $this->SpCode,
				'in1' => $this->LoginName,
				'in2' =>$this->Password,
				'in3' =>'',
				'in4' =>$last_id
		);
		//$result = $this->client->replyConfirm($param);
		$result = $this->client->call('replyConfirm', array('parameters' => $param));
		return $result->ReplyConfirmResponse;
	}
}