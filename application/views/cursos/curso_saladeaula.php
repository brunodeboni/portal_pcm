<div style="font-size:32px;color:#369;text-align:center;">Atividades do curso</div>
<div id="indice_recursos">
	<ol>
		<?php foreach($turma["recursos"] as $recurso){ ?>
			<li> <a href="#recurso_<?php echo $recurso["id_recurso"] ?>"><?php echo $recurso["titulo"] ?></a>
		<?php } ?>
	</ol>
</div>

<ul id="curso_recursos">
	<?php foreach($turma["recursos"] as $recurso){ ?>
	<li id="recurso_<?php echo $recurso["id_recurso"] ?>">
		<div class="recurso_titulo" id="<?php echo 'rec'.$recurso['id_recurso']; ?>"><?php echo $recurso["titulo"]; ?></div>
		<div class="recurso_left">
			<img src="<?php echo URL::site("resources/img/recursos/$recurso[id_tipo].png"); ?>" class="recurso_icon">
			<div style="text-align:center;">
				<div class="recurso_ler">
				<?php if((int) $recurso["dias_liberacao"] < 0){ ?>
					Ler antes do curso
				<?php }else{
					echo $recurso["data_liberacao"]." - ".$recurso["dia_semana"];
				} ?><br>
				<?php if($recurso["id_tipo"]==1) echo "<br>".$turma["horarios"]; ?>
				</div>
			</div>
		</div>
		<div class="recurso_right">
			<?php echo str_replace("\n","<br>",$recurso["texto_descricao"]);
			if($recurso['id_tipo']==9):
				$recmsg='';
				$lista_anexos = '';
				
				if(isset($recurso['anexos'])):
					$lista_anexos = '<table class="pretty_table">'
						. '<tr class="pretty_table_title">'
							. '<td> Nome do arquivo'
							. '<td><td>';
					foreach($recurso['anexos'] as $anexo):
						$aid = "anexo_xx_{$anexo['id']}{$anexo['id_inscrito']}{$anexo['id_recurso']}";
						
						$lista_anexos .= '<tr id="'.$aid.'">'
											. '<td> '.$anexo['nome_arquivo']
											. '<td style="width:60px;text-align:center;"> <a href="'.URL::site($anexo['url']).'">Baixar</a>'
											. '<td style="width:60px;text-align:center;"> '
											. '<a href="javascript:excluirRecurso('.$anexo['id'].','.$anexo['id_inscrito'].','.$anexo['id_recurso'].','.$aid.')">'
											. 'Excluir</a>';
					endforeach;
					$lista_anexos .= '</table>';
				endif;
				
				if(isset($recur) && $recur==$recurso['id_recurso']) $recmsg = '<div style="font-weight:bold;color:#0C0;margin-top:40px;">Upload efetuado com sucesso!</div>';
				echo '
				<br>
				'.$recmsg.'
				&nbsp;<br>&nbsp;<br>
				<form enctype="multipart/form-data" method="post" action="'.$current_url.'/upload_'.$recurso['id_recurso'].'?next='.$current_url.'#rec'.$recurso['id_recurso'].'">
				<input type="file" name="file1"><br>
				<input type="file" name="file2"><br>
				<input type="file" name="file3"><br>
				<input type="file" name="file4"><br>
				<input type="file" name="file5"><br>
				<br><button type="submit" class="btn-blue">Upload</button>
				</form>
				<br>
				
				'.$lista_anexos.'
				
				<br><br>&nbsp;<br>
				';
			elseif ($recurso['id_tipo']==11):
				$recmsg='';
				$lista_anexos = '';
				
				if(isset($recurso['anexos'])):
					$lista_anexos = '<table class="pretty_table">'
						. '<tr class="pretty_table_title">'
							. '<td> Nome do arquivo'
							. '<td><td>';
					foreach($recurso['anexos'] as $anexo):
						$aid = "anexo_xx_{$anexo['id']}{$anexo['id_inscrito']}{$anexo['id_recurso']}";
						
						$lista_anexos .= '<tr id="'.$aid.'">'
											. '<td> '.$anexo['nome_arquivo']
											. '<td style="width:60px;text-align:center;"> <a href="'.URL::site($anexo['url']).'">Baixar</a>'
											. '<td style="width:60px;text-align:center;"> '
											. '<a href="javascript:excluirRecurso('.$anexo['id'].','.$anexo['id_inscrito'].','.$anexo['id_recurso'].','.$aid.')">'
											. 'Excluir</a>';
					endforeach;
					$lista_anexos .= '</table>';
				endif;
				
				if(isset($recur) && $recur==$recurso['id_recurso']) $recmsg = '<div style="font-weight:bold;color:#0C0;margin-top:40px;">Upload efetuado com sucesso!</div>';
				echo '
				<br>
				'.$recmsg.'
				&nbsp;<br>&nbsp;<br>
				<form enctype="multipart/form-data" method="post" action="'.$current_url.'/upload_'.$recurso['id_recurso'].'?sup=uek283&next='.$current_url.'#rec'.$recurso['id_recurso'].'">
				<input type="file" name="file1"><br>
				<input type="hidden" name="is_single_upload" value="1">
				<br><button type="submit" class="btn-blue">Upload</button>
				</form>
				<br>
				
				'.$lista_anexos.'
				
				<br><br>&nbsp;<br>
				';
			elseif($recurso['link']):
				
				/*echo '
				<br><br>
				<a href="'.URL::site("cursos/redirectrecurso/$turma[id_inscrito]-$turma[id_curso]-$recurso[id_tipo]-$recurso[id_recurso]").'" target="_blank" class="btn-blue">
					Acessar Conteúdo
				</a>';*/
				echo '<br><br>'.parseLinks($recurso['link'],$turma,$recurso);
			endif;
			?>
		</div>
		<br class="clearfix">
	<?php } ?>
</ul>

<br><br>
<?php if ($curso["id"] != 7) { ?>
<div style="text-align:center;font-size:14px;color:#666;">
	<?php if($certificado){ ?>
	<h1 style="font-size: 20px;">Parabéns! Você foi aprovado neste curso!</h1>
	<p style="text-align: center; padding-bottom: 10px;">Você pode optar por gerar um certificado digital (em PDF) ou por<br> adquirir o certificado impresso (entregue via Correios) por apenas R$ 25,00.</p>
	<a  href="javascript: checarDepoimento()" class="btn-blue" style="padding:10px 20px;font-size:16px;font-weight:bold;">
		Certificado Digital
	</a>
	<a href="javascript: checarDepoimento2()" target="_blank" class="btn-blue" style="padding:10px 20px;font-size:16px;font-weight:bold;">
		Certificado Impresso
	</a>
	<?php }else{ ?>
	<button style="padding:20px 50px;font-size:16px;font-weight:bold;" disabled> Imprimir Certificado </button>
	<br><br>
	Você poderá imprimir seu certificado após aprovação no curso
	<?php } ?>
</div>
<?php } ?>

<script>
			
//variáveis para a função checarDepoimento
var url_depoimentos = "<?php echo URL::site('depoimentos/checarSeEscreveu'); ?>";
var id_inscrito = "<?php echo $turma["id_inscrito"]; ?>";
var url_certificado = "<?php echo URL::site('cursos/certificado/$turma[id_inscrito]-$turma[id_curso]'); ?>"; //certificado digital
var url_certificado2 = "http://paghoje.com.br/sigma-recursos?page=shop.product_details&flypage=flypage.tpl&product_id=71&category_id=21"; //certificado impresso
var url_escreverDepoimento = "<?php echo URL::site('depoimentos/cadastrar/'.$turma["id_inscrito"]); ?>";

</script>