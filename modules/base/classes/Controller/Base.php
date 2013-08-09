<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Kohana_Controller {
	protected $session;
	
	function before(){
		parent::before();
		
		$this->session = Session::instance('native');
	}
	
}