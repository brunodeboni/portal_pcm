<?php echo View::factory('admin/curso_titulo',array('curso'=>$curso,'turma'=>$turma,'current'=>'aprovados')); ?>

<?php //var_dump($recursos); ?>

<table class="pretty_table">

	<tr style="font-weight:bold;">
		<td> Rec_ID
		<td> Título
		<td> 
	
	<?php foreach($recursos as $recurso){ ?>
	<tr>
		<td> <?php echo $recurso['id_recurso']; ?>
		<td> <?php echo $recurso['titulo']; ?>
		<td> <a href="./<?php echo $turma['id'].'/'.$recurso['id_recurso'] ?>">Administrar Recurso</a>
	<?php } ?>
</table>