<?php 

$publicar = explode("|", $publicar);
$pub_nascimento = 'false';
$pub_facebook = 'false';
$pub_linkedin = 'false';
$pub_telefone = 'false';
$pub_celular = 'false';
$pub_email = 'false';
foreach ($publicar as $pub) {
	if ($pub == 'nascimento') {$pub_nascimento = 'true';}
	if ($pub == 'facebook') {$pub_facebook = 'true';}
	if ($pub == 'linkedin') {$pub_linkedin = 'true';}
	if ($pub == 'telefone') {$pub_telefone = 'true';}
	if ($pub == 'celular') {$pub_celular = 'true';}
	if ($pub == 'email') {$pub_email = 'true';}
}

?>
<div class="content_title">Perfil</div>
<div class="perfil_container">
	<div id="pessoais2">
		<div class="div_foto">
			<img height="100" width="100" src="<?php echo URL::site(utf8_encode($foto)); ?>">
		</div>
		<div class="div_pessoais2">
			<span><b>Nome: </b></span>
			<span class="info"><?php echo $nome;?></span><br><br>
			<?php if ($pub_nascimento == 'true') { ?>
				<span><b>Data de Nascimento: </b></span>
				<span class="info"><?php echo $nascimento;?></span><br><br>
			<?php } ?>
			<span><b>Cidade: </b></span>
			<span class="info"><?php echo $cidade." - ".$uf;?></span><br><br>
		</div>
	</div>
	<div class="div_info">
		<span><b>Cargo: </b></span>
		<span class="info"><?php echo $cargo;?></span><br>
		<span><b>Empresa:</b></span>
		<span class="info"><?php echo $empresa;?></span><br>
		<?php if ($site_empresa != "Não publicado") {?>
			<span><b>Site da Empresa: </b></span>
			<span class="info"><?php echo $site_empresa;?></span><br>
		<?php }	
		if ($ja_trabalhou != "") {?>
			<span><b>Empresas em que já usou o SIGMA:</b></span><br>
			<span class="info"><?php echo $ja_trabalhou;?></span><br>
		<?php }
		if ($tempo_usuario != "") {?>
			<span><b>Usuário SIGMA <?php echo $tempo_usuario;?></b></span><br>
		<?php }?>
	</div>
	<?php if ($historico != "") {?>
		<div class="div_info">
			<span><b>Histórico Profissional</b></span><br>
			<span class="info"><?php echo $historico;?></span><br>
		</div>
	<?php }  ?>
	<div class="div_info">
		<span><b>Contato</b></span><br><br>
		<?php if ($pub_telefone == 'true') { ?>
			<span><b>Telefone: </b></span>
			<span class="info"><?php echo $telefone;?></span>
		<?php } 
		if ($pub_celular == 'true') { ?>
			<span <?php if ($pub_telefone == 'true') { ?>style="margin-left: 50px;"<?php }?>><b>Celular: </b></span>
			<span class="info"><?php echo $celular;?></span><br><br>
		<?php }
		if ($pub_telefone == 'true' && $pub_celular == 'false') {echo '<br><br>';}
		if ($pub_email == 'true') {?>
			<span><b>E-mail: </b></span>
			<span class="info"><?php echo $email;?></span><br><br>
		<?php } 
		 if ($pub_facebook == 'true') { 
		 	if ($facebook != "Não publicado") {?>
				<span><b>Facebook: </b></span>
				<span class="info"><?php echo $facebook;?></span><br><br>
		<?php }		
		} 
		if ($pub_linkedin == 'true') {
			if ($linkedin != "Não publicado") {?>
			<span><b>LinkedIn: </b></span>
			<span class="info"><?php echo $linkedin;?></span>
		<?php }
		} ?>
	</div>
</div>