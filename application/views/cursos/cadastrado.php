	<div style="margin:auto;margin-top:40px;width:300px;text-align:center;border:3px solid #EEF;">
	<?php if($vagas){ ?>
		<!-- Há vagas disponíveis -->
		<?php
		if(!$ja_existe){
		// O usuário ainda não se registrou neste curso
			if($sucesso){ ?>
				<div style="font-size:28px;color:#69A;background:#EEF;padding:10px;">Inscrito com sucesso</div>
				<div style="font-size:20px;color:#999;background:#FFF;">Obrigado por se inscrever em nossos cursos, entraremos em contato por SMS e/ou e-mail.</div>
			<?php }else{ ?>
				<div style="font-size:28px;color:#900;background:#EEF;padding:10px;font-weight:bold;">Erro no cadastro</div>
				<div style="font-size:18px;color:#A66;background:#FFF;">
					Ocorreu um erro inesperado ao tentar efetuar o seu cadastro no curso.<br><br>
					Tente novamente em alguns minutos ou entre em contato pelo e-mail:<br>
					<a href="mailto:pedro@redeindustrial.com.br" style="color:#89B">pedro@redeindustrial.com.br</a>
				</div>
		<?php
			}
		}else{
		// O usuário já se registrou nesse curso
		?>
			<div style="font-size:28px;color:#900;background:#EEF;padding:10px;font-weight:bold;">Erro no cadastro</div>
			<div style="font-size:18px;color:#A66;background:#FFF;">
				Você já se registrou com este número de celular neste curso.<br><br>
				Caso queira mudar de turma, entre em contato solicitando a mudança de turma através do e-mail<br>
				<a href="mailto:pedro@redeindustrial.com.br" style="color:#89B">pedro@redeindustrial.com.br</a>
			</div>
		<?php } ?>
	<?php }else{ ?>
		<!-- Sem vagas disponíveis -->
		<div style="font-size:28px;color:#900;background:#EEF;padding:10px;font-weight:bold;">CURSO SEM VAGAS</div>
		<div style="font-size:18px;color:#A66;background:#FFF;">
			Não há mais vagas disponíveis para esta turma.<br><br>
			Se você está vendo esta tela, provavelmente alguém se cadastrou momentos atrás e preencheu a última vaga,
			pedimos desculpas pelo incoveniente e gostaríamos de convidá-lo(a) a se inscrever em outra turma ou curso.<br><br>
			Para mais informações, você pode entrar em contato através do e-mail<br>
			<a href="mailto:pedro@redeindustrial.com.br" style="color:#89B">pedro@redeindustrial.com.br</a>
		</div>
	<?php } ?>
		<br>
		<a href="<?php echo URL::site("cursos/lista"); ?>" style="font-size:20px;color:#69B;display:block;background:#EEF;padding:10px;">Voltar para a lista de cursos</a>
	</div>
