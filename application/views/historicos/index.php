<div class="pagina_titulo">Pesquisar Históricos de Aulas</div>

<div class="historico">
	<form action="" method="post" name="form_historicos" id="form_historicos">
		<span>Pesquise nosso histórico de aulas por:</span><br><br>
		<input type="radio" class="tipo_pesquisa" name="tipo_pesquisa" value="chave"> Palavra-Chave:
			<input type="text" name="chave" id="inp_chave" class="child" disabled>
		<br><br>
		<input type="radio" class="tipo_pesquisa" name="tipo_pesquisa" value="date"> Data:
			<input type="text" name="date" id="inp_date" class="child" placeholder="dd/mm/aaaa" maxlength="10" onkeyup="javascript:makeDate()" disabled>
		<br><br>
		<input type="radio" class="tipo_pesquisa" name="tipo_pesquisa" value="curso"> Curso:
			<select name="curso" id="inp_curso" class="child" disabled>
				<option value="">Selecione...</option>
				<?php foreach ($lista as $res) {
					echo '<option value="'.$res["id_curso"].'">'.$res["curso"].'</option>';
				} ?>
			</select>
		<br><br>
		<a class="btn-blue" href="javascript: submitForm()">Pesquisar</a>
	</form>


<script>

function makeDate(){
	obj = document.getElementById('inp_date');
	vl = obj.value;
	l = vl.toString().length;

	switch(l){
		case 2:
			obj.value = vl + "/";
			break;
		case 5:
			obj.value = vl + "/";
			break;
	}
	
}
				
$('.tipo_pesquisa').change(function () {
	//pega valor do input selecionado
	var value = this.value;

	//se id da input "filha" for igual: enable input
	$('#inp_'+value).removeAttr('disabled');
	
});

function submitForm() {
	if (! $('.tipo_pesquisa').is(":checked")) 
		alert('Por favor, selecione um dos itens de pesquisa.');
	else {
		var value = $(":checked").val(); 
			if (! $('#inp_'+value).val() )
				alert('Por favor, preencha o campo de pesquisa.');
			else
				$('#form_historicos').submit();	
	}
}



</script>
<br><br>

<?php if (isset($query)) { 
	if (count($query)>0) {
		$kkey = retirarAcentos($key);
		
		foreach ($query as $res) {
			
			echo "<div class=\"title_result\">".$res['curso']." - ".$res['dia']." - ".$res['horario']." - ".$res['aula_num']."</div>
					<div class=\"show\">";
			
			//se não é numérico (não é o id do curso)
			if (! is_numeric($key)) {
				//se é data
				if (strpos($key, '/')) {
	
					$linhas = explode("\n", $res['historico']);
					
					echo '<div class="linhas"> ';
					for ($i=0; $i<=3; $i++) {
						echo $linhas[$i];
					}
					echo ' ...</div>';
					echo '<br><a class="exibir" href="'.URL::site("historicos/exibir/".$res["id"]).'">Mostrar todo histórico</a></div>';
	
				//se é palavra-chave	
				}else {
					$linhas = explode("\n", $res['historico']);
						
					foreach ($linhas as $linha) {
				
						//$palavras = mb_str_split( $linha );
						if ($palavras = strpos($linha, $key)) {
							
					//	foreach ($palavras as $palavra) {
							$palavra = retirarAcentos($palavras);
							$palavra = trim($palavras);
								
						//	if (strcasecmp($palavra, $kkey) == 0) {
									
								echo '<div class="linhas">... '.$linha.' ...</div>';
						//	}
						}
					}
					echo '<form action="'.URL::site("historicos/exibir/".$res["id"]).'" method="post" id="form_exibir_'.$res["id"].'"><input type="hidden" name="key" value="'.$key.'">';
					echo '<a href="javascript: mostrarHistorico('.$res["id"].')">Mostrar todo histórico</a></form></div>';
					//echo '<br><a class="exibir" href="'.URL::site("historicos/exibir/".$res["id"]."/".$key).'">Mostrar todo histórico</a></form></div>';
					?>
					<script>
					$(document).ready(function() {
						
						var searchTerm = "<?php echo $key; ?>";
					
						// highlight palavra-chave
						$('.show').highlight( searchTerm ); 	
						
					});
					
					function mostrarHistorico(id) {
						$('#form_exibir_'+id).submit();
					}
					</script>
					<?php 
				}
			//se é id do curso	
			}else  {
				$linhas = explode("\n", $res['historico']);
	
				echo '<div class="linhas"> ';
				for ($i=0; $i<=3; $i++) {
					echo $linhas[$i];
				}
				echo ' ...</div>';
				echo '<br><a class="exibir" href="'.URL::site("historicos/exibir/".$res["id"]).'">Mostrar todo histórico</a></div>';
			}		
					
		}

	}else echo 'Sua busca não retornou resultados.';
}

function retirarAcentos($frase) {
	$frase = str_replace(array("à","á","â","ã","ä","è","é","ê","ë","ì","í","î","ï","ò","ó","ô","õ","ö","ù","ú","û","ü","À","Á","Â","Ã","Ä","È","É","Ê","Ë","Ì","Í","Î","Ò","Ó","Ô","Õ","Ö","Ù","Ú","Û","Ü","ç","Ç","ñ","Ñ"),
			array("a","a","a","a","a","e","e","e","e","i","i","i","i","o","o","o","o","o","u","u","u","u","A","A","A","A","A","E","E","E","E","I","I","I","O","O","O","O","O","U","U","U","U","c","C","n","N"), $frase);

	return $frase;
}

function mb_str_split( $string ) {
  $split = preg_split('/\b([\(\).,\-\',:!\?;"\{\}\[\]„“»«‘\r\n]*)/u', $string, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
  return array_filter($split, 'filter');
}

function filter($val) {
  if (trim($val) != '') {
    return trim($val);
  }
  return false;
}

?>


</div>