<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-10 08:26:15 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php:494
2013-04-10 08:26:15 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php(494): Kohana_View->__get('content')
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Cursos->action_certificado()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php:494
2013-04-10 08:38:12 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-04-10 08:38:12 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Base.php(9): Kohana_Session::instance()
#3 [internal function]: Controller_Base->__construct(Object(Request), Object(Response))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-04-10 08:45:21 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant cel - assumed 'cel' ~ APPPATH\views\login\login.php [ 41 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\login\login.php:41
2013-04-10 08:45:21 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\login\login.php(41): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\cen...', 41, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\login\login.php:41
2013-04-10 08:46:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\login\login.php [ 41 ] in :
2013-04-10 08:46:25 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 08:49:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\login\login.php [ 41 ] in :
2013-04-10 08:49:22 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 09:17:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:17:52 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:20:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:20:19 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:20:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:20:25 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:21:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:21:37 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:21:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:21:40 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:24:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:24:33 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:24:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:24:37 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:24:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:24:39 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:24:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:24:40 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:24:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:24:40 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:24:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:24:41 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:24:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:24:43 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:27:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:27:00 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:46:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:46:53 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:46:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:46:57 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:48:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:48:39 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:55:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:55:20 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:55:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:55:23 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:56:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:56:06 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:56:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 09:56:07 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:06:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:06:34 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:07:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:07:07 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:07:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:07:11 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:07:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:07:25 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:07:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:07:27 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:39:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:39:11 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:39:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:39:34 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:39:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:39:38 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:39:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:39:40 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:40:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:40:27 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:40:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:40:37 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:40:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:40:40 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:40:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:40:41 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:42:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:42:12 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:42:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:42:15 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:42:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:42:16 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:42:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:42:17 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:43:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:43:49 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:43:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:43:53 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:45:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:45:36 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:45:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:45:40 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:46:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:46:26 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:46:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:46:28 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:47:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:47:11 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:47:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:47:13 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:47:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:47:13 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:47:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:47:14 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:47:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:47:15 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:47:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:47:15 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:47:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:47:17 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:47:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:47:23 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:50:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:50:42 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:50:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:50:45 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:51:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:51:59 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:52:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:52:00 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:52:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:52:37 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:52:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:52:38 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:52:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:52:39 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:52:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 10:52:40 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-10 12:11:51 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Uma tentativa de conexão falhou porque o componente conectado nã (trying to connect via tcp://186.202.121.119:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php:171
2013-04-10 12:11:51 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select??????(se...', false, Array)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Iframes.php(43): Kohana_Database_Query->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Iframes->action_onlineagora()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Iframes))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php:171
2013-04-10 13:31:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::decode_telefone() ~ APPPATH\classes\Controller\Cursos.php [ 823 ] in :
2013-04-10 13:31:49 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 13:31:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::decode_telefone() ~ APPPATH\classes\Controller\Cursos.php [ 823 ] in :
2013-04-10 13:31:52 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 13:31:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::decode_telefone() ~ APPPATH\classes\Controller\Cursos.php [ 823 ] in :
2013-04-10 13:31:54 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 13:31:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::decode_telefone() ~ APPPATH\classes\Controller\Cursos.php [ 823 ] in :
2013-04-10 13:31:54 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 13:31:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::decode_telefone() ~ APPPATH\classes\Controller\Cursos.php [ 823 ] in :
2013-04-10 13:31:54 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 13:31:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::decode_telefone() ~ APPPATH\classes\Controller\Cursos.php [ 823 ] in :
2013-04-10 13:31:55 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 13:31:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::decode_telefone() ~ APPPATH\classes\Controller\Cursos.php [ 823 ] in :
2013-04-10 13:31:55 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 13:31:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::decode_telefone() ~ APPPATH\classes\Controller\Cursos.php [ 823 ] in :
2013-04-10 13:31:55 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 13:31:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::decode_telefone() ~ APPPATH\classes\Controller\Cursos.php [ 823 ] in :
2013-04-10 13:31:55 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 14:18:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::decode_telefone() ~ APPPATH\classes\Controller\Cursos.php [ 823 ] in :
2013-04-10 14:18:37 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 14:18:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::decode_telefone() ~ APPPATH\classes\Controller\Cursos.php [ 823 ] in :
2013-04-10 14:18:38 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 14:48:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::decode_telefone() ~ APPPATH\classes\Controller\Cursos.php [ 823 ] in :
2013-04-10 14:48:51 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 14:49:34 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::decode_telefone() ~ APPPATH\classes\Controller\Cursos.php [ 823 ] in :
2013-04-10 14:49:34 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 14:49:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::decode_telefone() ~ APPPATH\classes\Controller\Cursos.php [ 823 ] in :
2013-04-10 14:49:38 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 14:49:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::decode_telefone() ~ APPPATH\classes\Controller\Cursos.php [ 823 ] in :
2013-04-10 14:49:39 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 15:03:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::decode_telefone() ~ APPPATH\classes\Controller\Cursos.php [ 823 ] in :
2013-04-10 15:03:48 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 15:04:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::decode_telefone() ~ APPPATH\classes\Controller\Cursos.php [ 823 ] in :
2013-04-10 15:04:11 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 16:21:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Image' not found ~ APPPATH\classes\Controller\Perfil.php [ 89 ] in :
2013-04-10 16:21:22 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-10 16:22:22 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php:89
2013-04-10 16:22:22 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php(89): Kohana_Image->save('uploads/fotos/5...')
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_enviafoto()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php:89
2013-04-10 17:01:46 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-04-10 17:01:46 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Base.php(9): Kohana_Session::instance()
#3 [internal function]: Controller_Base->__construct(Object(Request), Object(Response))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125