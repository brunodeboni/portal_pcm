<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-11 09:43:02 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-06-11 09:43:02 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Base.php(9): Kohana_Session::instance()
#3 [internal function]: Controller_Base->__construct(Object(Request), Object(Response))
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-06-11 10:17:43 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Cursos.php:494
2013-06-11 10:17:43 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Cursos.php(494): Kohana_View->__get('content')
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Cursos->action_certificado()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Cursos.php:494
2013-06-11 10:18:40 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Cursos.php:494
2013-06-11 10:18:40 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Cursos.php(494): Kohana_View->__get('content')
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Cursos->action_certificado()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Cursos.php:494
2013-06-11 10:28:24 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in :
2013-06-11 10:28:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :