<?php echo View::factory('admin/curso_titulo',array('curso'=>$curso,'turma'=>$turma,'current'=>'uploads')); ?>

<table class="pretty_table">
	<tr style="font-weight:bold;">
		<td> Nome
		<td style="width:90px;"> 
	
	<?php foreach($alunos as $aluno){ ?>
	<tr class="row_<?php echo $aluno['status']; ?>">
		<td> <?php echo $aluno['nome']; ?>
		<td> <a href="<?php echo "./$turma[id]/$aluno[id_user]"; ?>">Ver anexos</a>
	<?php } ?>
</table>
