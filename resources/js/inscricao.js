function mostrarErros(erros){
	var erromsg = "";
	var html = '<div class="erro">{erro}</div>';
	for(i=0;i<erros.length;i++){
		erromsg += html.replace("{erro}",erros[i]);
	}
	$("#erromsgs").html(erromsg);
	$('html,body').animate({scrollTop:0},'fast');
}





$(document).ready(function(){
	$(".inp_txt_telefone").telefone();
	
	$("#bt_inscrever").click(function(evt){
		evt.preventDefault();
		var erros = [];
		
		// retirar espaços em branco do início e final dos valores dos campos de texto
		$("#inscricao_form input[type=text]").each(function(index,element){
			$(element).val($.trim($(element).val()));
		});
		
		/* VALIDAÇÕES */
			// Em branco
			if(typeof $("input[name=id_turma]:checked").val() != "string") erros[0] = "Você deve selecionar uma turma.";
			
			$(".inp_txt_required").each(function(index,element){
				element = $(element);
				if(element.val()=="") erros[erros.length] = "O campo "+element.attr("name")+" não pode ficar em branco.";
			});
			
			// Especiais
			$(".inp_txt_telefone").each(function(index,element){
				element = $(element);
				if(element.val()!=""){
					var numero = gioplugin.telefone.decodenum(element.val());
					if(!gioplugin.validar.telefone(numero)) erros[erros.length] = "O número de telefone informado no campo "+element.attr("name")+" é inválido.";
				}
			});
			
			$(".inp_txt_email").each(function(index,element){
				element = $(element);
				if(!gioplugin.validar.email(element.val()) && element.val()!="") erros[erros.length] = "O email informado no campo "+element.attr("name")+" é inválido.";
			});
		/* FIM DAS VALIDAÇÕES */
		
		
		if(erros.length>0){mostrarErros(erros);return false;}
		else{$("#inscricao_form").submit();return true;}
	});
});
