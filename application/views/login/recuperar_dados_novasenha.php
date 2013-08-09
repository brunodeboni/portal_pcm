<br>
<form action="" method="post">
<table class="recoptable">
	<tr>
    	<td>Celular Cadastrado:</td>
        <td><?php echo $rec_username; ?></td>
    </tr>
    <tr>
    	<td>Nova Senha:</td>
        <td><input type="password" class="rectxt" id="input_novasenha" name="novasenha"></td>
    </tr>
    <tr>
    	<td>Nova Senha (novamente):</td>
        <td><input type="password" class="rectxt" id="input_novasenha2" name="novasenha2"></td>
    </tr>
    <tr>
    	<td colspan="2"><br><button class="btn-blue" type="submit" onclick="return novaSenhaChecarSenhas();">Alterar Senha</button></td>
    </tr>
</table>
</form>