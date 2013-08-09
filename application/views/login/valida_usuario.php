<div class="content_title">Validar Cadastro</div>

<div>
	<?php if (!isset($codigo)) {?>
		<span>Para validar seu cadastro, clique no botão abaixo. Você receberá um SMS no celular cadastrado com um código de confirmação.</span><br><br>
		<?php if (isset($txterro)) {
			echo '<div class="erro">'.$txterro.'</div>';
	 	}
	 	
	 	if (isset($celular)) {?>
			<form action="<?php echo URL::site('auth/cadastro'); ?>" method="post">
				<input name="num_celular" type="hidden" value="<?php echo $celular; ?>">
				<button type="submit" class="btn-blue">Gerar código</button>
			</form>
		<?php  } 
	}else { ?>
		<form action="<?php echo URL::site('auth/verifica_cod'); ?>" method="post">
			<input type="hidden" name="celular" value="<?php echo $celular; ?>">
			<input type="hidden" name="cod_enviado" value="<?php echo $codigo; ?>">
			<span>Digite o código de confirmação recebido por SMS no celular cadastrado: </span><br><br>	
			<input type="text" name="cod_inserido">
			<button type="submit" class="btn-blue">Verificar</button>
		</form>
	<?php }?>
</div>
