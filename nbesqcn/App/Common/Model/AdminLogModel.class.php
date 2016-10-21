<?php
namespace Common\Model;
class AdminLogModel extends BaseModel{
	/**
	 * 添加日志
	 * @param array $log
	 */
	public function addLog($log){
		$this->add($log);
	}
}