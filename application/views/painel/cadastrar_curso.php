<?php
	$reqs = array('curso_nome','curso_objetivo','pre_requisitos');
	$vaus = array();
	foreach($reqs as $req) {
		$vaus[$req] = isset($dados[$req])?$dados[$req]:'';
	}
?>
<div id="painel_header">
<h1>Cadastrar Curso</h1>
	<ul id="painel_sitemap">
		<li> <a href="<?php echo URL::site('painel'); ?>">Painel Administrativo</a>
		<li> <a href="<?php echo URL::site('painel/meus_cursos'); ?>">Meus Cursos</a>
		<li> Cadastrar Curso
	</ul>
</div>

<form id="painel_form_cadastrar_curso" action="" method="POST">
	
	<?php if($formok===false) { ?>
		<div class="painel_message_ok">
			<?php echo ($formmsg)?$formmsg:'Ocorreu um erro inesperado ao tentar salvar os dados'; ?>
		</div>
	<?php } elseif($formok===true) { ?>
		<div class="painel_message_error">
			Dados salvos com sucesso!
		</div>
	<?php } ?>
	
	<div class="painel_form_field">
		<label>
			<span>Nome do curso</span>
			<input type="text" class="painel_cadastro_input" name="<?=$reqs[0];?>" value="<?=$vaus[$reqs[0]];?>">
		</label>
	</div>
	
	<div class="painel_form_field">
		<label>
			<span>Objetivo</span>
			<textarea class="painel_cadastro_input" style="height:200px;" name="<?=$reqs[1];?>"><?=$vaus[$reqs[1]];?></textarea>
		</label>
	</div>
	
	<div class="painel_form_field">
		<label>
			<span>Pré-requisitos</span>
			<textarea class="painel_cadastro_input" style="height:200px;" name="<?=$reqs[2];?>"><?=$vaus[$reqs[2]];?></textarea>
		</label>
	</div>
	
	<div class="painel_form_field">
		<button class="btn-blue" type="submit" style="float:right;">Cadastrar</button>
		<br class="clearfix">
	</div>
	
</form>
