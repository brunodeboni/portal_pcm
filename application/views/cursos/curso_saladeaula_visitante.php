<div style="font-size:32px;color:#369;text-align:center;">Atividades do curso - <?php echo $curso['nome']; ?></div>
<div id="indice_recursos">
	<ol>
		<?php foreach($recursos as $recurso){ if($recurso['publicado']==0) continue; ?>
			<li> <a href="#recurso_<?php echo $recurso["id_recurso"] ?>"><?php echo $recurso["titulo"] ?></a>
		<?php } ?>
	</ol>
</div>

<ul id="curso_recursos">
	<?php foreach($recursos as $recurso){ if($recurso['publicado']==0) continue; ?>
	<li id="recurso_<?php echo $recurso["id_recurso"] ?>">
		<div class="recurso_titulo" id="<?php echo 'rec'.$recurso['id_recurso']; ?>"><?php echo $recurso["titulo"]; ?></div>
		<div class="recurso_left">
			<img src="<?php echo URL::site("resources/img/recursos/$recurso[id_tipo].png"); ?>" class="recurso_icon">
		</div>
		<div class="recurso_right">
			<?php echo str_replace("\n","<br>",$recurso["texto_descricao"]);
			if($recurso['id_tipo']==9):
				echo '<div style="font-weight:bold;margin:15px;text-align:center;">Os uploads estão desabilitados no modo visitante</div>';
			
			elseif($recurso['id_tipo']==7):
				echo '<div style="font-weight:bold;margin:15px;text-align:center;">Não é possível fazer a prova no modo visitante</div>';
			
			elseif($recurso['link']):
				/*echo '
				<br><br>
				<a href="'.$recurso['link'].'" target="_blank" class="btn-blue">
					Acessar Conteúdo
				</a>';*/
				
				echo '<br><br>'.parseLinks($recurso['link']);
			endif;
			?>
		</div>
		<br class="clearfix">
	<?php } ?>
</ul>

<br><br>
