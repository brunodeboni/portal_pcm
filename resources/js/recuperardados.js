
function validarFormularioRecuperardados(){
	var tel = gioplugin.telefone.decodenum($("#input_recuperar_celular").val());
	if(!gioplugin.validar.telefone(tel)){
		alert("O número de celular que você colocou é inválido!");
		return false;
	}
	
	var ischecked = $("input[name=modo]:checked").length;
	if(!ischecked){
		alert("Você deve selecionar uma das opções de recuperação");
		return false;
	}
	
	$("#input_recuperar_celular").val(tel);
	return true;
}

function novaSenhaChecarSenhas(){
	if($('#input_novasenha').val()==$('#input_novasenha2').val()) return true;
	
	alert("As senhas estão diferentes");
	return false;
}