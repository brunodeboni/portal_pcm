<div class="pagina_titulo">ADMIN - <?php echo $curso["nome"]; ?></div>
<?php echo View::factory('cursos/_curso_tabela_info',array('curso'=>$curso,'link_para_cursos'=>URL::site('admin/cursos'))); ?>

<div style="font-size:18px;margin-top:50px;margin-bottom:20px;">Escolha abaixo uma das turmas para administrar</div>

<table class="pretty_table">
	<?php /* * / echo "<pre>";print_r($curso["turmas"]);die();/* */ ?>
	<?php foreach($curso["turmas"] as $turma){ ?>
		<tr>
			<td style="width:30px;"> <?php
					switch($turma['status']){
						case 0:
							$imgurl = 'ok.png';
							$imgalt = 'Vagas abertas';
							break;
						case 1:
							$imgurl = 'delete.png';
							$imgalt = 'Curso lotado';
							break;
						case 2:
							$imgurl = 'accept.png';
							$imgalt = 'Concluido';
							break;
						case 3:
							$imgurl = 'offline.png';
							$imgalt = 'Cancelado';
							break;
						default:
							$imgurl = '';
							$imgalt = 'SEM IDENTIFICAÇÃO, ERRO NO BANCO DE DADOS';
							break;
					}
				?>
				<img src="<?php echo URL::site("resources/img/icon/$imgurl"); ?>" alt="<?php echo $imgalt; ?>" style="width:24px;height:24px;">
			<td style="width:130px;"><a href="<?php echo URL::site("admin/diariodeclasse/$curso[id]_$turma[id]"); ?>">Administrar Turma</a>
			<td><?php echo $turma['periodo']; ?>
			<td><?php echo $turma['horarios']; ?>
	<?php } ?>
</table>
