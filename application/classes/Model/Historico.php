<?php defined('SYSPATH') or die('No direct script access.');
Session::instance();

class Model_Historico extends Model_Database
{
	private $db;
	
	static private $_instance;
	
	static function instance(){
		if(!self::$_instance) self::$_instance = new Model_Historico();
		return self::$_instance;
	}
	
	function buscaCursos() {
		$sql = "select c.nome as curso, h.id_curso
				from cw_historicos_aulas as h
				left join cw_cursos as c on c.id = h.id_curso";
		$query = DB::query(Database::SELECT, $sql)->execute();
		
		return $query;
	}
	
	function palavraChave($chave) {
		$sql = "select h.id, c.nome as curso, date_format(h.dia, '%d/%m/%Y') as dia, h.horario, h.aula_num, h.historico, h.id_curso 
		from cw_historicos_aulas as h
		left join cw_cursos as c on c.id = h.id_curso 
		where h.historico like :chave";
		$query = DB::query(Database::SELECT, $sql)->param(':chave', '%'.$chave.'%')->execute();
		
		return $query;
	}
	
	function porCurso($id_curso) {
		$sql = "select h.id, c.nome as curso, date_format(h.dia, '%d/%m/%Y') as dia, h.horario, h.aula_num, h.historico, h.id_curso 
		from cw_historicos_aulas as h
		left join cw_cursos as c on c.id = h.id_curso 
		where h.id_curso = :id_curso";
		$query = DB::query(Database::SELECT, $sql)->param(':id_curso', $id_curso)->execute();
		
		return $query;
	}
	
	function porData($date) {
		$sql = "select h.id, c.nome as curso, date_format(h.dia, '%d/%m/%Y') as dia, h.horario, h.aula_num, h.historico, h.id_curso 
		from cw_historicos_aulas as h
		left join cw_cursos as c on c.id = h.id_curso 
		where h.dia = str_to_date(:date, '%d/%m/%Y')";
		$query = DB::query(Database::SELECT, $sql)->param(':date', $date)->execute();
	
		return $query;
	}
	
	function buscaHistorico($id) {
		$sql = "select h.id, c.nome as curso, date_format(h.dia, '%d/%m/%Y') as dia, h.horario, h.aula_num, h.historico, h.id_curso
		from cw_historicos_aulas as h
		left join cw_cursos as c on c.id = h.id_curso
		where h.id = :id";
		$query = DB::query(Database::SELECT, $sql)->param(':id', $id)->execute();
	
		return $query;
	}
	
	
}
?>
