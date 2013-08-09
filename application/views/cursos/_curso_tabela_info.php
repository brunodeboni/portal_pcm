<?php
	if(!isset($link_para_cursos)) $link_para_cursos = URL::site("cursos/lista");
?>

<table class="pretty_table"><!--id="curso_info"-->
	<tr>
		<td class="pt_title"> Carga Horária
		<td> <?php echo $curso["carga_horaria"]; ?>
	<tr>
		<td class="pt_title"> Objetivo
		<td> <?php echo $curso["objetivo"]; ?>
	<tr>
		<td class="pt_title"> Pré-requisitos
		<td> <?php echo $curso["pre_requisitos"]; ?>
	<tr>
		<td>
		<td style="text-align:right;"> <a href="<?php echo $link_para_cursos; ?>" style="color:#66A;">Voltar para a lista de cursos</a>
</table>
