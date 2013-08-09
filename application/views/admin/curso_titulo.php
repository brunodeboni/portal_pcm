<?php
	$cx = isset($current)?$current:'';
	
	function cclass($class_name,$cx){
		if($cx == $class_name) echo 'class="subcurso_current"';
	}
?>

<div id="cpcm_cursoinfo_title">
	<div style="display:none;">
		<span id="cfg_turma"><?php echo $turma['id']; ?></span>
		<span id="cfg_curso"><?php echo $curso['id']; ?></span>
	</div>
	
	<div class="pagina_titulo">
		<a href="<?php echo URL::site('admin/cursos'); ?>" style="float:left;font-size:14px;color:#FFF;text-decoration:underline;">Lista de cursos</a>
		<div style="margin-bottom:10px;text-align:center;font-size:14px;font-weight:bold;color:#000;">Administração de Turmas *** <?php echo $turma['periodo']; ?></div>
		<a href="<?php echo URL::site('admin/curso/'.$curso['id']); ?>" style="color:#FFF;text-decoration:underline;"><?php echo $curso["nome"]; ?>
	</div>
	<ul class="subcurso_menu">
		<li <?php cclass('diariodeclasse',$cx); ?>> <a href="<?php echo URL::site("admin/diariodeclasse/$curso[id]_$turma[id]"); ?>">Diário de Classe</a>
		<li <?php cclass('alunosturma',$cx); ?>> <a href="<?php echo URL::site("admin/alunosturma/$turma[id]"); ?>">Alunos</a>
		<li <?php cclass('notas',$cx); ?>> <a href="<?php echo URL::site("admin/notasturma/$turma[id]"); ?>">Notas</a>
		<li <?php cclass('aprovados',$cx); ?>> <a href="<?php echo URL::site("admin/aprovados/$turma[id]"); ?>">Aprovados</a>
		<li <?php cclass('uploads',$cx); ?>> <a href="<?php echo URL::site("admin/uploads/$turma[id]"); ?>">Uploads</a>
		<?php /*
		<li <?php cclass('minhasnotas',$cx); ?>> <a href="<?php echo URL::site('cursos/minhasnotas/'.$turma['id']); ?>">Minhas Notas</a>
		<li <?php cclass('minhafrequencia',$cx); ?>> <a href="<?php echo URL::site('cursos/minhafrequencia/'.$turma['id']); ?>">Presenças e Faltas</a>
		*/ ?>
	</ul>
</div>
