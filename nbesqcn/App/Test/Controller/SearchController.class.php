<?php
/**
 * 搜索操作类
 */
namespace Test\Controller;
class SearchController extends BaseController {
    /**
     * 搜索首页
     */
    public function index(){
       	$this->display();
    }
    /**
     * 商家详细页
     */
    public function detail(){
        $this->display();
    }
}