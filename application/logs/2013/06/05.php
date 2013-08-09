<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-05 13:13:28 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'google_api' at 'MODPATH\google_api/src/***' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in C:\wamp\www\trunk\portal_pcm\application\bootstrap.php:113
2013-06-05 13:13:28 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\bootstrap.php(113): Kohana_Core::modules(Array)
#1 C:\wamp\www\trunk\portal_pcm\index.php(102): require('C:\wamp\www\tru...')
#2 {main} in C:\wamp\www\trunk\portal_pcm\application\bootstrap.php:113
2013-06-05 13:16:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'const' (T_CONST) ~ APPPATH\classes\Model\Perfil.php [ 250 ] in :
2013-06-05 13:16:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-05 13:23:06 --- CRITICAL: ErrorException [ 1 ]: Class 'Google_Client' not found ~ APPPATH\classes\Model\Perfil.php [ 255 ] in :
2013-06-05 13:23:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-05 13:24:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Google_Client' not found ~ APPPATH\classes\Model\Perfil.php [ 255 ] in :
2013-06-05 13:24:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-05 13:25:07 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'google_api' at 'MODPATH\google_api/*' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in C:\wamp\www\trunk\portal_pcm\application\bootstrap.php:113
2013-06-05 13:25:07 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\bootstrap.php(113): Kohana_Core::modules(Array)
#1 C:\wamp\www\trunk\portal_pcm\index.php(102): require('C:\wamp\www\tru...')
#2 {main} in C:\wamp\www\trunk\portal_pcm\application\bootstrap.php:113
2013-06-05 13:25:26 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'google_api' at 'MODPATH\google_api/src/Google_Client.php' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in C:\wamp\www\trunk\portal_pcm\application\bootstrap.php:113
2013-06-05 13:25:26 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\bootstrap.php(113): Kohana_Core::modules(Array)
#1 C:\wamp\www\trunk\portal_pcm\index.php(102): require('C:\wamp\www\tru...')
#2 {main} in C:\wamp\www\trunk\portal_pcm\application\bootstrap.php:113
2013-06-05 13:25:43 --- CRITICAL: ErrorException [ 1 ]: Class 'Google_Client' not found ~ APPPATH\classes\Model\Perfil.php [ 255 ] in :
2013-06-05 13:25:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-05 13:33:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Google_Client' not found ~ APPPATH\classes\Model\Perfil.php [ 255 ] in :
2013-06-05 13:33:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-05 14:42:55 --- CRITICAL: ErrorException [ 1 ]: Class 'Google_Client' not found ~ APPPATH\classes\Model\Perfil.php [ 256 ] in :
2013-06-05 14:42:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-05 14:43:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Gclient::setApplicationName() ~ APPPATH\classes\Model\Perfil.php [ 256 ] in :
2013-06-05 14:43:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-05 14:44:52 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Gclient::$Google_Client ~ APPPATH\classes\Model\Perfil.php [ 256 ] in C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php:256
2013-06-05 14:44:52 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php(256): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\tru...', 256, Array)
#1 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(36): Model_Perfil->planejadoresToMap(Object(Model_User))
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php:256
2013-06-05 14:45:45 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/trunk/portal_pcm/modules/google_api/91fadf839057c4ed0a92914f7c3137669481cbe3-privatekey.p12): failed to open stream: No such file or directory ~ APPPATH\classes\Model\Perfil.php [ 261 ] in :
2013-06-05 14:45:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\wamp\www\tru...', 261, Array)
#1 C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php(261): file_get_contents('/trunk/portal_p...')
#2 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(36): Model_Perfil->planejadoresToMap(Object(Model_User))
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-06-05 14:48:10 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/trunk/portal_pcm/resources/keys/91fadf839057c4ed0a92914f7c3137669481cbe3-privatekey.p12): failed to open stream: No such file or directory ~ APPPATH\classes\Model\Perfil.php [ 261 ] in :
2013-06-05 14:48:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\wamp\www\tru...', 261, Array)
#1 C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php(261): file_get_contents('/trunk/portal_p...')
#2 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(36): Model_Perfil->planejadoresToMap(Object(Model_User))
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-06-05 14:48:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method google\apiClient::setAssertionCredentials() ~ APPPATH\classes\Model\Perfil.php [ 262 ] in :
2013-06-05 14:48:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-05 15:00:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method google\apiClient::setAssertionCredentials() ~ APPPATH\classes\Model\Perfil.php [ 263 ] in :
2013-06-05 15:00:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-05 15:24:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method google\apiClient::setAssertionCredentials() ~ APPPATH\classes\Model\Perfil.php [ 263 ] in :
2013-06-05 15:24:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-05 15:41:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Google_Client' not found ~ APPPATH\classes\Model\Perfil.php [ 256 ] in :
2013-06-05 15:41:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-05 15:54:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Gclient' not found ~ APPPATH\classes\Model\Perfil.php [ 255 ] in :
2013-06-05 15:54:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-05 15:59:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method google\apiClient::setAssertionCredentials() ~ APPPATH\classes\Model\Perfil.php [ 263 ] in :
2013-06-05 15:59:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-05 16:04:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method google\apiClient::setAssertionCredentials() ~ APPPATH\classes\Model\Perfil.php [ 263 ] in :
2013-06-05 16:04:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-05 16:20:35 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for google\apiClient::addService(), called in C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php on line 116 and defined ~ MODPATH\gclient\vendor\google\apiClient.php [ 153 ] in C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php:153
2013-06-05 16:20:35 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php(153): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\tru...', 153, Array)
#1 C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php(116): google\apiClient->addService('Google_Assertio...')
#2 C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php(104): Gclient_Core->add_service('Google_Assertio...')
#3 C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php(263): Gclient_Core::instance('Google_Assertio...')
#4 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(36): Model_Perfil->planejadoresToMap(Object(Model_User))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php:153
2013-06-05 16:39:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: version ~ MODPATH\gclient\classes\gclient\core.php [ 104 ] in C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php:104
2013-06-05 16:39:12 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php(104): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\tru...', 104, Array)
#1 C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php(263): Gclient_Core::instance('Google_Assertio...')
#2 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(36): Model_Perfil->planejadoresToMap(Object(Model_User))
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php:104
2013-06-05 16:39:27 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for google\apiClient::addService(), called in C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php on line 116 and defined ~ MODPATH\gclient\vendor\google\apiClient.php [ 153 ] in C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php:153
2013-06-05 16:39:27 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php(153): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\tru...', 153, Array)
#1 C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php(116): google\apiClient->addService('Google_Assertio...')
#2 C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php(104): Gclient_Core->add_service('Google_Assertio...')
#3 C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php(263): Gclient_Core::instance('Google_Assertio...')
#4 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(36): Model_Perfil->planejadoresToMap(Object(Model_User))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php:153
2013-06-05 16:40:30 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Gclient_Core::add_service(), called in C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php on line 104 and defined ~ MODPATH\gclient\classes\gclient\core.php [ 114 ] in C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php:114
2013-06-05 16:40:30 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php(114): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\tru...', 114, Array)
#1 C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php(104): Gclient_Core->add_service('Google_Assertio...')
#2 C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php(263): Gclient_Core::instance('Google_Assertio...')
#3 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(36): Model_Perfil->planejadoresToMap(Object(Model_User))
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php:114
2013-06-05 16:40:59 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for google\apiClient::addService(), called in C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php on line 112 and defined ~ MODPATH\gclient\vendor\google\apiClient.php [ 153 ] in C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php:153
2013-06-05 16:40:59 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php(153): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\tru...', 153, Array)
#1 C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php(112): google\apiClient->addService('Google_Assertio...')
#2 C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php(104): Gclient_Core->add_service('Google_Assertio...')
#3 C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php(263): Gclient_Core::instance('Google_Assertio...')
#4 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(36): Model_Perfil->planejadoresToMap(Object(Model_User))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php:153
2013-06-05 16:41:26 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for google\apiClient::addService(), called in C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php on line 112 and defined ~ MODPATH\gclient\vendor\google\apiClient.php [ 153 ] in C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php:153
2013-06-05 16:41:26 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php(153): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\tru...', 153, Array)
#1 C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php(112): google\apiClient->addService('Google_Assertio...')
#2 C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php(104): Gclient_Core->add_service('Google_Assertio...')
#3 C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php(263): Gclient_Core::instance('Google_Assertio...')
#4 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(36): Model_Perfil->planejadoresToMap(Object(Model_User))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php:153
2013-06-05 16:41:43 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for google\apiClient::addService(), called in C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php on line 112 and defined ~ MODPATH\gclient\vendor\google\apiClient.php [ 153 ] in C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php:153
2013-06-05 16:41:43 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php(153): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\tru...', 153, Array)
#1 C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php(112): google\apiClient->addService('Google_Assertio...')
#2 C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php(104): Gclient_Core->add_service('Google_Assertio...')
#3 C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php(263): Gclient_Core::instance('Google_Assertio...')
#4 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(36): Model_Perfil->planejadoresToMap(Object(Model_User))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php:153
2013-06-05 16:42:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method google\apiClient::setAssertionCredentials() ~ APPPATH\classes\Model\Perfil.php [ 263 ] in :
2013-06-05 16:42:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-05 16:43:22 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for google\apiClient::addService(), called in C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php on line 112 and defined ~ MODPATH\gclient\vendor\google\apiClient.php [ 152 ] in C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php:152
2013-06-05 16:43:22 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php(152): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\tru...', 152, Array)
#1 C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php(112): google\apiClient->addService('Google_Assertio...')
#2 C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php(104): Gclient_Core->add_service('Google_Assertio...')
#3 C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php(263): Gclient_Core::instance('Google_Assertio...')
#4 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(36): Model_Perfil->planejadoresToMap(Object(Model_User))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php:152
2013-06-05 17:01:32 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for google\apiClient::addService(), called in C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php on line 112 and defined ~ MODPATH\gclient\vendor\google\apiClient.php [ 152 ] in C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php:152
2013-06-05 17:01:32 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php(152): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\tru...', 152, Array)
#1 C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php(112): google\apiClient->addService('Google_Fusionta...')
#2 C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php(104): Gclient_Core->add_service('Google_Fusionta...')
#3 C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php(270): Gclient_Core::instance('Google_Fusionta...')
#4 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(36): Model_Perfil->planejadoresToMap(Object(Model_User))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php:152
2013-06-05 17:02:24 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for google\apiClient::addService(), called in C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php on line 112 and defined ~ MODPATH\gclient\vendor\google\apiClient.php [ 150 ] in C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php:150
2013-06-05 17:02:24 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php(150): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\tru...', 150, Array)
#1 C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php(112): google\apiClient->addService('Google_Fusionta...')
#2 C:\wamp\www\trunk\portal_pcm\modules\gclient\classes\gclient\core.php(104): Gclient_Core->add_service('Google_Fusionta...')
#3 C:\wamp\www\trunk\portal_pcm\application\classes\Model\Perfil.php(270): Gclient_Core::instance('Google_Fusionta...')
#4 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(36): Model_Perfil->planejadoresToMap(Object(Model_User))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\trunk\portal_pcm\modules\gclient\vendor\google\apiClient.php:150
2013-06-05 17:30:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Gclient::api() ~ APPPATH\classes\Model\Perfil.php [ 270 ] in :
2013-06-05 17:30:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :