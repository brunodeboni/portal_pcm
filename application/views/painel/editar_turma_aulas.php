<?php
$curso = DB::query(Database::SELECT, 'select id,nome from cw_cursos where id = :cid')->param(':cid',$curso_id)->execute()->as_array();
$curso = $curso[0];

/*$turma = DB::query(Database::SELECT, '
	select
		t.id,
		t.data_inicio,
		t.horarios,
		t.status
	from cw_cursos_turmas as t
	where t.id_curso = :cid
	and t.id = :tid
	order by t.data_inicio asc')->parameters(array(':cid'=>$curso_id,':tid'=>$turma_id))->execute()->as_array();*/
$aulas = DB::query(Database::SELECT, '
	select
		a.id,
		a.datahora,
		a.datahora_final,
		a.titulo,
		a.link,
		a.descricao
	from cw_cursos_turmas_aulas as a
	where a.id_turma = :tid')->parameters(array(':tid'=>$turma_id))->execute()->as_array();

function mxdate($mysql_datetime) {
	$darr = explode(' ',$mysql_datetime);
	$darr = explode('-',$darr[0]);
	return $darr[2].'/'.$darr[1].'/'.$darr[0];
}

function mxtime($mysql_datetime) {
	return substr($mysql_datetime,11,-3);
}
?>

<div id="painel_header">
<h1>Editar Aulas</h1>
	<ul id="painel_sitemap">
		<li> <a href="<?php echo URL::site('painel'); ?>">Painel Administrativo</a>
		<li> <a href="<?php echo URL::site('painel/meus_cursos'); ?>">Meus Cursos</a>
		<li> <a href="./">Editar Turmas</a>
		<li> Editar Aulas
	</ul>
</div>

<?php echo View::factory('painel/layout_edit_menu',array('menu'=>'turmas','curso'=>$curso)); ?>

<div id="painel_form_editar_aulas">

	<table class="painel_table">
		<thead>
			<tr>
				<th> Título
				<th> Data
				<th> Hora
				<th style="width:110px;"> <button onclick="pmadda_open();">Cadastrar Aula</button>
		<tbody>
			<?php foreach($aulas as $aula) { ?>
				<tr>
					<td>
						<a href="javascript:pmadda_open(<?=htmlentities(json_encode($aula),ENT_QUOTES);?>);">
							<?=$aula['titulo'];?>
						</a>
					<td> <?=mxdate($aula['datahora']);?>
					<td colspan="2">
						<?=mxtime($aula['datahora']);?>
						até <?=mxtime($aula['datahora_final']);?>
			<?php } ?>
	</table>

</div>








<div class="painel_modal_bg" id="painel_modal_addaula" onclick="if(event.target===this) pmadda_close();">
	<div class="painel_modal">
		<div class="painel_modal_header">
			<div class="painel_modal_fechar" onclick="pmadda_close();"></div>
			<h3>Adicionar Aula</h3>
		</div>
		
		<div class="painel_modal_content">
				<input type="hidden" id="csrf_token" value="<?php echo Session::instance('native')->id(); ?>">
				<input type="hidden" id="param_id" value="<?php echo Request::current()->param('id'); ?>">
				<input type="hidden" id="param_id2" value="<?php echo Request::current()->param('id2'); ?>">
				<input type="hidden" id="pmadda_aula" value="">
				
				<div class="pm_description" id="pm_description" data-action="novo">
					Cadastrar nova aula
				</div>
				
				<div class="pm_field">
					<label>
						<span>Título</span>
						<input type="text" id="pmadda_titulo">
					</label>
				</div>
				
				<div class="pm_field">
					<label>
						<span>Data</span>
						<input type="text" id="pmadda_data">
					</label>
				</div>
				
				<div class="pm_field">
					<label>
						<span>Hora de início</span>
						<input type="text" id="pmadda_hora">
					</label>
				</div>
				
				<div class="pm_field">
					<label>
						<span>Hora do final</span>
						<input type="text" id="pmadda_hora2">
					</label>
				</div>
				
				<div class="pm_field">
					<label>
						<span>Link</span>
						<input type="text" id="pmadda_link">
					</label>
				</div>
				
				<div class="pm_field">
					<label>
						<span>Descrição</span>
						<textarea id="pmadda_descricao"></textarea>
					</label>
				</div>
		</div>
		
		<div class="painel_modal_buttons">
			<button onclick="pmadda()" id="pmadda_bt_add">Adicionar</button>
		</div>
	</div>
</div>
