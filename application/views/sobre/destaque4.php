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
		<td><a href="<?php echo URL::site('iframes/destaque3'); ?>" target="destaque"><img src="<?php echo URL::site("resources/img/icon/before.png")?>"></a>
		<td><img width="50" height="50" src="<?php echo URL::site("resources/img/icon/6.png")?>">
		<td><p><?php echo $paragrafo4; ?></p>
		<?php if ($paragrafo5 != "") {?>
		<td><a href="<?php echo URL::site('iframes/destaque5'); ?>" target="destaque"><img src="<?php echo URL::site("resources/img/icon/next.png")?>"></a>
		<?php } ?>
</table>
</div>
</body>
</html>
