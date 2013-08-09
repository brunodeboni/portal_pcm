<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Incrição para o curso</title>
	<link rel="stylesheet" type="text/css" href="<?php echo URL::site("resources/css/base.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo URL::site("resources/css/inscricao.css"); ?>">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://centralsigma.com.br/arquivos/plugins/gioplugin.js"></script>
	<script type="text/javascript" src="<?php echo URL::site("resources/js/inscricao.js"); ?>"></script>
</head>
<body>

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
<div id="erromsgs"></div>

<form action="<?php echo URL::site("cursos/processacadastro"); ?>" method="post" id="inscricao_form">
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
				
				if($turma["status"]==0) $radiobutton = '<input type="radio" name="id_turma" id="inp_basico" value="'.$turma["id"].'"/>';
				elseif($turma["status"]==1){
					$radiobutton = '<img src="'.URL::site("resources/img/icon/x.png").'">';
					$encerrado = ' - <span style="font-weight:bold;color:#C00;font-size:13px;">Vagas Preenchidas</span>';
				}
				
				
				echo '
					<label class="radiolabel">
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
		
		<label><span class="sp_title sp_nome">Nome</span>: <span class="obrigatorio">*</span><br>
		<input type="text" name="nome" id="inp_nome" class="inp_txt_required"></label>
		
		<br>
		
		<label><span class="sp_title sp_empresa">Empresa</span>: <span class="obrigatorio">*</span><br>
		<input type="text" name="empresa" id="inp_empresa" class="inp_txt_required"></label>
		
		<br>
		
		<label><span class="sp_title sp_cargo">Cargo</span>:<br>
		<input type="text" name="cargo" id="inp_cargo"></label>
		
		<br>
		
		<label><span class="sp_title sp_telefone_fixo">Telefone Fixo</span>:<br/>
		<input type="text" name="telefone" id="inp_telefone_fixo" class="inp_txt_telefone"></label>
		
		<br>
		
		<label>
			<!--<span style="float:right;color:#900;">(Importante. Você receberá um código de confirmação)</span>-->
			<span class="sp_title sp_telefone_cel">Telefone Celular</span>: <span class="obrigatorio">*</span> <span style="color:#999;">Importante</span><br>
		<input type="text" name="celular" id="inp_telefone_cel" class="inp_txt_required inp_txt_telefone"></label>
		
		<br>
		
		<label><span class="sp_title sp_email">Email</span>: <span class="obrigatorio">*</span><br>
		<input type="text" name="email" id="inp_email" class="inp_txt_required inp_txt_email"></label>
		
		<br>
		
		<label><span class="sp_title sp_email">Como soube deste curso?</span>:<span class="obrigatorio">*</span><br>
			<select name="como_conheceu" id="inp_como_conheceu" class="inp_txt_required">
				<option value="google">Google</option>
				<option value="facebook">Facebook</option>
				<option value="forum_sigma">F&oacute;rum Usu&aacute;rios SIGMA</option>
				<option value="forum_rede_industrial">F&oacute;rum Rede Industrial</option>
				<option value="amigos">Amigos</option>
				<option value="email">SENAI</option>
				<option value="outro">Outro...</option>
			</select>
		</label>
		
		
		
		
		<br><br><br>
		
		<button type="submit" id="bt_inscrever">Realizar Inscrição</button>
		<a href="<?php echo URL::site("cursos/lista"); ?>" onclick="return confirm('Tem certeza que deseja cancelar a inscrição e voltar para a lista de cursos?');" style="float:right;color:#66A;line-height:45px;">
			Cancelar e voltar para a lista de cursos
		</a>
</form>

<!--
<br><br><br><br><br><br><br><br>
<hr><br>
<div style="font-size:18px;">Outros Cursos:</div><br>
<iframe src="<?php echo URL::site("cursos/lista/"); ?>?exc=<?php echo $curso["id"]; ?>&linktarget=_parent" style="width:100%;height:500px;overflow:auto;overflow-x:none;border:0;"></iframe>
<br>
-->


</body>
</html>