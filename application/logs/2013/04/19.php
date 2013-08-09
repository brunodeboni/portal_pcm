<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-19 08:55:48 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Cursos.php [ 143 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php:143
2013-04-19 08:55:48 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php(143): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\cen...', 143, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Cursos->action_inscricao()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php:143
2013-04-19 09:59:54 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php on line 208 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:28
2013-04-19 09:59:54 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\wamp\www\cen...', 28, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(208): Kohana_View::factory('depoimentos/cur...', Object(Database_MySQL_Result))
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Depoimentos->action_curso()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:28
2013-04-19 10:01:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\views\depoimentos\curso.php [ 4 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\curso.php:4
2013-04-19 10:01:16 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\curso.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 4, Array)
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
#14 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\curso.php:4
2013-04-19 10:01:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: context ~ APPPATH\classes\Controller\Depoimentos.php [ 208 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php:208
2013-04-19 10:01:42 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(208): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 208, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Depoimentos->action_curso()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php:208
2013-04-19 10:10:34 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'd.id_user' in 'field list' [ select d.id, d.depoimento, u.nome, c.nome as curso, p.foto, d.id_user
						from cw_depoimentos as d
						join cw_cursos_inscritos as i on i.id=d.id_inscrito
						join cwk_users as u on i.id_user=u.id
						join cw_cursos_turmas as t on t.id = i.id_turma
						join cw_cursos as c on c.id = t.id_curso
						left join cw_perfil as p on p.id_user = u.id
						where d.status = 1
						and c.id = '1'
						order by d.ordem ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-19 10:10:34 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select d.id, d....', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Model\Depoimento.php(141): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Depoimentos.php(206): Model_Depoimento->buscaPorCurso('1')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Depoimentos->action_curso()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Depoimentos))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-19 10:28:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: depoimento ~ APPPATH\views\depoimentos\home.php [ 22 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\home.php:22
2013-04-19 10:28:07 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\home.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 22, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\cursos\listar.php(88): Kohana_View->__toString()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#10 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#11 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#15 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#18 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\home.php:22
2013-04-19 10:31:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id_user ~ APPPATH\views\depoimentos\cadastrar.php [ 31 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\cadastrar.php:31
2013-04-19 10:31:47 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\cadastrar.php(31): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\cen...', 31, Array)
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
#14 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\depoimentos\cadastrar.php:31
2013-04-19 15:31:41 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'cw_enquetes where id = 1' at line 1 [ select respostas form cw_enquetes where id = 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-19 15:31:41 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select resposta...', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Sobre.php(112): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Sobre.php(93): Controller_Sobre->confereRespostas(1)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Sobre->action_enq()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sobre))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-19 15:33:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: respostas ~ APPPATH\classes\Controller\Sobre.php [ 115 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Sobre.php:115
2013-04-19 15:33:13 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Sobre.php(115): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\cen...', 115, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Sobre.php(93): Controller_Sobre->confereRespostas(1)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Sobre->action_enq()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sobre))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Sobre.php:115
2013-04-19 15:33:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: respostas ~ APPPATH\classes\Controller\Sobre.php [ 115 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Sobre.php:115
2013-04-19 15:33:27 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Sobre.php(115): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\cen...', 115, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Sobre.php(93): Controller_Sobre->confereRespostas(1)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Sobre->action_enq()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sobre))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Sobre.php:115
2013-04-19 15:52:12 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'where id = 1' at line 1 [ insert into cw_enquetes (respostas) values ('0|0|0|0') where id = 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-19 15:52:12 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into cw_...', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Sobre.php(122): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Sobre.php(103): Controller_Sobre->insereRespostas(1, '0|0|0|0')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Sobre->action_enq()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sobre))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-19 15:56:46 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\Controller\Sobre.php [ 123 ] in :
2013-04-19 15:56:46 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :