<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-19 06:23:32 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Form.php [ 35 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php:35
2013-03-19 06:23:32 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(35): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\cen...', 35, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_queremos_lhe_conhecer()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php:35
2013-03-19 06:25:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: software_recursos_utilizados ~ APPPATH\classes\Controller\Form.php [ 35 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php:35
2013-03-19 06:25:51 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 35, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_queremos_lhe_conhecer()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php:35
2013-03-19 06:56:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function tratarDados() ~ APPPATH\classes\Controller\Form.php [ 36 ] in :
2013-03-19 06:56:26 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-19 06:56:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function tratarDados() ~ APPPATH\classes\Controller\Form.php [ 36 ] in :
2013-03-19 06:56:58 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-19 11:44:13 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Form.php [ 12 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php:12
2013-03-19 11:44:13 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\cen...', 12, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_queremos_lhe_conhecer()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php:12
2013-03-19 11:45:33 --- EMERGENCY: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ insert into cw_queremos_lhe_conhecer
				(id_user, exp_pcm, experiencia, utilizou_software_pcm, software_nome, software_nome, software_nota, software_recursos_utilizados, software_dificuldades, relatorios_diarios, relatorios_gerencia, relatorios_graficos, maiores_desafios, maiores_desafios, controle_manutencao, descrever_formacao, descrever_experiencia)
				values ('1', 'asdfg', '1', NULL, NULL, '2', 'preditivas || abertura_ss || relatorios', 'recursos || caro', 'backlog || mttr_mtbf || maquina_parada || oee_ege || disponibilidade || eficiencia', 'backlog || oee_ege || disponibilidade', 'os || servicos_pendentes || historico_os_ss || historico_os_funcionario || mapa', 'equipamento || apoio || investimento || tempo', 'equipamento || apoio || investimento || tempo', 'leitores || sem_leitores || pcm_estruturado', 'dfgasd', 'asgd' ) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-03-19 11:45:33 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into cw_...', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(70): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_queremos_lhe_conhecer()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-03-19 11:46:41 --- EMERGENCY: Database_Exception [ 1110 ]: Column 'maiores_desafios' specified twice [ insert into cw_queremos_lhe_conhecer
				(id_user, exp_pcm, experiencia, utilizou_software_pcm, software_nome, software_nome, software_nota, software_recursos_utilizados, software_dificuldades, relatorios_diarios, relatorios_gerencia, relatorios_graficos, maiores_desafios, maiores_desafios, controle_manutencao, descrever_formacao, descrever_experiencia)
				values ('2398', '1', 'asdfg', '1', NULL, NULL, '2', 'preditivas || abertura_ss || relatorios', 'recursos || caro', 'backlog || mttr_mtbf || maquina_parada || oee_ege || disponibilidade || eficiencia', 'backlog || oee_ege || disponibilidade', 'os || servicos_pendentes || historico_os_ss || historico_os_funcionario || mapa', 'equipamento || apoio || investimento || tempo', 'equipamento || apoio || investimento || tempo', 'leitores || sem_leitores || pcm_estruturado', 'dfgasd', 'asgd' ) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-03-19 11:46:41 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into cw_...', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(70): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_queremos_lhe_conhecer()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-03-19 11:47:10 --- EMERGENCY: Database_Exception [ 1110 ]: Column 'software_nome' specified twice [ insert into cw_queremos_lhe_conhecer
				(id_user, exp_pcm, experiencia, utilizou_software_pcm, software_nome, software_nome, software_nota, software_recursos_utilizados, software_dificuldades, relatorios_diarios, relatorios_gerencia, relatorios_graficos, maiores_desafios, controle_manutencao, descrever_formacao, descrever_experiencia)
				values ('2398', '1', 'asdfg', '1', NULL, NULL, '2', 'preditivas || abertura_ss || relatorios', 'recursos || caro', 'backlog || mttr_mtbf || maquina_parada || oee_ege || disponibilidade || eficiencia', 'backlog || oee_ege || disponibilidade', 'os || servicos_pendentes || historico_os_ss || historico_os_funcionario || mapa', 'equipamento || apoio || investimento || tempo', 'leitores || sem_leitores || pcm_estruturado', 'dfgasd', 'asgd' ) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-03-19 11:47:10 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into cw_...', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(70): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_queremos_lhe_conhecer()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-03-19 11:47:39 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'software_nome' cannot be null [ insert into cw_queremos_lhe_conhecer
				(id_user, exp_pcm, experiencia, utilizou_software_pcm, software_nome, software_nota, software_recursos_utilizados, software_dificuldades, relatorios_diarios, relatorios_gerencia, relatorios_graficos, maiores_desafios, controle_manutencao, descrever_formacao, descrever_experiencia)
				values ('2398', '1', 'asdfg', '1', NULL, '2', 'preditivas || abertura_ss || relatorios', 'recursos || caro', 'backlog || mttr_mtbf || maquina_parada || oee_ege || disponibilidade || eficiencia', 'backlog || oee_ege || disponibilidade', 'os || servicos_pendentes || historico_os_ss || historico_os_funcionario || mapa', 'equipamento || apoio || investimento || tempo', 'leitores || sem_leitores || pcm_estruturado', 'dfgasd', 'asgd' ) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-03-19 11:47:39 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into cw_...', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(70): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_queremos_lhe_conhecer()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-03-19 12:08:47 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Form.php [ 90 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php:90
2013-03-19 12:08:47 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(90): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\cen...', 90, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(41): Controller_Form->transformaString(NULL)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_queremos_lhe_conhecer()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php:90
2013-03-19 12:10:49 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Form.php [ 92 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php:92
2013-03-19 12:10:49 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(92): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\cen...', 92, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(41): Controller_Form->transformaString(NULL)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_queremos_lhe_conhecer()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php:92
2013-03-19 12:10:59 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Form.php [ 92 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php:92
2013-03-19 12:10:59 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(92): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\cen...', 92, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(41): Controller_Form->transformaString(NULL)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_queremos_lhe_conhecer()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php:92
2013-03-19 12:43:36 --- EMERGENCY: Database_Exception [ 1406 ]: Data too long for column 'experiencia' at row 1 [ insert into cw_queremos_lhe_conhecer
				(id_user, exp_pcm, experiencia, utilizou_software_pcm, software_nome, software_nota, software_recursos_utilizados, software_dificuldades, relatorios_diarios, relatorios_gerencia, relatorios_graficos, maiores_desafios, controle_manutencao, descrever_formacao, descrever_experiencia)
				values ('2398', '1', 'Descreva abaixo, resumidamente, a sua experiência.\nDescreva abaixo, resumidamente, a sua experiência.\nDescreva abaixo, resumidamente, a sua experiência.\nDescreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.', '1', 'Informe qual o software e o site da empresa fornecedoraInforme qual o software e o site da empresa fornecedoraInforme qual o software e o site da empresa fornecedoraInforme qual o software e o site da empresa fornecedoraInforme qual o software e o site da empresa fornecedoraInforme qual o software e o site da empresa fornecedoraInforme qual o software e o site da empresa fornecedoraInforme qual o software e o site da empresa fornecedoraInforme qual o software e o site da empresa fornecedoraInforme qual o software e o site da empresa fornecedoraInforme qual o software e o site da empresa fornecedoraInforme qual o software e o site da empresa fornecedoraInforme qual o software e o site da empresa fornecedoraInforme qual o software e o site da empresa fornecedora', '3', 'preditivas', 'bugs', 'mttr_mtbf', 'eficiencia', 'os', 'investimento', 'pcm_estruturado', 'Descreva em 5 linhas sua formação.\nDescreva em 5 linhas sua formação.\nDescreva em 5 linhas sua formação.\nDescreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.\nDescreva em 5 linhas sua formação.\nDescreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.', 'Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.Descreva em 5 linhas sua formação.') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-03-19 12:43:36 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into cw_...', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(127): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_queremos_lhe_conhecer()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-03-19 13:12:03 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Form.php [ 148 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php:148
2013-03-19 13:12:03 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(148): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\cen...', 148, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(99): Controller_Form->transformaString(NULL)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_queremos_lhe_conhecer()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php:148
2013-03-19 13:13:31 --- EMERGENCY: Database_Exception [ 1406 ]: Data too long for column 'experiencia' at row 1 [ insert into cw_queremos_lhe_conhecer
					(id_user, exp_pcm, experiencia, utilizou_software_pcm, como_controle_manutencao)
					values ('2398', '1', 'Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.', '0', 'nenhum') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-03-19 13:13:31 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into cw_...', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(32): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_queremos_lhe_conhecer()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-03-19 14:31:10 --- EMERGENCY: View_Exception [ 0 ]: The requested view form/respostas/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:137
2013-03-19 14:31:10 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(137): Kohana_View->set_filename('form/respostas/')
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(30): Kohana_View->__construct('form/respostas/', Array)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(154): Kohana_View::factory('form/respostas/', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_respostas()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:137
2013-03-19 14:31:20 --- EMERGENCY: View_Exception [ 0 ]: The requested view form/respostas/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:137
2013-03-19 14:31:20 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(137): Kohana_View->set_filename('form/respostas/')
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(30): Kohana_View->__construct('form/respostas/', Array)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(154): Kohana_View::factory('form/respostas/', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_respostas()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:137
2013-03-19 14:31:25 --- EMERGENCY: View_Exception [ 0 ]: The requested view form/respostas/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:137
2013-03-19 14:31:25 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(137): Kohana_View->set_filename('form/respostas/')
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php(30): Kohana_View->__construct('form/respostas/', Array)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(154): Kohana_View::factory('form/respostas/', Array)
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_respostas()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\View.php:137
2013-03-19 14:32:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id_user ~ APPPATH\classes\Controller\Form.php [ 150 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php:150
2013-03-19 14:32:11 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(150): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\cen...', 150, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_respostas()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php:150
2013-03-19 15:06:19 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= '2315'' at line 24 [ select 
				case exp_pcm
					when 0 then 'Não'
					when 1 then 'Sim'
					end
				as exp_pcm,
				experiencia,
				case utilizou_software_pcm
					when 0 then 'Não'
					when 1 then 'Sim'
					end
				as utilizou_software_pcm,
				software_nome, software_nota, 
				software_recursos_utilizados,
				software_dificuldades,
				relatorios_diarios,
				relatorios_gerencia,
				relatorios_graficos,
				maiores_desafios,
				controle_manutencao,
				descrever_formacao,
				descrever_experiencia,
				como_controle_manutencao 
				from cw_queremos_lhe_conhecer where id_user = = '2315' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-03-19 15:06:19 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select ??????ca...', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(173): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_respostas()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251