<div class="content_title">Encontre Estagiários</div>

<div class="estagiario">
<p>Busque por candidatos a estágio.</p>
<br>
<form action="" method="post">
	<label>
		<span>Cidade</span>
		<input type="text" name="cidade" id="inp_cidade"><br><br>
	</label>
	<label>
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
	<br><br>
	<label class="inp_txt_required">
		<span>Disponibilidade</span>
		<select name="disponibilidade" id="inp_disponibilidade">
                <option value="" class="sp_selecione" selected>Selecione...</option>
                <option value="Manhã">Manhã</option>
                <option value="Tarde">Tarde</option>
                <option value="Integral">Turno Integral</option>
            </select>
	</label>
	<br><br>
	<div style="margin-left:30px;width:530px;">
		<button type="submit" class="btn-blue">Buscar</button>
	</div>
</form>	
<br>
<?php 
if (!count($query)) {
 echo 'Nenhum resultado encontrado!';
}else  {?>
<table class="pretty_table">
	<tr>
		<td><b>Nome</b>
		<td><b>Cidade</b>
		<td><b>UF</b>
		<td>
	<?php foreach ($query as $r) {
		$celular = $r['celular'];
		echo"
			<tr>
				<td>".$r['nome']."
				<td>".$r['cidade']."
				<td>".$r['uf']."
				<td><a href=\"javascript: detalhesEstagiario(".$celular.")\">Mais detalhes</a>
			";
	 } ?>
</table>
<?php } ?>
</div>
