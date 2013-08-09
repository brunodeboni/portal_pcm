<div style="font-size: 20px; font-weight:bold; color: #629EBE;">Depoimentos de Alunos</div>
<?php 
$sql = "select d.id, d.depoimento, u.nome, u.id as id_user, c.nome as curso, p.foto
			from cw_depoimentos as d
			join cw_cursos_inscritos as i on i.id=d.id_inscrito
			join cwk_users as u on i.id_user=u.id
			join cw_cursos_turmas as t on t.id = i.id_turma
			join cw_cursos as c on c.id = t.id_curso
			left join cw_perfil as p on p.id_user = u.id
			
			where d.status = 1
			order by d.ordem
			limit 3";
$query = DB::query(Database::SELECT, $sql)->execute();
$res = $query->as_array();

foreach ($res as $r) {
	
	if(! $r["foto"]) $r["foto"] = '/resources/img/perfil/pp.png';
	
	echo '<div class="lista_depoimentos">
			<a class="a_online" href="'.URL::site("perfil/usuarios/".$r["id_user"]).'">
				<table>
					<tr>
						<td style="padding-right: 15px;"><img src="'.URL::site(utf8_encode($r["foto"])).'" width="100" height="100">
			 			<td><b>Aluno:</b> '.$r["nome"].'<br>
			 				<b>Curso:</b> '.$r["curso"].'<br><br>'.
			 				$r["depoimento"].'
			 	</table>
			 </a>
		</div>';
}

?>

<a style="float:right; font-weight: bold; margin-right: 5px;" href="<?php echo URL::site('depoimentos/cadastrar'); ?>">Ver mais depoimentos</a>
