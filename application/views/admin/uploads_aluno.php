<?php //var_dump($aluno,$inscrito,$uploads);

echo View::factory('admin/curso_titulo',array('curso'=>$curso,'turma'=>$turma,'current'=>'uploads'));

function arrumarUploads($uploads){
	$recursos = array();
	
	foreach($uploads as &$upload){
		if(isset($recursos[$upload['id_recurso']])){
			$recursos[$upload['id_recurso']]['uploads'][] = $upload;
		}else{
			$recursos[$upload['id_recurso']] = array(
				'id'       => $upload['id_recurso'],
				'titulo'   => $upload['titulo'],
				'id_curso' => $upload['id_curso'],
				
				'uploads'  => array($upload),
			);
		}
	}
	return $recursos;
}

//var_dump(arrumarUploads($uploads));
?>

<table class="pretty_table">
	<tr>
		<th> Id inscrito
		<td> <?php echo $inscrito['id']; ?>
	<tr>
		<th> Nome
		<td> <?php echo $aluno['nome']; ?>
	<tr>
		<th> E-mail
		<td> <?php echo $aluno['email']; ?>
	<tr>
		<th> Celular
		<td> <?php echo $aluno['celular']; ?>
</table>

<?php

$recursos = arrumarUploads($uploads);


foreach($recursos as $recurso){
?>
	<table class="pretty_table">
		<tr style="font-weight:bold;">
			<td colspan="2">Upload: <?php echo $recurso['titulo']; ?>
		
		<?php foreach($recurso['uploads'] as $upload){ ?>
		<tr>
			<td> <?php echo $upload['nome_arquivo']; ?>
			<td style="width:130px;"> <a href="<?php echo URL::site($upload['url']); ?>">Baixar Arquivo</a>
		<?php } ?>
	</table>
<?php
}