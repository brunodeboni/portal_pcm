<div id="cpcm_sidebar">
	<div class="sidecontainer">
		<div class="sidetitle">Usuário</div>
		<div class="sidecontent" style="font-size:14px;">
			<?php if(!$VCurrentUser = Auth::instance()->get_user()){ ?>
				Você não está logado no sistema.<br><br>
				<ul class="mini-iconlist">
					<li> <img src="<?php echo URL::site("/resources/img/icon/pdf.png"); ?>"> <a href="<?php echo URL::site('resources/pdf/PortalCPCM-ManualdoAluno.pdf'); ?>" target="_blank"> Manual do aluno</a>
					<li> <img src="<?php echo URL::site("/resources/img/icon/pdf.png"); ?>"> <a href="<?php echo URL::site('resources/pdf/regulamento-cpcm.pdf'); ?>" target="_blank"> Regulamento CPCM</a>
					<li> <img src="<?php echo URL::site("/resources/img/icon/cadeado.png"); ?>"> <a href="<?php echo URL::site('auth/login'); ?>"> Efetuar Login</a>
					<li> <img src="<?php echo URL::site("/resources/img/icon/question2.png"); ?>"> <a href="<?php echo URL::site('auth/recuperardados'); ?>"> Recuperar Senha</a>
					<li> <img src="<?php echo URL::site("/resources/img/icon/perfil.png"); ?>"> <a href="<?php echo URL::site('auth/cadastro'); ?>"> Cadastre-se</a>
				</ul>
			<?php }else{ ?>
				<div style="text-align:center;font-size:12px;"><?php echo $VCurrentUser->email; ?></div>
				<br>
				<ul class="mini-iconlist">
					<?php if(Auth::instance()->logged_in('admin')){ ?>
					<li> <img src=""> <a href="<?php echo URL::site('admin/cursos'); ?>">Painel Administrativo</a>
					<?php } ?>
					<li> <img src="<?php echo URL::site("/resources/img/icon/pdf.png"); ?>"> <a href="<?php echo URL::site('resources/pdf/PortalCPCM-ManualdoAluno.pdf'); ?>" target="_blank"> Manual do aluno</a>
					<li> <img src="<?php echo URL::site("/resources/img/icon/pdf.png"); ?>"> <a href="<?php echo URL::site('resources/pdf/regulamento-cpcm.pdf'); ?>" target="_blank"> Regulamento CPCM</a>
					<li> <img src="<?php echo URL::site("/resources/img/icon/test.png"); ?>"> <a href="<?php echo URL::site('cursos/meuscursos'); ?>">Meus Cursos</a>
					<li> <img src="<?php echo URL::site("/resources/img/icon/test.png"); ?>"> <a href="<?php echo URL::site('perfil/meuperfil'); ?>">Meu Perfil</a>
					<li> <img src="<?php echo URL::site("/resources/img/icon/x3.png"); ?>" class="x-mini"> <a href="<?php echo URL::site("auth/logout"); ?>">Efetuar Logoff</a>
				</ul>
			<?php } ?>
		</div>
	</div>
	
	<div class="sidecontainer">
		<div class="sidetitle">Portais Rede Industrial</div>
		<div class="sidebar-links sidecontent">
			<ul class="sidebar-links-ul">
				<li><a class="sidebar-link" href="http://www.centralsigma.com.br/" target="_blank">Central SIGMA</a></li>
				<li><a class="sidebar-link" href="http://www.paghoje.com.br" target="_blank">Paghoje</a></li>
				<li><a class="sidebar-link" href="http://www.tecchat.com.br/" target="_blank">TecChat</a></li>
				<li><a class="sidebar-link" href="http://www.hdutil.com.br/" target="_blank">HD &Uacute;til</a></li>
				<li><a class="sidebar-link" href="http://www.testedeconhecimento.com.br/" target="_blank">Teste de Conhecimento</a></li>
				<li><a class="sidebar-link" href="http://www.fllecha.com.br/" target="_blank">Fllecha</a></li>
				<li><a class="sidebar-link" href="http://pedidosereservas.com.br/" target="_blank">Central de Pedidos e Reservas</a></li>
				<li><a class="sidebar-link" href="http://br.groups.yahoo.com/group/redeindustrial/?yguid=324709962" target="_blank">F&oacute;rum Rede Industrial</a></li>
				<li><a class="sidebar-link" href="http://br.groups.yahoo.com/group/usuarios_sigma/" target="_blank">F&oacute;rum de Usu&aacute;rios SIGMA</a></li>
				<li><a class="sidebar-link" href="https://www.facebook.com/redeindustrial" target="_blank">Perfil Facebook</a></li>
				<li><a class="sidebar-link" href="http://br.linkedin.com/pub/rede-industrial/59/120/77" target="_blank">Perfil LinkedIn</a></li>
			</ul>
		</div>
	</div>
	
	<div style="margin-left: 15px;"><a class="btn-green" href="http://www.centralsigma.com.br/" target="_blank">Central SIGMA</a></div><br>
    
    <div class="sidecontainer">
		<div class="sidetitle">Inscritos</div>
		<div class="sidecontent">
			<iframe class="iframe-contador" style="border:none;width:100%;height:50px;" src="<?php echo URL::site("/iframes/contador"); ?>"></iframe>
			<span><a style="font-size: 14px;" href="<?php echo URL::site('sobre/formados')?>">Clique aqui e veja a listagem dos alunos formados pelo CPCM!</a></span>
		</div>
	</div>
	
	<div class="sidecontainer">
		<div class="sidetitle">Online Agora</div>
		<div class="sidecontent">
			<iframe class="iframe-contador" style="border:none;width:100%;height:70px;" src="<?php echo URL::site("/iframes/onlineagora"); ?>"></iframe>
		</div>
	</div>
	
	<div class="sidecontainer">
		<div class="sidetitle">Redes Sociais</div>
		<div class="sidecontent" style="text-align:center;">
			<a name="fb_share" type="button" share_url="http://centralsigma.com.br/cpcm/"></a> 
			<script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
			<br><br>
			<div style="overflow: visible" class="fb-like" data-href="http://www.centralsigma.com.br/cpcm/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
			<br><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.centralsigma.com.br/cpcm/" data-text="Confira os cursos CPCM" data-lang="pt" data-hashtags="cpcm">Tweetar</a>
		</div>
	</div>
	
	<div class="sidecontainer">
		<div class="sidetitle">Empresas</div>
		<div class="sidebar-links sidecontent" style="text-align:center;">
			<b>Conheça as empresas onde os alunos do CPCM atuam:</b>
			<div style="display:block;height:250px;overflow:auto;text-align:left;margin-top:10px;">
				<ul class="sidebar-links-ul">
					<?php 
					$sql = "select empresa from cw_lista_empresas where ordem > 0 group by empresa order by ordem";
					$query = DB::query(Database::SELECT, $sql)->execute();
					$result = $query->as_array('empresa', 'empresa');
					
					foreach ($result as $empresa) {
						echo '<li><span class="sidebar-link">'.$empresa.'</span>';
					}
					?>
				</ul>
			</div>
			<?php if (Auth::instance()->logged_in('admin')) {?>
				<br>
				<a href="<?php echo URL::site('admin/empresas');?>" class="btn-blue">Editar</a>
			<?php }?>
		</div>
	</div>
</div>