<div class="content_title">Cancelar Inscrição</div>

<div style="margin-left: 10px;">
	<span>Tem certeza que deseja cancelar a sua inscrição?</span>
	<br><br>
	<?php if (isset($txterro)) {?>
		<div class="erro"><?php echo $txterro; ?></div><br>
	<?php }?>	
	<form action="" method="post">
		<input type="hidden" name="sim" value="sim">
		<button type="submit" class="btn-blue">Sim</button>
		<a href="<?php echo URL::site('cursos/meuscursos')?>" class="btn-blue">Voltar</a>
	</form>
</div>


