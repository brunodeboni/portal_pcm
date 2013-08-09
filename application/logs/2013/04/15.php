<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-15 07:27:02 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'status' in where clause is ambiguous [ select d.id, d.depoimento, u.nome, c.nome as curso
						from cw_depoimentos as d
						join cw_cursos_inscritos as i on i.id=d.id_inscrito
						join cwk_users as u on i.id_user=u.id
						join cw_cursos_turmas as t on t.id = i.id_turma
						join cw_cursos as c on c.id = t.id_curso
						where status = 0
						order by u.nome ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-15 07:27:02 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select d.id, d....', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Model\Depoimento.php(49): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(86): Model_Depoimento->buscaPendentes()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Depoimentos->action_pendentes()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-15 07:27:28 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'status' in where clause is ambiguous [ select d.id, d.depoimento, u.nome, c.nome as curso
						from cw_depoimentos as d
						join cw_cursos_inscritos as i on i.id=d.id_inscrito
						join cwk_users as u on i.id_user=u.id
						join cw_cursos_turmas as t on t.id = i.id_turma
						join cw_cursos as c on c.id = t.id_curso
						where status = 0
						order by u.nome ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-15 07:27:28 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select d.id, d....', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Model\Depoimento.php(49): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(86): Model_Depoimento->buscaPendentes()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Depoimentos->action_pendentes()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-15 10:28:01 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-04-15 10:28:01 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\base\init.php(4): Kohana_Session::instance('native')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Core.php(602): require_once('C:\wamp\www\cen...')
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\application\bootstrap.php(121): Kohana_Core::modules(Array)
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(102): require('C:\wamp\www\cen...')
#6 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-04-15 11:27:41 --- EMERGENCY: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH\classes\Controller\Depoimentos.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php:194
2013-04-15 11:27:41 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(194): Kohana_Core::error_handler(8, 'Uninitialized s...', 'C:\wamp\www\cen...', 194, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Depoimentos->action_ordenarDepoimentos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php:194
2013-04-15 11:28:57 --- EMERGENCY: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH\classes\Controller\Depoimentos.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php:194
2013-04-15 11:28:57 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(194): Kohana_Core::error_handler(8, 'Uninitialized s...', 'C:\wamp\www\cen...', 194, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Depoimentos->action_ordenarDepoimentos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php:194
2013-04-15 11:29:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Depoimento::ordenarDepoimentos() ~ APPPATH\classes\Controller\Depoimentos.php [ 194 ] in :
2013-04-15 11:29:36 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-15 11:29:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Depoimento::ordenarDepoimentos() ~ APPPATH\classes\Controller\Depoimentos.php [ 194 ] in :
2013-04-15 11:29:57 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-15 12:20:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id_user ~ APPPATH\classes\Controller\Depoimentos.php [ 18 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php:18
2013-04-15 12:20:11 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 18, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Depoimentos->action_cadastrar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php:18
2013-04-15 12:59:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\depoimentos\cadastrar.php [ 12 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\cadastrar.php:12
2013-04-15 12:59:30 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\cadastrar.php(12): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\cen...', 12, Array)
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
#14 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\cadastrar.php:12
2013-04-15 12:59:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id_curso ~ APPPATH\views\depoimentos\cadastrar.php [ 12 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\cadastrar.php:12
2013-04-15 12:59:47 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\cadastrar.php(12): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\cen...', 12, Array)
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
#14 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\cadastrar.php:12
2013-04-15 13:05:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id_curso ~ APPPATH\classes\Controller\Depoimentos.php [ 18 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php:18
2013-04-15 13:05:25 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 18, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Depoimentos->action_cadastrar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php:18
2013-04-15 13:06:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: inscricoes ~ APPPATH\classes\Controller\Depoimentos.php [ 51 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php:51
2013-04-15 13:06:59 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 51, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Depoimentos->action_cadastrar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php:51
2013-04-15 13:07:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id_inscrito ~ APPPATH\views\depoimentos\cadastrar.php [ 12 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\cadastrar.php:12
2013-04-15 13:07:32 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\cadastrar.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 12, Array)
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
#14 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\cadastrar.php:12
2013-04-15 13:14:00 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'id_inscrito' cannot be null [ insert into cw_depoimentos (id_inscrito, depoimento) values (NULL, 'dfsg') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-15 13:14:00 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into cw_...', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Model\Depoimento.php(35): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(30): Model_Depoimento->cadastraDepoimento(NULL, 'dfsg')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Depoimentos->action_cadastrar()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-15 13:26:09 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-04-15 13:26:09 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\base\init.php(4): Kohana_Session::instance('native')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Core.php(602): require_once('C:\wamp\www\cen...')
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\application\bootstrap.php(121): Kohana_Core::modules(Array)
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(102): require('C:\wamp\www\cen...')
#6 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125