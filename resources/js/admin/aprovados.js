aprovadosCount = 0;

function salvarAprovados(){
	var aurl = window.cpcfg.url.ajaxadmin+'salvaraprovado';
	
	aprovadosCount = $('.inp_status').length;
	
	$('.inp_status').each(function(index,element){
		var self = $(element);
		var idu = self.attr('data-idu');
		var idt = self.attr('data-idt');
		var idi = self.attr('data-idi');
		var status = parseInt($('#di_'+idu+idt+idi).val());
		
		$.post(aurl, {idu:idu,idt:idt,idi:idi,status:status}).done(function(){
			aprovadosCount--;
		});
		
	});
	
	aointerval = setInterval(function(){
		if(aprovadosCount>0) return;
		
		clearInterval(aointerval);
		alert("Dados salvos");
		location.reload();
	},1500);
}


function avaliarTurma(){
	var msg = '***** ATENÇÃO ***** \r\n Se você decidir continuar ';
	msg    += 'O STATUS DE TODOS OS ALUNOS podem mudar e você perderá ';
	msg    += 'todas as alterações.\r\n Deseja continuar mesmo assim?';
	if(!confirm(msg)){
		return false;
	}
	
	$("#bt_avaliarturma").attr('disabled',true);
	var aurl = window.cpcfg.url.ajaxadmin+'avaliarturma';
	$.post(aurl, {turma: $('#cfg_turma').html()}, function(data){
		if(data=='true') {
			alert('Turma avaliada com sucesso');
		}else{
			alert("Erro ao avaliar turma\r\nResposta do servidor:\r\n"+data);
		}
		
		window.location.reload();
	});
}