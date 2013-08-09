<div class="content_title">Alunos Online Agora</div>

<div class="perfil_container">
<?php if (count($query)) {
	foreach ($query as $user){
		if(! $user["foto"]) $user["foto"] = '/resources/img/perfil/pp.png';
		
		echo '<a class="a_online" href="'.URL::site("perfil/usuarios/".$user["id_user"]).'">
				<div id="pessoais">
					<div class="div_foto">
						<img height="100" width="100" src="'.URL::site(utf8_encode($user["foto"])).'">
					</div>
					<div class="div_pessoais">
						<span><b>Nome</b></span><br>
						<span class="info">'.$user["nome"].'</span><br><br>
						<span><b>Cargo</b></span><br>
						<span class="info">'.$user["cargo"].'</span><br><br>
						<span><b>Empresa</b></span><br>
						<span class="info">'.$user["empresa"].'</span><br>
					</div>
				</div>
			</a>'; 
		
		/*'<table>
				<tr>
					<td style="padding-right: 15px;"><img src="'.URL::site($user["foto"]).'" width="100" height="100">
					<td><a href="">'.$user["nome"].'</a>
			</table>';*/
	}
}else echo 'Não há usuários online no momento.';
?>
</div>