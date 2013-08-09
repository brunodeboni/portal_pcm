<?php defined('SYSPATH') or die('No direct script access.');
try{Kohana_Session::instance();}catch(Session_Exception $e){}

class Controller_Auth extends Controller_Template
{
	public $template = "base";
	
	private function user_redirect(){
		if(Auth::instance()->logged_in()){
			// Usuário
			/*HTTP::redirect("/");
			exit;*/
			$this->redirect_nextPage();
		}else{
			// Visitante
		}
	}
	
	private function redirect_nextPage($fallback_url = "/"){
		$this->auto_render = false;
		$next = $this->request->query('next');
		if(!$next) $next = $fallback_url;
		HTTP::redirect($next);
		exit;
	}
	
	public function action_cadastro(){
		$next = $this->request->query('next');
		
		$this->template->pageCss = array("cadastro");
		
		if(!$this->request->post()){
			$this->template->pageJs  = array("cadastro");
			$this->template->content = View::factory("login/cadastro");
			
		}else if ($this->request->post('nome')){
			$cadastro = $this->cadastrar($this->request->post());
			/*
			//Procura id do novo usuário através do celular
			$celular = $this->decode_telefone($cadastro['request']['celular']);
			$id_user = $this->pegaId($celular);
			//Pega empresa
			$empresa = $this->request->post('empresa');
			//Insere id do usuário e empresa na tabela de ranking de empresas
			$ranking = $this->insereRanking($id_user, $empresa);
			*/
			if(!$cadastro["success"]) {
				$this->template->content = View::factory("login/cadastro",$cadastro);
			} else{
				$celular = $this->request->post('celular');
				$celular = $this->decode_telefone($celular);
				$context = array('celular' => $celular);
				$this->template->content = View::factory('login/valida_usuario', $context);
			}
		}else if ($this->request->post('num_celular')) {
			$celular = $this->request->post('num_celular');
			$codigo = $this->geraCodigo(8, false, true);
			$valida = $this->validar_estagiario($celular, $codigo);
			
			if (!$valida) {
				$txterro = 'Erro ao enviar mensagem. Tente novamente.';
				$context = array('txterro' => $txterro, 'celular' => $celular);
			}else {
				$context = array('celular' => $celular, 'codigo' => $codigo);
			}
			
			$this->template->content = View::factory('login/valida_usuario', $context);
		}
	}
	
	public function action_verifica_cod() {
		$next = $this->request->query('next');
		$this->template->pageCss = array('cadastro');
		
		$cod_enviado = $this->request->post('cod_enviado');
		$cod_inserido = $this->request->post('cod_inserido');
		$celular = $this->request->post('celular');
	
		if ($cod_enviado == $cod_inserido) {
			$confirma = $this->confirmarCadastroUsuario($celular);
				
			if (!$confirma) {
				$txterro = 'Erro na confirmação do seu cadastro. Por favor, tente novamente.';
				$context = array('celular' => $celular, 'txterro' => $txterro);
				$this->template->content = View::factory('login/valida_usuario', $context);
			}else {
				if ($next) {
					$this->auto_render = false;
					HTTP::redirect($next);
				}else {
					$this->template->content = View::factory('login/cadastrado');
				}
			}
		}else {
			$txterro = 'Código incorreto. Tente novamente.';
			$context = array('celular' => $celular, 'txterro' => $txterro);
			$this->template->content = View::factory('login/valida_usuario', $context);
		}
	}
	
	
	//Envio de currículo para quem quer se tornar parceiro
	public function action_curriculo_parceiro(){
		//Se está logado
		if(Auth::instance()->logged_in()){
			$this->template->pageCss = array("cadastro");
			
			if(!$this->request->post()){
				$this->template->pageJs  = array("cadastro");
				$this->template->content = View::factory("login/curriculo_parceiro");
			}else{
				$cadastro = $this->cadastrar($this->request->post());
				if(!$cadastro["success"]) $this->template->content = View::factory("login/curriculo_parceiro",$cadastro);
				else{$this->auto_render = false;HTTP::redirect("auth/cadastradocomsucesso");exit;}
			}	
		}else{
			// Visitante
			$this->template->content = View::factory("login/parceiro_cadastre");
		}
		
	}
	//Processa envio de currículo de quem já é usuário
	public function action_processa_curriculo_parceiro() {
		$user = Auth::instance()->get_user()->id;
		
		//Arquivo
		set_time_limit(0);
		$arrayfiles = Validation::factory($_FILES);
		$arrayfiles_expected = array('curriculo');
			
		$pode_continuar = false;
		$arrayfiles_url = array();
			
		foreach($arrayfiles_expected as $fkey){
			if(!isset($arrayfiles[$fkey])) continue;
			if(Upload::not_empty($arrayfiles[$fkey])){
				$pode_continuar = true;
				$newfilename = preg_replace('/\s+/u', '_', uniqid().$arrayfiles[$fkey]['name'] );
					
				$uploaded = Upload::save($arrayfiles[$fkey],$newfilename,'uploads/curriculos/');
				if($uploaded){
					$arrayfiles_url[] = array('uploads/curriculos/'.$newfilename, $arrayfiles[$fkey]['name']);
				}
				
				$sql = "update cwk_users set curriculo=:url where id=:id_user";
				foreach($arrayfiles_url as $urll){
					DB::query(Database::UPDATE,$sql)->parameters(array(
					':id_user' => $user,
					':url'   => $urll[0]
					))->execute();
				}
				
				$sql2 = "insert into cwk_roles_users (user_id, role_id) values (:id_user, 3)";
				DB::query(Database::INSERT,$sql2)->parameters(array(
				':id_user' => $user
				))->execute();	
				
				$this->auto_render = false;
				HTTP::redirect("auth/curriculoenviado");
				exit;
			}else{
				unset($file);
			}
		}
			
			
		if($pode_continuar && count($arrayfiles_url)<1){
			$this->template->content = 'Erro indefinido ao tentar fazer upload dos arquivos';
			return;
		}
			
		if(!$pode_continuar){
			$this->template->content = 'Você deve fazer upload de um arquivo. <a href="javascript:history.back();">Voltar</a>';
			return;
		}
		
		return true;
	}
	
	public function action_curriculoenviado(){
		$this->template->content = View::factory("login/curriculoenviado");
	}
	
	public function action_cadastradocomsucesso(){
		$this->template->content = View::factory("login/cadastrado");
	}
	
	public function action_login(){
		$this->user_redirect();
		$this->template->pageCss = array("login");
		
		$context = array();
		
		if($this->request->post()){
			if(Auth::instance()->login(preg_replace("/[^0-9]/","",$this->request->post("login_username")),$this->request->post("login_password"))){
				/*$this->auto_render = false;
				HTTP::redirect("/");
				exit;*/
				$celular = $this->decode_telefone($this->request->post('login_username'));
				$sql = 'select id from cwk_users where celular = :celular and ativo = 1';
				$query = DB::query(Database::SELECT, $sql)->param(':celular', $celular)->execute();
				
				if (!$query) 
					$context["errors"] = array("Número de celular não validado");
				else 
					$this->redirect_nextPage();
			}else{
				$context["errors"] = array("Dados incorretos");
			}
		}
		
		$this->template->content = View::factory("login/login",$context);
	}
	
	public function action_logout(){
		Auth::instance()->logout();
		/*$this->auto_render = false;
		HTTP::redirect("/");
		exit;*/
		$this->redirect_nextPage("auth/login");
	}
	
	public function action_recuperardados(){
		$this->user_redirect();
		$this->template->pageCss = array("recuperardados");
		$this->template->pageJs = array("recuperardados");
		
		$celular = $this->request->query('celular');
		$token = $this->request->query('token');
		$modo = $this->request->query('modo');
		
		if($celular==''){
			// Página padrão
			$this->template->content = View::factory("login/recuperar_dados");
			return;
		}
		
		if(!ctype_digit($celular)){
			// erro, celular inválido
			$this->template->content = View::factory("login/recuperar_dados",array("msg"=>"Número de celular inválido","msgerro"=>1));
			return;
		}
		
		// Pegar dados do usuário
		$qry1 = DB::select('celular','email','senha')->from('users')->where('celular','=',$celular)->limit(1)->execute();
		$ctt = $qry1->count();
		if($ctt<1){
			// não existe usuário com esse número de celular
			$this->template->content = View::factory("login/recuperar_dados",array("msg"=>"Este número de celular não está cadastrado no sistema","msgerro"=>1));
			return;
		}
		
		// Pegar nome de usuário e senha deste usuário
		$res1 = $qry1->as_array();
		$pass  = $res1[0]["senha"];
		$email = $res1[0]["email"];
		$usen  = $res1[0]["celular"];
		
		// Se o usuário já passou o código...
		if($token!=''){
			// Verificar se o token é valido, se for cria a nova senha
			if(!$this->scrypctPassCheck($pass,$token)){
				// Código inválido
				$this->template->content = View::factory("login/recuperar_dados",
					array("msg"=>"Código inválido ou expirado, você precisa de um novo código","msgerro"=>1));
				return;
			}
			
			// CÓDIGO CORRETO
			// verificar se ele já preencheu o formulário de nova senha
			$novasenha = $this->request->post('novasenha');
			if($novasenha!=''){
				ORM::factory('User')->where('celular','=',$usen)->find()->update_user(array('senha'=>$novasenha),array('senha'));
				
				// SENHA ALTERADA COM SUCESSO
				//HTTP::redirect("auth/login");
				$this->template->content = View::factory('login/recuperar_dados_senhaalterada');
				return;
			}
			
			// mostrar formulário de nova senha
			$this->template->content = View::factory("login/recuperar_dados_novasenha", array("rec_username"=>$usen));
			return;
		}
		
		
		// Criar código
		$codigo = $this->scryptPass($pass);
		
		if($modo=='celular'){
			// ENVIANDO SMS
			// Enviar SMS para o usuário
			if($this->enviarSMSRecuperacao($usen,$codigo)){
				// Mostrar Formulário para a pessoa preencher o token
				$this->template->content = View::factory("login/recuperar_dados_cellcodigo");
			}else{
				// Erro devido ao celular não estar em formato APENAS NÚMEROS
				// O script nunca deve vir pra cá, se vier é erro de programação
				$this->template->content = View::factory("login/recuperar_dados",
					array("msg"=>"Não foi possível enviar o SMS, por favor tente por e-mail","msgerro"=>1));
			}
		}else{
			// ENVIANDO E-MAIL
			// Enviar e-mail para o usuário
			$this->enviarEmailRecuperacao($usen,$email,$codigo);
			// Retornar sucesso
			$this->template->content = 
				'<div style="background:#CFC;color:#090;font-weight:bold;font-size:14px;padding:10px;border:1px solid #090;width:500px;margin:auto;margin-bottom:10px;">'
				.'Email enviado, verifique sua caixa de entrada e siga as instruções indicadas.</div>';
			//View::factory("login/recuperar_dados",array("msg"=>"Email enviado, verifique sua caixa de entrada.","msgerro"=>0));
		}
		return true;
	}
	
	private function scryptPass($pass){
		$dia = date("l");
		$pass = md5($pass.$dia);
		$codigo = substr($pass,1,6);
		return $codigo;
	}
	private function scrypctPassCheck($pass,$token){
		return $this->scryptPass($pass)==$token;
	}
	private function enviarEmailRecuperacao($username,$email,$codigo){
		// Cabeçalho do e-mail
		$headers =
			'MIME-Version: 1.0' . "\r\n" .
			'Content-type: text/html; charset=UTF-8' . "\r\n" .
			'From: CPCM <cpcm-no-reply@centralsigma.com.br>' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
		// Link absoluto para o site
		$url = URL::site("auth/recuperardados",TRUE)."?celular=".rawurlencode($username)."&email=".rawurlencode($email)."&token=".rawurlencode($codigo);
		// Corpo do e-mail
		$mensagem = View::factory("login/recuperar_dados_emailcontent",array("rec_username"=>$username,"rec_url"=>$url));
		// Enviar o e-mail
		//die($mensagem);
		mail($email,"Recuperação de Senha",$mensagem,$headers);
		return true;
	}
	private function enviarSMSRecuperacao($celular,$codigo){
		if(!ctype_digit($celular)) return false;
		//echo "$codigo";return true;
		$mensagem = "CPCM: O seu codigo de confirmacao: {$codigo}";
		$sql1 = 'INSERT INTO sms (CELULAR_REMETENTE,CELULAR_DESTINO,MENSAGEM,STATUS,USUARIO)
						VALUES (:rem,:cell,:msg,:stat,:usu)';
		$qry1 = DB::query(Database::INSERT,$sql1)->parameters(array(
			':rem'    => '9999999999',
			':cell'   => $celular,
			':msg'    => $mensagem,
			':stat'   => 1,
			':usu'    => 151,
		))->execute();
		return true;
	}
	
	public function action_checarPerfil() {
	
		$cel = $this->request->post('cel');
		$cel = $this->decode_telefone($cel);
		$sql = "select p.id
				from cw_perfil as p
				join cwk_users as u on p.id_user = u.id
				where u.celular = :cel";
		$query = DB::query(Database::SELECT, $sql)->param(':cel', $cel)->execute();
	
		$this->auto_render = FALSE;
	
		if (!count($query)) echo "false";
		else echo "true";
	
	}
	
	private function cadastrar($user_data){
		$retorno = array();
		$retorno["errors"]  = array();
		$retorno["success"] = false;
		$retorno["request"] = $user_data;
		
		if(!isset($user_data["celular"],$user_data["senha"],$user_data["email"])){
			$retorno["success"] = false;
			$retorno["errors"][] = "Os dados não estão completos";
			return $retorno;
		}
		
		try{
			$user = ORM::factory('User')->values($user_data);
			$user->create();
			$user->add('roles',ORM::factory('Role',array('name'=>'login')));
			
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
		//$remote  = Database::instance('remote');
		$sql = "insert into sms (CELULAR_REMETENTE, CELULAR_DESTINO, MENSAGEM, STATUS, USUARIO)
      values ('9999999999', :celular, :mensagem, '1', '151')";
		$query = DB::query(Database::INSERT, $sql)->parameters(array(
				':celular' => $celular,
				':mensagem' => 'Código de confirmação: '.$mensagem
		))->execute();
		//unset($remote);
		return true;
	
	}
	
	private function confirmarCadastroUsuario($celular) {
		$sql = "update cwk_users set ativo = 1 where celular = :celular";
		$query = DB::query(Database::UPDATE, $sql)->parameters(array(':celular' => $celular))->execute();
		return true;
	}
	
	function insereRanking($id_user, $empresa) {
		$sql = "insert into cw_lista_empresas (id_user, empresa, ordem) values (:id_user, :empresa, 0)";
		$query = DB::query(Database::INSERT, $sql)->parameters(array(
				':empresa' => $empresa,
				':id_user' => $id_user
				))->execute();
	}
	
	function pegaId($celular) {
		$sql = "select id from cwk_users where celular = :celular";
		$query = DB::query(Database::SELECT, $sql)->param(':celular', $celular)->execute();
		$r = $query->as_array();
		$id_user = $r[0]['id'];

		return $id_user;
	}
}