<script type="text/javascript">
		function acessarconvidado(){
			var cmsg = "Para acessar a sala virtual selecione a opção CONVIDADO e insira o seu nome completo.\r\n \r\n";
			cmsg += "Se você não realizou sua inscrição previamente poderá assistir a toda a aula e interagir com o instrutor, porém não terá acesso às atividades e recursos complementares do curso.";
			
			return confirm(cmsg);
		}
</script>
<div class="content_title">Grade de cursos disponíveis</div>

<div id="recursos_agora_container">
	<div id="recursos_agora">	
	<span style="font-size:30px; color: #28166F; margin-left:150px;"><b><i>Estude. Não custa nada!</i></b></span><br><br>
		<table class="pretty__table">
			
	
<?php 
//$cc = new cursos_convidados();
$cursos_agora = recursos_agora();
$cursos_depois = recursos();

$cursos = mesclarCursos($cursos_agora, $cursos_depois);
//var_dump($cursos);die();

foreach($cursos as $curso){

	if($curso['turma_acontecendo_agora']){
		// est� acontecendo agora
		$reclink = $curso['link'];
		$linkinscrito = '<a href="'.$reclink.'" class="btn-red" style="font-size: 14px; padding: 7px 5px;" onclick="return acessarconvidado()" target="_blank">Acesse agora</a>';

		echo "
		<tr>
			<td><b>".$curso['nome']."</b>
			<td rowspan=\"2\">$linkinscrito
		<tr>
			<td><span style=\"color: red;\"><b>Aula em Andamento</b></span> - ".$curso['horarios']."
		<tr><td colspan=\"2\" style=\"height: 35px;\"><hr>";

	}else{
		// n�o est� acontecendo agora
		$reclink = $curso['id_curso'];
		$linkinscrito = '<a href="' . URL::site('cursos/inscricao/'.$reclink)
						. '" class="btn-red" style="font-size: 14px; padding:7px 5px;" target="_blank">Saiba mais</a>';

		echo "
		<tr>
			<td><b>".$curso['nome']."</b>
			<td rowspan=\"2\">$linkinscrito
		<tr>
			<td>Pr&oacute;xima turma: ".$curso['periodo']." - ".$curso['horarios']." - Dura&ccedil;&atilde;o: $curso[carga_horaria]
		<tr>
			<td colspan=\"2\" style=\"height: 35px;\"><hr>";
	}

}
echo '</table>';

?>	
	</div>
</div>

<br>

<div style="padding:20px;text-align:center;">
	<a href="<?php echo URL::site('videos/playlists'); ?>" class="btn-blue" style="padding:20px 60px;font-size:20px;">Ver aulas gravadas</a>
</div>


<br><br>

<div style="text-align:center">
	<a href="http://centralsigma.com.br/index.php?option=com_content&view=article&id=856"><img src="<?php echo URL::site('resources/img/banner-planejadores.png'); ?>" width="650"></a>
</div>

<br>
<div class="us-container" id="universo1">
<!-- INSERINDO UNIVERSO SIGMA -->
<script>function flashCall(par){alert(par);}</script><script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<object id="FlashID1" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="660" height="430"><param name="movie" value="carousel_as2.swf" />
<param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="allowScriptAccess" value="always" /><param name="swfversion" value="9.0.45.0" />
<!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don�t want users to see the prompt. -->
<param name="expressinstall" value="Scripts/expressInstall.swf" /><!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
<!--[if !IE]>--><object type="application/x-shockwave-flash" data="resources/swf/carousel_as2.swf" width="660" height="430"><!--<![endif]-->
<param name="quality" value="high" /><param name="wmode" value="opaque" /><param name="allowScriptAccess" value="always" /><param name="swfversion" value="9.0.45.0" />
<param name="expressinstall" value="Scripts/expressInstall.swf" /><!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
<div><h4>Content on this page requires a newer version of Adobe Flash Player.</h4><p><a href="http://www.adobe.com/go/getflashplayer">
<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
</div><!--[if !IE]>--></object><!--<![endif]--></object><script type="text/javascript">swfobject.registerObject("FlashID");</script>
<!-- FIM DO UNIVERSO SIGMA -->
</div>

<br><br>
<?php // echo View::factory('enquetes/1'); ?>

<br><br>
<?php // echo View::factory('depoimentos/home'); ?>

<br><br>
<?php echo View::factory('social/disqus_comentarios'); ?>
