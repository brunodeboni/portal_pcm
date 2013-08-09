//Função drag and drop da página pendentes
$(function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  });

//callback function da buscaTurmas()
function executarTurma(data)  { 
	var turmas = $.parseJSON(data);
	$('#turmas').removeAttr('disabled');
	
	for (var i in turmas) {
		var turma = turmas[i].id;
		var periodo = turmas[i].periodo;
		$('#turmas').append('<option value="'+turma+'">'+turma+': '+periodo+'</option>');
	}

}
	
function buscaTurmas(curso) {
	
	$.post(url_turma, {curso: curso}, function(data) {
		executarTurma(data);
	});
	
}	 	

//callback function da buscaInscritos()
function executarInsc(data)  { 
	var inscritos = $.parseJSON(data);
	$('#inscritos').removeAttr('disabled');
	
	for (var i in inscritos) {
		var id_inscrito = inscritos[i].id; 
		var inscrito = inscritos[i].nome;
		$('#inscritos').append('<option value="'+id_inscrito+'">'+inscrito+'</option>');
	}

}
	
function buscaInscritos(turma) {
	
	$.post(url_inscritos, {turma: turma}, function(data) {
		executarInsc(data);
	});
	
	
}

function checkDepoimentoAdmin() {
	
	if($('#depoimento').val().length > 0 && $('#inscritos').val() != "") {
		document.forms["cadastre_admin"].submit();
	}else {
		alert('Você deve selecionar um aluno e preencher o campo de texto com um depoimento.');
	}
	
}

function checkDepoimentoUsuario() {
	if($('#depoimento').val().length > 0) {
		document.forms["cadastre_usu"].submit();
	}else {
		alert('Você deve preencher o campo de texto com seu depoimento.');
	}
}