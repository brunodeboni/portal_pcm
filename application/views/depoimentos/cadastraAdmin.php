<div class="content_title">Cadastrar Depoimentos de Alunos</div>

<?php if (isset ($error)) {
		echo '<div class="erro">'.$error.'</div>';
 	} 
?>

<div class="depoimentos">
	<form name="cadastre_admin" action="" method="post">
		<span>Selecione abaixo o aluno no qual deseja cadastrar um depoimento:</span><br><br>
			<div>
				<span>Curso: </span>
				<select name="curso" onChange="buscaTurmas(this.value)">
					<option value="">Selecione...</option>
					<?php foreach ($cursos as $curso) {
							echo '<option value="'.$curso["id"].'">'.$curso["nome"].'</option>';
						}?>
				</select>
			</div>
			<br>
			<div id="div_turma">
				<span>Turma: </span>
				<select name="turma" id="turmas" onChange="buscaInscritos(this.value)" disabled>
					<option value="">Selecione...</option>
				</select>
			</div>
			<br>
			<div id="div_insc">
				<span>Inscritos: </span>
				<select name="inscrito" id="inscritos" disabled>
					<option value="">Selecione...</option>
				</select>
			</div>
			<br>
			<span>Escreva o depoimento:</span><br>
			<textarea id="depoimento" name="depoimento" cols="70" rows="7"></textarea><br><br>
			<a class="btn-blue" href="javascript: checkDepoimentoAdmin()">Enviar</a>
	</form>
</div>

<script>

var url_turma = "<?php echo URL::site('depoimentos/buscarTurmas'); ?>";
var url_inscritos = "<?php echo URL::site('depoimentos/buscarInscritos'); ?>";


</script>
