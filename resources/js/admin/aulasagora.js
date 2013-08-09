function naoAgora(rec){
	if(!confirm('Tem certeza?')) return;
	$.post(window.cpcfg.url.ajaxadmin+'terminar_aula_agora',{rec:rec},function(data){
		alert("Retirada!\r\n\r\nResposta do servidor: "+data);
		location.reload();
	});
}

function simAgora(rec,turma){
	if(!confirm('Tem certeza?')) return;
	$.post(window.cpcfg.url.ajaxadmin+'iniciar_aula_agora',{rec:rec,turma:turma},function(data){
		alert("Turma Iniciada!\r\n\r\nResposta do servidor: "+data);
		location.reload();
	});
}