<?php //var_dump($videos); ?>

<div class="pagina_titulo">
	<?php echo $playlist['nome']; ?>
</div>
<a href="../" class="btn-blue">Voltar para Playlists</a>
<br><br>

<div id="cpcm_videos">
	<?php foreach($videos as $video){ ?>
		<div class="video_container">
			<a href="<?php echo $video['url']; ?>" class="video_img_container" target="_blank">
				<img src="<?php echo $video['img']; ?>">
			</a>
			
			<a href="<?php echo $video['url']; ?>" class="video_desc" target="_blank">
				<?php echo $video['nome']; ?>
			</a>
		</div>
	<?php } ?>
</div>