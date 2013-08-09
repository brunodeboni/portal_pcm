<?php defined('SYSPATH') or die('No direct script access.');
Session::instance();

class Model_Depoimento extends Model_Database
{
	private $db;
	
	static private $_instance;
	
	static function instance(){
		if(!self::$_instance) self::$_instance = new Model_Depoimento();
		return self::$_instance;
	}
	
	function buscaDepoimentos() {
		$sql = "select d.id, d.depoimento, u.nome, u.id as id_user, c.nome as curso, p.foto
						from cw_depoimentos as d
						join cw_cursos_inscritos as i on i.id=d.id_inscrito
						join cwk_users as u on i.id_user=u.id
						join cw_cursos_turmas as t on t.id = i.id_turma
						join cw_cursos as c on c.id = t.id_curso
						left join cw_perfil as p on p.id_user = u.id
						where d.status = 1
						order by d.ordem";
		$query = DB::query(Database::SELECT, $sql)->execute();
	
		return $query;
	
	}
	
	function cadastraDepoimento($id_inscrito, $depoimento) {
		$sql = "insert into cw_depoimentos (id_inscrito, depoimento) values (:id_inscrito, :depoimento)";
		$query = DB::query(Database::INSERT, $sql)->parameters(array(
				':id_inscrito' => $id_inscrito,
				':depoimento' => $depoimento
		))->execute();
	
		return true;
	}
	
	function buscaPendentes() {
		$sql = "select d.id, d.depoimento, u.nome, c.nome as curso, p.foto
						from cw_depoimentos as d
						join cw_cursos_inscritos as i on i.id=d.id_inscrito
						join cwk_users as u on i.id_user=u.id
						join cw_cursos_turmas as t on t.id = i.id_turma
						join cw_cursos as c on c.id = t.id_curso
						left join cw_perfil as p on p.id_user = u.id
						where d.status = 0
						order by d.ordem, u.nome";
		$query = DB::query(Database::SELECT, $sql)->execute();
	
		return $query;
	}
	
	function buscaCursos() {
		$sql = "select id, nome from cw_cursos";
		$query = DB::query(Database::SELECT, $sql)->execute();
		$res = $query->as_array();
	
		return $res;
	}
	
	function buscaTurmas($id_curso) {
		$sql = "select id, periodo from cw_cursos_turmas where id_curso = :id_curso";
		$query = DB::query(Database::SELECT, $sql)->param(':id_curso', $id_curso)->execute();
		$res = $query->as_array();
	
		return $res;
	}
	
	function buscaInscritos($id_turma) {
		$sql = "select i.id, u.nome 
			from cw_cursos_inscritos as i
			join cwk_users as u on u.id = i.id_user
			where i.id_turma = :id_turma";
		$query = DB::query(Database::SELECT, $sql)->param(':id_turma', $id_turma)->execute();
		$res = $query->as_array();
	
		return $res;
	}
	
	
	function depoimentoExists($id_inscrito) {
		$sql = "select id from cw_depoimentos where id_inscrito = :id_inscrito";
		$query = DB::query(Database::SELECT, $sql)->param(':id_inscrito', $id_inscrito)->execute();
		
		if (count($query)) return true;
		else return false;
		
	}
	
	function aprovaDepoimento($id_depoimento) {
		$sql = "update cw_depoimentos set status = 1 where id = :id";
		$query = DB::query(Database::UPDATE, $sql)->parameters(array(
				':id' => $id_depoimento
		))->execute();
		
		return true;
	}
	
	function criticaDepoimento($id_depoimento) {
		$sql = "update cw_depoimentos set status = 2 where id = :id";
		$query = DB::query(Database::UPDATE, $sql)->parameters(array(
				':id' => $id_depoimento
		))->execute();
	
		return true;
	}
	
	function rejeitaDepoimento($id_depoimento) {
		$sql = "update cw_depoimentos set status = 3 where id = :id";
		$query = DB::query(Database::UPDATE, $sql)->parameters(array(
				':id' => $id_depoimento
		))->execute();
	
		return true;
	}
	
	function ordenaDepoimento($ordem, $id_depoimento) {
		$sql = "update cw_depoimentos set ordem = :ordem where id = :id_depoimento";
		$query = DB::query(Database::UPDATE, $sql)->parameters(array(
				':id_depoimento' => $id_depoimento,
				':ordem' => $ordem
		))->execute();
		
		return true;
	}
	
	function buscaPorCurso($id_curso) {
		$sql = "select d.id, d.depoimento, u.nome, c.nome as curso, p.foto, u.id as id_user
						from cw_depoimentos as d
						join cw_cursos_inscritos as i on i.id=d.id_inscrito
						join cwk_users as u on i.id_user=u.id
						join cw_cursos_turmas as t on t.id = i.id_turma
						join cw_cursos as c on c.id = t.id_curso
						left join cw_perfil as p on p.id_user = u.id
						where d.status = 1
						and c.id = :id_curso
						order by d.ordem";
		$query = DB::query(Database::SELECT, $sql)->param(':id_curso', $id_curso)->execute();
	
		return $query;
	
	}
	
	function achaTurma($inscrito) {
		$sql = "select id_turma from cw_cursos_inscritos where id = :inscrito";
		$query = DB::query(Database::SELECT, $sql)->param(':inscrito', $inscrito)->execute();
		$res = $query->as_array();
		
		return $res[0]['id_turma'];
	}
}
?>