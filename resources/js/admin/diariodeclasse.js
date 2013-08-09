diarioCount = 0;

function salvarDiario(){
	var aurl = window.cpcfg.url.ajaxadmin+'salvardiariodeclasse';
	
	diarioCount = $('.rectosave').length;
	
	$('.rectosave').each(function(index,element){
		var self = $(element);
		var ida = self.attr('data-ida');
		var idr = self.attr('data-idr');
		var idi = self.attr('data-idi');
		var horas = parseFloat($('#di_'+ida+idr).val());
		
		$.post(aurl, {ida:ida,idr:idr,idi:idi,horas:horas}, function(){
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