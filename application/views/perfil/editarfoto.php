<div class="content_title">Perfil</div>
<div class="perfil_container">
	<form name="form1" id="form1" enctype="multipart/form-data" action="<?php echo URL::site("perfil/enviafoto"); ?>" method="post" onsubmit="return checkCoords();">
		<label>
			<span>Selecione uma foto para seu perfil nos formatos: <i>jpg, jpeg, gif ou png.</i></span><br><br>
			<input id="foto" type="file" name="foto" onChange="readURL(this)"><br><br>
			<input id="x" name="x" type="hidden">
			<input id="y" name="y" type="hidden">
			<input id="x2" name="x2" type="hidden">
			<input id="y2" name="y2" type="hidden">
			<input id="w" name="w" type="hidden">
			<input id="h" name="h" type="hidden">
		</label>
		<button type="submit" class="btn-blue">Alterar foto</button>
		<a href="<?php echo URL::site('perfil/meuperfil'); ?>" class="btn-blue">Pular etapa</a>
	</form>
	<br>
	<br>
	<span id="sp_img"></span><br>
	<img id="imagem" name="imagem" border="0" src="" width="660">
</div>

<script>
function readURL(input) {
    if (input.files && input.files[0]) {

		if (! (input.files[0].type.match('image/png') || input.files[0].type.match('image/jpg') || input.files[0].type.match('image/jpeg') || input.files[0].type.match('image/gif'))) {
			alert('Tipo de arquivo não suportado. Por favor, selecione um arquivo jpg, jpeg, png ou gif.');
			document.location.reload(true);
		}
    	
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imagem').attr('src', e.target.result);
            alert('Clique na imagem e arraste o seletor para selecionar a área de corte. Ao concluir, clique em Alterar foto.');
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$('#imagem').click(function(){
	$('#imagem').Jcrop({
		setSelect: [0, 0, 200, 200],
		onSelect: updateCoords,
	    onChange: updateCoords,
		//minSize: [ 100, 100 ], 
		//maxSize: [ 500, 500 ],
		allowResize	: true,
		aspectRatio: 1,
		bgColor: 'white'
	});

});

function updateCoords(c)
{
	// campos hidden que armazenam os valores
	$('#x').val(c.x);
	$('#y').val(c.y);
	$('#x2').val(c.x2);
	$('#y2').val(c.y2);
	$('#w').val(c.w);
	$('#h').val(c.h);
};

function checkCoords()
{
	if (parseInt($('#w').val())) return true;
	alert('Por favor, selecione uma área a ser recortada e após concluído clique em Alterar foto.');
	return false;
};
</script>
