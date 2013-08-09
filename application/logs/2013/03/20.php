<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-20 06:54:31 --- EMERGENCY: View_Exception [ 0 ]: The requested view form/respostas_conhecer could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:137
2013-03-20 06:54:31 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(137): Kohana_View->set_filename('form/respostas_...')
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(30): Kohana_View->__construct('form/respostas_...', Array)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(180): Kohana_View::factory('form/respostas_...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_respostas_conhecer()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:137
2013-03-20 07:01:42 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2013-03-20 07:01:42 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-20 08:19:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: conhecer ~ APPPATH\classes\Controller\Cursos.php [ 205 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php:205
2013-03-20 08:19:34 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php(205): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\cen...', 205, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php(274): Controller_Cursos->criarPaginaCurso('cursos/curso_sa...', 'saladeaula', true, Array)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Cursos->action_saladeaula()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php:205
2013-03-20 08:31:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: conhecer ~ APPPATH\classes\Controller\Cursos.php [ 207 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php:207
2013-03-20 08:31:00 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php(207): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\cen...', 207, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php(276): Controller_Cursos->criarPaginaCurso('cursos/curso_sa...', 'saladeaula', true, Array)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Cursos->action_saladeaula()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php:207
2013-03-20 08:32:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: conhecer ~ APPPATH\classes\Controller\Cursos.php [ 207 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php:207
2013-03-20 08:32:06 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php(207): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\cen...', 207, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php(276): Controller_Cursos->criarPaginaCurso('cursos/curso_sa...', 'saladeaula', true, Array)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Cursos->action_saladeaula()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php:207
2013-03-20 08:35:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: conhecer ~ APPPATH\classes\Controller\Cursos.php [ 207 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php:207
2013-03-20 08:35:50 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php(207): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\cen...', 207, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php(276): Controller_Cursos->criarPaginaCurso('cursos/curso_sa...', 'saladeaula', true, Array)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Cursos->action_saladeaula()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php:207
2013-03-20 08:39:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: conhecer ~ APPPATH\classes\Model\Curso.php [ 292 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Model\Curso.php:292
2013-03-20 08:39:15 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Model\Curso.php(292): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\cen...', 292, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php(206): Model_Curso->PegarInfoUser('1845')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php(276): Controller_Cursos->criarPaginaCurso('cursos/curso_sa...', 'saladeaula', true, Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Cursos->action_saladeaula()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Model\Curso.php:292
2013-03-20 11:29:12 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php on line 11 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:28
2013-03-20 11:29:12 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\wamp\www\cen...', 28, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(11): Kohana_View::factory('form/queremos_l...', 'Voc?? j?? preen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_queremos_lhe_conhecer()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:28
2013-03-20 11:33:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: txterro2 ~ APPPATH\views\form\queremos_lhe_conhecer.php [ 9 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\form\queremos_lhe_conhecer.php:9
2013-03-20 11:33:14 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\form\queremos_lhe_conhecer.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 9, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\cen...')
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\cen...', Array)
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#11 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\views\form\queremos_lhe_conhecer.php:9
2013-03-20 11:41:24 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '2398' for key 'id_user' [ insert into cw_queremos_lhe_conhecer
					(id_user, exp_pcm, como_controle_manutencao)
					values ('2398', '0', 'Sem nenhum controle') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-03-20 11:41:24 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into cw_...', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(60): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_queremos_lhe_conhecer()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-03-20 11:44:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function verificaPreencheu() ~ APPPATH\classes\Controller\Form.php [ 9 ] in :
2013-03-20 11:44:43 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :