<div style="display:block;margin:0;padding:20px 0;width:100%;background-color:#EEE;font-family:Tahoma, Geneva, sans-serif;font-size:14px;">
<div style="margin:auto;padding:10px;border:1px solid #CCC;border-radius:5px;box-shadow:0 0 2px #DDD;width:550px;background:#FFF;">
	<div style="display:block;margin-bottom:10px;padding:5px;border-bottom:1px solid #BBB;font-size:18px;font-weight:bold;">
    	<span style="color:#369;">CPCM</span> - Recupera&ccedil;&atilde;o de Dados
    </div>
    
    <p>Ol&aacute;, seu celular cadastrado &eacute;: <b><?php echo $rec_username; ?></b></p>
    <p>para recuperar sua senha <a href="<?php echo $rec_url; ?>">clique aqui</a>.</p>
    <br /><br />
    <div style="color:#666;">
    Se n&atilde;o estiver conseguindo acessar o link acima, voc&ecirc; pode colar o seguinte endere&ccedil;o no seu navegador:<br />
    </div>
    <div style="padding:5px;color:#693;">
    	<?php echo $rec_url; ?>
    </div>
    <br /><br /><br />
    <div style="text-align:center;font-size:12px;color:#666;">
    	Sistema de recupera&ccedil;&atilde;o de dados <a href="<?php echo URL::site("/",true); ?>" style="color:#333;">CPCM</a>.
    </div>
</div>
</div>