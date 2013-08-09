<span style="font-size:30px; color: #28166F; margin-left:150px;"><b><i>Estude. Não custa nada!</i></b></span><br><br>
<ul id="lista_meuscursos">
	<?php foreach($lista_cursos as $obj){ ?>
		<?php if ($obj['status_matricula'] != 'Inscrição Cancelada') {?>
			<li data-idcurso="<?php echo $obj["id_curso"]; ?>" data-idturma="<?php echo $obj["id_turma"]; ?>" data-inicio="<?php echo $obj["data_inicio"]; ?>" data-inscricao="<?php echo $obj["num_inscricao"]; ?>" data-status=<?php echo $obj["status"]; ?>>
				<table class="mc_table">
					<tr>
						<td class="mc_inscrito">
							<a href="<?php echo URL::site("/cursos/saladeaula/$obj[id_turma]"); ?>">
								<?php echo $obj["status_matricula"]; ?>
							</a>
						<td class="mc_content">
							<a href="<?php echo URL::site("/cursos/saladeaula/$obj[id_turma]"); ?>">
								<?php echo $obj["nome"]; ?>
							</a>
							<span class="mc_info">
								<span class="mc_info_title">Período:</span> <?php echo $obj["periodo"]; ?><br>
								<span class="mc_info_title">Horário:</span> <?php echo $obj["horarios"]; ?>
							</span>
							<?php if ($obj["status_matricula"] == 'Inscrito') { ?>
					<a href="<?php echo URL::site("/cursos/cancelar/$obj[inscrito]"); ?>" style="font-size:14px; margin-left:100px;"><b>Cancelar Inscrição</b></a>
				<?php }?>
				</table>
			<?php } ?>
	<?php } ?>
</ul>