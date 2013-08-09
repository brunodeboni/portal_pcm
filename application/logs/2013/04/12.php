<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-12 06:09:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id_turma ~ APPPATH\classes\Controller\Depoimentos.php [ 102 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php:102
2013-04-12 06:09:47 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(102): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 102, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Depoimentos->action_buscarInscritos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php:102
2013-04-12 06:49:00 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in :
2013-04-12 06:49:00 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-12 07:28:09 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function buscaPendentes() on a non-object ~ APPPATH\classes\Controller\Depoimentos.php [ 57 ] in :
2013-04-12 07:28:09 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-12 07:31:06 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function buscaPendentes() on a non-object ~ APPPATH\classes\Controller\Depoimentos.php [ 57 ] in :
2013-04-12 07:31:06 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-12 08:44:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-12 08:44:03 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
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
2013-04-12 08:45:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-12 08:45:03 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
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
2013-04-12 08:45:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php:31
2013-04-12 08:45:23 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 31, Array)
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
2013-04-12 09:15:58 --- EMERGENCY: View_Exception [ 0 ]: The requested view depoimentos/pendentes could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:137
2013-04-12 09:15:58 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(137): Kohana_View->set_filename('depoimentos/pen...')
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(30): Kohana_View->__construct('depoimentos/pen...', Array)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(68): Kohana_View::factory('depoimentos/pen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Depoimentos->action_pendentes()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:137
2013-04-12 11:19:21 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'id_inscrito' cannot be null [ insert into cw_depoimentos (id_inscrito, depoimento) values (NULL, 'ddd') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-12 11:19:21 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into cw_...', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Model\Depoimento.php(33): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(115): Model_Depoimento->cadastraDepoimento(NULL, 'ddd')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Depoimentos->action_cadastraAdmin()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-12 12:04:54 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`cpcm_teste`.`cw_depoimentos`, CONSTRAINT `FK_cw_depoimentos_cw_cursos_inscritos` FOREIGN KEY (`id_inscrito`) REFERENCES `cw_cursos_inscritos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ insert into cw_depoimentos (id_inscrito, depoimento) values ('2398', 'Meu depoimento.') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-12 12:04:54 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into cw_...', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Model\Depoimento.php(33): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(46): Model_Depoimento->cadastraDepoimento(Object(Model_User), 'Meu depoimento.')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Depoimentos->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-12 12:16:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: curso ~ APPPATH\views\depoimentos\index.php [ 39 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\index.php:39
2013-04-12 12:16:00 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\index.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\cen...', 39, Array)
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
#14 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\index.php:39
2013-04-12 12:40:51 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-04-12 12:40:51 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\base\init.php(4): Kohana_Session::instance('native')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Core.php(602): require_once('C:\wamp\www\cen...')
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\application\bootstrap.php(121): Kohana_Core::modules(Array)
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(102): require('C:\wamp\www\cen...')
#6 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-04-12 12:40:53 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Uma operação de soquete foi tentada em um host inacessível.
 (trying to connect via tcp://186.202.121.119:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php:171
2013-04-12 12:40:53 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select??????(se...', false, Array)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Iframes.php(43): Kohana_Database_Query->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Iframes->action_onlineagora()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Iframes))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php:171
2013-04-12 14:37:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\depoimentos\cadastraAdmin.php [ 49 ] in :
2013-04-12 14:37:24 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-12 15:14:45 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-04-12 15:14:45 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\base\init.php(4): Kohana_Session::instance('native')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Core.php(602): require_once('C:\wamp\www\cen...')
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\application\bootstrap.php(121): Kohana_Core::modules(Array)
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(102): require('C:\wamp\www\cen...')
#6 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-04-12 15:15:06 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2013-04-12 15:15:06 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :