notasCount = 0;

function salvarNotas(){
	var aurl = window.cpcfg.url.ajaxadmin+'salvarnota';
	
	notasCount = $('.inp_nota').length;
	
	$('.inp_nota').each(function(index,element){
		var self = $(element);
		var ida = self.attr('data-ida');
		var idr = self.attr('data-idr');
		var idi = self.attr('data-idi');
		var nota    = parseFloat(self.val());
		
		$.post(aurl, {ida:ida,idr:idr,idi:idi,nota:nota}, function(){
			notasCount--;
		});
		
	});
	
	
	zointerval = setInterval(function(){
		if(notasCount>0) return;
		
		clearInterval(zointerval);
		alert("Dados salvos");
		location.reload();
	},1500);
}