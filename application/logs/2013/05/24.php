<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-24 09:32:38 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 157 ] in :
2013-05-24 09:32:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-24 09:34:39 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-05-24 09:34:39 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Base.php(9): Kohana_Session::instance()
#3 [internal function]: Controller_Base->__construct(Object(Request), Object(Response))
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-05-24 09:57:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: telefone ~ APPPATH\classes\Model\Perfil.php [ 93 ] in C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php:93
2013-05-24 09:57:23 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php(93): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\tru...', 93, Array)
#1 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(20): Model_Perfil->pegarDadosPerfil(Object(Model_User))
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_meuperfil()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php:93
2013-05-24 10:04:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: email ~ APPPATH\classes\Model\Perfil.php [ 100 ] in C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php:100
2013-05-24 10:04:21 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\tru...', 100, Array)
#1 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(20): Model_Perfil->pegarDadosPerfil(Object(Model_User))
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_meuperfil()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php:100
2013-05-24 10:16:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: contato ~ APPPATH\views\perfil\meuperfil.php [ 32 ] in C:\wamp\www\trunk\portal_pcm\application\views\perfil\meuperfil.php:32
2013-05-24 10:16:25 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\views\perfil\meuperfil.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\tru...', 32, Array)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#11 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\trunk\portal_pcm\application\views\perfil\meuperfil.php:32
2013-05-24 10:21:54 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-05-24 10:21:54 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Base.php(9): Kohana_Session::instance()
#3 [internal function]: Controller_Base->__construct(Object(Request), Object(Response))
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-05-24 10:22:15 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2013-05-24 10:22:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-24 10:55:13 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in :
2013-05-24 10:55:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-24 11:08:53 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-05-24 11:08:53 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Basetemplate.php(10): Kohana_Session::instance()
#3 [internal function]: Controller_Basetemplate->__construct(Object(Request), Object(Response))
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-05-24 11:09:39 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in :
2013-05-24 11:09:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-24 11:09:43 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in :
2013-05-24 11:09:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-24 11:10:35 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in :
2013-05-24 11:10:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-24 11:24:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: telefone ~ APPPATH\classes\Model\Perfil.php [ 315 ] in C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php:315
2013-05-24 11:24:10 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\tru...', 315, Array)
#1 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(127): Model_Perfil->pegarDadosId('2398')
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_usuarios()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php:315
2013-05-24 11:26:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: telefone ~ APPPATH\classes\Model\Perfil.php [ 315 ] in C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php:315
2013-05-24 11:26:19 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\tru...', 315, Array)
#1 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(127): Model_Perfil->pegarDadosId('2398')
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_usuarios()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php:315
2013-05-24 11:40:24 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in :
2013-05-24 11:40:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-24 11:56:20 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in :
2013-05-24 11:56:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-24 11:57:28 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in :
2013-05-24 11:57:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-24 14:48:28 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-05-24 14:48:28 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Base.php(9): Kohana_Session::instance()
#3 [internal function]: Controller_Base->__construct(Object(Request), Object(Response))
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-05-24 15:10:39 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-05-24 15:10:39 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Base.php(9): Kohana_Session::instance()
#3 [internal function]: Controller_Base->__construct(Object(Request), Object(Response))
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-05-24 15:19:26 --- CRITICAL: Database_Exception [ 1048 ]: Column 'id_user' cannot be null [ insert into cw_perfil 
			(id_user, nascimento, cidade, uf, facebook, linkedin, planejador, site_empresa, ja_trabalhou,
				historico, sobremim, interesses, usu_sigma, tempo_usuario, avalie, publicar) 
			values (NULL, '12/11/1111', 'fdasf', 'RJ', 'Não publicado', 'Não publicado', 'Não', 'Não publicado', '',
				'', '', '', 'Não', '', NULL, 'telefone|celular|email|facebook|linkedin') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-24 15:19:26 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into cw_...', false, Array)
#1 C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php(219): Kohana_Database_Query->execute()
#2 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(34): Model_Perfil->salvarDados(NULL)
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-24 15:20:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: publicar ~ APPPATH\classes\Model\Perfil.php [ 91 ] in C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php:91
2013-05-24 15:20:50 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php(91): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\tru...', 91, Array)
#1 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(20): Model_Perfil->pegarDadosPerfil(Object(Model_User))
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_meuperfil()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php:91
2013-05-24 15:24:09 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\perfil\usuarios.php [ 4 ] in C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php:4
2013-05-24 15:24:09 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php(4): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\tru...', 4, Array)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#11 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php:4
2013-05-24 16:08:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pub_celular ~ APPPATH\views\perfil\usuarios.php [ 78 ] in C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php:78
2013-05-24 16:08:42 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php(78): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\tru...', 78, Array)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#11 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php:78
2013-05-24 16:12:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pub_facebook ~ APPPATH\views\perfil\usuarios.php [ 38 ] in C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php:38
2013-05-24 16:12:27 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\tru...', 38, Array)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#11 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php:38
2013-05-24 16:13:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pub_facebook ~ APPPATH\views\perfil\usuarios.php [ 38 ] in C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php:38
2013-05-24 16:13:01 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\tru...', 38, Array)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#11 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php:38
2013-05-24 16:13:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pub_facebook ~ APPPATH\views\perfil\usuarios.php [ 38 ] in C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php:38
2013-05-24 16:13:21 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\tru...', 38, Array)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#11 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php:38
2013-05-24 16:17:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pub_facebook ~ APPPATH\views\perfil\usuarios.php [ 38 ] in C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php:38
2013-05-24 16:17:14 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\tru...', 38, Array)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#11 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php:38
2013-05-24 16:17:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pub_facebook ~ APPPATH\views\perfil\usuarios.php [ 38 ] in C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php:38
2013-05-24 16:17:59 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\tru...', 38, Array)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#11 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php:38
2013-05-24 16:20:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pub_celular ~ APPPATH\views\perfil\usuarios.php [ 82 ] in C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php:82
2013-05-24 16:20:36 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\tru...', 82, Array)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#11 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\trunk\portal_pcm\application\views\perfil\usuarios.php:82
2013-05-24 16:32:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: contato ~ APPPATH\views\perfil\editar.php [ 34 ] in C:\wamp\www\trunk\portal_pcm\application\views\perfil\editar.php:34
2013-05-24 16:32:46 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\views\perfil\editar.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\tru...', 34, Array)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#11 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\trunk\portal_pcm\application\views\perfil\editar.php:34