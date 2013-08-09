<?php

	if(!isset($request)){
		$request = array(
			"nome" => "",
			"empresa" => "",
			"UF" => "",
			"cargo" => "",
			"email" => "",
			"telefone" => "",
			"como_conheceu" => "",
			"celular" => "",
		);
	}

?><div class="content_title">Cadastro</div>
<span style="font-size:30px; color: #28166F; margin-left:150px;"><b><i>Estude. Não custa nada!</i></b></span><br><br>
<div id="erromsgs">
	<?php if(isset($errors)) foreach($errors as $campo => $erro){
		$mensagem = "Erro no campo $campo - $erro";
		switch($erro){
			case 'not_empty':
				$mensagem = "O campo $campo não pode ficar em branco";
				break;
			case 'email':
				$mensagem = "O email informado no campo $campo é inválido";
				break;
			case 'unique':
				$mensagem = "Este $campo já está cadastrado";
				break;
		}
		echo '<div class="erro">'.$mensagem.'</div>';
	}; ?>
</div>


<form id="formcadastro" action="" method="post">
	<label class="inp_txt_required">
		<span>Nome Completo</span>
		<input type="text" name="nome" id="inp_nome" value="<?php echo $request["nome"]; ?>">
	</label>
	
	<label class="inp_txt_required">
		<span>Empresa</span>
		<input type="text" name="empresa" id="inp_empresa" value="<?php echo $request["empresa"]; ?>">
	</label>
	
	<label>
		<span>Estado</span>
		<select name="UF" id="inp_UF">
                <option value="" class="sp_selecione" selected>Selecione...</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>
	</label>
	
	
	<label>
		<span>Cargo</span>
		<input type="text" name="cargo" id="inp_cargo" value="<?php echo $request["cargo"]; ?>">
	</label>
	
	<label class="inp_txt_required">
		<span>E-mail</span>
		<input type="text" name="email" id="inp_email" class="inp_txt_email" value="<?php echo $request["email"]; ?>">
	</label>
	
	<label class="inp_txt_required">
		<span>Telefone Comercial</span>
		<input type="text" name="telefone" id="inp_telefone_fixo" class="inp_txt_telefone" autocomplete="off" placeholder="(xx) xxxx-xxxx" value="<?php echo $request["telefone"]; ?>">
	</label>
	
	<label class="inp_txt_required">
		<span>Como soube deste site?</span>
		<select name="como_conheceu" id="inp_como_conheceu">
			<option value="google">Google</option>
			<option value="facebook">Facebook</option>
			<option value="forum_sigma">F&oacute;rum Usu&aacute;rios SIGMA</option>
			<option value="forum_rede_industrial">F&oacute;rum Rede Industrial</option>
			<option value="amigos">Amigos</option>
			<option value="email">SENAI</option>
			<option value="outro">Outro...</option>
		</select>
	</label>
	
	<br>
	
	<label class="inp_txt_required">
		<span>Telefone Celular</span>
		<input type="text" name="celular" id="inp_telefone_cel" class="inp_txt_telefone" autocomplete="off" placeholder="(xx) xxxx-xxxx" value="<?php echo $request["celular"]; ?>">
	</label>
	
	<label class="inp_txt_required">
		<span>Senha</span>
		<input type="password" name="senha" id="inp_senha1" autocomplete="off">
	</label>
	
	<label class="inp_txt_required">
		<span>Confirmação de Senha</span>
		<input type="password" name="senha2" id="inp_senha2" autocomplete="off">
	</label>
	
	<div style="margin:30px 0;text-align:center;font-size:12px;color:#666;">
		Ao se cadastrar você afirma estar de acordo com o
		<a href="http://localhost/ri/repositorios/centralsigma/trunk/cpcm/resources/pdf/regulamento-cpcm.pdf" target="_blank">Regulamento do CPCM</a>.
	</div>
	
	<div style="text-align:right;width:530px;">
		<button type="submit" id="bt_inscrever" class="btn-blue">Cadastrar</button>
	</div>
</form>