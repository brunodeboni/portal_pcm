<?php
$curso = DB::query(Database::SELECT, 'select id,nome from cw_cursos where id = :cid')->param(':cid',Request::current()->param('id'))->execute()->as_array();
$curso = $curso[0];
$recursos = DB::query(Database::SELECT, '
	select
		r.id,
		r.titulo,
		r.id_tipo,
		r.ordem,
		r.dias_liberacao,
		r.publicado,
		r.texto_descricao,
		r.link
	from cw_cursos_recursos as r
	where r.id_curso = :cid
	order by r.dias_liberacao, ordem asc')->param(':cid',$curso['id'])->execute()->as_array();

/* Representação do tipo em string */
function btipo($tipo) {
	switch($tipo) {
		case 1: return 'Aula';
		case 2: return 'Video';
		case 3: return 'Texto';
		case 4: return 'Link';
		case 5: return 'Grupo';
		case 6: return 'Teste';
		case 7: return 'Prova final';
		case 8: return 'Arquivo Hdútil';
		case 9: return 'Anexo';
		case 10: return 'Curriculo Representante';
		default: return '-';
	}
}

/* Representação do status em string */
function bstatus($stat) {
	if($stat==1) {
		return '<span class="painel_color_green">Publicado</span>';
	}
	
	return '<span class="painel_color_red">Desativado</span>';
}

?>
<div id="painel_header">
<h1>Editar Recursos</h1>
	<ul id="painel_sitemap">
		<li> <a href="<?php echo URL::site('painel'); ?>">Painel Administrativo</a>
		<li> <a href="<?php echo URL::site('painel/meus_cursos'); ?>">Meus Cursos</a>
		<li> Editar Recursos
	</ul>
</div>

<?php echo View::factory('painel/layout_edit_menu',array('menu'=>'recursos','curso'=>$curso)); ?>

<div id="painel_form_editar_turmas">
	
	<table class="painel_table">
		<thead>
			<tr>
				<th> Lib.
				<th> Título
				<th> Tipo
				<th style="width:150px;text-align:right;"> <button onclick="pmaddr_open()">Cadastrar Recurso</button>
		<tbody>
			<?php foreach($recursos as $recurso) { ?>
				<tr>
					<td><?=$recurso['dias_liberacao'];?>
					<td><a href="javascript:pmaddr_open(<?=htmlentities(json_encode($recurso),ENT_QUOTES);?>);"><?=$recurso['titulo'];?></a>
					<td><?=btipo($recurso['id_tipo']);?>
					<td style="text-align:right;"><?=bstatus($recurso['publicado']);?>
			<?php } ?>
	</table>
	
</div>




<div class="painel_modal_bg" id="painel_modal_addrecurso" onclick="if(event.target===this) pmaddr_close();">
	<div class="painel_modal">
		<div class="painel_modal_header">
			<div class="painel_modal_fechar" onclick="pmaddr_close();"></div>
			<h3>Adicionar Recurso</h3>
		</div>
		
		<div class="painel_modal_content">
				<input type="hidden" id="csrf_token" value="<?php echo Session::instance('native')->id(); ?>">
				<input type="hidden" id="param_id" value="<?php echo Request::current()->param('id'); ?>">
				<input type="hidden" id="pmaddr_recurso" value="">
				
				<div class="pm_description" id="pm_description" data-action="novo">
					Cadastrar novo recurso
				</div>
				
				<div class="pm_field">
					<label>
						<span>Título</span>
						<input type="text" id="pmaddr_titulo">
					</label>
				</div>
				
				<div class="pm_field">
					<label>
						<span>Típo</span>
						<select id="pmaddr_tipo">
							<option value="4">Link externo</option>
						</select>
					</label>
				</div>
				
				<div class="pm_field">
					<label>
						<span>Link</span>
						<input type="text" id="pmaddr_link">
					</label>
				</div>
				
				<div class="pm_field">
					<label>
						<span>Descrição</span>
						<textarea id="pmaddr_descricao"></textarea>
					</label>
				</div>
		</div>
		
		<div class="painel_modal_buttons">
			<button onclick="pmaddr()" id="pmaddr_bt_add">Adicionar</button>
		</div>
	</div>
</div>