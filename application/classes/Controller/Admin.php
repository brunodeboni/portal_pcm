<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Basetemplate
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
		/*$this->current_path = '/'.$this->request->uri();
		$current_url = URL::site($this->current_path);
		$this->nexturl = "next=".urlencode($this->current_path);
		View::bind_global('current_url',$current_url);*/
		$this->onlyAdmins();
		$this->template->pageCss = array("admin");
		if(!$this->modelCurso)      $this->modelCurso      = Model_Curso::instance();
		if(!$this->modelAdmincurso) $this->modelAdmincurso = Model_Admincurso::instance();
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
	
	
	public function action_cursos(){
		$context = array(
			'cursos'=>$this->modelCurso->lista_cursos(true,0,false,false),
		);
		
		$this->template->content = View::factory('admin/cursos',$context);
	}
	
	public function action_curso(){
		$idcurso = $this->request->param('id');
		if(!$idcurso) HTTP::redirect('admin/cursos');
		
		$curso = $this->modelCurso->info_curso($idcurso,false,false);
		
		$context = array(
			'curso' => $curso,
			'debug_var' => 'curso',
		);
		
		//$this->template->content = View::factory('debug/var',$context);
		$this->template->content = View::factory('admin/curso',$context);
	}
	
	public function action_atividades_alunos() {
			$id_inscrito = $this->request->param('id');
			
			$sql = "select t.id as turma, r.id as id_recurso, a.id as id_atividade, i.id as id_inscrito, r.titulo, 
			date_format(a.dh_acesso, '%d/%m/%Y %h:%m') as acesso, 
			a.nota, a.horas, r.peso_nota, u.nome 
			from cw_cursos_inscritos as i
			join cwk_users as u on u.id = i.id_user
			join cw_cursos_turmas as t on i.id_turma = t.id
			join cw_cursos_recursos_insc as a on a.id_inscrito = i.id
			join cw_cursos_recursos as r on r.id = a.id_recurso
			where a.id_inscrito = :id_inscrito";
			$query = DB::query(Database::SELECT, $sql)->param(':id_inscrito', $id_inscrito)->execute();
			
			$context = array('query' => $query);
			
			$this->template->pageJs = array('admin/atividadesalunos');
			$this->template->content = View::factory('admin/atividades_alunos', $context);

	}
	
	public function action_diariodeclasse(){
		$idparam = $this->request->param('id');
		$idparam_arr = explode('_',$idparam,2);
		if(count($idparam_arr)!=2) HTTP::redirect('admin/cursos');
		
		list($idcurso,$idturma) = $idparam_arr;
		
		$curso = $this->modelCurso->lista_cursos(false,$idcurso,false,true);
		
		function getTurmaByID($turmas,$id_turma){
			$exists = false;
			foreach($turmas as $turma):
				if($turma['id'] == $id_turma){
					$exists = $turma;
					break;
				}
			endforeach;
			return $exists;
		}
		
		$turma_atual = getTurmaByID($curso[0]['turmas'],$idturma);
		
		if(!count($curso)<0 || !$turma_atual){
			$this->template->content = "Esta turma não existe";
			return false;
		}
		
		$recursos = $this->modelCurso->pegarRecursos($curso[0]['id'],$idturma,true);
		
		$context = array(
			'curso'    => $curso[0],
			'turma'    => $turma_atual,
			'recursos' => $recursos,
		);
		
		function mesclarDiarioAlunos($diario, $todos){
			foreach($diario as $dke => $dia){
				foreach($todos as $ske => $sal){
					if($dia['id_user'] == $sal['id_user'])
					$todos[$ske] = array_merge($sal,$dia);
				}
			}
			
			$todos;
			return $todos;
		}
		
		$id_recurso = (int)$this->request->param('id2');
		if($id_recurso){
			$this->template->pageJs = array('admin/diariodeclasse');
			$diario = $this->modelCurso->pegarDiario($idturma,$id_recurso);
			$todos = $this->modelCurso->pegarAlunosTurma($idturma,$id_recurso);
			
			//$context['diario'] = $this->modelCurso->pegarDiario($idturma,$id_recurso);
			$alunos = mesclarDiarioAlunos($diario,$todos);
			$this->ordemAlfabetica($alunos);
			
			$context['diario'] = $alunos;
			$context['id_recurso'] = $id_recurso;
			$this->template->content = View::factory('admin/diariodeclasse_recurso',$context);
		}else{
			$this->template->pageJs = array('admin/aulasagora');
			$this->template->content = View::factory('admin/diariodeclasse',$context);
		}
	}
	
	public function action_alunosturma(){
		$idturma = $this->request->param('id');
		$turma   = $this->modelCurso->info_turma($idturma);
		$nome_curso = $this->modelCurso->pegarNomeCurso($turma['id_curso']);
		$alunos  = $this->modelCurso->pegarAlunosTurma($idturma);
		$this->ordemAlfabetica($alunos);
		
		$context = array(
			'turma'  => $turma,
			'alunos' => $alunos,
			'curso' => array('id'=>$turma['id_curso'],'nome'=>$nome_curso),
		);
		
		$this->template->pageJs = array('admin/alunosturma');
		$this->template->content = View::factory('admin/alunosturma',$context);
	}
	
	public function action_notasturma(){
		$idturma = $this->request->param('id');
		$turma   = $this->modelCurso->info_turma($idturma);
		$nome_curso = $this->modelCurso->pegarNomeCurso($turma['id_curso']);
		
		// Contexto padrão
		$context = array(
			'turma'    => $turma,
			'curso'    => array('id'=>$turma['id_curso'],'nome'=>$nome_curso),
		);
		
		// Contexto diferenciado dependendo da página
		if(($id_recurso = $this->request->param('id2'))){
			$alunos  = $this->modelCurso->pegarAlunosTurma($idturma,$id_recurso);
			$recurso = $this->modelCurso->info_recurso($id_recurso);
			$this->ordemAlfabetica($alunos);
			$context['alunos'] = $alunos;
			$context['id_recurso'] = $id_recurso;
			$context['recurso'] = $recurso;
			
			$view_name = 'notas_recurso';
		}else{
			$recursos_todos = $this->modelCurso->pegarTodosRecursos($turma['id_curso'],false);
			$recursos = array();
			
			// pegar apenas recursos com peso_nota > 0
			foreach($recursos_todos as $recurso){
				if((float)$recurso['peso_nota']>0.0){
					$recursos[] = $recurso;
				}
			}
			
			$context['recursos'] = $recursos;
			
			$view_name = 'notas';
		}
		
		$this->template->pageJs = array('admin/aulasagora','admin/notas');
		$this->template->content = View::factory('admin/'.$view_name, $context);
	}
	
	public function action_cursos_andamento(){
		$sql1 = 'select
					rec.id as id_recurso,
					rec.id_curso,
					rec.id_tipo,
					rec.turma_acontecendo_agora,
					rec.titulo,
					rec.texto_descricao,
					rec.link,
					cur.nome,
					tur.horarios
				from cw_cursos_recursos as rec
				join cw_cursos as cur on rec.id_curso = cur.id
				join cw_cursos_turmas as tur on tur.id = rec.turma_acontecendo_agora
				where rec.turma_acontecendo_agora is not null';
		
		$qry1 = DB::query(Database::SELECT,$sql1)->execute();
		$acontecendo = $qry1->as_array();
		
		$context = array(
			'aulas' => $acontecendo,
		);
		
		$this->template->pageJs = array('admin/aulasagora');
		$this->template->content = View::factory('admin/cursosagora',$context);
	}
	
	public function action_testedeconhecimento(){
		function parseUserTesteInfo(array $resultados){
				$retorno = array();
				
				function ja_existe($procurar_nessa_array, $essa_linha, $lkey = 'id'){
					$found = false;
					foreach($procurar_nessa_array as $prkey => $pr){
						if($pr[$lkey] == $essa_linha[$lkey]){
							$found = $prkey;
							break;
						}
					}
					
					return $found;
				}
			
				foreach($resultados as $resultado){
					$jaexiste = ja_existe($retorno,$resultado,'id_teste');
					
					if($jaexiste===false){
						$retorno[] = array(
							'id_teste'   => $resultado['id_teste'],
							'nome'       => $resultado['nome'],
							'id_usuario' => $resultado['id_usuario'],
							'email'      => $resultado['email'],
							'count_acertos'   => $resultado['correta']==1?1:0,
							'count_perguntas' => 1,
							
							'linhas'     => array($resultado),
						);
					}else{
						$retorno[$jaexiste]['count_perguntas'] += 1;
						$retorno[$jaexiste]['count_acertos']   += $resultado['correta']==1?1:0;
						$retorno[$jaexiste]['linhas'][] = $resultado;
					}
				}
				
				return $retorno;
		}
		
		
		// Pegar os argumentos passados
		// base64(email_id_teste)
		$idparam = $this->request->param('id');
		if($idparam){
				$idparam_arr = explode('|',base64_decode($idparam),2);
				if(count($idparam_arr)!=2)
					HTTP::redirect('admin/testedeconhecimento');
					//die(base64_encode('giovanneafonso@gmail.com_0'));
				//$id_usuario = (int) $idparam_arr[0];
				$email_usuario = $idparam_arr[0];
				$id_teste      = (int) $idparam_arr[1];
				
				$whereteste = ($id_teste>0)?"and p.id_teste = $id_teste":"";
				
				$sql1 = "select
							p.id_teste,
							t.nome,
							ur.id_usuario,
							u.email,
							p.id as id_pergunta,
							p.pergunta,
							r.id as id_resposta,
							r.resposta,
							r.correta
						from
							tdc_usuario_respostas as ur
						join
							users as u
							on ur.id_usuario = u.id
						join
							tdc_respostas as r
							on ur.id_resposta = r.id
						join
							tdc_perguntas as p
							on r.id_pergunta = p.id
						join
							tdc_testes as t
							on p.id_teste = t.id

						where
							u.email = :email_user
						
						$whereteste";
				$qry1 = DB::query(Database::SELECT, $sql1)->parameters(array(':email_user'=>$email_usuario))->execute(Database::instance('testedeconhecimento'));
				$retorno = $qry1->as_array();
				
				
				$this->template->pageJs  = array('admin/tdc_resultados');
				$this->template->pageCss = array('admin/tdc_resultados');
				$this->template->content = View::factory('admin/tdc_resultados',array(
					'testes' => parseUserTesteInfo($retorno),
					'email'  => $email_usuario,
					'teste'  => $id_teste,
				));
		}else{
				$this->template->pageJs = array('admin/tdc_resultados');
				$this->template->content = View::factory('admin/tdc_resultados_form');
		}
	}
	
	public function action_aprovados(){
		$id_turma   = $this->request->param('id');
		$turma      = $this->modelCurso->info_turma($id_turma);
		$nome_curso = $this->modelCurso->pegarNomeCurso($turma['id_curso']);
		
		// Contexto padrão
		$context = array(
			'turma'      => $turma,
			'curso'      => array('id'=>$turma['id_curso'],'nome'=>$nome_curso),
		);
		
		$alunos = $this->modelAdmincurso->pegarAlunosTurmaInfo($id_turma);
		$context['alunos']     = $alunos;
		$view_name = 'aprovados_alunos';
		$this->template->pageJs = array('admin/aprovados');
		$this->template->content = View::factory('admin/'.$view_name, $context);
		return;
		
		///////////////////////////////////////////////////////////////////////////////////////
		
		// Contexto diferenciado dependendo da página
		if(($id_recurso  = $this->request->param('id2'))){
			$alunos = $this->modelAdmincurso->pegarAlunosRecursoInfo($id_turma, $id_recurso);
			$context['alunos']     = $alunos;
			$context['id_recurso'] = $id_recurso;
			$view_name = 'aprovados_alunos';
		}else{
			$recursos = $this->modelCurso->pegarTodosRecursos($turma['id_curso'],false);
			$context['recursos'] = $recursos;
			
			$view_name = 'aprovados';
		}
		
		
		$this->template->content = View::factory('admin/'.$view_name, $context);
	}
	
	public function action_uploads(){
		$id_turma   = $this->request->param('id');
		$id_aluno   = $this->request->param('id2');
		
		$turma      = $this->modelCurso->info_turma($id_turma);
		$nome_curso = $this->modelCurso->pegarNomeCurso($turma['id_curso']);
		
		// Contexto padrão
		$context = array(
			'turma'      => $turma,
			'curso'      => array('id'=>$turma['id_curso'],'nome'=>$nome_curso),
		);
		
		if(!$id_aluno){
			
			$alunos = $this->modelAdmincurso->pegarAlunosTurmaInfo($id_turma);
			$context['alunos']     = $alunos;
			$this->template->content = View::factory('admin/uploads',$context);
			
		}else{
			
			$aluno = DB::query(Database::SELECT,'select * from cwk_users where id = :uid')->param(':uid',$id_aluno)->execute()->as_array();
			$aluno = count($aluno)?$aluno[0]:false;
			if(!$aluno) die('Este aluno nao existe');
			
			$inscrito = DB::query(Database::SELECT,'select * from cw_cursos_inscritos where id_user = :uid and id_turma = :tid')
							->parameters(array(':uid'=>$id_aluno, ':tid'=>$id_turma))->execute()->as_array();
			$inscrito = count($inscrito)?$inscrito[0]:$inscrito;
			$uploads = DB::query(Database::SELECT,
							'select
								u.id_inscrito,
								r.id_curso,
								u.id_recurso,
								u.url,
								u.nome_arquivo,
								r.titulo
							from cw_cursos_recursos_uploads as u
							join cw_cursos_recursos as r on u.id_recurso = r.id
							where u.id_inscrito = :iid and r.id_tipo = 9')
							->parameters(array(':iid'=>$inscrito['id']))->execute()->as_array();
			
			$context['aluno'] = $aluno;
			$context['inscrito'] = $inscrito;
			$context['uploads'] = $uploads;
			
			
			$this->template->content = View::factory('admin/uploads_aluno',$context);
			
		}
	}
	
	public function action_empresas() {
		$sql="select id, empresa from cw_lista_empresas where ordem >= 0 group by empresa order by ordem";
		$query = DB::query(Database::SELECT, $sql)->execute();
		$result = $query->as_array();
		
		$context = array();
		foreach ($result as $res) {
			$context['empresa'][] = $res['empresa'];
		}
		
		$this->template->pageCss = array('admin/empresas');
		$this->template->pageJs = array('jquery-ui', 'admin/empresas');
		$this->template->content = View::factory('admin/empresas', $context);
	}
	
	public function action_ordenar_empresas() {
		$this->autorender = false;
		
		$empresas = $this->request->post();
		
		if ($empresas) {	
			$ordem = 1; //inicia contador de ordem	
			foreach ($empresas['empresa'] as $empresa) {
				$sql1 = "update cw_lista_empresas set ordem = :ordem where empresa = :empresa";
				$query1 = DB::query(Database::UPDATE, $sql1)->parameters(array(
						':empresa' => $empresa,
						':ordem' => $ordem
						))->execute();
				
				++$ordem;
			}
			
			if ($query1) $this->template->content = 'Salvo com sucesso!';
			else $this->template->content = 'Não foi possível salvar. Tente novamente.';
		
		}else $this->template->content = 'Não foi possível salvar.';
	}
	
	public function action_excluir_empresa() {
		$this->autorender = false;
		
		$empresa = $this->request->query('empresa');
		$empresa = rawurldecode($empresa);
		
		$sql = "update cw_lista_empresas set ordem = -1 where empresa = :empresa";
		$query = DB::query(Database::UPDATE, $sql)->param(':empresa', $empresa)->execute();
		
		if ($query) $this->template->content = 'Empresa excluída com sucesso!';
		else $this->template->content = 'Não foi possível excluir. Tente novamente.';
		
	}
}