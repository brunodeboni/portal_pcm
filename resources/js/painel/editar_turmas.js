var modal_edit_id = 'painel_modal_addturma';
var fcampos = {};

/**
 * Fecha o modal
 * 
 * @method pmaddt_close
 */
function pmaddt_close() {
	$('#'+modal_edit_id).fadeOut(100);
}

/**
 * Abre o modal
 * 
 * @method pmaddt_open
 */
function pmaddt_open() {
	$('#'+modal_edit_id).fadeIn(100);
}


function pmaddt()
{
	var xdate  = fcampos.date.datepicker('getDate');
	var xtime  = fcampos.time.timepicker('getTime');
	var xtime2 = fcampos.time2.timepicker('getTime');
	
	var minHour = painel_editar.minHour;
	var maxHour = painel_editar.maxHour;
	
	if(!xdate) {
		alert('Você precisa especificar uma data de início');
		fcampos.date.focus();
		return;
	}
	
	if(xtime.getHours() < minHour) {
		alert('A hora de início mínima é 0'+minHour+':00h');
		fcampos.time.focus();
		return;
	}
	
	if(xtime2.getTime() < (xtime.getTime()+30*60000)) {
		alert('A hora de terminar deve ser maior que a hora de iniciar a aula');
		fcampos.time2.focus();
		return;
	}
	
	if(xtime2.getHours() > maxHour || (xtime2.getHours()==maxHour && xtime2.getMinutes() > 0)) {
		alert('A hora máxima de terminar a aula deve ser '+maxHour+':00h');
		return;
	}
	
	
	xdate = [xdate.getDate(), xdate.getMonth(), xdate.getFullYear()];
	
	xtime.setDate(xdate[0]);
	xtime.setMonth(xdate[1]);
	xtime.setFullYear(xdate[2]);
	
	xtime2.setDate(xdate[0]);
	xtime2.setMonth(xdate[1]);
	xtime2.setFullYear(xdate[2]);
	
	// Enviar post e salvar dados
	// *************
	$('#pmaddt_bt_add').attr('disabled','disabled');
	//console.log(xtime.getTime());
	//console.log(xtime.getDate()+'/'+xtime.getMonth()+'/'+xtime.getFullYear()+' '+xtime.getHours()+':'+xtime.getMinutes());
	$.post('/painel/editar_turmas/criar_turma', {
		csrf:       gv('csrf_token'),
		curso_id:   gv('param_id'),
		inicio:     datetime_format_mysql(xtime),
		fim:        datetime_format_mysql(xtime2)
	}, function(data) {
		data = data.split('#',2);
		alert(data[0]);
		//////////////////////////////////////////////////////////////////
		/* Ao invés de recarregar, deve ir pra edição de aulas da turma */
		//////////////////////////////////////////////////////////////////
		//location.reload();
		location.href = '/painel/editar_turmas/'+gv('param_id')+'/'+data[1];
	}).fail(function() {
		alert('Ocorreu um erro inesperado ao tentar criar o nova turma');
	}).always(function() {
		$('#pmaddt_bt_add').attr('disabled',false);
	});
}


$(document).ready(function() {
	// Atualizar os campos
	fcampos = {
		date:   $('#pmaddt_date'),
		time:   $('#pmaddt_time'),
		time2:  $('#pmaddt_time2')
	};
	
	// Inicializar os componentes
	fcampos.date.datepicker({dateFormat: 'dd/mm/yy'});
	
	fcampos.time2.timepicker({
		'forceRoundTime': true,
		'timeFormat': 'H:i',
		'minTime': '9:00am',
		'maxTime': '11:00pm',
		'showDuration': true
	});
	
	fcampos.time.timepicker({
		'forceRoundTime': true,
		'timeFormat': 'H:i',
		'minTime': '9:00am',
		'maxTime': '11:00pm',
	}).on('changeTime',function() {
		fcampos.time2.timepicker('option', 'minTime', $(this).timepicker('getTime'));
	});
});
