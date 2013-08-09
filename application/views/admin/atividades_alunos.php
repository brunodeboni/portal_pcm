<div class="content_title">Atividades do Aluno</div>


<?php 
	if (!count($query)) die('Sem acessos.');
	foreach ($query as $aluno) {
			echo '<div style="margin-left:5px;"><b>Aluno:</b> '.$aluno['nome'].'</div>
				<div style="margin-left:5px;"><b>Turma:</b> '.$aluno['turma'].'</div>';
			break;
	}?>
		
<table class="pretty_table">
	<tr class="pretty_table_title">
		<td>Atividade
		<td>Acesso
		<td>Horas
		<td>Peso
		<td>Nota
<?php foreach($query as $atividade) { 
		if(!isset($atividade['id_atividade'])) $atividade['id_atividade'] = 'novo';
		if(!isset($atividade['horas'])) $atividade['horas'] = '';
		if(!isset($atividade['nota'])) $atividade['nota'] = '';
?>
	<tr class="rectosave" data-ida="<?php echo $atividade['id_atividade']; ?>" data-idr="<?php echo $atividade['id_recurso']; ?>" data-idi="<?php echo $atividade['id_inscrito']; ?>">
		<td> <?php echo $atividade['titulo']; ?>
		<td> <?php echo $atividade['acesso']; ?>
		<td> <input id="dih_<?php echo $atividade['id_atividade']; echo $atividade['id_recurso'];?>" size="1" type="text" name="horas" value="<?php echo $atividade['horas']; ?>">
		<td> <?php echo $atividade['peso_nota']; ?>
		<td> <input id="din_<?php echo $atividade['id_atividade']; echo $atividade['id_recurso'];?>" size="1" type="text" name="nota" value="<?php echo $atividade['nota'] ?>">
<?php } ?>
</table>
	
<div style="margin-left: 5px;">
	<button onclick="salvarAtividades();" class="btn-blue">Alterar todas</button>
</div>

<br>
<a style="margin-left: 15px;" href="<?php echo URL::site('admin/alunosturma/'.$atividade['turma']); ?>">Voltar</a>
