function excluirRecurso(id,id2,id3,ide){
	if(!confirm("Tem certeza de que deseja excluir este arquivo? Esta operação não pode ser desfeita")) return;
	
	var onurl = window.cpcfg.url.ajax+'/delrecurso';
	$.post(onurl,{id:id,id2:id2,id3:id3},function(){
		alert("Arquivo removido com sucesso.");
		$(ide).remove();
	});
}

function recurso_acesso(nivel){
	switch(nivel){
		case 0: case 1:
			//alert('ok');
			return true;
			break;
		case 2:
			alert("O prazo para a realização desta atividade acabou. O link da atividade será aberto, porém qualquer nova atividade será desconsiderada.");
			return true;
			break;
		case 3:
			alert("Esta atividade não pode ser acessada após o fim do curso! O link não será aberto.");
			return false;
			break;
	}
	return true;
}

//verifica se o inscrito já escreveu depoimento sobre o curso, para liberar o certificado digital
function checarDepoimento() {
	
	$.post(url_depoimentos, {id_inscrito: id_inscrito}, function(data) {
		executar(data);
	});
}

//callback function de checarDepoimento
function executar(data) {
	if (data == 'true') {
		window.location = url_certificado;
	}else if (data == 'aguardando') {
		alert('Seu depoimento sobre este curso está aguardando aprovação. Em até 8 horas úteis, você poderá imprimir seu certificado.');
	}else if (data == 'rejeitado') {
		alert('Seu depoimento sobre este curso foi considerado incoerente. Por favor, contate-nos para imprimir seu certificado.');
	}else if (data == 'false'){
		alert('Antes de imprimir seu certificado, por favor cadastre seu depoimento sobre este curso.');
		window.location = url_escreverDepoimento;
	}
}

//verifica se o inscrito já escreveu depoimento sobre o curso, para liberar o certificado impresso
function checarDepoimento2() {
	
	$.post(url_depoimentos, {id_inscrito: id_inscrito}, function(data) {
		executar2(data);
	});
}

//callback function de checarDepoimento
function executar2(data) {
	if (data == 'true') {
		window.location = url_certificado2;
	}else if (data == 'aguardando') {
		alert('Seu depoimento sobre este curso está aguardando aprovação. Em até 8 horas úteis, você poderá imprimir seu certificado.');
	}else if (data == 'rejeitado') {
		alert('Seu depoimento sobre este curso foi considerado incoerente. Por favor, contate-nos para imprimir seu certificado.');
	}else if (data == 'false'){
		alert('Antes de imprimir seu certificado, por favor cadastre seu depoimento sobre este curso.');
		window.location = url_escreverDepoimento;
	}
}