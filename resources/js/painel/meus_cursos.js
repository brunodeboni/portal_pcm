/**
 * Deleta um curso
 * 
 * @method deletar_curso
 * @param {int} curso_id
 * @param {string} curso_nome
 */
function deletar_curso(curso_id, curso_nome) {
	var msgc = '***** ATENÇÃO *****\r\n';
	msgc += 'Você tem certeza que deseja deletar este curso?\r\n';
	msgc += curso_nome;
	
	if(!confirm(msgc)) return false;
	
	$.post('/painel/meus_cursos/deletar_curso', {
		csrf: gv('csrf_token'),
		curso_id: curso_id
	}, function(data) {
		alert(data);
	}).always(function() {
		/*
		location.reload();
		document.location = document.location;
		*/
	});
}
