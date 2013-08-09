<div class="content_title">Efetuar Login</div>

<form id="loginform" name="loginform" method="post" action="">
	<div class="erromsgs">
		<?php if(isset($errors)) foreach($errors as $error){
			echo '<div class="erro">'.$error.'</div>';
		}; ?>
	</div>
	
	<label><span>Celular:</span><input type="text" id="cel" name="login_username" class="telefone" placeholder="(xx) xxxx-xxxx" autocomplete="off"></label>
	<label><span>Senha:</span><input type="password" name="login_password" autocomplete="off"></label>
	<a href="<?php echo URL::site('auth/recuperardados'); ?>" style="float:left;margin-top:8px;"> Recuperar Senha</a>
	<div style="float:right;">
		  
		<a href="javascript: checarPerfil()" class="btn-blue">Entrar</a>
		<!--
		<button type="submit" class="btn-blue">Entrar</button>
		-->
	</div>
	<br class="clearfix">
	<br>
	<a href="<?php echo URL::site('auth/cadastro'); ?>">Cadastre-se</a>
</form>
<br>



<script type="text/javascript">
		
(function($){
	$('.telefone').telefone();
})(jQuery);



function executar(data)  {  
	//se não cadastrou o perfil ainda
	if (data == "false") { 
		var answer = confirm("Você ainda não cadastrou seu Perfil! Clique em OK para Cadastrar!");

		if (answer){
			document.forms['loginform'].action = "<?php echo URL::site('auth/login/?next=perfil/meuperfil'); ?>";
			document.forms['loginform'].submit();
		}
		else{
			document.forms['loginform'].submit();
		} 
	//se já cadastrou	 
	} else  
	   document.forms['loginform'].submit();  
}

function checarPerfil() {
	//Verifica se usuário já cadastrou perfil
	var cel = document.getElementById('cel').value;
	
	$.post("<?php echo URL::site('auth/checarPerfil'); ?>", {cel: cel}, function(data) {
		executar(data);

	});
}


</script>