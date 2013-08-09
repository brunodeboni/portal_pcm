<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-03 08:50:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 08:50:01 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 08:50:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\views\depoimentos\index.php [ 11 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\index.php:11
2013-04-03 08:50:54 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 11, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#11 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\index.php:11
2013-04-03 09:05:38 --- EMERGENCY: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-04-03 09:05:38 --- NOTICE: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\wamp\www\cen...', 33, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #106, 'depoimento')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('depoimento')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\index.php(13): Kohana_Database_Result->offsetGet('depoimento')
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#10 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#14 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-04-03 11:34:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function buscaDepoimentos() ~ APPPATH\classes\Controller\Depoimentos.php [ 11 ] in :
2013-04-03 11:34:49 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-03 11:35:14 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function buscaDepoimentos() ~ APPPATH\classes\Controller\Depoimentos.php [ 11 ] in :
2013-04-03 11:35:14 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-03 11:35:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function buscaDepoimentos() ~ APPPATH\classes\Controller\Depoimentos.php [ 11 ] in :
2013-04-03 11:35:19 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-03 12:33:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Depoimentos.php [ 49 ] in :
2013-04-03 12:33:56 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-03 13:12:10 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-04-03 13:12:10 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\base\init.php(4): Kohana_Session::instance('native')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Core.php(602): require_once('C:\wamp\www\cen...')
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\application\bootstrap.php(121): Kohana_Core::modules(Array)
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(102): require('C:\wamp\www\cen...')
#6 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-04-03 13:26:27 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'where id = 6' at line 1 [ delete cw_depoimentos where id = 6 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-03 13:26:27 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'delete cw_depoi...', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(116): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(57): Controller_Depoimentos->removeDepoimento(6)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Depoimentos->action_admin()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-03 14:48:11 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-04-03 14:48:11 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\base\init.php(4): Kohana_Session::instance('native')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Core.php(602): require_once('C:\wamp\www\cen...')
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\application\bootstrap.php(121): Kohana_Core::modules(Array)
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(102): require('C:\wamp\www\cen...')
#6 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-04-03 15:08:51 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'depoimento' cannot be null [ insert into cw_depoimentos (id_user, depoimento) values ('2398', NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-03 15:08:51 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into cw_...', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(110): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(36): Controller_Depoimentos->cadastraDepoimento(Object(Model_User), NULL)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Depoimentos->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-03 15:09:34 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'depoimento' cannot be null [ insert into cw_depoimentos (id_user, depoimento) values ('2398', NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-03 15:09:34 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into cw_...', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(110): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(36): Controller_Depoimentos->cadastraDepoimento(Object(Model_User), NULL)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Depoimentos->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-03 15:11:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 15:11:21 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 15:11:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 15:11:46 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 15:12:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 15:12:00 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 15:12:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 15:12:17 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 15:12:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 15:12:34 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 15:12:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 15:12:53 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 15:13:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 15:13:13 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 15:16:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 15:16:21 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 15:16:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 15:16:45 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 15:16:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-03 15:16:54 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31