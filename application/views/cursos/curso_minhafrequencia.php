<div style="font-size:32px;color:#369;text-align:center;">Presenças e Faltas</div>
<div>
<table class="pretty_table">
	<tr style="font-size:18px;background:#629EBE;color:#FFF;">
		<td>Título
		<td>Horas Teóricas
		<td>Horas Confirmadas
		<td>Hora Acesso
		
<?php 		
	
	$THT = (float) 0;
	$THC = (float) 0;
	
	$rowq = true; //classe das cores das linhas na tabela
	foreach ($resultado as $res) {
		
		$THT += (float) $res['horas_teorico'];
		$THC += (float) $res['horas_real'];
		
		//classe das cores das linhas na tabela
		if($rowq) $class = "secondline";
		else $class = "firstline";
		$rowq = !$rowq;

		echo"
			<tr class=\"$class\">
				<td class=\"pt_title\">$res[titulo]
				<td>$res[horas_teorico]
				<td>$res[horas_real]
				<td>$res[hora_acesso]
		";
	}
?>
		<tr>
			<td> Somatório
			<td> <?php echo $THT; ?>
			<td> <?php echo $THC; ?>
			<td> <?php echo number_format((($THC*100)/$THT),2,',',''); ?> %
	</table>
</div>
