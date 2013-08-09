<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajaxrequests extends Controller_Base
{
	/*public function before(){
		parent::before();
		$this->session = Session::instance();
	}*/
	
	/**
	 * Arquivo Javascript de configuração
	 */
	public function action_js(){
		
		$url = array(
			'domain'    => $_SERVER['SERVER_NAME'],
			'base'      => URL::base(),
			'current'   => $this->request->uri(),
			'ajax'      => URL::site('ajaxrequests').'/',
			'ajaxadmin' => URL::site('ajaxadmin').'/',
		);
		
		
		
		
		$AllConfigs = array(
			'url' => $url,
		);
		
		$this->response->headers('Content-Type','text/javascript');
		die('window.cpcfg = '.json_encode($AllConfigs));
	}
	
	/**
	 * Coloca ousuário na lista de usuários online
	 */
	public function action_onlineuser(){
		$seskey = $this->session->id();
		$id_user = Auth::instance()->logged_in()?Auth::instance()->get_user()->id:NULL;
		$onlineid = $this->session->get('onlineid',false);
		
		$params = array(
					':ses' => $seskey,
					':uid' => $id_user,
					':oid' => $onlineid,
				);
		
		if($onlineid){
			if($id_user==NULL || !$id_user){
				$iduserwhere = 'is null';
			}else{
				$iduserwhere = '= :uid';
			}
			
			$sql1 = "update cw_users_online set renovada = renovada+1 where seskey = :ses and id = :oid and id_user $iduserwhere";
			$qry1 = DB::query(Database::UPDATE, $sql1)
				->parameters($params)->execute();
			
			if($qry1){
				echo "update,$qry1";
				return;
			}
		}
		
		$sql2 = "insert into cw_users_online (seskey,id_user) values (:ses,:uid)";
		$qry2 = DB::query(Database::INSERT, $sql2)
			->parameters($params)->execute();
		
		list($insert_id,$affected_rows) = $qry2;
		
		$this->session->set('onlineid',$insert_id);
		echo "insert,".implode(',',$qry2);
	}
	
	/**
	 * Deleta um arquivo upado pelo usuário
	 */
	public function action_delrecurso(){
		$id          = $this->request->post('id');
		$id_inscrito = $this->request->post('id2');
		$id_recurso  = $this->request->post('id3');
		
		$params = array(
						':id'  => $id,
						':iid' => $id_inscrito,
						':rid' => $id_recurso,
						':uid' => Auth::instance()->get_user()->id,
					);
		
		$sql1 = "select count(*) as cont from cw_cursos_inscritos where id = :iid and id_user = :uid";
		$qry1 = DB::query(Database::SELECT,$sql1)->parameters($params)->execute();
		$res1 = $qry1->as_array();
		if(!$res1[0]['cont']) return;
		
		$sql2 = "delete from cw_cursos_recursos_uploads where id = :id and id_inscrito = :iid and id_recurso = :rid";
		$qry2 = DB::query(Database::DELETE,$sql2)->parameters($params)->execute();
		return;
	}
}
