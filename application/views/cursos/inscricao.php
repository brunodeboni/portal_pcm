<div id="curso_title"><?php echo $curso["nome"]; ?></div>

<?php if (isset($img[$curso['id']])) {?>
	<div class="div_img_insc"><img width="630" src="<?php echo URL::site('resources/img/inscricao/'.$img[$curso['id']]); ?>"></div>
<?php } ?>

<?php echo View::factory('cursos/_curso_tabela_info',array('curso'=>$curso)); ?>

<div style="text-align:center;margin-bottom:20px;">
	<a href="<?php echo URL::site('cursos/saladeaula_visitante/'.$curso['id']); ?>" class="btn-blue" style="padding:15px 40px;font-size:16px;">
		Acessar as atividades do curso como VISITANTE
	</a>
	<div style="color:#444;font-size:13px;margin:10px 0;">
	<b>*** ATENÇÃO ***</b> Acessando o curso como visitante você não terá nota atribuida e não poderá imprimir o certificado.
	</div>
</div>


<div id="erromsgs"></div>
<form action="<?php echo URL::site("cursos/processainscricao"); ?>" method="post" id="inscricao_form">
		<span class="sp_title sp_cursos">Turmas disponíveis</span>:<br><br>
		
		<?php
			foreach($curso["turmas"] as $turma){
				if($turma["status"]>1) continue;
				$radiobutton = "";
				$encerrado = "";
				$custstyle = "";
				
				if(!$turma["status_inscrito"]){
					if($turma["status"]==0) $radiobutton = '<input type="radio" name="id_turma" id="inp_basico" value="'.$turma["id"].'"/>';
					elseif($turma["status"]==1){
						$radiobutton = '<img src="'.URL::site("resources/img/icon/x.png").'">';
						$encerrado = ' - <span style="font-weight:bold;color:#C00;font-size:13px;">Vagas Preenchidas</span>';
						$custstyle = 'style="cursor:default;"';
					}
				}else{
					$stxt = "";
					switch($turma["status_inscrito"]){
						case 1: $stxt = "Inscrito"; break;
						case 2: $stxt = "Inscrição Cancelada"; break;
						case 3: $stxt = "Aprovado"; break;
						case 4: $stxt = "Reprovado"; break;
					}
					$radiobutton = '<img src="'.URL::site("resources/img/icon/x.png").'">';
					$encerrado = ' - <span style="font-weight:bold;color:#00C;font-size:13px;">'.$stxt.'</span>';
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

<br>
<div> 
	<a style="font-size: 14px; height: 20px; margin-top: 10px;" class="btn-blue" href="<?php echo URL::site('depoimentos/curso/'.$curso["id"]) ?>">Veja depoimentos de alunos sobre este curso</a>
</div>
