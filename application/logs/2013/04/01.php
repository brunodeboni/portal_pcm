<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-01 08:50:28 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory uploads/fotos/ must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php:84
2013-04-01 08:50:28 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php(84): Kohana_Upload::save(Array, '515990a437ec9Lo...', 'uploads/fotos/')
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_enviafoto()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php:84
2013-04-01 08:58:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Perfil.php [ 98 ] in :
2013-04-01 08:58:24 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-01 12:27:20 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-04-01 12:27:20 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\base\init.php(4): Kohana_Session::instance('native')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Core.php(602): require_once('C:\wamp\www\cen...')
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\application\bootstrap.php(121): Kohana_Core::modules(Array)
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(102): require('C:\wamp\www\cen...')
#6 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-04-01 12:27:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: foto ~ APPPATH\classes\Model\Perfil.php [ 63 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Model\Perfil.php:63
2013-04-01 12:27:25 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Model\Perfil.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 63, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php(54): Model_Perfil->pegarDadosPerfil(NULL)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_editarfoto()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Model\Perfil.php:63
2013-04-01 12:27:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: foto ~ APPPATH\classes\Model\Perfil.php [ 63 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Model\Perfil.php:63
2013-04-01 12:27:49 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Model\Perfil.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 63, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php(54): Model_Perfil->pegarDadosPerfil(NULL)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_editarfoto()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Model\Perfil.php:63
2013-04-01 12:28:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: foto ~ APPPATH\views\perfil\editarfoto.php [ 4 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\perfil\editarfoto.php:4
2013-04-01 12:28:55 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\perfil\editarfoto.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 4, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#11 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\perfil\editarfoto.php:4
2013-04-01 15:13:23 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Perfil.php [ 86 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php:86
2013-04-01 15:13:23 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php(86): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\wamp\www\cen...', 86, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_enviafoto()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php:86
2013-04-01 15:13:58 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate abstract class Image ~ APPPATH\classes\Controller\Perfil.php [ 96 ] in :
2013-04-01 15:13:58 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-01 15:16:42 --- EMERGENCY: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\Debug.php [ 251 ] in :
2013-04-01 15:16:42 --- NOTICE: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'C:\wamp\www\cen...', 251, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Debug.php(251): strpos(Array, 'C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image.php(108): Kohana_Debug::path(Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct(Array)
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct(Array)
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php(96): Kohana_Image::factory(Array)
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_enviafoto()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#12 {main} in :
2013-04-01 15:17:48 --- EMERGENCY: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\Debug.php [ 251 ] in :
2013-04-01 15:17:48 --- NOTICE: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'C:\wamp\www\cen...', 251, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Debug.php(251): strpos(Array, 'C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image.php(108): Kohana_Debug::path(Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct(Array)
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct(Array)
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php(96): Kohana_Image::factory(Array)
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_enviafoto()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#12 {main} in :
2013-04-01 15:22:51 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image\GD.php:91
2013-04-01 15:22:51 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('Logo Sigma.png')
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('Logo Sigma.png')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php(96): Kohana_Image::factory('Logo Sigma.png')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_enviafoto()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image\GD.php:91
2013-04-01 15:23:09 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image\GD.php:91
2013-04-01 15:23:09 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('5159ecad72ca3Lo...')
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('5159ecad72ca3Lo...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php(96): Kohana_Image::factory('5159ecad72ca3Lo...')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_enviafoto()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image\GD.php:91
2013-04-01 15:23:28 --- EMERGENCY: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\Debug.php [ 251 ] in :
2013-04-01 15:23:28 --- NOTICE: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'C:\wamp\www\cen...', 251, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Debug.php(251): strpos(Array, 'C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image.php(108): Kohana_Debug::path(Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct(Array)
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct(Array)
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php(96): Kohana_Image::factory(Array)
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_enviafoto()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#12 {main} in :
2013-04-01 15:23:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: foto ~ APPPATH\classes\Controller\Perfil.php [ 96 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php:96
2013-04-01 15:23:50 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php(96): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\cen...', 96, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_enviafoto()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php:96
2013-04-01 15:24:23 --- EMERGENCY: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\Debug.php [ 251 ] in :
2013-04-01 15:24:23 --- NOTICE: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'C:\wamp\www\cen...', 251, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Debug.php(251): strpos(Array, 'C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image.php(108): Kohana_Debug::path(Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct(Array)
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct(Array)
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Perfil.php(96): Kohana_Image::factory(Array)
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Perfil->action_enviafoto()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perfil))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#12 {main} in :