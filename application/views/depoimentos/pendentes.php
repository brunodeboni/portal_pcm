<div class="content_title">Administrar Depoimentos</div>

<div class="depoimentos">
 
	<span>Depoimentos aguardando aprovação:</span><br><br>
	<form name="pendentes" action="" method="post">
		<div>
			<span>Selecione os depoimentos e altere o status para: </span>
				<input type="submit" class="btn-blue" name="aprovado" value="Aprovado">
				<input type="submit" class="btn-blue" name="critica" value="Crítica">
				<input type="submit" class="btn-blue" name="rejeitado" value="Rejeitado">		
		</div>
		<br>
<?php if (count($query)) {
		echo '<table>';
		foreach ($query as $depoimento) {

			if(! $depoimento["foto"]) $depoimento["foto"] = '/resources/img/perfil/pp.png';			

			echo '<tr>
						<td><input type="checkbox" name="'.$depoimento["id"].'"></div>
						<td><div class="lista_depoimentos">
								<table>
									<tr>
										<td style="padding-right: 15px;"><img src="'.URL::site(utf8_encode($depoimento["foto"])).'" width="100" height="100">
				 						<td><b>Aluno:</b> '.$depoimento["nome"].'<br>'.
				 							'<b>Curso:</b> '.$depoimento["curso"].'<br><br>
											<p class="depo">'.$depoimento["depoimento"].'</p>
								</table>
							</div>';
	 	} 
	 	echo '</table>'; ?>
	 	
			<br>
	</form>

<?php } else echo 'Não há depoimentos pendentes.'; ?>
	
	<br>
	<a href="<?php echo URL::site('depoimentos/cadastraAdmin'); ?>" class="btn-blue">Cadastrar depoimento de aluno</a>
	<br><br>
	<a href="<?php echo URL::site('depoimentos/ordenarDepoimentos'); ?>" class="btn-blue">Ranking depoimentos</a>
	<br><br>
	<a href="<?php echo URL::site('depoimentos/cadastrar'); ?>" class="btn-blue">Ver depoimentos</a>  	
</div>

