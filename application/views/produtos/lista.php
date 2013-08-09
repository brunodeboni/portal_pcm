<div id="produtos">

	<h1 class="bigtitle">
		Amplie seus conhecimentos adquirindo
		livros e manuais técnicos sobre PCM / SIGMA
	</h1>
	
	<?php
		foreach($produtos as $produto){
		?>
			<div class="produto">
				<img src="<?php echo $produto['imagem']; ?>">
				
				<div class="produto_desc">
					<div class="produto_desc_title"><?php echo $produto['nome']; ?></div>
					<a href="<?php echo $produto['link_descricao']; ?>" target="_blank">Clique aqui para ver o conteúdo</a>
					
					<div class="produto_preco">
						<small>R$</small> <?php echo $produto['preco']; ?>
					</div>
					
					<div style="margin-top:20px;">
					<a href="<?php echo $produto['link_comprar']; ?>" class="btn-red btn-comprar" target="_blank">COMPRAR</a>
					</div>
				</div>
			</div>
		<?php } /*
		}
	<div class="produto">
		<img src="https://redeindustrial.atlassian.net/secure/attachment/10059/Capa%20Fluxos.jpg">
		
		<div class="produto_desc">
			<div class="produto_desc_title">Manual Prático de PCM - Vol. I</div>
			<a href="#">Clique aqui para ver o conteúdo</a>
			
			<div class="produto_preco">
				<small>R$</small> 168,00
			</div>
			
			<div style="margin-top:20px;">
			<a href="#" class="btn-red btn-comprar">COMPRAR</a>
			</div>
		</div>
	</div>
	
	<div class="produto">
		<img src="https://redeindustrial.atlassian.net/secure/attachment/10059/Capa%20Fluxos.jpg">
		
		<div class="produto_desc">
			<div class="produto_desc_title">Manual Prático de PCM - Vol. I</div>
			<a href="#">Clique aqui para ver o conteúdo</a>
			
			<div class="produto_preco">
				<small>R$</small> 168,00
			</div>
			
			<div style="margin-top:20px;">
			<a href="#" class="btn-red btn-comprar">COMPRAR</a>
			</div>
		</div>
	</div>
	
	<div class="produto">
		<img src="https://redeindustrial.atlassian.net/secure/attachment/10059/Capa%20Fluxos.jpg">
		
		<div class="produto_desc">
			<div class="produto_desc_title">Manual Prático de PCM - Vol. I</div>
			<a href="#">Clique aqui para ver o conteúdo</a>
			
			<div class="produto_preco">
				<small>R$</small> 168,00
			</div>
			
			<div style="margin-top:20px;">
			<a href="#" class="btn-red btn-comprar">COMPRAR</a>
			</div>
		</div>
	</div>
	*/ ?>
	
</div>


<br><br>
<?php echo View::factory('social/disqus_comentarios'); ?>
