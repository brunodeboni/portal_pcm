<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-06 11:22:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function http_support() ~ SYSPATH\classes\Kohana\Request\Client\HTTP.php [ 31 ] in :
2013-06-06 11:22:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-06 11:30:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function http_support() ~ SYSPATH\classes\Kohana\Request\Client\HTTP.php [ 31 ] in :
2013-06-06 11:30:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-06 11:33:49 --- CRITICAL: ErrorException [ 2 ]: fopen(http://www.centralsigma.com.br/arquivos/planejadores/updatemap.php): failed to open stream: HTTP wrapper does not support writeable connections ~ SYSPATH\classes\Kohana\Request\Client\Stream.php [ 75 ] in :
2013-06-06 11:33:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(http://ww...', 'C:\wamp\www\tru...', 75, Array)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Stream.php(75): fopen('http://www.cent...', 'r+', false, Resource id #120)
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Stream->_send_message(Object(Request), Object(Response))
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(45): Kohana_Request->execute()
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#9 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#12 {main} in :
2013-06-06 11:44:07 --- CRITICAL: ErrorException [ 2 ]: fopen(http://www.centralsigma.com.br/arquivos/planejadores/updatemap.php): failed to open stream: HTTP wrapper does not support writeable connections ~ SYSPATH\classes\Kohana\Request\Client\Stream.php [ 75 ] in :
2013-06-06 11:44:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(http://ww...', 'C:\wamp\www\tru...', 75, Array)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Stream.php(75): fopen('http://www.cent...', 'r+', false, Resource id #120)
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Stream->_send_message(Object(Request), Object(Response))
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(51): Kohana_Request->execute()
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#9 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#12 {main} in :
2013-06-06 11:44:41 --- CRITICAL: ErrorException [ 2 ]: fopen(http://www.centralsigma.com.br/arquivos/planejadores/updatemap.php): failed to open stream: HTTP wrapper does not support writeable connections ~ SYSPATH\classes\Kohana\Request\Client\Stream.php [ 75 ] in :
2013-06-06 11:44:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(http://ww...', 'C:\wamp\www\tru...', 75, Array)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Stream.php(75): fopen('http://www.cent...', 'r+', false, Resource id #120)
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Stream->_send_message(Object(Request), Object(Response))
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(51): Kohana_Request->execute()
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#9 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#12 {main} in :
2013-06-06 11:47:46 --- CRITICAL: ErrorException [ 2 ]: file_put_contents(http://www.centralsigma.com.br/arquivos/planejadores/updatemap.php): failed to open stream: HTTP wrapper does not support writeable connections ~ APPPATH\classes\Controller\Perfil.php [ 53 ] in :
2013-06-06 11:47:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', 'C:\wamp\www\tru...', 53, Array)
#1 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(53): file_put_contents('http://www.cent...', Array)
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-06-06 11:48:33 --- CRITICAL: ErrorException [ 2 ]: fopen(http://www.centralsigma.com.br/arquivos/planejadores/updatemap.php): failed to open stream: HTTP wrapper does not support writeable connections ~ SYSPATH\classes\Kohana\Request\Client\Stream.php [ 75 ] in :
2013-06-06 11:48:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(http://ww...', 'C:\wamp\www\tru...', 75, Array)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Stream.php(75): fopen('http://www.cent...', 'r+', false, Resource id #120)
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Stream->_send_message(Object(Request), Object(Response))
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(51): Kohana_Request->execute()
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#9 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#12 {main} in :
2013-06-06 13:13:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Perfil.php [ 46 ] in C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php:46
2013-06-06 13:13:11 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(46): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\tru...', 46, Array)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php:46
2013-06-06 13:29:37 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\classes\Controller\Perfil.php [ 46 ] in :
2013-06-06 13:29:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-06 16:02:36 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Perfil.php [ 163 ] in C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php:163
2013-06-06 16:02:36 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(163): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\tru...', 163, Array)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_enviafoto()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php:163
2013-06-06 16:52:34 --- CRITICAL: ErrorException [ 2 ]: strripos() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\Perfil.php [ 42 ] in :
2013-06-06 16:52:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strripos() expe...', 'C:\wamp\www\tru...', 42, Array)
#1 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(42): strripos(Array, 'facebook')
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-06-06 16:53:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: facebook ~ APPPATH\classes\Controller\Perfil.php [ 42 ] in C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php:42
2013-06-06 16:53:41 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php(42): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\tru...', 42, Array)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_criaperfil()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Perfil.php:42