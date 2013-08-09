<div id="cpcm_sidebar">
	<div class="sidecontainer">
		<div class="sidetitle">Usuário</div>
		<div class="sidecontent" style="font-size:14px;">
			<?php if(!$VCurrentUser = Auth::instance()->get_user()){ ?>
				Você não está logado no sistema.<br><br>
				<ul class="mini-iconlist">
					<li> <img src="<?php echo URL::site("/resources/img/icon/pdf.png"); ?>"> <a href="<?php echo URL::site('resources/pdf/PortalCPCM-ManualdoAluno.pdf'); ?>" target="_blank"> Manual do aluno</a>
					<li> <img src="<?php echo URL::site("/resources/img/icon/cadeado.png"); ?>"> <a href="<?php echo URL::site('auth/login'); ?>">Efetuar Login</a>
					<li> <img src="<?php echo URL::site("/resources/img/icon/perfil.png"); ?>"> <a href="<?php echo URL::site('auth/cadastro'); ?>">Cadastre-se</a>
				</ul>
			<?php }else{ ?>
				<div style="text-align:center;font-size:12px;"><?php echo $VCurrentUser->email; ?></div>
				<br>
				<ul class="mini-iconlist">
					<li> <img src="<?php echo URL::site("/resources/img/icon/pdf.png"); ?>"> <a href="<?php echo URL::site('resources/pdf/PortalCPCM-ManualdoAluno.pdf'); ?>" target="_blank"> Manual do aluno</a>
					<li> <img src="<?php echo URL::site("/resources/img/icon/test.png"); ?>"> <a href="<?php echo URL::site('cursos/meuscursos'); ?>">Meus Cursos</a>
					<li> <img src="<?php echo URL::site("/resources/img/icon/x3.png"); ?>" class="x-mini"> <a href="<?php echo URL::site("auth/logout"); ?>">Efetuar Logoff</a>
				</ul>
			<?php } ?>
		</div>
	</div>
</div>

<div id="cpcm_content">
	<?php
		echo View::factory('cursos/curso_titulo',array('curso'=>$curso,'turma'=>$turma,'current'=>$current));
		/*
		<div class="pagina_titulo"><?php echo $curso["nome"]; ?></div>
		*/
	?>
	
	<table class="pretty_table">
		<tr>
			<td class="pt_title"> Sua Inscrição
			<td> Confirmada
		<tr>
			<td class="pt_title"> Período do Curso
			<td> <?php echo $turma["periodo"]; ?>
		<tr>
			<td class="pt_title"> Horário
			<td> <?php echo $turma["horarios"]; ?>
	</table>
	
	<br><br>
</div>

<br class="clearfix">


<?php echo $curso_content; ?>
