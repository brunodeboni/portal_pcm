<?php defined('SYSPATH') or die('No direct script access.');
Session::instance();

class Model_Admincurso extends Model_Database
{
	static private $_instance;
	
	static function instance(){
		if(!self::$_instance) self::$_instance = new Model_Admincurso();
		return self::$_instance;
	}
	
	
	public function pegarAlunosTurmaInfo($id_turma){
		$sql1 = '
			select
				inscritos.id as id_inscrito,
				turmas.id as id_turma,
				inscritos.id_user,
				turmas.id_curso,
				usuarios.nome,
				inscritos.status
				
			from
				cw_cursos_turmas as turmas
			left join
				cw_cursos_inscritos as inscritos
				on inscritos.id_turma = turmas.id
			left join
				cwk_users as usuarios
				on inscritos.id_user = usuarios.id
				
			where
				turmas.id = :id_turma /*Colocar aqui o id da turmaque se está pesquisando*/
			';
		
		$qry1 = DB::query(Database::SELECT, $sql1)->parameters(array(
			':id_turma'   => $id_turma,
		))->execute();
		
		return $qry1->as_array();
	}
	
}