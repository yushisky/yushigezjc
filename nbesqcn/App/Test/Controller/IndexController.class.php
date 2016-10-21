<?php
namespace Test\Controller;
class IndexController extends BaseController {
	protected function _initialize() {
		parent::_initialize();
        // =========全部分类========
        $clientclass = $this->hprose('http://api.nbesq.com/Business');
        $pihotl_ionf=$this->ajax_return = $clientclass->getType(array('pid'=>0));

        $hotl_ionf=$this->ajax_return = $clientclass->getType(array('pid'=>1));
              foreach ($pihotl_ionf as $key){
                    foreach ($hotl_ionf as $kk){
                        if($key['id']==$kk['pid']){
                            $pihotl_ionf[$key]['two'][]=$kk;
                        }
                    }
                }
       print_r($pihotl_ionf);
        print_r($hotl_ionf);
        $this->assign(array(
            // 美食
            'pihotl_ionf'=>$pihotl_ionf['data'],
            'hotl_ionf'=>$hotl_ionf['data'],
            ));

	}
    public function getCity(){
        $location = I('post.location');
        if($location){
            $client = $this->hprose('http://api.nbesq.com/Tool');
            $region = $client->getCity(array('location'=>$location));
        }
        $city = $region['data']['city_id']?$region['data']['city_id']:'80';
        $this->ajax_return = $client->getRegion(array('pid'=>$city));
        return_json($this->ajax_return);
        // print_r($this->ajax_return);die;
    }
	/**
	 * 首页
	 */
    public function index(){
        // $ip_value = get_client_ip();
        // $ip = new Org\Net\IpLocation('UTFWry.dat'); // 实例化类 参数表示IP地址库文件$area = $Ip->getlocation('203.34.5.66'); // 获取某个IP地址所在的位置
        // $ip_value = $ip->getlocation($ip_value); 
        //  print_r($ip_value);die;
        //=======================================
        $client = $this->hprose('http://api.nbesq.com/Business');
        //======= 
        $id = I('get.id');
        $hot_ionf =$this-> ajax_return = $client->getBusiness(array());

         //=======
         $happ_ionf =$this-> ajax_return = $client->getBusiness(array('type_id'=>1,'page_size'=>4));
        //=======
         $junk_ionf =$this-> ajax_return = $client->getBusiness(array('type_id'=>0,'page_size'=>4));
         //=======
         $got_ionf =$this-> ajax_return = $client->getBusiness(array('type_id'=>0,'page_size'=>4));
        $this->assign(array(
            '$hot_ionf'=>$hot_ionf['data']['contents'],
            'happ_ionf'=>$happ_ionf['data']['contents'],
            '$junk_ionf'=>$junk_ionf['data']['contents'],
            'got_ionf'=>$got_ionf['data']['contents'],
            ));
        // print_r($hot_ionf);
    	$this->display('Index/index');
    }
    /**
     * 列表 http://www.nbesqcn2016.com/Index/business_list
     */
    public function business_list(){
        $title = I('get.title');
        $arr = array('page_index'=>1);
        if($title){
           $arr['title'] = $title;     
        }
        $client = $this->hprose('http://api.nbesq.com/Business');
        $this->ajax_return = $client->getBusiness($arr);
        $lis_ionf =$this->ajax_return;
        $Page = new \Think\Page($lis_ionf['data']['total_num'],15);
        $show = $Page->show();
        $this->assign(array(
            'show'=>$show,
            'lis_ionf'=>$lis_ionf['data']['contents']
        ));
        $this->display('Index/product_content');
    }
    /**
     * 详情  http://www.nbesqcn.com/index/business_view
     */
    public function business_view(){
        $client = $this->hprose('http://api.nbesq.com/Business');
        $id = I('get.id');
        $ress_ionf=$this->ajax_return = $client->getBusinessView(array('id'=>$id));
        $this->assign(array(
            'ress_ionf'=>$ress_ionf['data']['contents'],
            ));
        // print_r($add_ionf);die;
        $this->display('Index/shops_form');
        }
        /**
         * 酒店介绍  http://www.nbesqcn2016.com/Index/business_hotl
         * 
         *
         */
    public function business_hotl(){
        $client = $this->hprose('http://api.nbesq.com/Business');




          $this->display('Index/hotl_form');
          }

          /**
         * 产品展示  http://www.nbesqcn2016.com/Index/business_hotlclass
         * 
         *
         */
    public function business_hotlclass(){
        $client = $this->hprose('http://api.nbesq.com/Business');




          $this->display('Index/hotl_class');
          }

        /**
         * 帮助中心  http://www.nbesqcn2016.com/Index/business_help
         * 
         *
         */
    public function business_help(){
        $client = $this->hprose('http://api.nbesq.com/Business');




        $this->display('Index/help_conter');
        }


        /**
         * 意见反馈  http://www.nbesqcn2016.com/Index/business_consult
         * 
         *
         */
    public function business_consult(){
        $client = $this->hprose('http://api.nbesq.com/Business');




        $this->display('Index/help_consult');
        }
     /**
     * 漏洞提交  http://www.nbesqcn2016.com/Index/business_consult
     * 
     *
     */
    public function business_bug(){
        $client = $this->hprose('http://api.nbesq.com/Business');




        $this->display('Index/help_bug');
        }
         /**
     * 公司信息  http://www.nbesqcn2016.com/Index/message
     * 
     *
     */
    public function message(){
        $client = $this->hprose('http://api.nbesq.com/Business');




        $this->display('Index/message');
        }
         /**
     * 商家审核首页  http://www.nbesqcn2016.com/Index/shop_index
     * 
     *
     */
    public function shop_index(){
        $client = $this->hprose('http://api.nbesq.com/Business');




        $this->display('Index/shop_index');
        }
     /**
     * 商家申请信息  http://www.nbesqcn2016.com/Index/shop_msg
     * 
     *
     */
    public function shop_msg(){
        $client = $this->hprose('http://api.nbesq.com/Business');




        $this->display('Index/shop_msg');
        }

        /**
     * 常见问题  http://www.nbesqcn2016.com/Index/shop_ment
     * 
     *
     */
    public function shop_ment(){
        $client = $this->hprose('http://api.nbesq.com/Business');




        $this->display('Index/shop_ment');
        }
         /**
         * 常见问题  http://www.nbesqcn2016.com/Index/shop_ment
         * 
         *
         */
    public function shop_ment1(){
        $client = $this->hprose('http://api.nbesq.com/Business');




        $this->display('Index/shop_ment1');
        }
    
    
    
	
}