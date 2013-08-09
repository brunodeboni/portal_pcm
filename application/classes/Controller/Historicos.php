<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Historicos extends Controller_Basetemplate
{
	
	private $modelHistorico;
	
	public function before(){
		parent::before();
		if(!$this->modelHistorico) $this->modelHistorico = Model_Historico::instance();
	}
	
	public function action_index() {
		$lista = $this->modelHistorico->buscaCursos();
		
		if (! $this->request->post()) {
			
			$context = array('lista' => $lista);
			
			$this->template->pageCss = array('historico');
			$this->template->content = View::factory('historicos/index', $context);
			
		}else {
			if ($this->request->post('chave')) {
				$chave = $this->request->post('chave');
				$query = $this->modelHistorico->palavraChave($chave);
				$key = $chave;
				
			}else if ($this->request->post('date')) {
				$date = $this->request->post('date');
				$query = $this->modelHistorico->porData($date);
				$key = $date;
				
			}else if ($this->request->post('curso')) {
				$curso = $this->request->post('curso');
				$query = $this->modelHistorico->porCurso($curso);
				$key = $curso;
				
			}
			
			$context = array('query' => $query, 'key' => $key, 'lista' => $lista);
			$this->template->pageJs = array('highlight');
			$this->template->pageCss = array('historico');
			$this->template->content = View::factory('historicos/index', $context);
		}
	}
	
	public function action_exibir() {
		if ($this->request->post('key')) {
			$key = $this->request->post('key'); 
			$id = $this->request->param('id');
			$query = $this->modelHistorico->buscaHistorico($id);
			$context = array('query' => $query, 'key' => $key);
		}else {
			$id = $this->request->param('id');
			$query = $this->modelHistorico->buscaHistorico($id);
			$context = array('query' => $query);
		}	
			
		$this->template->pageJs = array('highlight');
		$this->template->pageCss = array('historico');
		$this->template->content = View::factory('historicos/exibir', $context);
	}
	
}

?>