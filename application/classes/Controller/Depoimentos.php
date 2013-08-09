<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Depoimentos extends Controller_Basetemplate
{
	private $modelDepoimento;
	
	public function before(){
		parent::before();
		if(!$this->modelDepoimento) $this->modelDepoimento = Model_Depoimento::instance();
	}
	
	public function action_cadastrar() {
		$id_inscrito = $this->request->param('id');
		
		if (! $this->request->post()) {
			
			$context = array('id_inscrito' => $id_inscrito);
			
			$this->template->pageJs = array('depoimentos');
			$this->template->pageCss = array('depoimentos');
			$this->template->content = View::factory('depoimentos/cadastrar', $context);
			
		}else {
			$depoimento = $this->request->post('depoimento');
			$exists = $this->modelDepoimento->depoimentoExists($id_inscrito);
				
			//Se ainda não existe depoimento deste inscrito
			if (!$exists) {
				$cadastrar = $this->modelDepoimento->cadastraDepoimento($id_inscrito, $depoimento);
					
				if ($cadastrar) {
					$id_turma = $this->modelDepoimento->achaTurma($id_inscrito);
					$context = array('id_inscrito' => $id_inscrito, 'id_turma' => $id_turma);
					$this->template->content = View::factory('depoimentos/enviado', $context);
				}else {						
					$error = 'Não foi possível cadastrar seu depoimento. Por favor, tente novamente.';
					$context = array('error' => $error, 'id_inscrito' => $id_inscrito);
							
					$this->template->pageJs = array('depoimentos');
					$this->template->pageCss = array('depoimentos');
					$this->template->content = View::factory('depoimentos/cadastrar', $context);
				}
			
			//Se já existe depoimento deste inscrito		
			}else {		
				$error = 'Seu depoimento sobre este curso já foi cadastrado anteriormente.';
				$context = array('error' => $error, 'id_inscrito' => $id_inscrito);
						
				$this->template->pageJs = array('depoimentos');
				$this->template->pageCss = array('depoimentos');
				$this->template->content = View::factory('depoimentos/cadastrar', $context);
			}	

		}
		
	}
	
	public function action_pendentes() {
		if(Auth::instance()->logged_in('admin')){
			if (! $this->request->post()) {
				$query = $this->modelDepoimento->buscaPendentes();
				$context = array('query' => $query);
				
				$this->template->pageJs = array('depoimentos', 'jquery-ui');
				$this->template->pageCss = array('depoimentos');
				$this->template->content = View::factory('depoimentos/pendentes', $context);
			
			}else if ($this->request->post('aprovado')) {
				$aprovados = $this->request->post();
				
				foreach ($aprovados as $id => $aprovado) {
					$aprovar = $this->modelDepoimento->aprovaDepoimento($id);
				}
				
				//Redireciona para página de depoimentos
				HTTP::redirect('depoimentos/ordenarDepoimentos');

			}else if ($this->request->post('critica')) {
				$criticas = $this->request->post();
			
				foreach ($criticas as $id => $critica) {
					$r = $this->modelDepoimento->criticaDepoimento($id);
				}
			
				//Redireciona para página de depoimentos
				HTTP::redirect('depoimentos/pendentes');
				
			}else if ($this->request->post('rejeitado')) {
				$rejeitados = $this->request->post();
			
				foreach ($rejeitados as $id => $rejeitado) {
					$rejeitar = $this->modelDepoimento->rejeitaDepoimento($id);
				}
			
				//Redireciona para página de depoimentos
				HTTP::redirect('depoimentos/pendentes');
			}	
		}else {
			//Se não está logado ou não é admin: Redireciona para página de login
			HTTP::redirect('auth/login');
		}
			
		
	}
	
	public function action_cadastraAdmin() {
		if(Auth::instance()->logged_in('admin')){
			if (!$this->request->post()) {
				$cursos = $this->modelDepoimento->buscaCursos();
				$context = array('cursos' => $cursos);
				
				$this->template->pageJs = array('depoimentos');
				$this->template->pageCss = array('depoimentos');
				$this->template->content = View::factory('depoimentos/cadastraAdmin', $context);
				
			} else {
				$id_inscrito = $this->request->post('inscrito');
				$depoimento = $this->request->post('depoimento');
				$exists = $this->modelDepoimento->depoimentoExists($id_inscrito);
				
				if (!$exists) {
					$cadastrar = $this->modelDepoimento->cadastraDepoimento($id_inscrito, $depoimento);
					
					//Redireciona para página de depoimentos pendentes
					HTTP::redirect('depoimentos/pendentes');
				}else {
					$cursos = $this->modelDepoimento->buscaCursos();
					$error = "Este inscrito já possui seu depoimento cadastrado.";
					$context = array('cursos' => $cursos, 'error' => $error);
						
					$this->template->pageJs = array('depoimentos');
					$this->template->pageCss = array('depoimentos');
					$this->template->content = View::factory('depoimentos/cadastraAdmin', $context);
				}
			}
		}else HTTP::redirect('auth/login');
	}
	
	public function action_buscarTurmas() {
		$id_curso = $this->request->post('curso');
		$res = $this->modelDepoimento->buscaTurmas($id_curso);
		
		die(json_encode($res));
		
	}
	
	public function action_buscarInscritos() {
		$id_turma = $this->request->post('turma');
		$res = $this->modelDepoimento->buscaInscritos($id_turma);
	
		die(json_encode($res));
	
	}
	
	public function action_ordenarDepoimentos() {
		if(Auth::instance()->logged_in('admin')){
			if (! $this->request->post()) {
				$query = $this->modelDepoimento->buscaDepoimentos();
				$context = array('query' => $query);
				
				$this->template->pageJs = array('depoimentos', 'jquery-ui');
				$this->template->pageCss = array('depoimentos');
				$this->template->content = View::factory('depoimentos/ordenarDepoimentos', $context);
			}else {
				$this->autorender = false;
				
				$depoimentos = $this->request->post();
				
				if ($depoimentos) {
					$ordem = 1; //inicia contador de ordem
					foreach ($depoimentos as $id_depoimento => $depoimento) {
						$ordenar = $this->modelDepoimento->ordenaDepoimento($ordem, $id_depoimento);
				
						++$ordem;
					}
						
					//Redireciona para página de depoimentos
					HTTP::redirect('depoimentos/pendentes');
				}
			}
		}else HTTP::redirect('auth/login');
	}
	
	public function action_checarSeEscreveu() {
		$this->auto_render = FALSE;
		
		$id_inscrito = $this->request->post('id_inscrito');
		$sql = "select id, status from cw_depoimentos where id_inscrito = :id_inscrito";
		$query = DB::query(Database::SELECT, $sql)->param(':id_inscrito', $id_inscrito)->execute();
		$res = $query->as_array();
		
		if (count($res)) {
			if ($res[0]['status'] == 0) echo 'aguardando';
			else if ($res[0]['status'] == 1) echo 'true';
			else if ($res[0]['status'] == 2) echo 'true';
			else if ($res[0]['status'] == 3) echo 'rejeitado';
		}else echo 'false';
			
		
	}
	
	public function action_curso(){
		$id_curso = $this->request->param("id");
		
		if ($id_curso) {
			$query = $this->modelDepoimento->buscaPorCurso($id_curso);
			$context = array('query' => $query);
			$this->template->pageCss = array('depoimentos');
			$this->template->content = View::factory('depoimentos/curso', $context);
		}else echo 'É necessário especificar um curso.';
	}
	
}
