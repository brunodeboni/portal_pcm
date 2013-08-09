<?php 

$sql = "select avalie from cw_perfil where avalie is not null";
$query = DB::query(Database::SELECT, $sql)->execute();
$retorno = $query->as_array();
		
$num = 0;
$total = 0;
foreach ($retorno as $res) {
	$num += $res['avalie'];
	$total++;
}

//$media = round($num/$total);
$media = 5;
?>
<div class="content_title">Criar Perfil</div>
<div class="perfil_container">
	<span>Preencha seus dados abaixo:</span><br><br>
	<form id="form_planejadores" action="<?php echo URL::site("perfil/criaperfil"); ?>" method="post">
		<div class="labels">
			<span><b>Nome *</b></span>
			<input type="text" id="inp_nome" size="80" name="nome" value="<?php echo $nome; ?>"><br>
		</div>
		<div class="labels">
			<span><b>Data de Nascimento *</b></span>
			<input type="text" id="inp_nascimento" name="nascimento" placeholder="dd/mm/aaaa" maxlength="10" onkeyup="makeDate(this)" onkeydown="makeDate(this)"><br>
		</div>
		<div class="labels">
			<span><b>Endereço *</b></span>
			<input type="text" size="75" id="inp_endereco" name="endereco" placeholder="Ex. Rua Garibaldi, 11"><br>
		</div>
		
		<div class="labels" style="float: left; margin-right: 125px;">
			<span><b>Cidade *</b></span>
			<input type="text" id="inp_cidade" name="cidade"><br>
		</div>
		<div class="labels">
			<span><b>Estado *</b></span>
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
			<span><b>Celular *</b></span>
			<input type="text" id="inp_celular" class="telefone" onkeyup="tel(this)" onkeydown="tel(this)" maxlength="14" name="celular" value="<?php echo $celular; ?>" disabled><br>
		</div>
		<div class="labels">
			<span><b>E-mail *</b></span>
			<input type="text" id="inp_email" name="email" value="<?php echo $email; ?>"><br>
		</div>
		<div class="labels" style="float: left; margin-right: 100px;">
			<span><b>Facebook</b></span>
			<input type="text" id="inp_facebook" name="facebook"><br>
		</div>
		<div class="labels">
			<span><b>LinkedIn</b></span>
			<input type="text" id="inp_linkedin" name="linkedin"><br>
		</div>
		<br>
		<div class="labels">
			<span><b>Cargo *</b></span>
			<input type="text" id="inp_cargo" name="cargo" value="<?php echo $cargo; ?>"><br>
		</div>
		<div class="labels">
			<input type="checkbox" id="inp_planejador" name="planejador" value="sim" checked>
			<span class="descricao">Sou Planejador de Manutenção e desejo vincular meu perfil ao <a href="http://centralsigma.com.br/index.php?option=com_content&view=article&id=856" target="_blank">Mapa de Planejadores</a>.</span><br>
			<span class="descricao">Seu perfil aparecerá no mapa em algumas horas.</span>
			<br>
		</div>
		<div class="labels" style="float: left; margin-right: 50px;">
			<span><b>Empresa *</b></span>
			<input type="text" id="inp_empresa" name="empresa" value="<?php echo $empresa; ?>"><br>
		</div>
		<div class="labels">
			<span><b>Site da Empresa</b></span>
			<input type="text" id="inp_site_empresa" name="site_empresa"><br>
		</div>
		<div class="labels">
			<span><b>Empresas pelas quais já trabalhou com o SIGMA</b></span><br>
			<textarea cols="60" rows="5" name="ja_trabalhou"></textarea><br>
		</div>
		<div class="labels">
			<span><b>Histórico Profissional</b></span><br>
			<span class="descricao">Descreva brevemente sua trajetória profissional.</span><br>
			<textarea name="historico" rows="5" cols="60"></textarea><br><br>
		</div>
		<br>

		<div class="labels">
			<span><b>Você é um usuário SIGMA? *</b></span>
			<input type="radio" id="usu_sigma_sim" name="usu_sigma" value="Sim" onchange="disp(this.value)" checked> Sim
			<input type="radio" id="usu_sigma_nao" name="usu_sigma" value="Não" onchange="disp(this.value)"> Não
			<br>
		</div>
		<div class="labels" id="tempo_usuario">
			<span><b>Há quanto tempo é um usuário SIGMA:</b></span>
			<select id="inp_tempo_usuario" name="tempo_usuario">
				<option value="">Selecione...</option>
				<option value="há menos de 1 ano">Há menos de 1 ano</option>
				<option value="de 1 a 2 anos">De 1 a 2 anos</option>
				<option value="de 2 a 5 anos">De 3 a 4 anos </option>
				<option value="de 5 a 10 anos">De 5 a 9 anos</option>
				<option value="há 10 anos">Há 10 anos</option>
			</select>
			<br>
		</div>	
		<div class="labels" id="avalie">
			<span style="float: left; margin-right: 15px;"><b>Avalie o SIGMA</b></span>
			<div id="estrelas">
				<a id="star1" href="javascript: avalie(1)"><img src="<?php echo URL::site('resources/img/icon/red_star.png'); ?>" width="20"></a>
				<a id="star2" href="javascript: avalie(2)"><img src="<?php echo URL::site('resources/img/icon/red_star.png'); ?>" width="20"></a>
				<a id="star3" href="javascript: avalie(3)"><img src="<?php echo URL::site('resources/img/icon/red_star.png'); ?>" width="20"></a>
				<a id="star4" href="javascript: avalie(4)"><img src="<?php echo URL::site('resources/img/icon/red_star.png'); ?>" width="20"></a>
				<a id="star5" href="javascript: avalie(5)"><img src="<?php echo URL::site('resources/img/icon/red_star.png'); ?>" width="20"></a>
				<input type="hidden" id="inp_avalie" name="avalie" value="">
			</div>
			<span class="descricao">Média das Avaliações: <?php echo $media; ?></span>
			<br>
		</div>
		<div id="div_publicar">
			<br>
			<span>Marque as opções abaixo para tornar públicas as seguintes informações em seu perfil: *</span><br>
			<input type="checkbox" name="publicar[]" value="nascimento" checked> <b>Data de Nascimento</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" name="publicar[]" value="telefone" checked> <b>Telefone</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" name="publicar[]" value="celular" checked> <b>Celular</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" name="publicar[]" value="email" checked> <b>E-mail</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" name="publicar[]" value="facebook" checked> <b>Facebook</b><br>
			<input type="checkbox" name="publicar[]" value="linkedin" checked> <b>LinkedIn</b>
			<br><br>
			<input type="checkbox" onchange="allowSubmit(this)" id="inp_aceito" name="aceito" value="sim">
			<span>Declaro estar ciente que além dos campos marcados acima, os campos Nome Completo, Endereço, Cidade, Estado, Cargo, Empresa, Site da Empresa e Histórico Profissional serão visíveis em meu perfil público.</span>
			<br>
		</div>
		<br>
		<div id="div_erro"></div>
		<br>
		<div id="btn"><div id="unchecked">Salvar</div></div>
	</form>
</div>

<script>
var redstar = "<?php echo URL::site('resources/img/icon/red_star.png'); ?>";
var yellowstar = "<?php echo URL::site('resources/img/icon/yellow_star.png'); ?>";
</script>