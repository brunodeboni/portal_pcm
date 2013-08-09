<?php defined('SYSPATH') or die('No direct script access.');

// Gerar ID da sessão
if(!Session::instance('native')->get('id')) {
	Session::instance('native')->set('id',md5(uniqid()));
}