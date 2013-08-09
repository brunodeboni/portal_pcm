<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Videos extends Controller_Basetemplate
{
	private $db;
	
	
	public function action_index(){
		HTTP::redirect('videos/playlists',301);
	}
	
	public function action_playlists(){
		$this->template->pageCss = array('videos');
		//die($this->request->param('id2').' - ok3');
		if(!($playlist = $this->request->param('id'))){
			$this->List_Playlists();
		}else{
			$this->List_Videos($playlist);
		}
	}
	
	/**
	 * Exibe a lista de playlists do CPCM
	 */
	public function List_Playlists(){
		// Pegar playlists do cpcm
		$sql1 = 'select * from cwv_playlists where id_categoria = 1';
		$qry1 = DB::query(Database::SELECT, $sql1)->execute($this->db);
		$playlists = $qry1->as_array();
		
		$this->template->content = View::factory('videos/playlists',array('playlists'=>$playlists));
	}
	
	/**
	 * Exibe uma lista de vídeos de uma playlist
	 */
	public function List_Videos($id_playlist){
		$id_playlist = (int) $id_playlist;
			
		// Pegar informações dessa playlist
		$sql1 = 'select * from cwv_playlists where id_categoria = 1 and id = '.$id_playlist.' limit 1';
		$qry1 = DB::query(Database::SELECT, $sql1)->execute($this->db);
		$playlist = $qry1->as_array();
		
		// Playlist não existe
		if(!count($playlist)){
			$this->template->content = "Playlist não encontrada";
			return;
		}
		
		$playlist = $playlist[0];
		
		// Pegar vídeos dessa playlist
		$sql2 = 'select * from cwv_videos where id_playlist = :pl';
		$qry2 = DB::query(Database::SELECT, $sql2);
		$videos = $qry2->param(':pl',$id_playlist)->execute($this->db)->as_array();
		
		$this->template->content = View::factory('videos/videos',array('videos'=>$videos, 'playlist'=>$playlist));
	}
}