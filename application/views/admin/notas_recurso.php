<?php echo View::factory('admin/curso_titulo',array('curso'=>$curso,'turma'=>$turma,'current'=>'notas')); ?>


<div class="pagina_titulo">
	<?php echo $recurso['titulo']; ?>
</div>

<div style="font-weight:bold;margin:50px 20px;">
	Números decimais separados por PONTO (.)
</div>


<?php //var_dump($alunos);die(); ?>





<table class="pretty_table">

	<tr style="font-size:18px;background:#629EBE;color:#FFF;">
		<td> Aluno
		<td> Hora Acesso
		<td> Nota


<?php $cont_alunos=0;
foreach($alunos as $aluno){
	//if($aluno['dh_acesso']==NULL) continue;
	$cont_alunos++; ?>
	
	<tr>
		<td> <?php echo $aluno['nome']; ?>
		<td> <?php echo $aluno['dh_acesso']; ?>
		<td> <input type="text" style="padding:5px;width:50px;" value="<?php
					echo $aluno['nota'];
					?>" class="inp_nota" data-ida="<?php
					echo ($aluno['cw_cursos_recursos_insc'])?$aluno['cw_cursos_recursos_insc']:'novo'; ?>" data-idr="<?php echo $id_recurso; ?>" data-idi="<?php
					echo $aluno['id_inscrito'];
					?>">
<?php } ?>
</table>

<button onclick="salvarNotas();" class="btn-blue" style="float:right;margin-right:30px;">Salvar</button>
<br class="clearfix">
