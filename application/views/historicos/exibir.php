<div class="pagina_titulo">Históricos de Aulas</div>

<div class="historico">
<?php foreach($query as $res) {
	echo "<div class=\"title_result\">".$res['curso']." - ".$res['dia']." - ".$res['horario']." - ".$res['aula_num']."</div>
					<div class=\"show\">".$res['historico']."</div>";
}
?>
<br>
<a href="javascript:history.back()">Voltar à página anterior</a>
</div>
<?php if (isset($key)) { ?>
	<script>
	$(document).ready(function() {
							
		var searchTerm = "<?php echo $key; ?>";
						
		// highlight palavra-chave
		$('.show').highlight( searchTerm ); 	
							
	});
	</script>
<?php } ?>