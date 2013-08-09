<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-04 06:21:01 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Cookie.php:67
2013-03-04 06:21:01 --- DEBUG: #0 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('csrftoken', NULL)
#1 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('csrftoken')
#2 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Cookie.php:67
2013-03-04 12:25:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\views\layout\sidebar.php [ 5 ] in :
2013-03-04 12:25:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-04 12:31:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\views\layout\sidebar.php [ 5 ] in :
2013-03-04 12:31:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-04 13:53:18 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\views\layout\sidebar.php [ 5 ] in :
2013-03-04 13:53:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-04 13:54:43 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\views\layout\sidebar.php [ 5 ] in :
2013-03-04 13:54:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-04 13:55:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ APPPATH\views\layout\sidebar.php [ 5 ] in :
2013-03-04 13:55:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-04 13:57:43 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH\auth\classes\Kohana\Auth.php [ 37 ] in :
2013-03-04 13:57:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-04 13:58:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-03-04 13:58:12 --- DEBUG: #0 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\ri\...', 31, Array)
#1 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\ri\...')
#2 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\ri\...', Array)
#3 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Layout))
#7 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-03-04 14:07:24 --- CRITICAL: View_Exception [ 0 ]: The requested view cursos/listar could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:137
2013-03-04 14:07:24 --- DEBUG: #0 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(137): Kohana_View->set_filename('cursos/listar')
#1 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(30): Kohana_View->__construct('cursos/listar', NULL)
#2 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php(793): Kohana_View::factory('cursos/listar')
#3 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php(9): Controller_Cursos->action_listar()
#4 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Cursos->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#7 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:137
2013-03-04 14:07:31 --- CRITICAL: View_Exception [ 0 ]: The requested view cursos/listar could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:137
2013-03-04 14:07:31 --- DEBUG: #0 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(137): Kohana_View->set_filename('cursos/listar')
#1 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(30): Kohana_View->__construct('cursos/listar', NULL)
#2 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php(793): Kohana_View::factory('cursos/listar')
#3 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Cursos->action_listar()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#6 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:137
2013-03-04 14:07:33 --- CRITICAL: View_Exception [ 0 ]: The requested view cursos/listar could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:137
2013-03-04 14:07:33 --- DEBUG: #0 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(137): Kohana_View->set_filename('cursos/listar')
#1 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(30): Kohana_View->__construct('cursos/listar', NULL)
#2 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php(793): Kohana_View::factory('cursos/listar')
#3 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Cursos->action_listar()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#6 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:137
2013-03-04 14:15:17 --- CRITICAL: Kohana_Exception [ 0 ]: The password property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php:600
2013-03-04 14:15:17 --- DEBUG: #0 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('password')
#1 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM->__get('password')
#2 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('9281035780', 'giovanneafonso', false)
#3 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\application\classes\Controller\Auth.php(148): Kohana_Auth->login('9281035780', 'giovanneafonso')
#4 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php:600
2013-03-04 14:19:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-03-04 14:19:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-04 14:20:13 --- CRITICAL: Kohana_Exception [ 0 ]: The password property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php:600
2013-03-04 14:20:13 --- DEBUG: #0 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('password')
#1 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM->__get('password')
#2 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('9281035780', 'giovanneafonso', false)
#3 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\application\classes\Controller\Auth.php(148): Kohana_Auth->login('9281035780', 'giovanneafonso')
#4 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php:600
2013-03-04 14:20:42 --- CRITICAL: Kohana_Exception [ 0 ]: The password property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php:600
2013-03-04 14:20:42 --- DEBUG: #0 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('password')
#1 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM->__get('password')
#2 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('9281035780', 'giovanneafonso', false)
#3 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\application\classes\Controller\Auth.php(148): Kohana_Auth->login('9281035780', 'giovanneafonso')
#4 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php:600
2013-03-04 14:27:08 --- CRITICAL: Kohana_Exception [ 0 ]: The password property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php:600
2013-03-04 14:27:08 --- DEBUG: #0 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('password')
#1 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM->__get('password')
#2 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('9281035780', 'giovanneafonso', false)
#3 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\application\classes\Controller\Auth.php(148): Kohana_Auth->login('9281035780', 'giovanneafonso')
#4 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php:600
2013-03-04 14:28:35 --- CRITICAL: Kohana_Exception [ 0 ]: The password property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php:600
2013-03-04 14:28:35 --- DEBUG: #0 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('password')
#1 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM->__get('password')
#2 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('9281035780', 'giovanneafonso', false)
#3 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\application\classes\Controller\Auth.php(148): Kohana_Auth->login('9281035780', 'giovanneafonso')
#4 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php:600