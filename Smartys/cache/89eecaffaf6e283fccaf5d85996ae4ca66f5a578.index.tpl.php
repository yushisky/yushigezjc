<?php /*%%SmartyHeaderCode:31859576207f54f8462-81845537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89eecaffaf6e283fccaf5d85996ae4ca66f5a578' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1413688876,
      2 => 'file',
    ),
    '0debd65d8a9db561a3ba3fd862046bf4e41cc1db' => 
    array (
      0 => '.\\configs\\test.conf',
      1 => 1413688876,
      2 => 'file',
    ),
    '13629e67885a1b573547e6616e5910f8b21d0868' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1413688876,
      2 => 'file',
    ),
    '6a1ebd86ea963e076d006f4da0910406406bed25' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1413688876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31859576207f54f8462-81845537',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57620c94831225_88754207',
  'has_nocache_code' => true,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57620c94831225_88754207')) {function content_57620c94831225_88754207($_smarty_tpl) {?><HTML>
<HEAD>
    <TITLE>foo - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</TITLE>
</HEAD>
<BODY bgcolor="#ffffff">


<PRE>


    <b>        
        Title: Welcome To Smarty!
        </b>
    The current date and time is 2016-06-16 04:19:00

    The value of global assigned variable $SCRIPT_NAME is /index.php

    Example of accessing server environment variable SERVER_NAME: www.smartys.com

    The value of {$Name} is <b><?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</b>

variable modifier example of {$Name|upper}

<b><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['Name']->value, 'UTF-8');?>
</b>


An example of a section loop:

    <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: FirstName in E:\wampserver\wamp\www\Smartys\templates_c\89eecaffaf6e283fccaf5d85996ae4ca66f5a578.file.index.tpl.cache.php on line <i>75</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0032</td><td bgcolor='#eeeeec' align='right'>132704</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>785576</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>787736</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>394</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0459</td><td bgcolor='#eeeeec' align='right'>927440</td><td bgcolor='#eeeeec'>content_576207f5b48d48_79176397(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>188</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in E:\wampserver\wamp\www\Smartys\templates_c\89eecaffaf6e283fccaf5d85996ae4ca66f5a578.file.index.tpl.cache.php on line <i>75</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0032</td><td bgcolor='#eeeeec' align='right'>132704</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>785576</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>787736</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>394</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0459</td><td bgcolor='#eeeeec' align='right'>927440</td><td bgcolor='#eeeeec'>content_576207f5b48d48_79176397(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>188</td></tr>
</table></font>
        none
    
    An example of section looped key values:

    <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: contacts in E:\wampserver\wamp\www\Smartys\templates_c\89eecaffaf6e283fccaf5d85996ae4ca66f5a578.file.index.tpl.cache.php on line <i>116</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0032</td><td bgcolor='#eeeeec' align='right'>132704</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>785576</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>787736</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>394</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0459</td><td bgcolor='#eeeeec' align='right'>927440</td><td bgcolor='#eeeeec'>content_576207f5b48d48_79176397(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>188</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in E:\wampserver\wamp\www\Smartys\templates_c\89eecaffaf6e283fccaf5d85996ae4ca66f5a578.file.index.tpl.cache.php on line <i>116</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0032</td><td bgcolor='#eeeeec' align='right'>132704</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>785576</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>787736</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>394</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0459</td><td bgcolor='#eeeeec' align='right'>927440</td><td bgcolor='#eeeeec'>content_576207f5b48d48_79176397(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>188</td></tr>
</table></font>
    <p>

        testing strip tags
        <table border=0><tr><td><A HREF="/index.php"><font color="red">This is a test </font></A></td></tr></table>

</PRE>

This is an example of the html_select_date function:

<form>
    <select name="Date_Month">
<option value="01">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06" selected="selected">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<select name="Date_Day">
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16" selected="selected">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="Date_Year">
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
</select>
</form>

This is an example of the html_select_time function:

<form>
    <select name="Time_Hour">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04" selected="selected">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
<select name="Time_Minute">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19" selected="selected">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
</select>
<select name="Time_Second">
<option value="00" selected="selected">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
</select>
<select name="Time_Meridian">
<option value="am" selected="selected">AM</option>
<option value="pm">PM</option>
</select>
</form>

This is an example of the html_options function:

<form>
    <select name=states>
        <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: option_values in E:\wampserver\wamp\www\Smartys\templates_c\89eecaffaf6e283fccaf5d85996ae4ca66f5a578.file.index.tpl.cache.php on line <i>176</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0032</td><td bgcolor='#eeeeec' align='right'>132704</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>785576</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>787736</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>394</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0459</td><td bgcolor='#eeeeec' align='right'>927440</td><td bgcolor='#eeeeec'>content_576207f5b48d48_79176397(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>188</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in E:\wampserver\wamp\www\Smartys\templates_c\89eecaffaf6e283fccaf5d85996ae4ca66f5a578.file.index.tpl.cache.php on line <i>176</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0032</td><td bgcolor='#eeeeec' align='right'>132704</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>785576</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>787736</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>394</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0459</td><td bgcolor='#eeeeec' align='right'>927440</td><td bgcolor='#eeeeec'>content_576207f5b48d48_79176397(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>188</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: option_selected in E:\wampserver\wamp\www\Smartys\templates_c\89eecaffaf6e283fccaf5d85996ae4ca66f5a578.file.index.tpl.cache.php on line <i>176</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0032</td><td bgcolor='#eeeeec' align='right'>132704</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>785576</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>787736</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>394</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0459</td><td bgcolor='#eeeeec' align='right'>927440</td><td bgcolor='#eeeeec'>content_576207f5b48d48_79176397(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>188</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in E:\wampserver\wamp\www\Smartys\templates_c\89eecaffaf6e283fccaf5d85996ae4ca66f5a578.file.index.tpl.cache.php on line <i>176</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0032</td><td bgcolor='#eeeeec' align='right'>132704</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>785576</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>787736</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>394</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0459</td><td bgcolor='#eeeeec' align='right'>927440</td><td bgcolor='#eeeeec'>content_576207f5b48d48_79176397(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>188</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: option_output in E:\wampserver\wamp\www\Smartys\templates_c\89eecaffaf6e283fccaf5d85996ae4ca66f5a578.file.index.tpl.cache.php on line <i>176</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0032</td><td bgcolor='#eeeeec' align='right'>132704</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>785576</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>787736</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>394</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0459</td><td bgcolor='#eeeeec' align='right'>927440</td><td bgcolor='#eeeeec'>content_576207f5b48d48_79176397(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>188</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in E:\wampserver\wamp\www\Smartys\templates_c\89eecaffaf6e283fccaf5d85996ae4ca66f5a578.file.index.tpl.cache.php on line <i>176</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0032</td><td bgcolor='#eeeeec' align='right'>132704</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>785576</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wampserver\wamp\www\Smartys\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0383</td><td bgcolor='#eeeeec' align='right'>787736</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>394</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0459</td><td bgcolor='#eeeeec' align='right'>927440</td><td bgcolor='#eeeeec'>content_576207f5b48d48_79176397(  )</td><td title='E:\wampserver\wamp\www\Smartys\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>188</td></tr>
</table></font>

    </select>
</form>

</BODY>
</HTML>

<?php }} ?>
