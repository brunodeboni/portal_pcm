<div class="content_title">Editar Perfil</div>
<div class="perfil_container">
	<form id="form_planejadores" action="<?php echo URL::site("perfil/editaperfil"); ?>" method="post">
		<div class="labels">
			<span><b>Nome</b></span>
			<input type="text" id="inp_nome" size="80" name="nome" value="<?php echo $nome; ?>"><br>
		</div>
		<div class="labels">
			<span><b>Data de Nascimento</b></span>
			<input type="text" id="inp_nascimento" name="nascimento" placeholder="dd/mm/aaaa" maxlength="10" onkeyup="makeDate(this)" onkeydown="makeDate(this)" value ="<?php echo $nascimento; ?>"><br>
		</div>
		<div class="labels">
			<span><b>Endereço</b></span>
			<input type="text" size="75" id="inp_endereco" name="endereco" value ="<?php echo $endereco; ?>"><br>
		</div>
		<div class="labels" style="float: left; margin-right: 130px;">
			<span><b>Cidade</b></span>
			<input type="text" id="inp_cidade" name="cidade" value ="<?php echo $cidade; ?>"><br>
		</div>
		<div class="labels">
			<span><b>Estado</b></span>
			<select id="inp_uf" name="uf">
					<option value="">Selecione...</option>
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
				<br>
		</div>
		<div class="labels" style="float: left; margin-right: 117px;">
			<span><b>Telefone</b></span>
			<input type="text" class="telefone" onkeyup="tel(this)" onkeydown="tel(this)" maxlength="14" name="telefone" value="<?php echo $telefone; ?>"><br>
		</div>
		<div class="labels">
			<span><b>Celular</b></span>
			<input type="text" id="inp_celular" class="telefone" onkeyup="tel(this)" onkeydown="tel(this)" maxlength="14" name="celular" value="<?php echo $celular; ?>" disabled><br>
		</div>
		<div class="labels">
			<span><b>E-mail</b></span>
			<input type="text" id="inp_email" name="email" value="<?php echo $email; ?>"><br>
		</div>
		<div class="labels" style="float: left; margin-right: 95px;">
			<span><b>Facebook</b></span>
			<input type="text" id="inp_facebook" name="facebook" value ="<?php echo $facebook; ?>"><br>
		</div>
		<div class="labels">
			<span><b>LinkedIn</b></span>
			<input type="text" id="inp_linkedin" name="linkedin" value ="<?php echo $linkedin; ?>"><br>
		</div>
		<br>
		<div class="labels">
			<span><b>Cargo</b></span>
			<input type="text" id="inp_cargo" name="cargo" value="<?php echo $cargo; ?>"><br>
		</div>
		<div class="labels">
			<input type="checkbox" id="inp_planejador" name="planejador" value="sim" checked>
			<span class="descricao">Sou Planejador de Manutenção e desejo vincular meu perfil ao <a href="http://centralsigma.com.br/index.php?option=com_content&view=article&id=856" target="_blank">Mapa de Planejadores</a>.</span>
			<span class="descricao">Seu perfil aparecerá no mapa em algumas horas.</span>
			<br>
		</div>
		<div class="labels" style="float: left; margin-right: 50px;">
			<span><b>Empresa</b></span>
			<input type="text" id="inp_empresa" name="empresa" value="<?php echo $empresa; ?>"><br>
		</div>
		<div class="labels">
			<span><b>Site da Empresa</b></span>
			<input type="text" id="inp_site_empresa" name="site_empresa" value ="<?php echo $site_empresa; ?>"><br>
		</div>
		<div class="labels">
			<span><b>Empresas pelas quais já trabalhou com o SIGMA</b></span><br>
			<textarea cols="60" rows="5" name="ja_trabalhou" value ="<?php echo $ja_trabalhou; ?>"></textarea><br>
		</div>
		<div class="labels">
			<span><b>Histórico Profissional</b></span><br>
			<span class="descricao">Descreva brevemente sua trajetória profissional.</span><br>
			<textarea name="historico" rows="5" cols="60"><?php echo $historico; ?></textarea><br><br>
		</div>
		<br>
		
		<div id="div_publicar">
			<br>
			<span>Marque as opções abaixo para tornar públicas as seguintes informações em seu perfil:</span><br>
			<input type="checkbox" name="publicar[]" value="nascimento" checked> <b>Data de Nascimento</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" name="publicar[]" value="telefone" checked> <b>Telefone</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" name="publicar[]" value="celular" checked> <b>Celular</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" name="publicar[]" value="email" checked> <b>E-mail</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" name="publicar[]" value="facebook" checked> <b>Facebook</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
			<input type="checkbox" name="publicar[]" value="linkedin" checked> <b>LinkedIn</b>
			<br><br>
		</div>
		<br>
		<div id="div_erro"></div>
		<br>
		<button type="button" onclick="verificaDadosEditar()" class="btn-blue">Salvar</button>
		<a href="<?php echo URL::site("perfil/excluir"); ?>" class="btn-blue">Excluir Perfil</a>
	</form>
</div>

<script>
var yellowstar = "<?php echo URL::site('resources/img/icon/yellow_star.png'); ?>";

$(document).ready(function() {
	var selecao = "<?php echo $uf; ?>";
	
	$('#inp_uf').val(selecao);
});
</script>