<div id="curso_title"><?php echo $curso["nome"]; ?></div>
<table id="curso_info">
	<tr>
		<td class="curso_info_c1"> Carga Horária
		<td> <?php echo $curso["carga_horaria"]; ?>
	<tr>
		<td class="curso_info_c1"> Objetivo
		<td> <?php echo $curso["objetivo"]; ?>
	<tr>
		<td class="curso_info_c1"> Pré-requisitos
		<td> <?php echo $curso["pre_requisitos"]; ?>
	<tr>
		<td>
		<td style="text-align:right;"> <a href="<?php echo URL::site("cursos/lista"); ?>" style="color:#66A;">Voltar para a lista de cursos</a>
</table>


<?php if(!$inscrito){ ?>
	<div id="erromsgs"></div>
	<form action="<?php echo URL::site("cursos/processainscricao"); ?>" method="post" id="inscricao_form">
			<span class="sp_title sp_cursos">Turmas disponíveis</span>:<br><br>
			<!--<label class="radiolabel">
				<table>
					<tr>
						<td class="ttradio"> <input type="radio" name="turma" id="inp_basico" value="basico"/>
						<td class="ttcurso"> Conceitos Básicos de PCM2
						<td class="ttdata"> 10/10/2012
						<td class="ttturno"> Noturno
				</table>
			</label>-->
			<?php
				foreach($curso["turmas"] as $turma){
					if($turma["status"]>1) continue;
					$radiobutton = "";
					$encerrado = "";
					$custstyle = "";
					
					if($turma["status"]==0) $radiobutton = '<input type="radio" name="id_turma" id="inp_basico" value="'.$turma["id"].'"/>';
					elseif($turma["status"]==1){
						$radiobutton = '<img src="'.URL::site("resources/img/icon/x.png").'">';
						$encerrado = ' - <span style="font-weight:bold;color:#C00;font-size:13px;">Vagas Preenchidas</span>';
						$custstyle = 'style="cursor:default;"';
					}
					
					
					echo '
						<label class="radiolabel" '.$custstyle.'>
						<table>
							<tr>
								<td class="ttradio"> '.$radiobutton.'
								<td class="ttperiodo"> '.$turma["periodo"].$encerrado.'
								<td class="ttturno"> '.$turma["turno"].'
								<td class="tthora"> '.$turma["horarios"].'
						</table>
						</label>
					';
				}
			?>
			<br><br>
			
			
			<div>
				
				<?php echo $inscrever_txt; ?>
				
				<a href="<?php echo URL::site("cursos/lista"); ?>" onclick="return confirm('Tem certeza que deseja cancelar a inscrição e voltar para a lista de cursos?');" style="float:right;color:#66A;line-height:45px;">
					Cancelar e voltar para a lista de cursos
				</a>
			
			</div>
	</form>

<?php }else{
// USUÁRIO ESTÁ INSCRITO NO CURSO
?>
	<br><br>
	
	<table class="pretty_table">
		<tr>
			<td class="pt_title"> Sua Inscrição
			<td> Confirmada
		<tr>
			<td class="pt_title"> Período do Curso
			<td> <?php echo $turma["periodo"]; ?>
		<tr>
			<td class="pt_title"> Horário
			<td> <?php echo $turma["horarios"]; ?>
	</table>
	
	<br><br>
	
	<table class="pretty_table inverse">
		<tr>
			<td colspan="2"> <div style="font-size:24px;color:#369;">Recursos disponíveis do curso</div>
		<?php foreach($turma["recursos"] as $recurso){ ?>
		<tr>
			<td class="pt_title">
				<?php echo $recurso["titulo"]; ?>
				<br>
				<img src="<?php echo URL::site("resources/img/recursos/$recurso[id_tipo].png"); ?>" class="recurso_icon">
				<?php if((int)$recurso["dias_liberacao"] < 0){ ?>
					Ler antes do curso
				<?php }else{
					echo $recurso["data_liberacao"]." - ".$recurso["dia_semana"];
					}
				?>
			<td> <?php
				echo str_replace("\n","<br>",$recurso["texto_descricao"]);
				if($recurso["link"]) echo '<br><br><a href="'.$recurso["link"].'" target="_blank"> Acessar Conteúdo </a>' ?>
		<?php } ?>
	</table>
<?php } ?>
