<div class="content_title">Lista de Formados</div>

<p style="margin-left:10px;">Lista de alunos formados nos cursos CPCM:</p>

<?php
	foreach ($result as $curso => $c) {
		if (count($c)) {
?>
		<table class="pretty_table">
			<tr>
				<td colspan="2"><b><?php echo $c[0]['n_curso']; ?></b>
			<tr>
				<td><b>Nome</b>
				<td><b>Empresa</b>
<?php 

			foreach ($c as $key => $aluno) {
				echo "
					<tr>
						<td>".$c[$key]['nome']."
						<td>".$c[$key]['empresa']."
					";
			}
			echo "</table>";
		}
	}
?>
