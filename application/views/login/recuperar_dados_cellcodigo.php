<br>
<form action="" method="get">
<input type="hidden" name="celular" value="<?php echo $_GET["celular"]; ?>">
<input type="hidden" name="modo" value="celular">

<b>
Uma mensagem foi enviada para o seu celular.<br>
Digite abaixo o código que você irá receber<br><br><br>
</b>

<table class="recoptable">
	<tr>
    	<td>Celular:</td>
        <td><?php echo $_GET['celular']; ?></td>
    </tr>
    <tr>
    	<td>Código:</td>
        <td><input type="text" class="rectxt" id="input_codigo" name="token"></td>
    </tr>
    <tr>
    	<td colspan="2"><br><button class="btn-blue" type="submit">Confirmar Código</button></td>
    </tr>
</table>
</form>