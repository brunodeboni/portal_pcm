var modal_recurso_id = 'painel_modal_addrecurso';

/**
 * Abre o modal de recurso
 * 
 * @method pmaddr_open
 * @param {object} recurso Se este parâmetro existir, abre o de edição de recurso com esse recurso.
 *                         Caso contrário, abre o modal de criar um novo recurso.
 */
function pmaddr_open(recurso) {
	pmaddr_ajustar.set(recurso);
	$('#'+modal_recurso_id).fadeIn(100);
}

/**
 * Fecha o modal
 * 
 * @method pmaddr_close
 */
function pmaddr_close() {
	$('#'+modal_recurso_id).fadeOut(100);
}


/**
 * Altera o modal de acordo com a ação exercida no recurso (Novo ou Editar)
 *
 * @property pmaddr_ajustar
 * @type {Object}
 */
var pmaddr_ajustar = {
	tipo: 'novo',
	
	set: function(recurso) {
		if(recurso) this.tipo = 'edit';
		else this.tipo = 'novo';
		
		var conf = {
			description: ['pm_description','Cadastrar novo recurso','Editar recurso: '+((recurso)?recurso.id:'')],
			button_add: ['pmaddr_bt_add','Adicionar','Atualizar'],
		};
		
		var dd = -1;
		
		switch(this.tipo) {
			case 'novo':
				dd = 1;
				this.preencher({
					pmaddr_recurso:'',
					pmaddr_titulo:'',
					pmaddr_link:'',
					pmaddr_descricao:'',
					pmaddr_tipo:''});
				break;
			case 'edit':
				dd = 2;
				this.preencher({
					pmaddr_recurso:recurso.id,
					pmaddr_titulo:recurso.titulo,
					pmaddr_link:recurso.link,
					pmaddr_descricao:recurso.texto_descricao,
					pmaddr_tipo:recurso.id_tipo});
				break;
			default:
				alert('ERRO, impossível ajustar a janela de cadastrar recurso');
				return;
		}
		
		if(dd < 1) {
			alert('Erro, impossível ajustar a janela de cadastrar recurso');
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
 * ou editar um recurso já existente
 * 
 * @method pmaddr
 */
function pmaddr() {
	switch(pmaddr_ajustar.tipo) {
		case 'novo':
			_pmaddr_novo();
			break;
		case 'edit':
			_pmaddr_edit();
			break;
		default:
			alert('Erro! Ação indefinida...');
			break;
	}
}

/**
 * Adicionar novo recurso
 *
 * @method _pmaddr_novo
 */
function _pmaddr_novo() {
	// Verifica campos vazios
	if(vazio('pmaddr_titulo') || vazio('pmaddr_tipo') || (vazio('pmaddr_link') && vazio('pmaddr_descricao'))) {
		alert('Preencha todos os campos corretamente');
		return false;
	}
	
	// OK
	$('#pmaddr_bt_add').attr('disabled','disabled');
	$.post('/painel/editar_recursos/criar_recurso', {
		csrf:       gv('csrf_token'),
		curso_id:   gv('param_id'),
		tipo:       gv('pmaddr_tipo'),
		titulo:     gv('pmaddr_titulo'),
		link:       gv('pmaddr_link'),
		descricao:  gv('pmaddr_descricao')
	}, function(data) {
		alert(data);
		location.reload();
		document.location = document.location;
	}).fail(function() {
		alert('Ocorreu um erro inesperado ao tentar criar o novo recurso');
	}).always(function() {
		$('#pmaddr_bt_add').attr('disabled',false);
		//pmaddr_close();
	});
}

/**
 * Editar um recurso já existente
 *
 * @method _pmaddr_edit
 */
function _pmaddr_edit() {
	// Verifica campos vazios
	if(vazio('pmaddr_titulo') || vazio('pmaddr_tipo') || (vazio('pmaddr_link') && vazio('pmaddr_descricao'))) {
		alert('Preencha todos os campos corretamente');
		return false;
	}
	
	// OK
	$('#pmaddr_bt_add').attr('disabled','disabled');
	$.post('/painel/editar_recursos/editar_recurso', {
		recurso_id:  gv('pmaddr_recurso'),
		csrf:        gv('csrf_token'),
		curso_id:    gv('param_id'),
		tipo:        gv('pmaddr_tipo'),
		titulo:      gv('pmaddr_titulo'),
		link:        gv('pmaddr_link'),
		descricao:   gv('pmaddr_descricao')
	}, function(data) {
		alert(data);
		location.reload();
		document.location = document.location;
	}).fail(function() {
		alert('Ocorreu um erro inesperado ao tentar atualizar o recurso');
	}).always(function() {
		$('#pmaddr_bt_add').attr('disabled',false);
		//pmaddr_close();
	});
}

//$(document).ready(function(){pmaddr_open();});
