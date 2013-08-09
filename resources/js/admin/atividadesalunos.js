diarioCount = 0;

function salvarAtividades(){
	var aurl = window.cpcfg.url.ajaxadmin+'salvaratividadesalunos';
	
	diarioCount = $('.rectosave').length;
	
	
	$('.rectosave').each(function(index,element){
		var self = $(element);
		var ida = self.attr('data-ida');
		var idr = self.attr('data-idr');
		var idi = self.attr('data-idi');
		var horas = $('#dih_'+ida+idr).val();
		var nota = $('#din_'+ida+idr).val();
		
		$.post(aurl, {ida:ida,idr:idr,idi:idi,horas:horas,nota:nota}, function(){
			diarioCount--;
		});
		
	});
	
	
	dointerval = setInterval(function(){
		if(diarioCount>0) return;
		
		clearInterval(dointerval);
		alert("Dados salvos");
		location.reload();
	},1500);
}