<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Scripts extends Controller_Base
{
	/**
	 * Armazena configurações do site em uma variável javascript
	 * e escreve na tela
	 */
	public function action_sitecfg()
	{
		header('Content-Type: text/javascript; charset='.Kohana::$charset);
		
		// URLs
		$urlConfig = (object) array(
			'ajax' => URL::base().'ajax/',
		);
		
		
		// Colocar todas as configurações juntas
		$configs = array(
			'user' => $userConfig,
			'csrf' => Model_Auth::gerarCSRF(),
			'url'  => $urlConfig,
		);
		
		
		$script = 'var sitecfg = '.json_encode($configs).';';
		die($script);
	}

}
