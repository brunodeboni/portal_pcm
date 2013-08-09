var modal_edit_id = 'painel_modal_addaula';
var fcampos = {
	_id: {date: 'pmadda_data', time: 'pmadda_hora', time2: 'pmadda_hora2'}
};

/**
 * Fecha o modal
 * 
 * @method pmadda_close
 */
function pmadda_close() {
	$('#'+modal_edit_id).fadeOut(100);
}

/**
 * Abre o modal
 * 
 * @method pmadda_open
 * @param {object} aula Se este parâmetro existir, abre o de edição de aula com esse aula.
 *                      Caso contrário, abre o modal de criar uma nova aula.
 */
function pmadda_open(aula) {
	pmadda_ajustar.set(aula);
	$('#'+modal_edit_id).fadeIn(100);
}





/**
 * Altera o modal de acordo com a ação exercida na aula (Novo ou Editar)
 *
 * @property pmadda_ajustar
 * @type {Object}
 */
var pmadda_ajustar = {
	tipo: 'novo',
	
	set: function(aula) {
		if(aula) this.tipo = 'edit';
		else this.tipo = 'novo';
		
		var conf = {
			description: ['pm_description','Cadastrar nova aula','Editar aula: '+((aula)?aula.id:'')],
			button_add: ['pmadda_bt_add','Adicionar','Atualizar'],
		};
		
		var dd = -1;
		
		switch(this.tipo) {
			case 'novo':
				dd = 1;
				this.preencher({
					pmadda_aula:'',
					pmadda_titulo:'',
					pmadda_data:'',
					pmadda_hora:'',
					pmadda_hora2:'',
					pmadda_link:'',
					pmadda_descricao:''});
				break;
			case 'edit':
				dd = 2;
				this.preencher({
					pmadda_aula: aula.id,
					pmadda_titulo: aula.titulo,
					pmadda_data: datetime_mysql2brdate(aula.datahora),
					pmadda_hora: datetime_mysql2time(aula.datahora),
					pmadda_hora2: datetime_mysql2time(aula.datahora_final),
					pmadda_link:aula.link,
					pmadda_descricao: aula.descricao});
				break;
			default:
				alert('ERRO, impossível ajustar a janela de cadastrar aula');
				return;
		}
		
		if(dd < 1) {
			alert('Erro, impossível ajustar a janela de cadastrar aula');
			return;
		}
		
		$.each(conf, function(index,element) {
			$('#'+element[0]).html(element[dd]);
		});
	},
	
	preencher: function(dados) {
		$.each(dados, function(index,element) {
			$('#'+index).val(element);
		});
	}
};


/**
 * Função usada pelo botão Adicionar para ver se deve adicionar
 * ou editar uma aula já existente
 * 
 * @method pmadda
 */
function pmadda() {
	switch(pmadda_ajustar.tipo) {
		case 'novo':
			_pmadda_novo();
			break;
		case 'edit':
			_pmadda_edit();
			break;
		default:
			alert('Erro! Ação indefinida...');
			break;
	}
}

/**
 * Adicionar nova aula
 *
 * @method _pmadda_novo
 */
function _pmadda_novo() {
	var xdate  = fcampos.date.datepicker('getDate');
	var xtime  = fcampos.time.timepicker('getTime');
	var xtime2 = fcampos.time2.timepicker('getTime');
	
	var minHour = painel_editar.minHour;
	var maxHour = painel_editar.maxHour;
	
	// Verifica campos vazios
	if(vazio(fcampos._id['date']) || vazio(fcampos._id['time']) || vazio(fcampos._id['time2'])) {
		alert('Preencha todos os campos corretamente');
		return false;
	}
	
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
	
	$('#pmadda_bt_add').attr('disabled','disabled');
	$.post('/painel/editar_turmas/criar_aula', {
		csrf:       gv('csrf_token'),
		curso_id:   gv('param_id'),
		turma_id:   gv('param_id2'),
		titulo:     gv('pmadda_titulo'),
		link:       gv('pmadda_link'),
		descricao:  gv('pmadda_descricao'),
		inicio:     datetime_format_mysql(xtime),
		fim:        datetime_format_mysql(xtime2)
	}, function(data) {
		alert(data);
		//location.reload();
	}).fail(function() {
		alert('Ocorreu um erro inesperado ao tentar adicionar a nova aula');
	}).always(function() {
		$('#pmadda_bt_add').attr('disabled',false);
	});
}

/**
 * Editar uma aula já existente
 *
 * @method _pmadda_edit
 */
function _pmadda_edit() {
	var xdate  = fcampos.date.datepicker('getDate');
	var xtime  = fcampos.time.timepicker('getTime');
	var xtime2 = fcampos.time2.timepicker('getTime');
	
	var minHour = painel_editar.minHour;
	var maxHour = painel_editar.maxHour;
	
	// Verifica campos vazios
	if(vazio(fcampos._id['date']) || vazio(fcampos._id['time']) || vazio(fcampos._id['time2'])) {
		alert('Preencha todos os campos corretamente');
		return false;
	}
	
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
	
	$('#pmadda_bt_add').attr('disabled','disabled');
	$.post('/painel/editar_turmas/editar_aula', {
		csrf:       gv('csrf_token'),
		curso_id:   gv('param_id'),
		turma_id:   gv('param_id2'),
		aula_id:    gv('pmadda_aula'),
		titulo:     gv('pmadda_titulo'),
		link:       gv('pmadda_link'),
		descricao:  gv('pmadda_descricao'),
		inicio:     datetime_format_mysql(xtime),
		fim:        datetime_format_mysql(xtime2)
	}, function(data) {
		alert(data);
		location.reload();
		document.location = document.location;
	}).fail(function() {
		alert('Ocorreu um erro inesperado ao tentar adicionar a nova aula');
	}).always(function() {
		$('#pmadda_bt_add').attr('disabled',false);
	});
}


$(document).ready(function() {
	// Atualizar os campos
	fcampos['date']  = $('#'+fcampos._id.date);
	fcampos['time']  = $('#'+fcampos._id.time);
	fcampos['time2'] = $('#'+fcampos._id.time2);
	
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
