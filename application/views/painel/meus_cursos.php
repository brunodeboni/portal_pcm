<?php
$cursos = DB::query(Database::SELECT,'select id,nome from cw_cursos where user_id = '.Auth::instance()->get_user()->id)->execute()->as_array();
?>

<div id="painel_header">
<h1>Meus Cursos</h1>
	<ul id="painel_sitemap">
		<li> <a href="<?php echo URL::site('painel'); ?>">Painel Administrativo</a>
		<li> Meus Cursos
	</ul>
</div>

<input type="hidden" id="csrf_token" value="<?=Session::instance('native')->id();?>">
<table id="painel_meuscursos_table" class="painel_table">
	<thead>
		<tr>
			<th colspan="3"><button id="painel_bt_cadastrar_curso" onclick="document.location='<?php echo URL::site('painel/cadastrar_curso'); ?>'">Cadastrar Curso</button>
	<tbody>
		<?php if(!count($cursos)) { ?>
			<tr>
				<td colspan="4">
					<div style="padding:30px;font-size:18px;font-family:helvetica,arial,tahoma,sans-serif;text-align:center;">
						Você não possui cursos
					</div>
		<?php
		} else {
			foreach($cursos as $curso) {
		?>
			<tr>
				<td>
					<a href="<?php echo URL::site('painel/editar_curso/'.$curso['id']); ?>">
						<?php echo $curso['nome']; ?>
					</a>
				<td class="painel_color_green"> Publicado
				<td>
					<a href="javascript:deletar_curso(<?=$curso['id'].',\''.htmlentities($curso['nome'],ENT_QUOTES).'\'';?>);">
						<img style="width:24px;height:24px;" src="http://www.aircav.com/survival/asch19/x.gif">
					</a>
		<?php }} /*
		<tr>
			<td> Curso de iniciação científica da manutenção estruturada
			<td class="painel_color_orange"> Aguardando
			<td> [A]
			<td> [E]
		<tr>
			<td> Curso de iniciação científica da manutenção estruturada
			<td class="painel_color_red"> Desativado
			<td> [A]
			<td> [E]
		<tr>
			<td> Curso de iniciação científica da manutenção estruturada
			<td class="painel_color_green"> Publicado
			<td> [A]
			<td> [E]
		<tr>
			<td> Curso de iniciação científica da manutenção estruturada
			<td class="painel_color_green"> Publicado
			<td> [A]
			<td> [E]
		<tr>
			<td> Curso de iniciação científica da manutenção estruturada
			<td class="painel_color_green"> Publicado
			<td> [A]
			<td> [E]
		*/ ?>
</table>