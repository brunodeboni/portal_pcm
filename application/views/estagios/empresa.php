<div class="content_title">Cadastre-se</div>

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
			case 'status':
				$mensagem = "Você já está cadastrado(a). Deseja <a href=\"".URL::site('estagios/reativar_empresa')."\">reativar</a> seu cadastro?";
				break;
			case 'unique':
				if ($campo == 'empresa') $mensagem = "Esta $campo já está cadastrada";
				else $mensagem = "Este $campo já está cadastrado";
				break;
		}
		echo '<div class="erro">'.$mensagem.'</div>';
	}; ?>
</div>

<div class="estagiario">
<p>Preencha os dados abaixo e cadastre a sua empresa para buscar candidatos à vaga de estágio PCM.</p>
<br>
<form id="formcadastro" action="" method="post">
	<label class="inp_txt_required">
		<span>Empresa</span>
		<input type="text" name="empresa" id="inp_empresa">
	</label>
	
	<label class="inp_txt_required">
		<span>CNPJ</span>
		<input type="text" name="cnpj" class="cnpj" id="cnpj" placeholder="xx.xxx.xxx/xxxx-xx" onclick="javascript:makeCnpj()">
	</label>
	
	<label class="inp_txt_required">
		<span>Cidade</span>
		<input type="text" name="cidade" id="inp_cidade">
	</label>
	
	<label class="inp_txt_required">
		<span>Estado</span>
		<select name="uf" id="inp_UF">
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
	
	<label class="inp_txt_required">
		<span>E-mail</span>
		<input type="text" name="email" id="inp_email" class="inp_txt_email">
	</label>
	
	<label class="inp_txt_required">
		<span>Telefone Comercial</span>
		<input type="text" name="telefone" id="inp_telefone_comercial" class="format-telefone" autocomplete="off" placeholder="(xx) xxxx-xxxx">
	</label>
	
	<label class="inp_txt_required">
		<span>Celular</span>
		<input type="text" name="celular" id="inp_celular" class="format-telefone" autocomplete="off" placeholder="(xx) xxxx-xxxx">
	</label>
	<br>
	<div style="text-align:right;width:530px;">
		<button type="submit" id="bt_inscrever" class="btn-blue">Cadastrar</button>
	</div>
</form>
</div>