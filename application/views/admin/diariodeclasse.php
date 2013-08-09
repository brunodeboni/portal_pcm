<?php echo View::factory('admin/curso_titulo',array('curso'=>$curso,'turma'=>$turma,'current'=>'diariodeclasse')); ?>

<table class="pretty_table">
<?php foreach($recursos as $recurso){ ?>
	<tr>
		<td style="width:40px;"><?php echo $recurso['id']; ?>
		<td style="width:140px;"> <a href="<?php echo "{$current_url}/{$recurso['id']}"; ?>">Administrar Recurso</a>
		<td style="width:100px;">
			<?php if($recurso['turma_acontecendo_agora']){ ?>
				<a href="javascript:naoAgora(<?php echo $recurso['id']; ?>)">PARAR Aula</a>
			<?php }else{ ?>
				<a href="javascript:simAgora(<?php echo $recurso['id'].','.$turma['id']; ?>);">Iniciar Aula</a>
			<?php } ?>
		<td><?php echo $recurso['titulo']; ?>
<?php } ?>
</table>



