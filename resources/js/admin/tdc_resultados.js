function mostrarRespostas(resp_id){
	var resp = document.getElementById(resp_id);
	var disp = 'block';
	if(resp.style.display=='block') disp = 'none';
	resp.style.display = disp;
}

function pesquisarteste(){
	var email = $('#inp_email').val();
	var idt   = $('#inp_idteste').val();
	
	if(email=="" || idt==""){
		alert('Você deve preencher os campos');
		return;
	}
	
	var locat = location.pathname;
	var appath = btoa(email+'|'+idt);
	
	if(locat.charAt(locat.length-1)!='/') appath = '/'+appath;
	var newloc = locat+appath;
	location.href = newloc;
}
