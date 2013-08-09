<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-28 13:15:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 23 ] in :
2013-03-28 13:15:38 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-28 13:16:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 23 ] in :
2013-03-28 13:16:17 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-28 13:29:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTTP::query() ~ APPPATH\classes\Controller\Auth.php [ 21 ] in :
2013-03-28 13:29:49 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-28 14:01:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  remote ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database.php:65
2013-03-28 14:01:58 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\cen...', 65, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Estagios.php(693): Kohana_Database::instance('remote')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Estagios.php(45): Controller_Estagios->validar_estagiario('6666666666', 'mzk8a4oo')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Estagios->action_estagiario()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Estagios))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database.php:65
2013-03-28 14:05:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  remote ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database.php:65
2013-03-28 14:05:21 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\cen...', 65, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Estagios.php(693): Kohana_Database::instance('remote')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Estagios.php(45): Controller_Estagios->validar_estagiario('6666666666', 'g36zil7e')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Estagios->action_estagiario()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Estagios))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database.php:65
2013-03-28 14:05:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  remote ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database.php:65
2013-03-28 14:05:50 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\cen...', 65, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Estagios.php(693): Kohana_Database::instance('remote')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Estagios.php(45): Controller_Estagios->validar_estagiario('6666666666', 'xl7l60wf')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Estagios->action_estagiario()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Estagios))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database.php:65