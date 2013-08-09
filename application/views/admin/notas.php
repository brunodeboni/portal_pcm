<?php echo View::factory('admin/curso_titulo',array('curso'=>$curso,'turma'=>$turma,'current'=>'notas')); ?>

<?php //var_dump($recursos); die(); ?>
<table class="pretty_table">
<?php foreach($recursos as $recurso){ ?>
	<tr>
		<td style="width:40px;"><?php echo $recurso['id_recurso']; ?>
		<td style="width:140px;"> <a href="<?php echo "{$current_url}/{$recurso['id_recurso']}"; ?>">DAR NOTAS</a>
		<td style="width:100px;">
			<?php if($recurso['turma_acontecendo_agora']){ ?>
				<a href="javascript:naoAgora(<?php echo $recurso['id_recurso']; ?>)">PARAR Aula</a>
			<?php }else{ ?>
				<a href="javascript:simAgora(<?php echo $recurso['id_recurso'].','.$turma['id']; ?>);">Iniciar Aula</a>
			<?php } ?>
		<td><?php echo $recurso['titulo']; ?>
<?php } ?>
</table>

