
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Perfil extends Controller_Basetemplate
{

	
	public function action_meuperfil(){
		$user = Auth::instance()->get_user();
		
		if(!$VCurrentUser = Auth::instance()->get_user()){
			$this->template->content = "Você precisa estar logado para acessar o seu perfil.";
		}else {
			$this->template->pageJs = array("perfil");
			$this->template->pageCss = array("perfil");
			
			//Verifica se já tem perfil
			$this->modelPerfil = new Model_Perfil();
			if ($this->modelPerfil->checarPerfil($user)) {
				$context = $this->modelPerfil->pegarDadosPerfil($user);
				$this->modelPerfil->excluirFoto(); //exclui da pasta as imagens não usadas
				$this->template->content = View::factory('perfil/meuperfil', $context);
			}else {
				$context = $this->modelPerfil->pegarDadosUsuario($user);
				$this->template->content = View::factory('perfil/criar', $context);
			}
		}
	}
	
	public function action_criaperfil(){
		$user = Auth::instance()->get_user();
	
		$this->modelPerfil = new Model_Perfil();
		//Se for Planejador de Manutenção, cadastrar no mapa
		if ($this->request->post('planejador') == 'sim') {
			$url = 'http://www.centralsigma.com.br/arquivos/planejadores/insertmap.php';
			$res = $this->request->post();
			
			$nome = $res['nome'];
			$cidade = $res['cidade'];
			$uf = $res['uf'];
			$endereco = $res['endereco'];
			if (isset ($res['publicar'])) {
				if (in_array('facebook', $res['publicar'])) {
					$facebook = $res['facebook'];
				}else {
					$facebook = "Não publicado";
				}
				if (in_array('linkedin', $res['publicar'])) {
					$linkedin = $res['linkedin'];
				}else {
					$linkedin = "Não publicado";
				}
			}else {
				$facebook = "Não publicado";
				$linkedin = "Não publicado";
			}
			$empresa = $res['empresa'];
			$id = $user->id;
			
			$data = array(
				'nome' => $nome,
				'endereco' => $endereco,
				'cidade' => $cidade,
				'uf' => $uf,
				'facebook' => $facebook,
				'linkedin' => $linkedin,
				'empresa' => $empresa,
				'id' => $id
			);
			
			$request = Request::factory($url)->method('POST')->post($data)->execute();
    		
		}
		//Salva os dados
		if ($this->modelPerfil->salvarDados($user))
			HTTP::redirect('perfil/editarfoto');
	}
	
	public function action_editar(){
		$user = Auth::instance()->get_user();
		
		$this->template->pageJs = array("perfil");
		$this->template->pageCss = array("perfil");
		
		$this->modelPerfil = new Model_Perfil();
		$context = $this->modelPerfil->pegarDadosPerfil($user);
		$this->template->content = View::factory('perfil/editar', $context);
	}
	
	public function action_editarfoto(){
		$user = Auth::instance()->get_user();
		
		$this->template->pageJs = array("jquery.Jcrop.min", "jquery.Jcrop");
		$this->template->pageCss = array("jquery.Jcrop", "perfil");
	
		$this->template->content = View::factory('perfil/editarfoto');
	}
	
	public function action_editaperfil(){
		$user = Auth::instance()->get_user();
	
		//$this->template->pageCss = array("perfil");
		
		//Se for Planejador de Manutenção, atualizar no mapa
		if ($this->request->post('planejador') == 'sim') {
			
			$url = 'http://www.centralsigma.com.br/arquivos/planejadores/updatemap.php';
			$res = $this->request->post();
			
			//Verifica se Facebook e Linkedin podem ser publicados
			$pub_facebook = 'false';
			$pub_linkedin = 'false';

			foreach ($res['publicar'] as $publicar) {
				if ($publicar == 'facebook') {$pub_facebook = 'true';}
				if ($publicar == 'linkedin') {$pub_linkedin = 'true';}
			}
			
			$nome = $res['nome'];
			$endereco = $res['endereco'];
			$cidade = $res['cidade'];
			$uf = $res['uf'];
			if ($pub_facebook == 'true') {
				$facebook = $res['facebook'];
			}else {
				$facebook = "Não publicado";
			}
			if ($pub_linkedin == 'true') {
				$linkedin = $res['linkedin'];
			}else {
				$linkedin = "Não publicado";
			}
			$empresa = $res['empresa'];
			$id = $user->id;
			
			$data = array(
				'nome' => $nome,
				'endereco' => $endereco,
				'cidade' => $cidade,
				'uf' => $uf,
				'facebook' => $facebook,
				'linkedin' => $linkedin,
				'empresa' => $empresa,
				'id' => $id
			);
			
			$request = Request::factory($url)->method('POST')->post($data)->execute();
    		
		}
		
		$this->modelPerfil = new Model_Perfil();
		if ($this->modelPerfil->salvarDados($user)) 
			$this->template->content = View::factory('perfil/editado');
	}
	
	public function action_enviafoto() {
		$user = Auth::instance()->get_user();

		//Arquivo
		set_time_limit(0);
		$arrayfiles = Validation::factory($_FILES);
		$arrayfiles_expected = array('foto');
		
		$pode_continuar = false;
		$arrayfiles_url = array();
		
		foreach($arrayfiles_expected as $fkey){
			if(!isset($arrayfiles[$fkey])) continue;
			if(Upload::not_empty($arrayfiles[$fkey])){
				$pode_continuar = true;
				$newfilename = preg_replace('/\s+/u', '_', uniqid().$arrayfiles[$fkey]['name'] );			
				
				$x = $this->request->post('x');
				$y = $this->request->post('y');
				$width = $this->request->post('w');
				$height = $this->request->post('h');
				
				$uploaded = Image::factory($arrayfiles[$fkey]['tmp_name'])->resize(660, NULL)->crop($width, $height, $x, $y)->save('uploads/fotos/'.$newfilename);
		
				if($uploaded){
					$arrayfiles_url[] = array('/uploads/fotos/'.$newfilename);
				}
	
				foreach($arrayfiles_url as $urll){
					$sql = "update cw_perfil set foto=:url where id_user=:id_user";
					$query = DB::query(Database::UPDATE,$sql)->parameters(array(
							':id_user' => $user,
							':url'   => $urll[0]
					))->execute();
				}
				
				//Update no Mapa de Planejadores SIGMA
				$url = 'http://www.centralsigma.com.br/arquivos/planejadores/updateFotoMap.php';
				$res = $this->request->post();
			
				$foto = $arrayfiles_url[0][0];
				$id = $user->id;
				
				$data = array(
					'foto' => $foto,
					'id' => $id
				);
			
				$request = Request::factory($url)->method('POST')->post($data)->execute();
				
				$this->auto_render = false;
				HTTP::redirect('perfil/meuperfil');
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
	}
	
	public function action_usuarios() {
		$id_user = $this->request->param('id');
		$this->template->pageCss = array("perfil");
		
		//Pegar dados do usuário solicitado
		$this->modelPerfil = new Model_Perfil();
		$context = $this->modelPerfil->pegarDadosId($id_user);
		if (is_array($context)) $this->template->content = View::factory('perfil/usuarios', $context); //se é um array, usuário tem perfil
		else $this->template->content = $context; //se não é um array, exibe a mensagem
	}
	
	public function action_excluir() {
		$user = Auth::instance()->get_user();
		$uid = $user->id;
		$this->autorender = false;
		
		//Se for Planejador de Manutenção, excluir do mapa
		$sql = "select planejador from cw_perfil where id_user = :uid";
		$query = DB::query(Database::SELECT, $sql)->param(':uid', $uid)->execute();
		$retorno = $query->as_array();
		
		foreach ($retorno as $planejador) {
			if ($planejador == 'sim') {
				
				$url = 'http://www.centralsigma.com.br/arquivos/planejadores/deleteFromMap.php';
				
				$data = array(
					'id' => $uid
				);
				
				$request = Request::factory($url)->method('POST')->post($data)->execute();
	    		
			}
		}
		
		//Excluir dados do usuário solicitado
		$this->modelPerfil = new Model_Perfil();
		$this->modelPerfil->excluirPerfil($user);
		$this->modelPerfil->excluirFoto(); //exclui da pasta as imagens não usadas
		$this->template->content = 'Perfil excluído com sucesso!';
	}
	
	public function action_online() {
		$sql = "select distinct(o.id_user), u.nome, u.cargo, u.empresa, p.foto
			from cw_users_online as o
			join cwk_users as u on u.id = o.id_user
			left join cw_perfil as p on p.id_user = u.id
			where o.dh > date_sub(now(),interval 2 minute) 
			and o.id_user is not null";
		
		$query = DB::query(Database::SELECT, $sql)->execute();
		$context = array('query' => $query);
		
		$this->template->pageCss = array("perfil");
		$this->template->content = View::factory('perfil/online', $context);
	}
	
}
?>