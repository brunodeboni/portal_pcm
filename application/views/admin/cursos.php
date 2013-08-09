<div class="admc_container">
	<div class="admc_title">Lista de Cursos</div>
	<div class="admc_content">
		<ul class="admc_ul">
		<?php foreach($cursos as $curso){
			
			echo
			'<li><a href="'.URL::site("admin/curso/{$curso['id']}").'">'.$curso['nome'].'</a></li>';
		} ?>
		</ul>
	</div>
</div>

<br><br>

<a href="<?php echo URL::site('admin/cursos_andamento'); ?>" class="btn-blue">Ver/Retirar Cursos Acontecendo Agora</a>

<br><br>

<a href="<?php echo URL::site('admin/testedeconhecimento'); ?>" class="btn-blue">Pesquisar testes de conhecimento</a>

<br><br>

<a href="<?php echo URL::site('depoimentos/cadastraAdmin'); ?>" class="btn-blue">Cadastrar depoimentos</a>

<br><br>

<a href="<?php echo URL::site('depoimentos/pendentes'); ?>" class="btn-blue">Depoimentos Pendentes</a>