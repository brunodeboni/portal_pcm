function enviarContatoMensagem(){
	var valido = true;
	
	// Campos em branco
	$('#copr_formulario .requerido').each(function(index, element){
		$el = $(element);
		if($el.val()==''){
			alert('O campo '+$el.attr('name')+' não pode ficar em branco');
			valido = false;
			return false;
		}
	});
	if(!valido){return false;}
	
	// E-mail
	if(!gioplugin.validar.email($('#copr_formulario input[name=email]').val())){
		alert('Digite um e-mail válido');
		return false;
	}
	
	// Tudo certo, envia mensagem
	// url
	var onurl = window.cpcfg.url.ajax+'/rimsg';
	// vars
	var nome  = $('#cnome').val();
	var email = $('#cemail').val();
	var msg   = $('#cmensagem').val();
	// antes de enviar
	var bt = $('#cenviar');
	bt.attr('disabled',true);
	$.post(onurl,{nome:nome,email:email,mensagem:msg},function(data){
		if(data=='true'){
			bt.after('Mensagem enviada com sucesso');
			alert("Sua mensagem foi enviada com sucesso, entraremos em contato.");
		}else{
			bt.after('<span style="color:red">Mensagem não enviada.</span>');
			alert("Mensagem não enviada, erro no servidor. Tente novamente mais tarde.");
		}
	});
	
	return true;
}