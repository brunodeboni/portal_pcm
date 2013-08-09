<div class="content_title">Ranking Depoimentos</div>

<div class="depoimentos">
 
	<span>Clique nos depoimentos e arraste para mudar a ordem:</span><br><br>
	<form name="ordena" action="" method="post">

<?php if (count($query)) {
		echo '<ul id="sortable">';
		foreach ($query as $depoimento) {
			
			if(! $depoimento["foto"]) $depoimento["foto"] = '/resources/img/perfil/pp.png';
			
			echo '<li>
					<div class="lista_depoimentos">
						<table>
							<tr>
								<td style="padding-right: 15px;"><img src="'.URL::site(utf8_encode($depoimento["foto"])).'" width="100" height="100">
				 				<td><b>Aluno:</b> '.$depoimento["nome"].'<br>'.
				 					'<b>Curso:</b> '.$depoimento["curso"].'<br><br>
									<p class="depo">'.$depoimento["depoimento"].'</p>
						</table>
					</div>';
			
			echo '<input type="hidden" name="'.$depoimento["id"].'">';	
	 	} 
	 	echo '</ul> 
		<br>		 						
		<button type="submit" class="btn-blue">Reordenar</button>
		<a href="'.URL::site("depoimentos/pendentes").'" class="btn-blue">Cancelar</a>		 						
	</form>';

 } ?>
 </div>
