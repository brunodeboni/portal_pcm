<?php

if(!isset($request)){
	$request = array(
			"curriculo" => "",
	);
}

?>
<div class="content_title">Cadastro</div>
<div id="erromsgs">
	<?php if(isset($errors)) foreach($errors as $campo => $erro){
		$mensagem = "Erro no campo $campo - $erro";
		switch($erro){
			case 'not_empty':
				$mensagem = "O campo $campo não pode ficar em branco";
				break;
			case 'unique':
				$mensagem = "Este $campo já está cadastrado";
				break;
		}
		echo '<div class="erro">'.$mensagem.'</div>';
	}; ?>
</div>

<p class="parceiro">Por favor, complete seu cadastro, enviando seu currículo em anexo.</p>
<br>
<form id="formcadastro" enctype="multipart/form-data" action="<?php echo URL::site('auth/processa_curriculo_parceiro'); ?>" method="post">
<label class="inp_txt_required">
		<span>Enive seu currículo:</span>
		<input type="file" name="curriculo" id="inp_curriculo">
	</label>
	
	<div style="text-align:right;width:530px;">
		<button type="submit" id="bt_inscrever" class="btn-blue">Cadastrar</button>
	</div>
</form>