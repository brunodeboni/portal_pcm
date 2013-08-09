<div id="recursos_agora">
		
		<table class="pretty_table" id="recursos_agora_table" style="width:100%;">
			<tr class="pretty_table_title">
				<td style="width:25%;">Curso
				<td>Aula
				<td style="width:65px;">Hora
				<td style="width:40px;">
		
		<?php
			if(count($aulas)):
				$imx = '<img src="'.URL::site('resources/img/icon/delete.png').'">';
				foreach($aulas as $rec){
					$reclink = $rec['link'];
					
					echo '<tr id="trec_'.$rec['id_recurso'].'">'
							. '<td>' . $rec['nome']
							. '<td style="font-weight:bold;"> <small><small>rec_id(' . $rec['id_recurso'].') -</small></small> '.$rec['titulo']
							. '<td>' . $rec['horarios']
							. '<td> <a href="javascript:naoAgora('.$rec['id_recurso'].')">'.$imx.'</a>';
				}
				echo '</table>';
			
			
			else:
				echo '<tr><td colspan="4">No momento não há nenhuma aula em andamento</table>';
				
			endif;
		?>
</div>