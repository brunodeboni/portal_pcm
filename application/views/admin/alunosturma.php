<?php echo View::factory('admin/curso_titulo',array('curso'=>$curso,'turma'=>$turma,'current'=>'alunosturma')); ?>

<table class="pretty_table">
	<tr class="pretty_table_title">
		<td style="width:30px;">
			<input type="checkbox" id="cbal" onchange="checarCbAlunos()">
			<span style="display:none;font-size:6px;" id="id_turma"><?php echo $turma['id']; ?></span>
		<td style="width:60px;">ID user
		<td style="width:80px;">ID inscrito
		<td>Nome
<?php foreach($alunos as $aluno){ ?>
	<tr class="pretty_table_hover" id="trcba_<?php echo $aluno['id_user']; ?>">
		<td> <input type="checkbox" id="cba_<?php echo $aluno['id_user']; ?>" name="cb_aluno" value="<?php echo $aluno['id_user']; ?>_<?php echo $aluno['id_inscrito']; ?>" data-nome="<?php echo $aluno['nome']; ?>">
		<td> <?php echo $aluno['id_user']; ?>
		<td> <?php echo $aluno['id_inscrito']; ?>
		<td> <a href="<?php echo URL::site('admin/atividades_alunos/'.$aluno['id_inscrito']); ?>"><?php echo $aluno['nome']; ?></a>
<?php } ?>
</table>

<br><br>

<button onclick="excluirAlunos();">Excluir Usuários Selecionados</button>

<div style="float:right;">
	<div style="font-size:18px;">Enviar SMS</div>
	<textarea style="width:200px;height:100px;" readonly></textarea>
	<br>
	<button disabled style="padding:8px 15px;">Enviar</button>
	<br class="clearfix">
	<div style="font-size:13px;">função não implementada</div>
</div>