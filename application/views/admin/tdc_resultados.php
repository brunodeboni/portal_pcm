<div class="pagina_titulo">
	TesteID: <?php echo $teste; ?> - <?php echo $email; ?>
</div>

<div id="testes">
<?php
//echo'<pre>';print_r($testes);die();

if($testes): foreach($testes as $teste){
		
	?>
		<div class="perguntas_container">
			<div class="testetitulo">
				<?php echo $teste['nome']; ?>
				<div class="testedesc">
					<a style="float:left;font-size:16px;" href="javascript:mostrarRespostas('reco_<?php echo $teste['id_teste']; ?>');">Mostrar Respostas</a>
					<small><small>ID: <?php echo $teste['id_teste']; ?></small></small> | Acertos: <?php echo "{$teste['count_acertos']}/{$teste['count_perguntas']}"; ?>
				</div>
			</div>
			
			<div class="respostas_container" id="reco_<?php echo $teste['id_teste']; ?>">
			<?php foreach($teste['linhas'] as $linha){ ?>
				<div class="resposta_container resposta_<?php echo $linha['correta']==1?'correta':'errada'; ?>">
					<div class="apergunta">
						<?php echo $linha['pergunta']; ?>
					</div>
					<div class="aresposta">
						<?php echo $linha['resposta']; ?>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	<?php
		
}; endif;
?>
</div>