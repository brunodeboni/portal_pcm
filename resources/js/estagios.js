var telefone = $('#meu_telefone').val();

telefone = gioplugin.telefone.decodenum(telefone);

if(telefone) {
    // telefone é valido
}


function makeCnpj() {

		$("#cnpj").mask("99.999.999/9999-99");

}

function makeDate(){
	obj = document.getElementById('nascimento');
	vl = obj.value;
	l = vl.toString().length;

	switch(l){
		case 2:
			obj.value = vl + "/";
			break;
		case 5:
			obj.value = vl + "/";
			break;
	}
}

function contarCaracteres(box,valor,campospan){
	var conta = valor - box.length;
	document.getElementById(campospan).innerHTML = "Restam " + conta + " caracteres";
	if(box.length >= valor){
		document.getElementById(campospan).innerHTML = "Você atingiu o limite de caracteres.";
		document.getElementById("formacao").value = document.getElementById("formacao").value.substr(0,valor);
	}	
}

function detalhesEmpresa($telefone) {
	window.open('popup_empresa?telefone='+$telefone+'', 'Titulo', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=no,width=550,height=200');
}

function detalhesEstagiario($celular) {
	window.open('popup_estagiario?celular='+$celular+'', 'Titulo', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=no,width=900,height=200');
}
