<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Baseajax extends Controller_Base
{
	public function before()
	{
		parent::before();
		
		if(!$this->request->is_ajax()) {
			die('Only AJAX allowed');
		}
	}
}
