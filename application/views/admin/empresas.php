<p>Arraste as caixas abaixo para reordenar a lista:</p><br>
<form action="<?php echo URL::site('admin/ordenar_empresas'); ?>" method="post">
	<ul id="sortable">
		<?php foreach ($empresa as $e) {?>
		<li>
			<span>
				&nbsp;<input type="text" name="empresa[]" value="<?php echo $e; ?>" size="50">&nbsp;
				<div class="btn-blue">Arraste</div>
				<a class="btn-blue" href="<?php echo URL::site("admin/excluir_empresa/?empresa=".utf8_encode($e)); ?>">Excluir</a>
			</span>
		<?php } ?>
	</ul>
	<br>
	<!-- 
	<a class="btn-blue" type="button" href="javascript: addInput()" name="add">Adicionar campo</a><br><br>
	 -->
	<button class="btn-blue" type="submit">Salvar</button>
</form>

<script language="javascript">

function addInput() {
document.getElementById('sortable').innerHTML += '<li><span>&nbsp;<input type="text" name="empresa[]" size="50">&nbsp;&nbsp;<div class="btn-blue">Arraste</div></span>';
}

</script>