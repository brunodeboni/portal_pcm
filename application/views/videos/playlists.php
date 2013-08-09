<div id="cpcm_videos">
	
	<!--<div class="video_container">
		<a href="#" class="video_img_container">
			<img src="">
		</a>
		
		<a href="#" class="video_desc">
			Curso de introdução ao PCM/SIGMA
		</a>
	</div>-->
	
	<?php foreach($playlists as $playlist){ ?>
		<?php $plink = URL::site('videos/playlists/'.$playlist['id']); ?>
		<div class="video_container">
			<a href="<?php echo $plink; ?>" class="video_img_container">
				<img src="<?php echo $playlist['img']; ?>">
			</a>
			
			<a href="<?php echo $plink; ?>" class="video_desc">
				<?php echo $playlist['nome']; ?>
			</a>
		</div>
	<?php } ?>
	
	
</div>