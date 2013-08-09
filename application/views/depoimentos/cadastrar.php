<div class="content_title">Depoimentos</div>

<?php if (isset ($error)) {
		echo '<div class="erro">'.$error.'</div>';
 	} 
 	
 	if(Auth::instance()->logged_in()) { 
		if (isset ($id_inscrito)) {?>

<div class="depoimentos">
	<form name="cadastre_usu" action="" method="post">
		
		<span>Escreva seu depoimento sobre o CPCM:</span><br><br>
		<textarea id="depoimento" name="depoimento" cols="70" rows="7"></textarea><br><br>
		<a class="btn-blue" href="javascript: checkDepoimentoUsuario()">Enviar</a>
		
	</form>
</div>
<br>

<?php 	} 
 	} 
?>
