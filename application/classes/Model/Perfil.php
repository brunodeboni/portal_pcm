<?php defined('SYSPATH') or die('No direct script access.');
Session::instance();

class Model_Perfil extends Model_Database
{
	private $db;

	function pegarDadosPerfil($user) {
		
		$sql = "select
				perfil.foto,
				perfil.nascimento,
				perfil.endereco,
				perfil.cidade,
				perfil.uf,
				perfil.facebook,
				perfil.linkedin,
				perfil.planejador,
				perfil.site_empresa,
				perfil.ja_trabalhou,
				perfil.historico,
				perfil.usu_sigma,
				perfil.tempo_usuario,
				perfil.publicar,
				usuarios.nome,
				usuarios.telefone,
				usuarios.celular,
				usuarios.email,
				usuarios.cargo,
				usuarios.empresa
		
				from cw_perfil as perfil
		
				left join cwk_users as usuarios
				on usuarios.id = perfil.id_user
		
				where perfil.id_user = :id_user";
		
		$query = DB::query(Database::SELECT, $sql)->parameters(array(":id_user" => $user))->execute();
		$retorno = $query->as_array();
		
		
		foreach ($retorno as $res) {
			if (($res['foto'])) $foto = $res['foto'];
			else $foto = "/resources/img/perfil/pp.png";
				
				$nome = $res['nome'];
				$nascimento = $res['nascimento'];
				$endereco = $res['endereco'];
				$cidade = $res['cidade'];
				$uf = $res['uf'];
				
				if ($res['telefone']) $telefone = $res['telefone'];
				else $telefone = "";
				
				$celular = $res['celular'];
				$email = $res['email'];
				
				if ($res['facebook']) $facebook = $res['facebook'];
				else $facebook = "Não publicado";
				
				if ($res['linkedin']) $linkedin = $res['linkedin'];
				else $linkedin = "Não publicado";
				
				if ($res['planejador']) $planejador = $res['planejador'];
				else $planejador = "Não";
				
				$cargo = $res['cargo'];
				$empresa = $res['empresa'];
				
				if ($res['site_empresa']) $site_empresa = $res['site_empresa'];
				else $site_empresa = "Não publicado";
				
				if ($res['ja_trabalhou']) $ja_trabalhou = $res['ja_trabalhou'];
				else $ja_trabalhou = "";
				
				if ($res['historico']) $historico = $res['historico'];
				else $historico = "";
				
				if ($res['usu_sigma']) $usu_sigma = $res['usu_sigma'];
				else $usu_sigma = "Não";
				
				if ($res['tempo_usuario']) $tempo_usuario = $res['tempo_usuario'];
				else $tempo_usuario = "";
				
				if ($res['publicar']) $publicar = $res['publicar']; 
				else $publicar = "";
		}
		
		$context = array(   // Variáveis que vão para a view
					'user' => $user,
					'foto' => $foto,
					'nome' => $nome,
					'nascimento' => $nascimento,
					'endereco' => $endereco,
					'cidade' => $cidade,
					'uf' => $uf,
					'telefone' => $telefone,
					'celular' => $celular,
					'email' => $email,
					'facebook' => $facebook,
					'linkedin' => $linkedin,
					'cargo' => $cargo,
					'planejador' => $planejador,
					'empresa' => $empresa,
					'site_empresa' => $site_empresa,
					'ja_trabalhou' => $ja_trabalhou,
					'historico' => $historico,
					'usu_sigma' => $usu_sigma,
					'tempo_usuario' => $tempo_usuario
		);
		
		return $context;
	}
	
	function pegarDadosUsuario($user) {
	
		$sql = "select
				usuarios.nome,
				usuarios.telefone,
				usuarios.celular,
				usuarios.email,
				usuarios.cargo,
				usuarios.empresa
	
				from cwk_users as usuarios
	
				where usuarios.id = :id_user";
	
		$query = DB::query(Database::SELECT, $sql)->parameters(array(":id_user" => $user))->execute();
		$retorno = $query->as_array();
		
		foreach ($retorno as $r) {
			$context = array(   // Variáveis que vão para a view
					'nome' => $r['nome'],
					'telefone' => $r['telefone'],
					'celular' => $r['celular'],
					'email' => $r['email'],
					'cargo' => $r['cargo'],
					'empresa' => $r['empresa'],
			);
		}
		
		return $context;
	}
	
	function checarPerfil($user) {
		//Verifica se usuário já tem perfil
		$sql = "select perfil.id from cw_perfil as perfil
				join cwk_users as users
				on users.id=perfil.id_user
				where perfil.id_user = :id_user";
		$query = DB::query(Database::SELECT, $sql)->parameters(array(":id_user" => $user))->execute();
		$retorno = $query->as_array();
		return (boolean)count($retorno);
		
	}
	
	function salvarDados($user) {
		$dados = Request::current()->post();
		
		if (! isset($dados['telefone'])) $dados['telefone'] = "";
		if ($dados['facebook'] == "") $dados['facebook'] = "Não publicado";
		if ($dados['linkedin'] == "") $dados['linkedin'] = "Não publicado";
		if (! isset($dados['planejador'])) $dados['planejador'] = "Não";
		if ($dados['site_empresa'] == "") $dados['site_empresa'] = "Não publicado";
		if (! isset($dados['usu_sigma'])) $dados['usu_sigma'] = "Não";
		if (isset ($dados['avalie'])) {
			if ($dados['avalie'] == "") $dados['avalie'] = null;
		}else {
			$dados['avalie'] = null;
		}
		if (isset ($dados['tempo_usuario'])) {
			$dados['tempo_usuario'] = $dados['tempo_usuario'];
		}else {
			$dados['tempo_usuario'] = "";
		}
		
		if (! isset($dados['publicar'])) {
			$publicar = "";
		}else {
			$publicar = "";
			foreach ($dados['publicar'] as $p) {
				$publicar .= $p."|";
			}
			$publicar = trim($publicar, "|");	
		}
		
		
		$arr_dados = array(
				":id_user" => $user,
				":nome" => $dados['nome'],
				":nascimento" => $dados['nascimento'],
				":endereco" => $dados['endereco'],
				":cidade" => $dados['cidade'],
				":uf" => $dados['uf'],
				":telefone" => $dados['telefone'],
				":email" => $dados['email'],
				":facebook" => $dados['facebook'],
				":linkedin" => $dados['linkedin'],
				":cargo" => $dados['cargo'],
				":planejador" => $dados['planejador'],
				":empresa" => $dados['empresa'],
				":site_empresa" => $dados['site_empresa'],
				":ja_trabalhou" => $dados['ja_trabalhou'],
				":historico" => $dados['historico'],
				":usu_sigma" => $dados['usu_sigma'],
				":tempo_usuario" => $dados['tempo_usuario'],
				":avalie" => $dados['avalie'],
				":publicar" => $publicar
		);
		
		
		if (!$this->checarPerfil($user)) {
			//Insere dados do perfil
			$sql = "insert into cw_perfil 
			(id_user, nascimento, endereco, cidade, uf, facebook, linkedin, planejador, site_empresa, ja_trabalhou,
				historico, usu_sigma, tempo_usuario, avalie, publicar) 
			values (:id_user, :nascimento, :endereco, :cidade, :uf, :facebook, :linkedin, :planejador, :site_empresa, :ja_trabalhou,
				:historico, :usu_sigma, :tempo_usuario, :avalie, :publicar)";
			$query = DB::query(Database::INSERT, $sql)->parameters($arr_dados)->execute();
			
			//Atualiza informações no cadastro do usuário
			$sql2 = "update cwk_users set nome = :nome, cargo = :cargo, empresa = :empresa, telefone = :telefone, email = :email
					where id = :id_user";
			$query2 = DB::query(Database::UPDATE, $sql2)->parameters($arr_dados)->execute();
			
			return true;
			
		}else {
			//Atualiza dados do perfil
			$sql = "update cw_perfil
			set nascimento = :nascimento, endereco = :endereco, cidade = :cidade, uf = :uf, facebook = :facebook, linkedin = :linkedin,
			  planejador = :planejador, site_empresa = :site_empresa, ja_trabalhou = :ja_trabalhou, historico=:historico,
			  publicar = :publicar
			where id_user = :id_user";
			$query = DB::query(Database::UPDATE, $sql)->parameters($arr_dados)->execute();
			
			//Atualiza informações no cadastro do usuário
			$sql2 = "update cwk_users set nome = :nome, cargo = :cargo, empresa = :empresa, telefone = :telefone, email = :email
					where id = :id_user";
			$query2 = DB::query(Database::UPDATE, $sql2)->parameters($arr_dados)->execute();
			
			return true;
		}
	}
	
	function pegarDadosId($user) {
	
		$sql = "select
				perfil.foto,
				perfil.nascimento,
				perfil.endereco,
				perfil.cidade,
				perfil.uf,
				perfil.facebook,
				perfil.linkedin,
				perfil.planejador,
				perfil.site_empresa,
				perfil.ja_trabalhou,
				perfil.historico,
				perfil.usu_sigma,
				perfil.tempo_usuario,
				perfil.publicar,
				usuarios.nome,
				usuarios.telefone,
				usuarios.celular,
				usuarios.email,
				usuarios.cargo,
				usuarios.empresa
		
				from cw_perfil as perfil
		
				left join cwk_users as usuarios
				on usuarios.id = perfil.id_user
		
				where perfil.id_user = :id_user";
		
		$query = DB::query(Database::SELECT, $sql)->parameters(array(":id_user" => $user))->execute();
		$retorno = $query->as_array();
		
		if (count($retorno)) {
			foreach ($retorno as $res) {
				if (($res['foto'])) $foto = $res['foto'];
				else $foto = "/resources/img/perfil/pp.png";
					
				$nome = $res['nome'];
				$nascimento = $res['nascimento'];
				$endereco = $res['endereco'];
				$cidade = $res['cidade'];
				$uf = $res['uf'];
					
				if ($res['telefone']) $telefone = $res['telefone'];
				else $telefone = "";
					
				$celular = $res['celular'];
				$email = $res['email'];
					
				if ($res['facebook']) $facebook = $res['facebook'];
				else $facebook = "Não publicado";
					
				if ($res['linkedin']) $linkedin = $res['linkedin'];
				else $linkedin = "Não publicado";
					
				if ($res['planejador']) $planejador = $res['planejador'];
				else $planejador = "Não";
					
				$cargo = $res['cargo'];
				$empresa = $res['empresa'];
					
				if ($res['site_empresa']) $site_empresa = $res['site_empresa'];
				else $site_empresa = "Não publicado";
					
				if ($res['ja_trabalhou']) $ja_trabalhou = $res['ja_trabalhou'];
				else $ja_trabalhou = "";
					
				if ($res['historico']) $historico = $res['historico'];
				else $historico = "";
					
				if ($res['usu_sigma']) $usu_sigma = $res['usu_sigma'];
				else $usu_sigma = "Não";
					
				if ($res['tempo_usuario']) $tempo_usuario = $res['tempo_usuario'];
				else $tempo_usuario = "";
				
				if ($res['publicar']) $publicar = $res['publicar'];
				else $publicar = "";
			}
			
			$context = array(   // Variáveis que vão para a view
					'user' => $user,
					'foto' => $foto,
					'nome' => $nome,
					'nascimento' => $nascimento,
					'enderco' => $endereco,
					'cidade' => $cidade,
					'uf' => $uf,
					'telefone' => $telefone,
					'celular' => $celular,
					'email' => $email,
					'facebook' => $facebook,
					'linkedin' => $linkedin,
					'cargo' => $cargo,
					'planejador' => $planejador,
					'empresa' => $empresa,
					'site_empresa' => $site_empresa,
					'ja_trabalhou' => $ja_trabalhou,
					'historico' => $historico,
					'usu_sigma' => $usu_sigma,
					'tempo_usuario' => $tempo_usuario,
					'publicar' => $publicar
			);
		
			return $context;
		
		}else {
			$msg = 'Este usuário ainda não cadastrou seu perfil.';
			return $msg;
		}
		
	}
	
	function excluirPerfil($user) {
		$sql = "delete from cw_perfil where id_user = :id_user";
		$query = DB::query(Database::DELETE, $sql)->parameters(array(":id_user" => $user))->execute();
		return true;
	}
	
	function excluirFoto() {
		$diretorio = dir('uploads/fotos/');
		$foto = array();
		while ($arquivos = $diretorio->read()) {
			$foto[] = $arquivos;
		}
		$diretorio->close();
		
		foreach ($foto as $f) {
			if ($f == '.' || $f == '..') continue;
			$caminho = '/uploads/fotos/'.$f;
			
			$sql = "select foto from cw_perfil where foto = :caminho";
			$query = DB::query(Database::SELECT, $sql)->param(':caminho', $caminho)->execute();
			
			$caminho = 'uploads/fotos/'.$f;
			if (!count($query)) unlink($caminho);
		}
		
	}
	
}
?>