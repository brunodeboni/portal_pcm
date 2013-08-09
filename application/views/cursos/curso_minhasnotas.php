<div style="font-size:32px;color:#369;text-align:center;">Minhas Notas</div>
<div>


<table id="notas" class="pretty_table">
	<tr style="font-size:18px;background:#629EBE;color:#FFF;">
		<td>T&iacute;tulo
		<td>Hora de Acesso
		<td>Peso
		<td>Nota
		<td>Nota x Peso

<?php 

$nota_final = (float) 0;

$rowq = true; //classe das cores das linhas na tabela

//Pega o resultado da query usada para mostrar ao usuário as suas notas em um determinado curso.
foreach($resultado as $res){
	$nota_final += (float) $res['nota_avaliacao'];
	
	//classe das cores das linhas na tabela
	if($rowq) $class = "secondline";
	else $class = "firstline";
	$rowq = !$rowq;

	echo "
		<tr class=\"$class\">
			<td class=\"pt_title\">$res[titulo]
			<td>$res[hora_acesso]
			<td>$res[peso]
			<td>$res[nota]
			<td>$res[nota_avaliacao]
		";
}
?>
<tr>
	<td class="pt_title"> Total
	<td><td><td>
	<td><?php echo $nota_final; ?>
</table>
</div>
