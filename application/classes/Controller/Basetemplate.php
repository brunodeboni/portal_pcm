<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Basetemplate extends Controller_Template
{
	protected $session,$current_path,$nexturl;
	public $template = 'base';
	
	public function __construct(Request $request, Response $response){
		parent::__construct($request, $response);
		$this->session = Session::instance();
		$this->current_path = '/'.$this->request->uri();
		$current_url = URL::site($this->current_path);
		$this->nexturl = "next=".urlencode($this->current_path);
		View::bind_global('current_url',$current_url);
	}
	
}