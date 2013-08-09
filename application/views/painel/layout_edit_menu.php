<?php
// Current Menu
// '', 'turmas', 'recursos'
function mksh($nome,$atual) {
	if($nome===$atual) {
		echo 'class="current_edit"';
		return true;
	}
	return false;
}
?>

<div id="painel_edit_curso">
	<div id="painel_curso_nome"><?php echo $curso['nome']; ?></div>
	
	<ul id="edit_tab_menu">
		<li <?php echo mksh($menu,''); ?>>
			<a href="<?php echo URL::site('painel/editar_curso/'.$curso['id']); ?>">Geral</a>
			
		<li <?php echo mksh($menu,'turmas'); ?>>
			<a href="<?php echo URL::site('painel/editar_turmas/'.$curso['id']); ?>">Turmas</a>
			
		<li <?php echo mksh($menu,'recursos'); ?>>
			<a href="<?php echo URL::site('painel/editar_recursos/'.$curso['id']); ?>">Recursos</a>
	</ul>
</div>
