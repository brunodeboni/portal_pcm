<p>Para recuperar seus dados de login, você deve inserir o número de celular usado em seu cadastro abaixo.</p>
<p>Após isso escolha a forma de recuperação de senha.</p>
<br><br><br>

<form style="text-align:center;" action="" method="get">
<?php if(isset($msg) && $msg!=""){ ?>
	<?php
    	if(!isset($msgerro) || !$msgerro)
			$css = 'background:#CFC;color:#090;font-weight:bold;font-size:14px;padding:10px;border:1px solid #090;width:500px;margin:auto;margin-bottom:10px;';
		else
			$css = 'background:#FCC;color:#900;font-weight:bold;font-size:14px;padding:10px;border:1px solid #900;width:500px;margin:auto;margin-bottom:10px;';
	?>
    
	<div style="<?php echo $css; ?>">
    	<?php echo $msg; ?>
    </div>
<?php } ?>
	Celular: <input type="text" id="input_recuperar_celular" name="celular" class="format-telefone" style="padding:5px;width:300px;font-weight:bold;">
    <br><br><br>
	<div style="text-align:left;margin:auto;width:270px;">
	<label><input type="radio" name="modo" value="email"> Enviar por e-mail</label><br><br>
	<label><input type="radio" name="modo" value="celular"> Enviar por SMS</label><br><br>
	</div>
	<br><br>
    <button class="btn-blue" type="submit" onclick="return validarFormularioRecuperardados()">Enviar dados de recuperação</button>
</form>