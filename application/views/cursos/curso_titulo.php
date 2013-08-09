<?php
	$cx = isset($current)?$current:'';
	
	function cclass($class_name,$cx){
		if($cx == $class_name) echo 'class="subcurso_current"';
	}
	
	if ($curso["id"] == 7) {
?>
	<div id="cpcm_cursoinfo_title">
		<div class="pagina_titulo"><?php echo $curso["nome"]; ?></div>
		<ul class="subcurso_menu">
			<li <?php cclass('saladeaula',$cx); ?>> <a href="<?php echo URL::site('cursos/saladeaula/'.$turma['id']); ?>">Atividades</a>
		</ul>
	</div>
<?php }else { ?>
<div id="cpcm_cursoinfo_title">
	<div class="pagina_titulo"><?php echo $curso["nome"]; ?></div>
	<ul class="subcurso_menu">
		<li <?php cclass('saladeaula',$cx); ?>> <a href="<?php echo URL::site('cursos/saladeaula/'.$turma['id']); ?>">Atividades</a>
		<li <?php cclass('minhasnotas',$cx); ?>> <a href="<?php echo URL::site('cursos/minhasnotas/'.$turma['id']); ?>">Minhas Notas</a>
		<li <?php cclass('minhafrequencia',$cx); ?>> <a href="<?php echo URL::site('cursos/minhafrequencia/'.$turma['id']); ?>">Presenças e Faltas</a>
		<li <?php cclass('inscritos',$cx); ?>> <a href="<?php echo URL::site('cursos/inscritos/'.$turma['id']); ?>">Inscritos</a>
	</ul>
</div>
<?php } ?>
