<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Produtos extends Controller_Basetemplate
{

	public function action_index(){
		$sql1 = "select * from cw_produtos where publicado = 1";
		$qry1 = DB::query(Database::SELECT,$sql1)->execute();
		$produtos = $qry1->as_array();
		
		$context = array(
			'produtos' => $produtos,
		);
		
		$this->template->pageCss = array('produtos');
		$this->template->content = View::factory('produtos/lista',$context);
	}

}