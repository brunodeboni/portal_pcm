<?php defined('SYSPATH') or die('No direct script access.');
try{Kohana_Session::instance();}catch(Session_Exception $e){}

class Controller_Sobre extends Controller_Template
{
	public $template = "base";
	
	public function action_oquee() {
		$this->template->pageCss = array("sobre");
		$this->template->content = View::factory('sobre/oquee');
	}
	
	public function action_contato() {
		$this->template->pageCss = array("contato");
		$this->template->pageJs  = array("contato");
		$this->template->content = View::factory('sobre/contato');
	}
	
	public function action_contador() {
		//Total de inscritos
		$sql = "SELECT count(*) as inscritos FROM cw_cursos_inscritos";
		$query = DB::query(Database::SELECT, $sql)->execute();
		$result = $query->as_array();
		
		//Total de turmas
		$sql2 = "SELECT count(*) as turmas FROM cw_cursos_turmas";
		$query2 = DB::query(Database::SELECT, $sql2)->execute();
		$res = $query2->as_array();
		
		$total_inscritos = $result[0]['inscritos'];
		$total_turmas = $res[0]['turmas'];
		
		
		$context = array(   // Vari�veis que v�o para a view
			// nome        valor                como acessar
			'inscritos' => $total_inscritos, // na view: $inscritos
			'turmas'    => $total_turmas,    // na view: $turmas
		);
		
		$html = View::factory('sobre/contador',$context);
		
		$this->auto_render = false;
		$this->response->body($html);
	}
	
	public function action_parceiro() {
		$this->template->pageCss = array("sobre");
		$this->template->content = View::factory('sobre/parceiro');
	}
	
	public function action_formados() {
		
		$s = "select distinct(id) from cw_cursos";
		$q = DB::query(Database::SELECT, $s)->execute();
		$r = $q->as_array('id');
		
		$result = array();
		foreach ($r as $curso) {
			$sql = "select u.id, u.nome, u.empresa, t.id as id_turma, c.nome as n_curso 
					from cwk_users as u
					
					left join cw_cursos_inscritos as i
					on u.id = i.id_user
					
					left join cw_cursos_turmas as t
					on i.id_turma = t.id
					
					left join cw_cursos as c
					on c.id = t.id_curso
					
					where c.id = :id_curso and i.status = 3
					order by u.nome";
			$query = DB::query(Database::SELECT, $sql)->param(':id_curso',$curso['id'])->execute();
			$result[$curso['id']] = $query->as_array();
		}
		//var_dump($result); die();
		
		$context = array('result' => $result);
		
		
		$this->template->content = View::factory('sobre/formados', $context);
	}
	
	public function action_visao() {
		$this->template->content = View::factory('sobre/visao');
	}
	
	public function action_enq() {
		
		$this->auto_render =  false;
		
		$resposta = $this->request->post('resposta');
		$resultado = $this->confereRespostas(1);
		$resultado = explode("|", $resultado);
		
		switch ($resposta) {
			case 'op1': $resultado[0]++; break;
			case 'op2': $resultado[1]++; break;
			case 'op3': $resultado[2]++; break;
			case 'op4': $resultado[3]++; break;
		}
	
		$novo_resultado = implode('|', $resultado);
		
		$inserir = $this->insereRespostas(1, $novo_resultado); //onde 1 é o id da enquete
	
		echo 'true';
		//$this->buscaParcial(1);
	
	}
	
	public function action_conferirEnq() {
		$this->auto_render =  false;
		
		$parcial = $this->confereRespostas(1); //onde 1 é o id da enquete
		echo $parcial;
		
	}
	
	function confereRespostas($id) {
		$sql = "select respostas from cw_enquetes where id = :id";
		$query = DB::query(Database::SELECT, $sql)->param(':id', $id)->execute();
		$r = $query->as_array();
		
		return $r["0"]["respostas"];
	
	}
	
	function insereRespostas($id, $novo_resultado) {
		$sql = "update cw_enquetes set respostas = :novo_resultado where id = :id";
		$query = DB::query(Database::UPDATE, $sql)->parameters(array(':id' => $id, ':novo_resultado' => $novo_resultado))->execute();
	
		return true;
	}
	
	
}


	
