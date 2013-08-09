<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-06 17:06:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\classes\Controller\Historicos.php [ 53 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Historicos.php:53
2013-05-06 17:06:00 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Historicos.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 53, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Historicos->action_exibir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Historicos))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Historicos.php:53