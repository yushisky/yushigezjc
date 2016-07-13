<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
		<h2><?php echo ($a); echo ($b); ?></h2>
		<h3>miss noBB noBB</h3>
		<?php if(is_array($conf_data)): foreach($conf_data as $key=>$val): echo ($key); ?>|<?php echo ($val["id"]); ?>:<?php echo ($val["config_name"]); ?> <br/><?php endforeach; endif; ?>
</body>
</html>