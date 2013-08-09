<?php
require 'config.php';

$id_usuario = isset($_GET['uid'])?$_GET['uid']:63; // @int  $_GET['uid']  | id do usuário para pegar os testes
$id_teste   = isset($_GET['tid'])?$_GET['tid']:0; // @int  $_GET['tid']  | 0 pega todos

$testes = Conf::getUserTesteInfo($id_usuario,$id_teste);
?>


<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>TDC Pontuação</title>
	<style>
		*{margin:0;padding:0;}
		body{
			font-size:13px;
			font-family:Arial, Tahoma, Geneva, sans-serif;
		}
		#testes{
			display:block;
			margin:auto;
			width:100%;
			min-width:400px;
			max-width:550px;
		}
		.testetitulo{
			background:#EEE;
			padding:5px;
			border:2px solid #AAA;
			font-size:22px;
			font-weight:bold;
		}
		.testedesc{
			display:block;
			padding:10px;
			background:#FFF;
			color:#333;
			text-align:right;
			font-size:18px;
		}
		
		.perguntas_container{
			margin-bottom:20px;
		}
		.respostas_container{
			display:none;
		}
		
		
		.resposta_container{
			margin:1px 0;
			padding:5px;
		}
		
		.apergunta{
			margin-bottom:5px;
			font-weight:bold;
			font-size:14px;
		}
		
		.resposta_correta .aresposta{
			color:#090;
		}
		.resposta_correta{
			border:1px solid #090;
		}
		
		.resposta_errada{
			color:#D99;
		}
	</style>
	<script type="text/javascript">
		function mostrarRespostas(resp_id){
			var resp = document.getElementById(resp_id);
			var disp = 'block';
			if(resp.style.display=='block') disp = 'none';
			resp.style.display = disp;
		}
	</script>
</head>
<body>

<div id="testes">
<?php
//echo'<pre>';print_r($testes);die();

if($testes): foreach($testes as $teste){
		
	?>
		<div class="perguntas_container">
			<div class="testetitulo">
				<?php echo $teste['nome']; ?>
				<div class="testedesc">
					<a style="float:left;font-size:16px;" href="javascript:mostrarRespostas('reco_<?php echo $teste['id_teste']; ?>');">Mostrar Respostas</a>
					Acertos: <?php echo "{$teste['count_acertos']}/{$teste['count_perguntas']}"; ?>
				</div>
			</div>
			
			<div class="respostas_container" id="reco_<?php echo $teste['id_teste']; ?>">
			<?php foreach($teste['linhas'] as $linha){ ?>
				<div class="resposta_container resposta_<?php echo $linha['correta']==1?'correta':'errada'; ?>">
					<div class="apergunta">
						<?php echo $linha['pergunta']; ?>
					</div>
					<div class="aresposta">
						<?php echo $linha['resposta']; ?>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	<?php
		
}; endif;
?>
</div>




</body>
</html>