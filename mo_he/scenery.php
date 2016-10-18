
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="css/160710css.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
var Speed_2 = 10; //速度(毫秒)
var Space_2 = 20; //每次移动(px)
var PageWidth_2 = 202 * 6; //翻页宽度
var interval_2 = 6000; //翻页间隔时间
var fill_2 = 0; //整体移位
var MoveLock_2 = false;
var MoveTimeObj_2;
var MoveWay_2="right";
var Comp_2 = 0;
var AutoplsayObj_2=null;
function GetObj(objName){if(document.getElementById){return eval('document.getElementById("'+objName+'")')}else{return eval('document.all.'+objName)}}
function Autoplsay_2(){clearInterval(AutoplsayObj_2);AutoplsayObj_2=setInterval('ISL_GoDown_2();ISL_StopDown_2();',interval_2)}
function ISL_GoUp_2(){if(MoveLock_2)return;clearInterval(AutoplsayObj_2);MoveLock_2=true;MoveWay_2="left";MoveTimeObj_2=setInterval('ISL_ScrUp_2();',Speed_2);}
function ISL_StopUp_2(){if(MoveWay_2 == "right"){return};clearInterval(MoveTimeObj_2);if((GetObj('ISL_Cont_2').scrollLeft-fill_2)%PageWidth_2!=0){Comp_2=fill_2-(GetObj('ISL_Cont_2').scrollLeft%PageWidth_2);CompScr_2()}else{MoveLock_2=false}
Autoplsay_2()}
function ISL_ScrUp_2(){if(GetObj('ISL_Cont_2').scrollLeft<=0){GetObj('ISL_Cont_2').scrollLeft=GetObj('ISL_Cont_2').scrollLeft+GetObj('List1_1s').offsetWidth}
GetObj('ISL_Cont_2').scrollLeft-=Space_2}
function ISL_GoDown_2(){clearInterval(MoveTimeObj_2);if(MoveLock_2)return;clearInterval(AutoplsayObj_2);MoveLock_2=true;MoveWay_2="right";ISL_ScrDown_2();MoveTimeObj_2=setInterval('ISL_ScrDown_2()',Speed_2)}
function ISL_StopDown_2(){if(MoveWay_2 == "left"){return};clearInterval(MoveTimeObj_2);if(GetObj('ISL_Cont_2').scrollLeft%PageWidth_2-(fill_2>=0?fill_2:fill_2+1)!=0){Comp_2=PageWidth_2-GetObj('ISL_Cont_2').scrollLeft%PageWidth_2+fill_2;CompScr_2()}else{MoveLock_2=false}
Autoplsay_2()}
function ISL_ScrDown_2(){if(GetObj('ISL_Cont_2').scrollLeft>=GetObj('List1_1s').scrollWidth){GetObj('ISL_Cont_2').scrollLeft=GetObj('ISL_Cont_2').scrollLeft-GetObj('List1_1s').scrollWidth}
GetObj('ISL_Cont_2').scrollLeft+=Space_2}
function CompScr_2(){if(Comp_2==0){MoveLock_2=false;return}
var num,TempSpeed=Speed_2,TempSpace=Space_2;if(Math.abs(Comp_2)<PageWidth_2/2){TempSpace=Math.round(Math.abs(Comp_2/Space_2));if(TempSpace<1){TempSpace=1}}
if(Comp_2<0){if(Comp_2<-TempSpace){Comp_2+=TempSpace;num=TempSpace}else{num=-Comp_2;Comp_2=0}
GetObj('ISL_Cont_2').scrollLeft-=num;setTimeout('CompScr_2()',TempSpeed)}else{if(Comp_2>TempSpace){Comp_2-=TempSpace;num=TempSpace}else{num=Comp_2;Comp_2=0}
GetObj('ISL_Cont_2').scrollLeft+=num;setTimeout('CompScr_2()',TempSpeed)}}
function picrun_ini(){
GetObj("List2_1s").innerHTML=GetObj("List1_1s").innerHTML;
GetObj('ISL_Cont_2').scrollLeft=fill_2>=0?fill_2:GetObj('List1_1s').scrollWidth-Math.abs(fill_2);
GetObj("ISL_Cont_2").onmouseover=function(){clearInterval(AutoplsayObj_2)}
GetObj("ISL_Cont_2").onmouseout=function(){Autoplsay_2()}
Autoplsay_2();
}
</script>
</head>
<body>
<center>
<div class="blk_19"><p class="LeftBotton" onmousedown="ISL_GoUp_2()" onmouseup="ISL_StopUp_2()" onmouseout="ISL_StopUp_2()" href="javascript:void(0);" target="_self1"></p>
  <div class="pcont" id="ISL_Cont_2">
    <div class="ScrCont">
      <div id="List1_1s">
        <!-- piclist begin -->
       <p class="pls" ><img src="images/3_20110720080710_jin_ndeq.jpg" alt="" /></p>
       <p class="pls" ><img src="images/3_20110720080710_jiz、、、、、、5n_ndeq.jpg" alt="" /></p>
       <p class="pls" ><img src="images/89fdf2e0dc37cf_067k.jpg" alt="" /> </p>
       <p class="pls" ><img src="images/253m2.jpg" alt="" /> </p>
       <p class="pls"  ><img src="images/2010meitu_1_x1xi.jpg" alt="" /> </p>
       <p class="pls"  ><img src="images/124218itu_1_to8x.jpg" alt="" /> </p>
	   <p class="pls"  ><img src="images/154007e46vq565_lpxg.jpg" alt=""/> </p>
       <p class="pls"> <img src="images/191123a1ebzk4_ywh3.jpg" alt=""/> </p>
       <p class="pls" ><img src="images/1110981_hkgx.jpg" alt=""/> </p>
       <p class="pls" ><img src="images/5331037_640_q8kz.jpg" alt="" /> </p>
       <p class="pls" ><img src="images/6804615_12_xw8p.jpg" alt="" /> </p>
       <p class="pls" ><img src="images/124218060_13_n_1n_258w_meitu_1_to8x.jpg" alt="" /> </p>
       <p class="pls" ><img src="images/20104820328440_isne_meitu_1_x1xi.jpg" alt="" /> </p>
       <p class="pls"  ><img src="images/53319835202037_640_q8kz.jpg" alt="" /> </p>
		<p class="pls"  ><img src="images/201401061240578949_femv.jpg" alt="" /> </p>
		<p class="pls"  ><img src="images/abuiabacq_q2at.jpg" alt="" /> </p>
		<p class="pls"  ><img src="images/b53e5bd16889f3a2db0c538bf01a4afe_5ymt.jpg" alt="" /> </p>
		<p class="pls"  ><img src="images/b201_meitu_1_mujn.jpg" alt="" /> </p>
		<p class="pls"  ><img src="images/fe4a550b3.jpg" alt="" /> </p>
		<p class="pls"  ><img src="images/cghzflvm78ihg2u368_uf5h.jpg" alt="" /> </p>
		<p class="pls"  ><img src="images/cggyhlyqjneait0ua0479_0h82.jpg" alt="" /> </p>
		<p class="pls"  ><img src="images/indeximg.jpg" alt="" /> </p>
		<p class="pls"  ><img src="images/indeximg1.jpg" alt="" /> </p>
		<p class="pls"  ><img src="images/lanrenzhijia05.jpg" alt="" /> </p>
		<p class="pls"  ><img src="images/lanrenzhijia03.jpg" alt="" /> </p>
        <!-- piclist end -->
      </div>
      <div id="List2_1s"></div>
    </div>
  </div>
 <p class="RightBotton" onmousedown="ISL_GoDown_2()" onmouseup="ISL_StopDown_2()" onmouseout="ISL_StopDown_2()" href="javascript:void(0);" target="_self1"></p> </div>
<div class="c"></div>
<script type="text/javascript">
        <!--
        picrun_ini()
        //-->
        </script>
        </center>
</body>
</html>
