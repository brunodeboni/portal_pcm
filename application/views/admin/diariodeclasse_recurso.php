<?php echo View::factory('admin/curso_titulo',array('curso'=>$curso,'turma'=>$turma,'current'=>'diariodeclasse')); ?>


<br><br>
	<b>Separe as horas com PONTO (.)</b>
<br><br>

<table class="pretty_table">
	<tr style="font-size:18px;background:#629EBE;color:#FFF;">
		<td> Nome
		<td> Data Acesso
		<td> H. Teoria
		<td> H. Real
	<?php
		if(count($diario)):
			$btsalvar = true;
			
			foreach($diario as &$d){
				//echo '<pre>';print_r($d);die();
				if(!isset($d['id_atividade'])) $d['id_atividade'] = 'novo';
				if(!isset($d['horas_teorico'])) $d['horas_teorico'] = '-';
				if(!isset($d['horas_real'])) $d['horas_real'] = '';
				echo
				"<tr class=\"rectosave\" data-ida=\"{$d['id_atividade']}\" data-idr=\"{$id_recurso}\" data-idi=\"{$d['id_inscrito']}\">
					<td style=\"vertical-align:middle;\">{$d['nome']}
					<td style=\"vertical-align:middle;width:160px;\">{$d['dh_acesso']}
					<td style=\"vertical-align:middle;width:100px;\">{$d['horas_teorico']}
					<td style=\"vertical-align:middle;width:60px;\"><input type=\"text\" value=\"{$d['horas_real']}\" style=\"padding:5px;width:60px;\" "
				.	" id=\"di_{$d['id_atividade']}{$d['id_recurso']}\">
				";
				
				unset($d);
			};
		else:
			$btsalvar = false;
			
			echo
			"<tr>
				<td colspan=\"4\">Sem acessos
			";
		
		endif;
	?>
</table>
<br>
<?php if($btsalvar){ ?>
<div style="float:right;">
	<button class="btn-blue" style="padding:10px 30px;" onclick="salvarDiario();">Salvar Todos</button>
	<br class="clear">
</div>
<?php } ?>