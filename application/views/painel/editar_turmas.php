<?php
$curso = DB::query(Database::SELECT, 'select id,nome from cw_cursos where id = :cid')->param(':cid',Request::current()->param('id'))->execute()->as_array();
$curso = $curso[0];
$turmas = DB::query(Database::SELECT, '
	select
		t.id,
		t.data_inicio,
		t.horarios,
		t.status,
		(select count(*) from cw_cursos_turmas_aulas as a
			where a.id_turma = t.id) as aulas,
		(select count(*) from cw_cursos_inscritos as i
			where i.id_turma = t.id) as inscritos
	from cw_cursos_turmas as t
	where t.id_curso = :cid
	order by t.data_inicio asc')->param(':cid',$curso['id'])->execute()->as_array();

/**
 * Escreve uma coluna de tabela para a lista de turmas
 * formatando o status de int para string
 *
 * @param   array  $turma
 * @return  void
 */
function turma_status($turma) {
	$ret = array('Desconhecido','red');
	
	switch($turma['status']) {
		case 0:
			$ret = array('Aberta','green');
			break;
		case 1:
			$ret = array('Em andamento','blue');
			break;
		case 2:
			$ret = array('Concluida','gray');
			break;
		case 3:
			$ret = array('Cancelada','red');
			break;
	}
	
	echo '<td class="painel_color_'.$ret[1].'">'.$ret[0].'</td>';
}


/**
 * Transforma data mysql para formato texto
 *
 * @param   string  $data    Data mysql em formato yyyy-mm-dd
 * @return  string
 */
function turma_formatar_data($data) {
	$meses = array('-','janeiro','fevereiro','março','abril','maio','junho',
				'julho','agosto','setembro','outubro','novembro','dezembro');
	$data = explode('-',$data,3);
	if(!count($data)===3){var_dump($data);die();}
	return $data[2].' de '.$meses[(int)$data[1]].' de '.$data[0];
}
?>
<div id="painel_header">
<h1>Editar Turmas</h1>
	<ul id="painel_sitemap">
		<li> <a href="<?php echo URL::site('painel'); ?>">Painel Administrativo</a>
		<li> <a href="<?php echo URL::site('painel/meus_cursos'); ?>">Meus Cursos</a>
		<li> Editar Turmas
	</ul>
</div>

<?php echo View::factory('painel/layout_edit_menu',array('menu'=>'turmas','curso'=>$curso)); ?>

<div id="painel_form_editar_turmas">
	
	<table class="painel_table">
		<thead>
			<tr>
				<th> Data de início
				<th> Aulas
				<th> Inscritos
				<th> Horário
				<th style="width:120px;"> <button onclick="pmaddt_open()">Cadastrar Turma</button>
		<tbody>
			<?php /*
			<tr>
				<td> 22 de maio de 2013
				<td> 3
				<td> 19h - 22h
				<td class="painel_color_green"> ativo
			<tr><td colspan="4">
			<?php var_dump($turmas[0]); */ ?>
			<?php if(count($turmas)) { foreach($turmas as $turma) { ?>
				<tr>
					<td>
						<a href="<?=$curso['id'].'/'.$turma['id'];?>">
							<?=turma_formatar_data($turma['data_inicio']);?>
						</a>
					<td><?=$turma['aulas'];?>
					<td><?=$turma['inscritos'];?>
					<td><?=$turma['horarios'];?>
					<?php turma_status($turma); ?>
			<?php } } else { ?>
				<tr>
					<td colspan="5" style="text-align:center;font-weight:bold;padding:25px;">
						Nenhuma turma encontrada
			<?php } ?>
	</table>
	
</div>





<div class="painel_modal_bg" id="painel_modal_addturma" onclick="if(event.target===this) pmaddt_close();">
	<div class="painel_modal">
		<div class="painel_modal_header">
			<div class="painel_modal_fechar" onclick="pmaddt_close();"></div>
			<h3>Adicionar Turma</h3>
		</div>
		
		<div class="painel_modal_content">
				<input type="hidden" id="csrf_token" value="<?php echo Session::instance('native')->id(); ?>">
				<input type="hidden" id="param_id" value="<?php echo Request::current()->param('id'); ?>">
				
				<div class="pm_field">
					<label>
						<span>Data de início</span>
						<input type="text" id="pmaddt_date">
					</label>
				</div>
				
				<div class="pm_field">
					<label>
						<span>Hora de inicio</span>
						<input type="text" id="pmaddt_time">
					</label>
				</div>
				
				<div class="pm_field">
					<label>
						<span>Hora de terminar</span>
						<input type="text" id="pmaddt_time2">
					</label>
				</div>
		</div>
		
		<div class="painel_modal_buttons">
			<button onclick="pmaddt()" id="pmaddt_bt_add">Adicionar</button>
		</div>
	</div>
</div>
