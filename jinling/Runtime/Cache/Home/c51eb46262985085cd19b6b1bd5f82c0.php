<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>{$a}</p>
	<?php if(is_array($conf_data)): foreach($conf_data as $key=>$): echo ($key); ?>|<?php echo ($val['id']); ?>:<?php echo ($val["config_name"]); ?> <br/><?php endforeach; endif; ?>
</body>
</html>