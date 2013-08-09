<div class="content_title">Remover Cadastro</div>

<?php 
if (isset ($txterro)) {
	echo '<div class="erro">'.$txterro.'</div>';
}
?>

<div class="estagiario">
<form action="" method="post">
	<label>
		<span>Selecione o tipo de cadastro a ser removido: </span>
		<select name="tipo" id="inp_tipo">
                <option value="" class="sp_selecione" selected>Selecione...</option>
                <option value="estagiario">Estagiário</option>
                <option value="empresa">Empresa</option>
            </select><br><br>
    </label>
    <label>
    <span>Informe o celular cadastrado:</span>
    	<input type="text" name="celular" id="inp_celular" class="format-telefone" autocomplete="off" placeholder="(xx) xxxx-xxxx">
    </label>
	<br><br>
	<button type="submit" class="btn-blue">Remover</button>
</form>
</div>