<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Basetemplate extends Kohana_Controller_Template {
	public $template = 'base';
	protected $session;
	
	public function before(){
		parent::before();
		
		$this->session = Session::instance('native');
	}
}