<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-02 09:38:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function url_encode() ~ APPPATH\views\historicos\index.php [ 80 ] in :
2013-05-02 09:38:08 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-02 15:46:24 --- EMERGENCY: ErrorException [ 8192 ]: Function split() is deprecated ~ APPPATH\views\historicos\index.php [ 73 ] in :
2013-05-02 15:46:24 --- NOTICE: #0 [internal function]: Kohana_Core::error_handler(8192, 'Function split(...', 'C:\wamp\www\cen...', 73, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\historicos\index.php(73): split()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Historicos))
#12 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#15 {main} in :
2013-05-02 15:47:23 --- EMERGENCY: ErrorException [ 8192 ]: Function split() is deprecated ~ APPPATH\views\historicos\index.php [ 73 ] in :
2013-05-02 15:47:23 --- NOTICE: #0 [internal function]: Kohana_Core::error_handler(8192, 'Function split(...', 'C:\wamp\www\cen...', 73, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\historicos\index.php(73): split()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Historicos))
#12 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#15 {main} in :
2013-05-02 15:52:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: linha ~ APPPATH\views\historicos\index.php [ 75 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\historicos\index.php:75
2013-05-02 15:52:34 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\historicos\index.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 75, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Historicos))
#11 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\historicos\index.php:75
2013-05-02 16:04:17 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 134217753 bytes) ~ APPPATH\views\historicos\index.php [ 80 ] in :
2013-05-02 16:04:17 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-02 16:04:27 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 134217753 bytes) ~ APPPATH\views\historicos\index.php [ 80 ] in :
2013-05-02 16:04:27 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-02 16:06:34 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 134217753 bytes) ~ APPPATH\views\historicos\index.php [ 80 ] in :
2013-05-02 16:06:34 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-02 16:07:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function utfo_encode() ~ APPPATH\views\historicos\index.php [ 80 ] in :
2013-05-02 16:07:09 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-02 16:07:56 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 134217753 bytes) ~ APPPATH\views\historicos\index.php [ 80 ] in :
2013-05-02 16:07:56 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :