<?php

class Conf {
	private static $_conexao;
	
	public static function db(){
		if(empty(self::$_conexao)){
			//self::$_conexao = mysql_connect('mysql.centralsigma.com.br','centralsigma02','S4k813042012') or die('Sem conexão com o banco de dados');
			self::$_conexao = mysql_connect('186.202.121.119','webadmin','webADMIN') or die('Sem conexão com o banco de dados');
			mysql_select_db('sigmaquiz',self::$_conexao);
			mysql_set_charset('UTF8',self::$_conexao);
		}
		
		return self::$_conexao;
	}
	
	private static function parseUserTesteInfo(array $resultados){
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
	
	public static function getUserTesteInfo($id_usuario, $id_teste = 0){
		$id_usuario = (int) $id_usuario;
		$id_teste   = (int) $id_teste;
		
		$whereteste = ($id_teste)?"and p.id_teste = $id_teste":"";
		
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
					ur.id_usuario = $id_usuario
				
				$whereteste";
		$qry1 = mysql_query($sql1,self::db()) or die(mysql_error());
		$retorno = array();
		while($res1 = mysql_fetch_assoc($qry1)){
			$retorno[] = $res1;
		}
		
		return self::parseUserTesteInfo($retorno);
	}
}