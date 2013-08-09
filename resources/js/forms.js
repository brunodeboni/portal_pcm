var form_states = {
	
	'current_state': false,
	'prev_state':    false,
	
};

function form_goto(validate_form, State_num)
{
	if(validate_form !== false) {
		var nx_state = form_validate(form_states.current_state.attr('data-state'));
		if(!nx_state) return false;
		return form_goto(false,nx_state);
	}
	
	$("#form_start").hide();
	$(".form_page").hide();
	
	if(current_state) {
		var prev_state = current_state;
	}
	var current_state = $("#form_page_"+State_num);
	
	form_states.current_state = current_state || false;
	form_states.prev_state    = prev_state    || false;
	
	current_state.show();
}







var form_validations = {
	'st1': function()
		{
			var ch = $('input[name=exp_pcm]:checked');
			if( !ch.length ) {
				return 'Você deve selecionar uma das opções antes de continuar';
			}
			
			// Respondeu SIM
			if(parseInt(ch.val()) === 1) {
				return 2;
			}
			
			// Respondeu NÃO
			return 7;
		},
	
	'st2': function()
		{
			if($.trim($('#experiencia').val())=='') {
				return 'Você deve preencher o campo de experiencia';
			} 
			
			if($('#experiencia').val().length > 500) {
				return 'Campo de experiência contém mais de 500 caracteres.';
			}
			
			var ch = $('input[name=utilizou_software_pcm]:checked');
			if( !ch.length ) {
				return 'Você deve responder se já utilizou ou utiliza um software para gestão de manutenção';
			}
			
			// Respondeu SIM
			if(parseInt(ch.val()) === 1) {
				return 3;
			}
			
			// Respondeu NÃO
			return 7;
		},
	
	'st3': function()
		{
			if($.trim($('#software_nome').val())=='') {
				return 'Você deve preencher o nome da empresa';
			}
			
			if($('#software_nome').val().length > 500) {
				return 'Campo de software contém mais de 500 caracteres.';
			}
			
			if( $('input[name=software_nota]:checked').length!=1 ) {
				return 'Você deve dar uma nota para o software';
			}
			
			if( !$('input.software_recursos_utilizados:checked').length ) {
				return 'Você deve selecionar, ao menos, um dos recursos que mais utiliza no software de manutenção';
			}
			
			if( !$('input.software_dificuldades:checked').length ) {
				return 'Você deve selecionar, ao menos, uma dificuldade que encontrou no software de manutenção';
			}
			
			return 4;
		},
	
	'st4': function()
		{
			if(!(
				$('input.relatorios_diarios:checked').length &&
				$('input.relatorios_gerencia:checked').length &&
				$('input.relatorios_graficos:checked').length
			)) {
				return 'Você deve marcar, ao menos, uma das opções de cada pergunta';
			}
			
			return 5
		},
	
	'st5': function()
		{
			if( ! $('input.maiores_desafios:checked').length ) {
				return 'Você deve marcar, ao menos, uma opção';
			}
			
			return 6;
		},
	
	'st6': function()
		{
			if( ! $('input.controle_manutencao:checked').length ) {
				return 'Você deve marcar, ao menos, uma opção';
			}
			if( $.trim($('#descrever_formacao').val())=='' || $.trim($('#descrever_experiencia').val())=='' ) {
				return 'Você deve preencher todos os campos';
			}
			
			if($('#descrever_formacao').val().length > 500) {
				return 'Campo de formação contém mais de 500 caracteres.';
			}
			
			if($('#descrever_experiencia').val().length > 500) {
				return 'Campo de experiência profissional contém mais de 500 caracteres.';
			}
			
			// Enviar formulário
		},
	
	'st7': function()
		{
			var ch = $('input[name=como_controle_manutencao]:checked');
			if( !ch.length ) {
				return 'Você deve selecionar uma das opções antes de continuar';
			}
			
			switch(parseInt(ch.val())) {
				case 1: case 2:
					return 4;
				case 0:
					return 5;
			}
		},
};

/**
 * Verifica se os dados preenchidos são válidos e vai pro prox. state
 *
 * Exibe um alerta + return false se o formulário for inválido
 * mas retorna o próximo state se for válido
 */
function form_validate(State_num)
{
	if(!typeof form_validations['st'+State_num] === 'function') return false;
	
	var fval = form_validations['st'+State_num];
	
	var val = fval(State_num);
	
	var tipo = typeof val;
	
	if(tipo === 'int' || tipo === 'integer' || tipo === 'number') {
		return val;
	} else if(tipo === 'string') {
		alert(val);
		return false;
	}
	
	
	alert("Houve um erro de validação, por favor, verifique se os dados estão preenchidos corretamente");
	return false;
}




/**
 * Cria os botões de navegação do questionário
 */
$(document).ready(function() {
	var html = '<button type="button" onclick="form_goto()">Continuar »</button>';
	$('.form_button').html(html);
});