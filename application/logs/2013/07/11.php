<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-11 14:16:57 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in :
2013-07-11 14:16:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-11 15:21:23 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ APPPATH\views\perfil\criar.php [ 13 ] in C:\wamp\www\portal_pcm\application\views\perfil\criar.php:13
2013-07-11 15:21:23 --- DEBUG: #0 C:\wamp\www\portal_pcm\application\views\perfil\criar.php(13): Kohana_Core::error_handler(2, 'Division by zer...', 'C:\wamp\www\por...', 13, Array)
#1 C:\wamp\www\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\por...')
#2 C:\wamp\www\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\por...', Array)
#3 C:\wamp\www\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\portal_pcm\application\views\base.php(35): Kohana_View->__toString()
#5 C:\wamp\www\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\por...')
#6 C:\wamp\www\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\por...', Array)
#7 C:\wamp\www\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#11 C:\wamp\www\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\portal_pcm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\portal_pcm\application\views\perfil\criar.php:13
2013-07-11 15:27:57 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ APPPATH\views\perfil\criar.php [ 15 ] in C:\wamp\www\portal_pcm\application\views\perfil\criar.php:15
2013-07-11 15:27:57 --- DEBUG: #0 C:\wamp\www\portal_pcm\application\views\perfil\criar.php(15): Kohana_Core::error_handler(2, 'Division by zer...', 'C:\wamp\www\por...', 15, Array)
#1 C:\wamp\www\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\por...')
#2 C:\wamp\www\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\por...', Array)
#3 C:\wamp\www\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\portal_pcm\application\views\base.php(35): Kohana_View->__toString()
#5 C:\wamp\www\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\por...')
#6 C:\wamp\www\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\por...', Array)
#7 C:\wamp\www\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#11 C:\wamp\www\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\portal_pcm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\portal_pcm\application\views\perfil\criar.php:15