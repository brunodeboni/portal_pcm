<?php
	$curso = DB::query(Database::SELECT, 'select * from cw_cursos where id = :cid')->param(':cid',Request::current()->param('id'))->execute()->as_array();
	$curso = $curso[0];
?>
<div id="painel_header">
<h1>Editar Curso</h1>
	<ul id="painel_sitemap">
		<li> <a href="<?php echo URL::site('painel'); ?>">Painel Administrativo</a>
		<li> <a href="<?php echo URL::site('painel/meus_cursos/'.$curso['id']); ?>">Meus Cursos</a>
		<li> Editar Curso
	</ul>
</div>

<?php echo View::factory('painel/layout_edit_menu',array('menu'=>'','curso'=>$curso)); ?>

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
	
	
	<input type="hidden" name="curso_id" value="<?=$curso['id'];?>">
	
	<div class="painel_form_field">
		<label>
			<span>Nome do curso</span>
			<input type="text" class="painel_cadastro_input" value="<?php echo htmlspecialchars($curso['nome'],ENT_QUOTES); ?>" name="curso_nome">
		</label>
	</div>
	
	<div class="painel_form_field">
		<label>
			<span>Objetivo</span>
			<textarea class="painel_cadastro_input" style="height:200px;" name="curso_objetivo"><?php
				echo htmlspecialchars($curso['objetivo'],ENT_QUOTES);
			?></textarea>
		</label>
	</div>
	
	<div class="painel_form_field">
		<label>
			<span>Pré-requisitos</span>
			<textarea class="painel_cadastro_input" style="height:200px;" name="curso_pre_requisitos"><?php
				echo htmlspecialchars($curso['pre_requisitos'],ENT_QUOTES);
			?></textarea>
		</label>
	</div>
	
	<div class="painel_form_field">
		<button class="btn-blue" style="float:right;">Atualizar</button>
		<br class="clearfix">
	</div>
	
</form>
