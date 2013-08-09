<div class="content_title">Remover Cadastro</div>

<div class="estagiario">
	<?php if (!isset($codigo)) {?>
		<span>Para remover seu cadastro, clique no botão abaixo. Você receberá um SMS em seu celular com um código de confirmação.</span><br><br>
		<?php if (isset($txterro)) {
			echo '<div class="erro">'.$txterro.'</div>';
	 	}
	 	
	 	if (isset($celular)) {?>
			<form action="<?php echo URL::site('estagios/remove_empresa'); ?>" method="post">
				<input name="num_celular" type="hidden" value="<?php echo $celular; ?>">
				<button type="submit" class="btn-blue">Gerar código</button>
			</form>
		<?php  } 
	}else { ?>
		<form action="<?php echo URL::site('estagios/remove_empresa'); ?>" method="post">
			<input type="hidden" name="celular" value="<?php echo $celular; ?>">
			<input type="hidden" name="cod_enviado" value="<?php echo $codigo; ?>">
			<span>Digite o código de confirmação recebido por SMS no celular cadastrado: </span><br><br>	
			<input type="text" name="cod_inserido">
			<button type="submit" class="btn-blue">Verificar</button>
		</form>
	<?php }?>
</div>
