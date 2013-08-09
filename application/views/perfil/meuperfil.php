<div class="content_title">Meu Perfil</div>
<div class="perfil_container">
	<div id="pessoais">
		<div class="div_foto">
			<img height="100" width="100" src="<?php echo URL::site(utf8_encode($foto)); ?>">
			<a style="margin: 5px 0px 5px -5px; width:68px;" class="btn-blue" href="<?php echo URL::site('/perfil/editarfoto'); ?>">Alterar Foto</a><br>
			<a style="margin: 5px 0px 5px -5px; width:68px;" class="btn-blue" href="<?php echo URL::site('/perfil/editar'); ?>">Editar Perfil</a>
		</div>
		<div class="div_pessoais">
			<span><b>Nome: </b></span>
			<span class="info"><?php echo $nome;?></span><br><br>
			<span><b>Data de Nascimento: </b></span>
			<span class="info"><?php echo $nascimento;?></span><br><br>
			<span><b>Cidade: </b></span>
			<span class="info"><?php echo $cidade." - ".$uf;?></span><br><br>
		</div>
	</div>
	<div class="div_info">
		<span><b>Cargo: </b></span>
		<span class="info"><?php echo $cargo;?></span><br>
		<span><b>Empresa:</b></span>
		<span class="info"><?php echo $empresa;?></span><br>
		<span><b>Site da Empresa: </b></span>
		<span class="info"><?php echo $site_empresa;?></span><br>
		<?php if ($ja_trabalhou != "") {?>
			<span><b>Empresas em que já usou o SIGMA:</b></span><br>
			<span class="info"><?php echo $ja_trabalhou;?></span><br>
		<?php }
		if ($tempo_usuario != "") {?>
			<span><b>Usuário SIGMA <?php echo $tempo_usuario;?></b></span><br>
		<?php }?>
	</div>

	<div class="div_info">
		<span><b>Histórico Profissional</b></span><br>
		<span class="info"><?php echo $historico;?></span><br>
	</div>

	<div class="div_info">
		<span><b>Contato</b></span><br><br>
		<span><b>Telefone: </b></span>
		<span class="info"><?php echo $telefone;?></span>
		<span style="margin-left: 50px;"><b>Celular: </b></span>
		<span class="info"><?php echo $celular;?></span><br><br>
		<span><b>E-mail: </b></span>
		<span class="info"><?php echo $email;?></span><br><br>
		<span><b>Facebook: </b></span>
		<span class="info"><?php echo $facebook;?></span><br><br>
		<span><b>LinkedIn: </b></span>
		<span class="info"><?php echo $linkedin;?></span>
	</div>
	Ver  <a href="<?php echo URL::site('perfil/usuarios/'.$user); ?>">meu perfil</a> como outros usuários me vêem.
</div>
<br>




