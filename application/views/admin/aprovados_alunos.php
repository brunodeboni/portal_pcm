<?php echo View::factory('admin/curso_titulo',array('curso'=>$curso,'turma'=>$turma,'current'=>'aprovados')); ?>

<?php //var_dump($alunos);
	function echoSelect($aluno) {
		$options = array('Inscrito','Cancelado','Aprovado','Reprovado');
		$defvalue = ((int)$aluno['status'])-1;
		
		$idu = $aluno['id_user'];
		$idi = $aluno['id_inscrito'];
		$idt = $aluno['id_turma'];
		
		$id_select = 'di_'.$idu.$idt.$idi;
		
		echo '<select class="inp_status" data-idu="'.$idu.'" data-idi="'.$idi.'" data-idt="'.$idt.'" id="'.$id_select.'">';
		foreach($options as $key => $option){
			$selected = ($key === $defvalue)?'selected':'';
			echo '<option value="'.($key+1).'" '.$selected.'>'.$option;
		}
		echo '</select>';
	}
?>

<br>
<div style="text-align:center;">
	<button class="btn-red" id="bt_avaliarturma" onclick="avaliarTurma()">Avaliar turma automaticamente</button>
</div>


<table class="pretty_table">
	<tr style="font-weight:bold;">
		<td> Nome
		<td style="width:90px;"> 
	
	<?php foreach($alunos as $aluno){ ?>
	<tr class="row_<?php echo $aluno['status']; ?>">
		<td> <?php echo $aluno['nome']; ?>
		<td> <?php echoSelect($aluno); ?>
	<?php } ?>
</table>



<div style="margin:40px;">
	<button style="padding:15px 35px;" class="btn-blue" onclick="salvarAprovados()">Salvar Alterações</button>
</div>