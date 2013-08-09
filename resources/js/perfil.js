function makeDate(obj){
	vl = obj.value;
	l = vl.toString().length;
	
	switch(l){
		case 2:
			obj.value = vl + "/";
			break;
		case 5:
			obj.value = vl + "/";
			break;
	}
}

function tel(inp) {
	var n = inp.value;
	var c = n.toString().length;

	switch(c) {
		case 1:
			inp.value = "(" + n;
			break;
		case 3:
			inp.value = n + ")";
			break;
		case 8:
			inp.value = n + "-";
			break;
	}
	
}

function checarEmail(mail){
	if(mail.length==0) return true;
	
	if ((mail.length > 7) && !((mail.indexOf("@") < 1) || (mail.indexOf('.') < 1)))
		{return true;}
	else
		{return false;}
}

function avalie(num) {
	$('#inp_avalie').val(num);
	$('#star'+(num-1)).html('<img src="'+yellowstar+'" width="20">');
	$('#star'+(num-2)).html('<img src="'+yellowstar+'" width="20">');
	$('#star'+(num-3)).html('<img src="'+yellowstar+'" width="20">');
	$('#star'+(num-4)).html('<img src="'+yellowstar+'" width="20">');
	$('#star'+num).html('<img src="'+yellowstar+'" width="20">');
	$('#star'+(num+1)).html('<img src="'+redstar+'" width="20">');
	$('#star'+(num+2)).html('<img src="'+redstar+'" width="20">');
	$('#star'+(num+3)).html('<img src="'+redstar+'" width="20">');
	$('#star'+(num+4)).html('<img src="'+redstar+'" width="20">');
}

function disp(v) {
	if (v == "Sim") {
		$('#tempo_usuario').show();
		$('#avalie').show();
	}else {
		$('#tempo_usuario').css('display', 'none');
		$('#avalie').css('display', 'none');
	}
}

function allowSubmit(inp) {
	if (inp.checked) {
		$('#btn').html('<button type="button" onclick="verificaDadosCriar()" class="btn-blue">Salvar</button>');
	}else {
		$('#btn').html('<div id="unchecked">Salvar</div>');
	}
}

function verificaDadosCriar(){
	if ($('#inp_nome').val() == "") {$('#div_erro').show(); $('#div_erro').html('O campo Nome deve ser preenchido.'); return false;}
	if ($('#inp_nascimento').val() == "") {$('#div_erro').show(); $('#div_erro').html('O campo Data de Nascimento deve ser preenchido.'); return false;}
	if ($('#inp_endereco').val() == "") {$('#div_erro').show(); $('#div_erro').html('O campo Endereço deve ser preenchido.'); return false;}
	if ($('#inp_cidade').val() == "") {$('#div_erro').show(); $('#div_erro').html('O campo Cidade deve ser preenchido.'); return false;}
	if ($('#inp_uf').val() == "") {$('#div_erro').show(); $('#div_erro').html('O campo Estado deve ser preenchido.'); return false;}
	if ($('#inp_celular').val() == "") {$('#div_erro').show(); $('#div_erro').html('O campo Celular deve ser preenchido.'); return false;}
	if ($('#inp_email').val() == "") {$('#div_erro').show(); $('#div_erro').html('O campo E-mail deve ser preenchido.'); return false;}
	if ($('#inp_empresa').val() == "") {$('#div_erro').show(); $('#div_erro').html('O campo Empresa deve ser preenchido.'); return false;}
	if ($('#inp_cargo').val() == "") {$('#div_erro').show(); $('#div_erro').html('O campo Cargo deve ser preenchido.'); return false;}
	if(!checarEmail($('#inp_email').val())) {$('#div_erro').show(); $('#div_erro').html('O campo E-mail deve ser preenchido corretamente.'); return false;}
	if ($("input[name='usu_sigma']:checked").val() == 'Sim') {
		if ($('#inp_tempo_usuario').val() == "") {$('#div_erro').show(); $('#div_erro').html('Indique há quanto tempo usa o SIGMA.'); return false;}
		if ($('#inp_avalie').val() == "") {$('#div_erro').show(); $('#div_erro').html('Por favor, avalie o SIGMA.'); return false;}
	}
	if (!$("input[name='publicar[]']").is(":checked")) { $("input[name='publicar[]']").val('');}

	$("#form_planejadores").submit();
}

function verificaDadosEditar(){
	if ($('#inp_nome').val() == "") {$('#div_erro').show(); $('#div_erro').html('O campo Nome deve ser preenchido.'); return false;}
	if ($('#inp_nascimento').val() == "") {$('#div_erro').show(); $('#div_erro').html('O campo Data de Nascimento deve ser preenchido.'); return false;}
	if ($('#inp_endereco').val() == "") {$('#div_erro').show(); $('#div_erro').html('O campo Endereço deve ser preenchido.'); return false;}
	if ($('#inp_cidade').val() == "") {$('#div_erro').show(); $('#div_erro').html('O campo Cidade deve ser preenchido.'); return false;}
	if ($('#inp_uf').val() == "") {$('#div_erro').show(); $('#div_erro').html('O campo Estado deve ser preenchido.'); return false;}
	if ($('#inp_celular').val() == "") {$('#div_erro').show(); $('#div_erro').html('O campo Celular deve ser preenchido.'); return false;}
	if ($('#inp_email').val() == "") {$('#div_erro').show(); $('#div_erro').html('O campo E-mail deve ser preenchido.'); return false;}
	if ($('#inp_empresa').val() == "") {$('#div_erro').show(); $('#div_erro').html('O campo Empresa deve ser preenchido.'); return false;}
	if ($('#inp_cargo').val() == "") {$('#div_erro').show(); $('#div_erro').html('O campo Cargo deve ser preenchido.'); return false;}
	if(!checarEmail($('#inp_email').val())) {$('#div_erro').show(); $('#div_erro').html('O campo E-mail deve ser preenchido corretamente.'); return false;}
	if ($("input[name='usu_sigma']:checked").val() == 'Sim') {
		if ($('#inp_tempo_usuario').val() == "") {$('#div_erro').show(); $('#div_erro').html('Indique há quanto tempo usa o SIGMA.'); return false;}
		if ($('#inp_avalie').val() == "") {$('#div_erro').show(); $('#div_erro').html('Por favor, avalie o SIGMA.'); return false;}
	}

	$("#form_planejadores").submit();
}