<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Painel extends Controller_Basetemplate
{
	//public $template = 'base';
	private $modelCurso, $modelAdmincurso;
	
	private function onlyAdmins(){
		// Usuário não está logado
		if(!Auth::instance()->logged_in()){
			HTTP::redirect('auth/login?'.$this->nexturl);
			exit;
		}
		
		// Usuário não tem permissão
		if(!Auth::instance()->logged_in('admin')){
			HTTP::redirect('/');  // está redirecionando para "/", mas deve ir pra uma página 403
			exit;
		}
	}
	
	public function before(){
		parent::before();
		$this->onlyAdmins();
		$this->template->pageCss = array("admin","admin/painel");
		$this->template->pageJs = array();
		/*
		if(!$this->modelCurso)      $this->modelCurso      = Model_Curso::instance();
		if(!$this->modelAdmincurso) $this->modelAdmincurso = Model_Admincurso::instance();
		*/
	}
	
	/**
	 * Ordena um array de alunos em ordem alfabética
	 */
	function ordemAlfabetica(&$alunos){
		function isort($a,$b) {
			return strtolower($a['nome'])>strtolower($b['nome']);
		}
		
		uasort($alunos, "isort");
	}
	
	public function action_index() {
		$this->template->content = View::factory('painel/index');
	}
	
	public function action_meus_cursos() {
		$param = $this->request->param('id');
		
		if($param=='deletar_curso') {
			/*
			$this->auto_render = false;
			$post = $this->request->post();
			if($post['csrf'] !== Session::instance('native')->id()) die('Não é possível deletar este curso');
			DB::query(Database::DELETE,'delete from cw_cursos where id = :cid and user_id = :uid')
				->parameters(array(':cid'=>Auth::instance()->***ATUALIZAR-AQUI***
			die('OK');
			*/
			die('Esta função ainda precisa ser terminada. (Controller_Painel linha 55)');
		}
		
		$this->template->pageJs[] = 'painel/editar';
		$this->template->pageJs[] = 'painel/meus_cursos';
		$this->template->content = View::factory('painel/meus_cursos');
	}
	
	public function action_cadastrar_curso() {
		$dados = $this->request->post();
		
		function retorno(&$obj,$dt,$fmsg,$dados){
			$obj->template->content = View::factory('painel/cadastrar_curso',array('formok'=>$dt, 'formmsg'=>$fmsg, 'dados'=>$dados));
			return;
		}
		
		// Inserir no banco de dados
		if(count($dados)) {
			// Validar dados
			foreach($dados as $dado) {
				if(!trim($dado)) {
					return retorno($this, false, 'Preecha todos os campos corretamente',$dados);
				}
			}
			
			
			$sql = 'insert into cw_cursos (user_id, ativo, nome, objetivo, pre_requisitos)
					values (:uid, 1, :nome, :obj, :pre)';
			list($qid,$qaf) = DB::query(Database::INSERT, $sql)->parameters(array(
					':uid'   => Auth::instance()->get_user()->id,
					':nome'  => $dados['curso_nome'],
					':obj'   => $dados['curso_objetivo'],
					':pre'   => $dados['pre_requisitos'],
					))->execute();
			
			if(!$qaf) return retorno($this,false,NULL,$dados);
			
			HTTP::redirect('painel/editar_curso/'.$qid);
		}
		
		return retorno($this,NULL,NULL,$dados);
		//$this->template->content = View::factory('painel/cadastrar_curso');
	}
	
	public function action_editar_curso() {
		$dados = $this->request->post();
		
		function retorno(&$obj,$dt,$fmsg){
			$obj->template->content = View::factory('painel/editar_curso',array('formok'=>$dt, 'formmsg'=>$fmsg));
			return;
		}
		
		// Inserir no banco de dados
		if(count($dados)) {
			// Validar dados
			$dados['curso_id'] = (int) $dados['curso_id'];
			if(!$dados['curso_id']) {
				return retorno($this, false, 'O ID do curso é inválido');
			}
			
			foreach($dados as $dado) {
				if(trim($dado)=='') {
					return retorno($this, false, 'Preencha todos os campos corretamente');
				}
			}
			
			
			$sql = 'update cw_cursos set
						nome = :nome,
						objetivo = :objetivo,
						pre_requisitos = :pre_requisitos
					where id = :cid
					and user_id = :uid
					';
			$qry = DB::query(Database::UPDATE,$sql)->parameters(array(
						':nome'           => $dados['curso_nome'],
						':objetivo'       => $dados['curso_objetivo'],
						':pre_requisitos' => $dados['curso_pre_requisitos'],
						':cid'            => $dados['curso_id'],
						':uid'            => Auth::instance()->get_user()->id))
					->execute();
			
			return retorno($this,(boolean)$qry,NULL);
		}
		
		// Mostrar a página
		retorno($this,NULL,NULL);
	}
	
	public function action_editar_turmas() {
		$post  = $this->request->post();
		$param = $this->request->param('id');
		$param2 = $this->request->param('id2');
		
		$this->template->pageJs[] = 'http://code.jquery.com/ui/1.10.3/jquery-ui.js';
		$this->template->pageJs[] = 'painel/editar';
		$this->template->afterPageJs = '<script type="text/javascript" src="'.URL::site('/resources/js/jquery-timepicker/jquery.timepicker.min.js').'"></script>';
		$this->template->pageCss[] = 'http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css';
		$this->template->afterPageCss = '<link rel="stylesheet" type="text/css" href="'.URL::site('/resources/js/jquery-timepicker/jquery.timepicker.css').'">';
		
		if(!$param2):
				switch($param) {
					case 'criar_turma':
							$this->auto_render = false;
							_iniciarAjax($post);
							//die(date('Y-m-d H:i:s',$post['inicio']));
							//print_r($post['inicio']);die();
							
							// Cria nova turma
							$qryt1 = DB::query(Database::INSERT,
								'insert into cw_cursos_turmas (id_curso, data_publicacao, data_inicio, status)
								values (:curso_id, curdate(), :datainicio, :status)')
							->parameters(array(
								':curso_id'   => $post['curso_id'],
								':datainicio' => $post['inicio'],
								':status'     => 0
							))->execute();
							
							// Cria uma aula para essa turma
							$qryt2 = DB::query(Database::INSERT,
								'insert into cw_cursos_turmas_aulas (id_turma, datahora, datahora_final, titulo)
								values (:turma_id, :datahora, :datahora2, :titulo)')
							->parameters(array(
								':turma_id'  => $qryt1[0],
								':datahora'  => $post['inicio'],
								':datahora2' => $post['fim'],
								':titulo'    => '~ Clique para editar ~'
							))->execute();
							die('OK#'.$qryt1[0]);
					
					case 'criar_aula':
							$this->auto_render = false;
							_iniciarAjax($post);
							
							$qrya1 = DB::query(Database::INSERT,
								'insert into cw_cursos_turmas_aulas (id_turma, datahora, datahora_final, titulo, link, descricao)
								values (:turma_id, :datahora, :datahora2, :titulo, :link, :descricao)')
							->parameters(array(
								':turma_id'  => $post['turma_id'],
								':datahora'  => $post['inicio'],
								':datahora2' => $post['fim'],
								':titulo'    => $post['titulo'],
								':link'      => $post['link'],
								':descricao' => $post['descricao']
							))->execute();
							die(($qrya1>0)?'OK':'Erro ao cadastrar aula, verifique os dados e tente novamente');
					case 'editar_aula':
							$this->auto_render = false;
							_iniciarAjax($post);
							$qrye1 = DB::query(Database::UPDATE,
								'update cw_cursos_turmas_aulas set
									datahora = :datahora,
									datahora_final = :datahora2,
									titulo = :titulo,
									link = :link,
									descricao = :descricao
								where id_turma = :turma_id and id = :aula_id')
								->parameters(array(
								':turma_id'  => $post['turma_id'],
								':aula_id'   => $post['aula_id'],
								':datahora'  => $post['inicio'],
								':datahora2' => $post['fim'],
								':titulo'    => $post['titulo'],
								':link'      => $post['link'],
								':descricao' => $post['descricao']
							))->execute();
							die('OK');
					case 'deletar_aula':
							/******** FALTA FAZER AQUI **********/
							die('OK');
				}
		else:
				$this->template->pageJs[] = 'painel/editar_turma_aulas';
				$this->template->content = View::factory('painel/editar_turma_aulas',array('curso_id'=>$param, 'turma_id'=>$param2));
				return;
		endif;
		
		
		$this->template->pageJs[] = 'painel/editar_turmas';
		$this->template->content = View::factory('painel/editar_turmas');
	}
	
	public function action_editar_recursos() {
		$post  = $this->request->post();
		$param = $this->request->param('id');
		
		switch($param) {
			case 'criar_recurso':
					$this->auto_render = false;
					$dados = _iniciarAjax($post,'editar_recursos');
					
					// Insere recurso
					$qry2 = DB::query(Database::INSERT,
							'insert into cw_cursos_recursos (titulo, id_curso, id_tipo, ordem, dias_liberacao, texto_descricao, link)
							values (:titulo, :cid, :tipo, 0, 0, :descricao, :link)')
						->parameters($dados)->execute();
					
					if(count($qry2)!=2 || !$qry2[0]) die('Erro interno ao tentar inserir os dados no banco de dados');
					die('OK');
			
			case 'editar_recurso':
					$this->auto_render = false;
					$dados = array_merge(_iniciarAjax($post,'editar_recursos'),array(':rid'=>$post['recurso_id']));
					
					//print_r(array_merge($dados,array(':rid'=>$post['recurso_id'])));
					//die();
					
					// Altera o recurso
					$qry2 = DB::query(Database::UPDATE,
						'update cw_cursos_recursos set
							titulo = :titulo,
							id_tipo = :tipo,
							ordem = 0,
							dias_liberacao = 0,
							texto_descricao = :descricao,
							link = :link
						where id_curso = :cid and id = :rid')
					->parameters($dados)->execute();
					
					//if(!$qry2) die('Erro interno ao tentar atualizar os dados no banco de dados');
					die('OK');
		}
		
		$this->template->pageJs[] = 'painel/editar';
		$this->template->pageJs[] = 'painel/editar_recursos';
		$this->template->content  = View::factory('painel/editar_recursos');
	}
}






if(!function_exists('_iniciarAjax')) {
	function _iniciarAjax($post, $tipo = '') {
		// CSRF
		if($post['csrf'] !== Session::instance('native')->id()) {
			die('Formulário inválido...');
		}
		
		// Verifica se o curso pertence ao usuário atual
		$qry1 = DB::query(Database::SELECT,
				'select count(*) as cont from cw_cursos where 
				user_id = :uid and id = :cid')
			->parameters(array(
				':uid' => Auth::instance()->get_user()->id,
				':cid' => $post['curso_id']
			))->execute()->as_array();
			
		if($qry1[0]['cont']<1) {
			die('Erro, curso inválido...');
		}
		
		switch($tipo) {
			case 'editar_recursos':
				return array(
					':titulo'    => $post['titulo'],
					':cid'       => $post['curso_id'],
					':tipo'      => $post['tipo'],
					':descricao' => $post['descricao'],
					':link'      => $post['link']
				);
		}
		
		return $post;
	}
}
