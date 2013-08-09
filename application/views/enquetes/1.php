<?php 
$sql = "select pergunta, opcao1, opcao2, opcao3, opcao4 from cw_enquetes where id = :id";
$query = DB::query(Database::SELECT, $sql)->param(':id', 1)->execute();
 
	foreach ($query as $enq) { ?>
<div>
	<span><b>Enquete:</b> <?php echo $enq["pergunta"]; ?></span>
	<br><br>
	<input type="radio" name="opcao" class="opcao" value="op1">&nbsp;1. <?php echo $enq["opcao1"]; ?><br>
	<input type="radio" name="opcao" class="opcao" value="op2">&nbsp;2. <?php echo $enq["opcao2"]; ?><br>
	<input type="radio" name="opcao" class="opcao" value="op3">&nbsp;3. <?php echo $enq["opcao3"]; ?><br>
	<input type="radio" name="opcao" class="opcao" value="op4">&nbsp;4. <?php echo $enq["opcao4"]; ?><br>
 	<br>
 	<div id="parcial"></div>
 	
	<br>
	<div id="loading" style="display: none"><img src="<?php echo URL::site('resources/img/icon/loader.gif'); ?>"></div>
	<a class="btn-blue" href="javascript: resultadoParcial()">Ver resultado parcial</a>
	<a class="btn-blue" href="javascript: votar()">Votar</a>
</div>
<?php }  ?>

<script>

function resultadoParcial() {
	var url_r = '<?php echo URL::site('sobre/conferirEnq'); ?>';

	$("#loading").show();
	
	$.post(url_r, function(data) {
		$("#loading").hide();
		var parcial = data.split('|');
		var soma = (parcial[0]*1)+(parcial[1]*1)+(parcial[2]*1)+(parcial[3]*1);
		
		var barra = '<div style="background-color: green; width:'+((parcial[0]*100)/soma)/2+2+'px;">&nbsp;</div><span style="color: grey;"><b>Opção 1 </b>'+Math.round((parcial[0]*100)/soma)+'% '+parcial[0]+' voto(s)</span>';
		barra += '<div style="background-color: green; width:'+((parcial[1]*100)/soma)/2+2+'px;">&nbsp;</div><span style="color: grey;"><b>Opção 2 </b>'+Math.round((parcial[1]*100)/soma)+'% '+parcial[1]+' voto(s)</span>';
		barra += '<div style="background-color: green; width:'+((parcial[2]*100)/soma)/2+2+'px;">&nbsp;</div><span style="color: grey;"><b>Opção 3 </b>'+Math.round((parcial[2]*100)/soma)+'% '+parcial[2]+' voto(s)</span>';
		barra += '<div style="background-color: green; width:'+((parcial[3]*100)/soma)/2+2+'px;">&nbsp;</div><span style="color: grey;"><b>Opção 4 </b>'+Math.round((parcial[3]*100)/soma)+'% '+parcial[3]+' voto(s)</span>';
		$('#parcial').html(barra);
		
	});
	
}

function votar() {
	if (! $('input[name=opcao]:checked').val()) {
		alert('Por favor, selecione uma das opções para votar.')
	} else {
		var resposta = $('input[name=opcao]:checked').val();

		var url = '<?php echo URL::site('sobre/enq'); ?>';
				
		$.post(url, {resposta: resposta}, function(data) {
			alert('Obrigado pelo seu voto.');
		});
	}
}

</script>