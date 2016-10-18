<?php 
header('Content-type:text/html;charset=utf-8;');
include('mysql.class.php');

$mysql = new Mysql('localhost','by1600015','pass123456','by1600015');

$list = $mysql->get_all('SELECT * FROM pro_list');

?>
<!DOCTYPE html>
<html>
<head>
	<title>演示列表</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="statics/css/metro.min.css">
    <link rel="stylesheet" href="statics/css/user.css">
    <link rel="stylesheet" href="statics/css/reset.css">
</head>

<body>
    <div class="nav">
          <ul>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
          </ul>


    </div>
    <div class="table-box">
	<h2>商品列表</h2>
    <table class="table striped cell-hovered border bordered hovered" id="main_table_list">
        <thead>
            <tr>
                <th>序号</th>
                <th>名称</th>
                <th>价格/元</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($list as $key => $value) {?>
        <tr class="tr">
            <td class="width60px"><?php echo $value['id'];?></td>
            <td class="good_name">
                <span><?php echo $value['name'];?></span>
                <input type="text" value="<?php echo $value['name'];?>" name="good_name" style="display:none;" class="input-control">
            </td>
            <td class="good_price">
                <span><?php echo $value['price'];?></span>
                <input type="text" value="<?php echo $value['price'];?>" name="good_price" style="display:none;" class="input-control">
            </td>
            <td>
                <input type="button" value="保存" class="button my-button-state primary save-btn" style="display:none;">
                <input type="button" value="删除" class="button my-button-state primary del-btn">
            </td>
        </tr>
        <?php }?>
        </tbody>
    </table>
    <div id="box">
        产品名：<input type="text" id="name">
        <span id='tip' style='color:red;dispiay:none'></span>
        产品价格：<input type="text" id="price">
        <input type="button" value="提交" id="btn">
    </div>
	<script src="statics/js/jquery-2.1.3.min.js"></script>
	<script src="statics/js/metro.min.js"></script>
	<script src="statics/js/jquery-user.js"></script>
    <script>
    //====修改数据=====
   //     $('.save-btn').click(function(){  
   //      var tr = $(this).parent().parent();//找到保存按钮老爸的老爸
   //      var id = tr.children().eq(0).html();//找到保存按钮老爸的老爸的第一个儿子内容
   //      var name = tr.children().eq(1).children('input').val();//找到保存按钮老爸的老爸的第二个儿子的叫input的儿子里面的val
   //      var price = tr.children().eq(2).children('input').val();//找到保存按钮老爸的老爸的第三个儿子的叫input的儿子里面的val
   //     // conlose.log('id='+id+'name='+name+'price='+price);
   //      $.ajax({ //一个Ajax过程 
   //      type: "post",  //以post方式与后台沟通
   //      url : "server.php", //与此php页面沟通
   //      dataType:'json',//从php返回的值以 JSON方式 解释
   //      data:'id='+id+'&name='+name+'&price='+price, //发给php的数据有两项，分别是上面传来的u和p  
   //      success:function(data){//如果调用php成功
   //                //alert(json.username+'\n'+json.password); //把php中的返回值（json.username）给 alert出来
   //          if(data.error==1){
			// tr.children().eq(1).children('span').html(data.data.name);
   //          tr.children().eq(2).children('span').html(data.data.price);
   //           // alert(data);
   //           }
   //          },
   //          error:function(){
   //              alert('you lose');
   //          }
   //      });
   //  });
$('.save-btn').click(function(){
    var tr = $(this).parent().parent();//找保存按钮的老爸的老爸
    var id = tr.children().eq(0).html();
    //找保存按钮的老爸的老爸第一个儿子的内容
    var name = tr.children().eq(1).children('input').val();
    //找保存按钮的老爸的老爸第二个儿子的一个叫input的儿子的value值
    var price = tr.children().eq(2).children('input').val();
    //找保存按钮的老爸的老爸第三个儿子的一个叫input的儿子的value值
    //console.log('id='+id+'&name='+name+'&price='+price);
    $.ajax({ //一个Ajax过程 
        type: "post",  //以post方式与后台沟通
        url : "server.php", //与此php页面沟通
        dataType:'json',//从php返回的值以 JSON方式 解释
        data:'id='+id+'&name='+name+'&price='+price, //发给php的数据有两项，分别是上面传来的u和p  
        success: function(data){//如果调用php成功
            tr.children().eq(1).children('span').html(data.data.name);
            tr.children().eq(2).children('span').html(data.data.price);
            // console.log(data.data.name);
        },
        error:function(){
            alert('you lose');
        }
    });
}); 
		$.get('',{},function(res){
			conlose.log(res.ad)
			var h =res.ad
			
		})
        //del删除
         $('.del-btn').click(function(){
            // console.log($(this).parent().parent().children().eq(0).html());
            var tr =$(this).parent().parent();
            var id = tr.children().eq(0).html();
            // console.log(id);
            $.post('server.php',{'del_id':id},function(bb){
                    tr.css('display','none');
                   // if(bb.resule==1){}
            },'json');
         });
        //添加数据
        $('#btn').click(function(){
            var name = $('#name').val(); 
             var price = $('#price').val();
             var a = $('#main_table_list').children().eq(1);//.children('table')
             $.post('server.php',{'name':name,'price':price},function(bb){
               a.after(bb.str);
                // console.log(bb);
             },'json');

        });
        // 查询重复的数据
        $('#name').blur(function(){
                // alert(11);
                var name = $(this).val();//获取内容
                // 通过js的ajax的get的方式发送请求
                // post //get
                $.get('server.php',{'name':name},function(res){
                        console.log(res);
               
                if(res.error==1){//结果处理
                    $('#tip').html(res.data+'已存在').css({'display':'block','color':'red'});
                }else{
                     $('#tip').html(res.data+'可以使用').css({'color':'green','display':'block'});
                    // $('#tip').css('display','none');
                }
             },'json');

        });
    </script>
</body>
</html>
