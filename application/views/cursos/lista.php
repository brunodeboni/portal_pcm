<?php if(count($recursos_agora)){ ?>
<div id="recursos_agora_container">
	<div class="listitulo" id="recursos_agora_titulo">Aulas acontecendo agora</div>
	<div id="recursos_agora">
			
			<table class="pretty_table" id="recursos_agora_table" style="width:100%;">
				<tr class="pretty_table_title">
					<td style="width:235px;">Curso
					<td>Aula
					<td style="width:65px;">Hora
					<td style="width:50px;">
			
			<?php
				foreach($recursos_agora as $rec){
					$reclink = '';
					if(isset($rec['id_inscrito']) && $rec['id_inscrito']>0)
						$reclink = URL::site("cursos/redirectrecurso/$rec[id_inscrito]-$rec[id_curso]-$rec[id_tipo]-$rec[id_recurso]");
					
					$linkinscrito = $reclink!=''?'<a href="'.$reclink.'" class="btn-blue" style="padding:3px 5px;" target="_blank">Acessar</a>'
									//:'<button disabled style="padding:3px 5px;">Acessar</button>';
									:'<a href="'.$rec['link'].'" target="_blank">Acessar como ouvinte</a>';
					
					echo '<tr>'
							. '<td>' . $rec['nome']
							. '<td style="font-weight:bold;">' . $rec['titulo']
							. '<td>' . $rec['horarios']
							. '<td>' . $linkinscrito;
				}
				echo '</table>';
				
				if(Auth::instance()->logged_in())
					echo '<div style="font-size:13px;text-align:center;">Apenas estarão habilitadas as aulas de turmas nas quais você está inscrito</div>';
				else
					echo '<br><div style="text-align:center;"><a href="'.URL::site('auth/login').'" class="btn-blue">Entre na sua conta</a><br>'
						. '<span style="font-size:13px;">e participe das aulas em que você está inscrito</span></div>';
			?>
	</div>
</div>
<br>
<?php } ?>

<div class="listitulo">
	Lista de cursos disponíveis
</div>

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
							<table class="pretty_table">
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
							<table class="pretty_table">
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


<br>
<div class="us-container" id="universo1">
<!-- INSERINDO UNIVERSO SIGMA -->
<script>function flashCall(par){alert(par);}</script><script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<object id="FlashID1" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="660" height="470"><param name="movie" value="carousel_as2.swf" />
<param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="allowScriptAccess" value="always" /><param name="swfversion" value="9.0.45.0" />
<!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don�t want users to see the prompt. -->
<param name="expressinstall" value="Scripts/expressInstall.swf" /><!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
<!--[if !IE]>--><object type="application/x-shockwave-flash" data="resources/swf/carousel_as2.swf" width="660" height="470"><!--<![endif]-->
<param name="quality" value="high" /><param name="wmode" value="opaque" /><param name="allowScriptAccess" value="always" /><param name="swfversion" value="9.0.45.0" />
<param name="expressinstall" value="Scripts/expressInstall.swf" /><!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
<div><h4>Content on this page requires a newer version of Adobe Flash Player.</h4><p><a href="http://www.adobe.com/go/getflashplayer">
<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
</div><!--[if !IE]>--></object><!--<![endif]--></object><script type="text/javascript">swfobject.registerObject("FlashID");</script>
<!-- FIM DO UNIVERSO SIGMA -->
</div>


<br><br>
<?php echo View::factory('social/disqus_comentarios'); ?>
