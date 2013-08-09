<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de cursos em aberto</title>
	<link rel="stylesheet" type="text/css" href="<?php echo URL::site("resources/css/base.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo URL::site("resources/css/lista.css"); ?>">
</head>
<body>
	<?php echo View::factory("layout/header"); ?>
	
	<div id="cpcm_content_container">
	<?php echo View::factory("layout/sidebar"); ?>
	
		<div id="cpcm_content">
			<ul id="cursos_lista">
				<?php
					$linktarget = isset($linktarget)?$linktarget:"_self";
					if($is_ie){
						echo '<!--<div style="background:#FEE;color:#900;font-size:16px;padding:10px;">
								O Navegador que você está utilizando não é apropriado para utilizar os recursos oferecidos neste site,
								por este motivo, algumas funcionalidades podem não estar disponíveis.<br><br>
								Para obter total suporte, use um dos seguintes navegadores:<br><br>
								- Google Chrome - <a href="http://www.google.com/intl/pt-BR/chrome/browser/">download</a><br>
								- Mozilla Firefox - <a href="http://br.mozdev.org/firefox/download/">download</a>
								</div>-->';
					}
					
					foreach($lista_cursos as $curso){
						if(isset($exc) && $exc==$curso["id"]) continue;
						$linktogo = str_replace("<id>",$curso["id"],$link);
						$linkcode = '<a href="'.$linktogo.'" target="'.$linktarget.'">';
						
						if(!$is_ie){
							echo '
								<li class="curso_container">
									'.$linkcode.'
										<table>
											<tr>
												<td class="curso_content_1"> '.$curso["nome"].'
													<div class="curso_content_info">
														<ul>
														<li><span class="ccititle">Carga Horária:</span> '.$curso["carga_horaria"].'</li>
														<li><span class="ccititle">Objetivo:</span> '.$curso["objetivo"].'</li>
														<li><span class="ccititle">Pré-requisitos:</span> '.$curso["pre_requisitos"].'</li>
														</ul>
													</div>
												<td class="curso_content_2"> Inscreva-se
										</table>
									</a>
								</li>
							';
						}else{
							// Usuário está usando um navegador ruim (Internet Explorer)
							echo '
								<li class="curso_container">
										<table>
											<tr>
												<td class="curso_content_1"> '.$linkcode.$curso["nome"].'</a>
													<div class="curso_content_info">
														<ul>
														<li><span class="ccititle">Carga Horária:</span> '.$curso["carga_horaria"].'</a></li>
														<li><span class="ccititle">Objetivo:</span> '.$curso["objetivo"].'</a></li>
														<li><span class="ccititle">Pré-requisitos:</span> '.$curso["pre_requisitos"].'</a></li>
														</ul>
													</div>
												<td class="curso_content_2" onclick="document.location=\''.$linktogo.'\'"> Inscreva-se
										</table>
								</li>
							';
						}
					}
				?>
			</ul>
		</div>
		
	<br class="clearfix">
	</div>
</body>
</html>