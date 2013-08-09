$(document).ready(function(){
	$(".format-telefone").telefone();
	atualizar_online();
});


function atualizar_online(){
	var onurl = window.cpcfg.url.ajax+'onlineuser';
	$.get(onurl,function(data){
		setTimeout('atualizar_online()',60000); // 1 min
	});
}