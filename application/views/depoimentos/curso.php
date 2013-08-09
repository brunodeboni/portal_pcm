<div class="content_title">Depoimentos</div>

<?php 	
	if (count($query)) {
	
		foreach ($query as $depoimento) {
			
			if(! $depoimento["foto"]) $depoimento["foto"] = '/resources/img/perfil/pp.png';
			
			echo '
				<div class="lista_depoimentos">
					<a class="a_online" href="'.URL::site("perfil/usuarios/".$depoimento["id_user"]).'">
						<table>
							<tr>
								<td style="padding-right: 15px;"><img src="'.URL::site(utf8_encode($depoimento["foto"])).'" width="100" height="100">
			 					<td><b>Aluno:</b> '.$depoimento["nome"].'<br>
			 						<b>Curso:</b> '.$depoimento["curso"].'<br><br>'.
			 						$depoimento["depoimento"].'
						</table>
		 			</a>				
				</div>';
		}
	
	}else echo 'Ainda não há depoimentos sobre este curso.';
?>
