<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de cursos em aberto</title>
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo URL::site("resources/css/base.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo URL::site("resources/css/sidebar.css"); ?>">
	<?php if(isset($beforePageCss)) echo $beforePageCss; ?>
	<?php if(isset($pageCss)) foreach($pageCss as $css){ ?>
	<link rel="stylesheet" type="text/css" href="<?php echo (strpos($css,'//')!==false)?$css:URL::site("resources/css/$css.css"); ?>">
	<?php }; ?>
	<?php if(isset($afterPageCss)) echo $afterPageCss; ?>
	
	<!-- JS -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://centralsigma.com.br/arquivos/plugins/gioplugin.js"></script>
	<script type="text/javascript" src="<?php echo URL::site("ajaxrequests/js"); ?>"></script>
	<script type="text/javascript" src="<?php echo URL::site("resources/js/base.js"); ?>"></script>
	<?php if(isset($beforePageJs)) echo $beforePageJs; ?>
	<?php if(isset($pageJs)) foreach($pageJs as $js){ ?>
	<script type="text/javascript" src="<?php echo (strpos($js,'//')!==false)?$js:URL::site("resources/js/$js.js"); ?>"></script>
	<?php }; ?>
	<?php if(isset($afterPageJs)) echo $afterPageJs; ?>
</head>
<body>
	<?php echo View::factory("layout/header"); ?>
	
	<div id="cpcm_content_container">
		<?php if(!isset($show_sidebar) || $show_sidebar==true){ ?>
			<?php echo View::factory("layout/sidebar"); ?>
			
			<div id="cpcm_content">
				<?php echo $content; ?>
			</div>
			
			<br class="clearfix">
		
		<?php }else{ ?>
			<?php echo $content; ?>
		
		<?php } ?>
	</div>
	
	<?php echo View::factory("layout/footer"); ?>
	<?php echo View::factory("layout/social"); ?>
</body>
</html>