<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Estagios extends Controller_Basetemplate
{
	
	public function action_principal(){
		
		
		$this->template->pageCss = array('estagios');
		$this->template->content = View::factory('estagios/principal');
	}
	
	public function action_estagiario(){
		if($this->request->post()) {
			if ($this->request->post('nome')) {
				//Se já se cadastrou
				$dados = $this->request->post();
			
				$cadastro = $this->cadastrar_estagiario($dados);
				if(!$cadastro["success"]) {
					//Volta para preencher cadastro
					
					//Verifica se já se cadastrou mas está inativo
					$celular = $this->decode_telefone($dados['celular']);
					$sql= "select id from cwk_estagiarios where status = 2 and celular = :celular";
					$query = DB::query(Database::SELECT, $sql)->param(':celular', $celular)->execute()->count();
					if ($query > 0) $cadastro['errors']['celular'] = 'status';
					
					$this->template->pageJs = array('estagios');
					$this->template->pageCss = array('estagios');
					$this->template->content = View::factory('estagios/estagiario', $cadastro);
				}else {
					//Redireciona para página que valida celular
					$celular = $this->request->post('celular');
					$this->modelEstagiario = new Model_Estagiario();
					$celular = $this->modelEstagiario->decode_telefone($celular);
					
					$context = array('celular' => $celular);
					$this->template->content = View::factory('estagios/valida_estagiario', $context);
				}	
			
			}else if($this->request->post('num_celular')){	
				$celular = $this->request->post('num_celular');
				$codigo = $this->geraCodigo(8, false, true);
				$valida = $this->validar_estagiario($celular, $codigo);
				
				if (!$valida) {
					$txterro = 'Erro ao enviar mensagem. Tente novamente.';
					$context = array('txterro' => $txterro, 'celular' => $celular);
				}else {
					$context = array('celular' => $celular, 'codigo' => $codigo);
				}
				$this->template->content = View::factory('estagios/valida_estagiario', $context);	
			}	
		
		}else {
			//Página de Cadastro
			$this->template->pageJs = array('estagios');
			$this->template->pageCss = array('estagios');
			$this->template->content = View::factory('estagios/estagiario');
		}
	}
	/*
	public function action_valida_estagiario() {
		$this->template->pageCss = array('estagios');
		$celular = $this->request->query('celular');
		//Valida celular
		if (!$this->request->post()) {
			$context = array(
					'celular' => $celular
			);
			
			$this->template->content = View::factory('estagios/valida_estagiario', $context);
		}else {
			
			$codigo = $this->geraCodigo(8, false, true);
			$valida = $this->validar_estagiario($celular, $codigo);

			if (!$valida) {
				$txterro = 'Erro ao enviar mensagem. Tente novamente.';
				$context = array('txterro' => $txterro, 'celular' => $celular);
				
			}else {
				$context = array(
						'celular' => $celular,
						'codigo' => $codigo
				);
				
			}
			$this->template->content = View::factory('estagios/valida_estagiario', $context);
		}	
	}*/
	
	public function action_verifica_codigo() {
		$this->template->pageCss = array('estagios');
		$cod_enviado = $this->request->post('cod_enviado');
		$cod_inserido = $this->request->post('cod_inserido');
		$celular = $this->request->post('celular');
		
		if ($cod_enviado == $cod_inserido) {
			$confirma = $this->confirmarCadastroEst($celular);
			
			if (!$confirma) {
				$txterro = 'Erro na confirmação do seu cadastro. Por favor, tente novamente.';
				$context = array('celular' => $celular, 'txterro' => $txterro);
				$this->template->content = View::factory('estagios/valida_estagiario', $context);
			}else {
				$this->template->content = View::factory('estagios/confirmado');
			}
		}else {
			$txterro = 'Código incorreto. Tente novamente.';
			$context = array('celular' => $celular, 'txterro' => $txterro);
			$this->template->content = View::factory('estagios/valida_estagiario', $context);
		}
	}
	
	public function action_empresa(){
		if($this->request->post()) {
			//Se preencheu o cadastro
			if($this->request->post('empresa')) {
				$dados = $this->request->post();
					
				$cadastro = $this->cadastrar_empresa($dados);
				if(!$cadastro["success"]) {
					//Verifica se já se cadastrou mas está inativo
					$celular = $this->decode_telefone($dados['celular']);
					$sql= "select id from cwk_empresas where status = 2 and celular = :celular";
					$query = DB::query(Database::SELECT, $sql)->param(':celular', $celular)->execute()->count();
					
					if ($query > 0) $cadastro['errors']['celular'] = 'status';
					
					//Volta para preencher cadastro
					$this->template->pageJs = array('estagios', 'jquery.maskedinput');
					$this->template->pageCss = array('estagios');
					$this->template->content = View::factory('estagios/empresa', $cadastro);
				}else {
					//Redireciona para página que valida celular
					$celular = $this->request->post('celular');
					$this->modelEstagiario = new Model_Estagiario();
					$celular = $this->modelEstagiario->decode_telefone($celular);
					
					$context = array('celular' => $celular);
					$this->template->content = View::factory('estagios/valida_empresa', $context);
				}
			
			}else if($this->request->post('num_celular')){	
				//Se clicou para gerar código
				$celular = $this->request->post('num_celular');
				$codigo = $this->geraCodigo(8, false, true);
				$valida = $this->validar_estagiario($celular, $codigo);
				
				if (!$valida) {
					$txterro = 'Erro ao enviar mensagem. Tente novamente.';
					$context = array('txterro' => $txterro, 'celular' => $celular);
				}else {
					$context = array('celular' => $celular, 'codigo' => $codigo);
				}
				$this->template->content = View::factory('estagios/valida_empresa', $context);
			}
		}else {
			//Página de cadastro
			$this->template->pageJs = array('estagios', 'jquery.maskedinput');
			$this->template->pageCss = array('estagios');
			$this->template->content = View::factory('estagios/empresa');
		}
		
	}
	
	public function action_verifica_cod() {
		$this->template->pageCss = array('estagios');
		$cod_enviado = $this->request->post('cod_enviado');
		$cod_inserido = $this->request->post('cod_inserido');
		$celular = $this->request->post('celular');
	
		if ($cod_enviado == $cod_inserido) {
			$confirma = $this->confirmarCadastroEmp($celular);
				
			if (!$confirma) {
				$txterro = 'Erro na confirmação do seu cadastro. Por favor, tente novamente.';
				$context = array('celular' => $celular, 'txterro' => $txterro);
				$this->template->content = View::factory('estagios/valida_empresa', $context);
			}else {
				$this->template->content = View::factory('estagios/confirmado');
			}
		}else {
			$txterro = 'Código incorreto. Tente novamente.';
			$context = array('celular' => $celular, 'txterro' => $txterro);
			$this->template->content = View::factory('estagios/valida_empresa', $context);
		}
	}
	
	public function action_pesquise_estagiario(){
		$this->template->pageJs = array('estagios');
		$this->template->pageCss = array('estagios');
		
		if ($this->request->post('cidade') && $this->request->post('uf') && $this->request->post('disponibilidade')) {
			$cidade = $this->request->post('cidade');
			$uf = $this->request->post('uf');
			$disponibilidade = $this->request->post('disponibilidade');
				
			$sql = "select nome, cidade, uf, disponibilidade, celular from cwk_estagiarios where cidade = _utf8 :cidade COLLATE utf8_unicode_ci and uf = :uf and disponibilidade = :disponibilidade and status = 1";
			$query = DB::query(Database::SELECT, $sql)->parameters(array(':cidade' => $cidade, ':uf' => $uf, ':disponibilidade' => $disponibilidade))->execute();
				
			$context = array(
					'query' => $query,
			);
				
			$this->template->content = View::factory('estagios/pesquise_estagiario', $context);
				
		}else if ($this->request->post('cidade') && $this->request->post('disponibilidade') && !$this->request->post('uf')) {
			$cidade = $this->request->post('cidade');
			$disponibilidade = $this->request->post('disponibilidade');
				
			$sql = "select nome, cidade, uf, disponibilidade, celular from cwk_estagiarios where cidade = _utf8 :cidade COLLATE utf8_unicode_ci and disponibilidade = :disponibilidade and status = 1";
			$query = DB::query(Database::SELECT, $sql)->parameters(array(':cidade' => $cidade, ':disponibilidade' => $disponibilidade))->execute();
				
			$context = array(
					'query' => $query,
			);
				
			$this->template->content = View::factory('estagios/pesquise_estagiario', $context);
				
		}else if ($this->request->post('uf') && $this->request->post('disponibilidade') && !$this->request->post('cidade')) {
			$uf = $this->request->post('uf');
			$disponibilidade = $this->request->post('disponibilidade');
				
			$sql = "select nome, cidade, uf, disponibilidade, celular from cwk_estagiarios where uf = :uf and disponibilidade = :disponibilidade and status = 1";
			$query = DB::query(Database::SELECT, $sql)->parameters(array(':uf' => $uf, ':disponibilidade' => $disponibilidade))->execute();
				
			$context = array(
					'query' => $query,
			);
				
			$this->template->content = View::factory('estagios/pesquise_estagiario', $context);
		
		}else if ($this->request->post('cidade') && $this->request->post('uf') && !$this->request->post('disponibilidade')) {
			$uf = $this->request->post('uf');
			$cidade = $this->request->post('cidade');
				
			$sql = "select nome, cidade, uf, disponibilidade, celular from cwk_estagiarios where uf = :uf and cidade = _utf8 :cidade COLLATE utf8_unicode_ci and status = 1";
			$query = DB::query(Database::SELECT, $sql)->parameters(array(':uf' => $uf, ':cidade' => $cidade))->execute();
				
			$context = array(
					'query' => $query,
			);
				
			$this->template->content = View::factory('estagios/pesquise_estagiario', $context);

		}else if ($this->request->post('cidade') && !$this->request->post('uf') && !$this->request->post('disponibilidade')) {
			$cidade = $this->request->post('cidade');
			
			$sql = "select nome, cidade, uf, disponibilidade, celular from cwk_estagiarios where cidade = _utf8 :cidade COLLATE utf8_unicode_ci and status = 1";
			$query = DB::query(Database::SELECT, $sql)->parameters(array(':cidade' => $cidade))->execute();
			
			$context = array(
					'query' => $query,
			);
			
			$this->template->content = View::factory('estagios/pesquise_estagiario', $context);

		}else if ($this->request->post('uf') && !$this->request->post('cidade') && !$this->request->post('disponibilidade')) {
			$uf = $this->request->post('uf');
					
			$sql = "select nome, cidade, uf, disponibilidade, celular from cwk_estagiarios where uf = :uf and status = 1";
			$query = DB::query(Database::SELECT, $sql)->parameters(array(':uf' => $uf))->execute();
					
			$context = array(
					'query' => $query,
			);
					
			$this->template->content = View::factory('estagios/pesquise_estagiario', $context);

		}else if ($this->request->post('disponibilidade') && !$this->request->post('uf') && !$this->request->post('cidade')) {
			$disponibilidade = $this->request->post('disponibilidade');
					
			$sql = "select nome, cidade, uf, disponibilidade, celular from cwk_estagiarios where disponibilidade = :disponibilidade and status = 1";
			$query = DB::query(Database::SELECT, $sql)->parameters(array(':disponibilidade' => $disponibilidade))->execute();
					
			$context = array(
					'query' => $query,
			);
					
			$this->template->content = View::factory('estagios/pesquise_estagiario', $context);
			
		}else if (! $this->request->post()){
			
			$sql = "select nome, cidade, uf, disponibilidade, celular from cwk_estagiarios where disponibilidade='a' and status = 1";
			$query = DB::query(Database::SELECT, $sql)->execute();
			
			$context = array(
					'query' => $query,
			);
			
			$this->template->content = View::factory('estagios/pesquise_estagiario', $context);
		}
		
	}
	
	public function action_popup_estagiario(){
		$celular = $this->request->query('celular');
	
		$sql = "select nome, nascimento as nascimento, cidade, uf, email, telefone_fixo, celular, formacao, disponibilidade, celular from cwk_estagiarios where celular = :celular";
		$query = DB::query(Database::SELECT, $sql)->param(':celular', $celular)->execute();
	
		$context = array(
				'query' => $query,
		);
	
	
		$this->auto_render = false;
		echo View::factory('estagios/popup_estagiario', $context);
		
	}
	
	public function action_pesquise_empresa(){
		$this->template->pageJs = array('estagios');
		$this->template->pageCss = array('estagios');
		
		if ($this->request->post('cidade') && $this->request->post('uf')) {
			$cidade = $this->request->post('cidade');
			$uf = $this->request->post('uf');
			
			$sql = "select empresa, cidade, uf, telefone from cwk_empresas where cidade = _utf8 :cidade COLLATE utf8_unicode_ci and uf = :uf and status = 1";
			$query = DB::query(Database::SELECT, $sql)->parameters(array(':cidade' => $cidade, ':uf' => $uf))->execute();
			
			
			$context = array(
					'query' => $query,
			);
			
			
			$this->template->content = View::factory('estagios/pesquise_empresa', $context);
			
		}else if ($this->request->post('cidade') && !$this->request->post('uf')) {
			$cidade = $this->request->post('cidade');
			
			$sql = "select empresa, cidade, uf, telefone from cwk_empresas where cidade = _utf8 :cidade COLLATE utf8_unicode_ci and status = 1";
			$query = DB::query(Database::SELECT, $sql)->parameters(array(':cidade' => $cidade))->execute();
			
			$context = array(
					'query' => $query,
			);
			
			$this->template->content = View::factory('estagios/pesquise_empresa', $context);
			
		}else if ($this->request->post('uf') && !$this->request->post('cidade')) {
			$uf = $this->request->post('uf');
			
			$sql = "select empresa, cidade, uf, telefone from cwk_empresas where uf = :uf and status = 1";
			$query = DB::query(Database::SELECT, $sql)->parameters(array(':uf' => $uf))->execute();
			
			$context = array(
					'query' => $query,
			);
			
			$this->template->content = View::factory('estagios/pesquise_empresa', $context);
			
		}else if (!$this->request->post()){
			$sql = "select empresa, cidade, uf, telefone from cwk_empresas where uf = 'bb' and status = 1";
			$query = DB::query(Database::SELECT, $sql)->execute();
				
			$context = array(
					'query' => $query,
			);
			
			$this->template->content = View::factory('estagios/pesquise_empresa', $context);
		}
		
	}
	
	public function action_popup_empresa(){
		$telefone = $this->request->query('telefone');
		
		$sql = "select empresa, cidade, uf, email, telefone from cwk_empresas where telefone = :telefone";
		$query = DB::query(Database::SELECT, $sql)->param(':telefone', $telefone)->execute();
	
		$context = array(
				'query' => $query,
		);
	
	
		$this->auto_render = false;
		echo View::factory('estagios/popup_empresa', $context);
		
	}
	
	public function action_regras(){
	
	
		$this->template->pageCss = array('estagios');
		$this->template->content = View::factory('estagios/regras');
	}
	
	public function action_remover(){
		if ($this->request->post()) {
			if (!$this->request->post('celular')) {
				
				$txterro = "O campo celular deve ser preenchido!";
				$context = array ('txterro' => $txterro);
				
				$this->template->pageJs = array('estagios');
				$this->template->pageCss = array('estagios');
				$this->template->content = View::factory('estagios/remover', $context);
			}else if (!$this->request->post('tipo')) {
				$txterro = "Você deve selecionar o tipo de cadastro a ser excluído!";
				$context = array ('txterro' => $txterro);
				
				$this->template->pageJs = array('estagios');
				$this->template->pageCss = array('estagios');
				$this->template->content = View::factory('estagios/remover', $context);
			
			}else if ($this->request->post('tipo') == 'estagiario') {
				$celular = $this->request->post('celular');
				$this->modelEstagiario = new Model_Estagiario();
				$celular = $this->modelEstagiario->decode_telefone($celular);
				
				$context = array('celular' => $celular);
				
				$this->template->pageCss = array('estagios');
				$this->template->content = View::factory('estagios/remove_estagiario', $context);
				
				
			}else if ($this->request->post('tipo') == 'empresa') {
				$celular = $this->request->post('celular');
				$this->modelEmpresa = new Model_Empresa();
				$celular = $this->modelEmpresa->decode_telefone($celular);
				
				$context = array('celular' => $celular);
				
				$this->template->pageCss = array('estagios');
				$this->template->content = View::factory('estagios/remove_empresa', $context);
				
			}
		}else {
			//Página para remover cadastro
			$this->template->pageJs = array('estagios');
			$this->template->pageCss = array('estagios');
			$this->template->content = View::factory('estagios/remover');
		}
	}
	
	public function action_remove_estagiario() {
		if ($this->request->post('num_celular')) {
			$celular = $this->request->post('num_celular');
			$codigo = $this->geraCodigo(8, false, true);
			$valida = $this->validar_estagiario($celular, $codigo);
			
			if (!$valida) {
				$txterro = 'Erro ao enviar mensagem. Tente novamente.';
				$context = array('txterro' => $txterro, 'celular' => $celular);
			}else {
				$context = array('celular' => $celular, 'codigo' => $codigo);
			}
			$this->template->pageCss = array('estagios');
			$this->template->content = View::factory('estagios/remove_estagiario', $context);
		}else {
			$this->template->pageCss = array('estagios');
			$cod_enviado = $this->request->post('cod_enviado');
			$cod_inserido = $this->request->post('cod_inserido');
			$celular = $this->request->post('celular');
			
			if ($cod_enviado == $cod_inserido) {
				$remove = $this->removerCadastroEst($celular);
				
				if (!$remove) {
					$txterro = 'Erro na remoção do seu cadastro. Por favor, tente novamente.';
					$context = array('celular' => $celular, 'txterro' => $txterro);
					$this->template->content = View::factory('estagios/remove_estagiario', $context);
				}else {
					$this->template->content = View::factory('estagios/removido');
				}
			}else {
				$txterro = 'Código incorreto. Tente novamente.';
				$context = array('celular' => $celular, 'txterro' => $txterro);
				$this->template->content = View::factory('estagios/remove_estagiario', $context);
			}
		}
	}
	
	public function action_remove_empresa() {
		if ($this->request->post('num_celular')) {
			$celular = $this->request->post('num_celular');
			$codigo = $this->geraCodigo(8, false, true);
			$valida = $this->validar_estagiario($celular, $codigo);
				
			if (!$valida) {
				$txterro = 'Erro ao enviar mensagem. Tente novamente.';
				$context = array('txterro' => $txterro, 'celular' => $celular);
			}else {
				$context = array('celular' => $celular, 'codigo' => $codigo);
			}
			$this->template->pageCss = array('estagios');
			$this->template->content = View::factory('estagios/remove_empresa', $context);
		}else {
			$this->template->pageCss = array('estagios');
			$cod_enviado = $this->request->post('cod_enviado');
			$cod_inserido = $this->request->post('cod_inserido');
			$celular = $this->request->post('celular');
		
			if ($cod_enviado == $cod_inserido) {
				$remove = $this->removerCadastroEmp($celular);
					
				if (!$remove) {
					$txterro = 'Erro na remoção do seu cadastro. Por favor, tente novamente.';
					$context = array('celular' => $celular, 'txterro' => $txterro);
					$this->template->content = View::factory('estagios/remove_empresa', $context);
				}else {
					$this->template->content = View::factory('estagios/removido');
				}
			}else {
				$txterro = 'Código incorreto. Tente novamente.';
				$context = array('celular' => $celular, 'txterro' => $txterro);
				$this->template->content = View::factory('estagios/remove_empresa', $context);
			}
		}
	}
	
	public function action_reativar_estagiario() {
		$this->template->pageJs = array('estagios');
		if ($this->request->post()) {
			if ($this->request->post('num_celular')) {
				$celular = $this->request->post('num_celular');
				$celular = $this->decode_telefone($celular);
				$codigo = $this->geraCodigo(8, false, true);
				$valida = $this->validar_estagiario($celular, $codigo);
				
				if (!$valida) {
					$txterro = 'Erro ao enviar mensagem. Tente novamente.';
					$context = array('txterro' => $txterro);
				}else {
					$context = array('celular' => $celular, 'codigo' => $codigo);
				}
				$this->template->pageCss = array('estagios');
				$this->template->content = View::factory('estagios/reativar_estagiario', $context);
			}else if ($this->request->post('cod_inserido')) {
				$this->template->pageCss = array('estagios');
				$cod_enviado = $this->request->post('cod_enviado');
				$cod_inserido = $this->request->post('cod_inserido');
				$celular = $this->request->post('celular');
			
				if ($cod_enviado == $cod_inserido) {
					$reativa = $this->confirmarCadastroEst($celular);
						
					if (!$reativa) {
						$txterro = 'Erro na confirmação do seu cadastro. Por favor, tente novamente.';
						$context = array('txterro' => $txterro);
						$this->template->content = View::factory('estagios/reativar_estagiario', $context);
					}else {
						$this->template->content = View::factory('estagios/confirmado');
					}
				}else {
					$txterro = 'Código incorreto. Tente novamente.';
					$context = array('txterro' => $txterro);
					$this->template->content = View::factory('estagios/reativar_estagiario', $context);
				}
			}
		}else { //não há post
			$this->template->pageCss = array('estagios');
			$this->template->content = View::factory('estagios/reativar_estagiario');
		}
	}
	
	public function action_reativar_empresa() {
		$this->template->pageJs = array('estagios');
		if ($this->request->post()) {
			if ($this->request->post('num_celular')) {
				$celular = $this->request->post('num_celular');
				$celular = $this->decode_telefone($celular);
				$codigo = $this->geraCodigo(8, false, true);
				$valida = $this->validar_estagiario($celular, $codigo);
	
				if (!$valida) {
					$txterro = 'Erro ao enviar mensagem. Tente novamente.';
					$context = array('txterro' => $txterro);
				}else {
					$context = array('celular' => $celular, 'codigo' => $codigo);
				}
				$this->template->pageCss = array('estagios');
				$this->template->content = View::factory('estagios/reativar_empresa', $context);
			}else if ($this->request->post('cod_inserido')) {
				$this->template->pageCss = array('estagios');
				$cod_enviado = $this->request->post('cod_enviado');
				$cod_inserido = $this->request->post('cod_inserido');
				$celular = $this->request->post('celular');
					
				if ($cod_enviado == $cod_inserido) {
					$reativa = $this->confirmarCadastroEmp($celular);
	
					if (!$reativa) {
						$txterro = 'Erro na confirmação do seu cadastro. Por favor, tente novamente.';
						$context = array('txterro' => $txterro);
						$this->template->content = View::factory('estagios/reativar_empresa', $context);
					}else {
						$this->template->content = View::factory('estagios/confirmado');
					}
				}else {
					$txterro = 'Código incorreto. Tente novamente.';
					$context = array('txterro' => $txterro);
					$this->template->content = View::factory('estagios/reativar_empresa', $context);
				}
			}
		}else { //não há post
			$this->template->pageCss = array('estagios');
			$this->template->content = View::factory('estagios/reativar_empresa');
		}
	}
	
	private function removerCadastroEst($celular) {
		$sql = "update cwk_estagiarios set status = 2 where celular = :celular";
		$query = DB::query(Database::UPDATE, $sql)->param(':celular', $celular)->execute();
		return true;
	}
	
	private function removerCadastroEmp($celular) {
		$sql = "update cwk_empresas set status = 2 where celular = :celular";
		$query = DB::query(Database::UPDATE, $sql)->param(':celular', $celular)->execute();
		return true;
	}
	
	private function cadastrar_estagiario($user_data){
		$retorno = array();
		$retorno["errors"]  = array();
		$retorno["success"] = false;
		$retorno["request"] = $user_data;
	

		try{
			$estagiario = ORM::factory('Estagiario')->values($user_data);
			$estagiario->create();
				
			$retorno["success"] = true;
			return $retorno;
		}
		catch(ORM_Validation_Exception $e){
			$erros = $e->errors();
			$retorno["success"] = false;
			foreach($erros as $errk => $erro){
				$retorno["errors"][$errk] = $erro[0];
			}
			return $retorno;
		}
	}
	
	private function cadastrar_empresa($user_data){
		$retorno = array();
		$retorno["errors"]  = array();
		$retorno["success"] = false;
		$retorno["request"] = $user_data;
	
	
		try{
			$empresa = ORM::factory('Empresa')->values($user_data);
			$empresa->create();
	
			$retorno["success"] = true;
			return $retorno;
		}
		catch(ORM_Validation_Exception $e){
			$erros = $e->errors();
			$retorno["success"] = false;
			foreach($erros as $errk => $erro){
				$retorno["errors"][$errk] = $erro[0];
			}
			return $retorno;
		}
	}
	
	private function geraCodigo($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false) {

		$lmin = 'abcdefghijklmnopqrstuvwxyz';
		$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$num = '1234567890';
		$simb = '!@#$%*-';
		$retorno = '';
		$caracteres = '';

		$caracteres .= $lmin;
		if ($maiusculas) $caracteres .= $lmai;
		if ($numeros) $caracteres .= $num;
		if ($simbolos) $caracteres .= $simb;

		$len = strlen($caracteres);
		for ($n = 1; $n <= $tamanho; $n++) {
			$rand = mt_rand(1, $len);
			$retorno .= $caracteres[$rand-1];
		}	
		
		return $retorno;
	}
	
	
	private function validar_estagiario($celular, $mensagem) {
		$remote  = Database::instance('remote');
		$sql = "insert into sms (CELULAR_REMETENTE, CELULAR_DESTINO, MENSAGEM, STATUS, USUARIO)
      values ('9999999999', :celular, :mensagem, '1', '151')";
		$query = DB::query(Database::INSERT, $sql)->parameters(array(
				':celular' => $celular,
				':mensagem' => 'Código de confirmação: '.$mensagem
				))->execute($remote);
		unset($remote);
		return true;
		
	}
	
	private function confirmarCadastroEst($celular) {
		$sql = "update cwk_estagiarios set status = 1 where celular = :celular";
		$query = DB::query(Database::UPDATE, $sql)->parameters(array(':celular' => $celular))->execute();
		return true;
	}
	
	private function confirmarCadastroEmp($celular) {
		$sql = "update cwk_empresas set status = 1 where celular = :celular";
		$query = DB::query(Database::UPDATE, $sql)->parameters(array(':celular' => $celular))->execute();
		return true;
	}
	
	function decode_telefone($telefone){
		$telefone = trim($telefone);
		if($telefone=="") return "";
		$nums = "0123456789";
	
		$numsarr = str_split($nums);
		$telsarr = str_split($telefone);
	
		$novo_telefone = "";
	
		foreach($telsarr as $tel){
			$ex = false;
			foreach($numsarr as $num){
				if($tel == $num){
					$ex = true;
					break;
				}
			}
	
			if($ex) $novo_telefone .= $tel;
		}
	
		return $novo_telefone;
	}
}

