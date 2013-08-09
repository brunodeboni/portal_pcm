<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<link rel="stylesheet" href="<?php echo URL::site('resources/css/base.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo URL::site('resources/css/sobre.css'); ?>" type="text/css">
</head>
<body style="background:#F9F9F9;">
<div class="destaque_title">Em Destaque</div>
<div class="container_modulo">
<table class="table_modulo">
	<tr>
		<td><img width="50" height="50" src="<?php echo URL::site("resources/img/icon/6.png")?>">
		<td><p><?php echo $paragrafo1; ?></p>
		<?php if ($paragrafo2 != "") {?>
		<td><a href="<?php echo URL::site('iframes/destaque2'); ?>" target="destaque"><img src="<?php echo URL::site("resources/img/icon/next.png")?>"></a>
		<?php }?>
</table>
</div>
</body>
</html>
