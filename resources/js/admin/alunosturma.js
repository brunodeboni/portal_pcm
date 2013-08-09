function checarCbAlunos(){
	$('input[name=cb_aluno]').attr('checked',$("#cbal").is(":checked"));
}

function excluirAlunos(){
	var qtd = 0;
	var qls = "";
	var lista = "";
	var toRemove = [];
	$('input[name=cb_aluno]:checked').each(function(index,element){
		self = $(element);
		qtd++;
		qls += "- "+self.attr('data-nome')+"\n";
		
		var trelem = $('#tr'+self.attr('id'));
		toRemove[toRemove.length] = trelem;
		
		if(lista == "") lista = self.val();
		else lista += ","+self.val();
	});
	
	if(!qtd){
		alert("Você deve selecionar ao menos um aluno para excluir da turma");
		return;
	}
	
	var comsg = "Você tem certeza que deseja excluir estes "+qtd+" alunos?\r\n";
	comsg += qls;
	if(!confirm(comsg)) return;
	
	// excluir
	$.post(window.cpcfg.url.ajaxadmin+'ban_alunos',{lista_alunos: lista, id_turma: $('#id_turma').html()},function(data){
		alert("Excluidos\r\n\r\n"+data);
		$.each(toRemove,function(index,element){
			$(element).remove();
		});
	});
}