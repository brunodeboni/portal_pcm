<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-21 11:39:27 --- EMERGENCY: Database_Exception [ 1406 ]: Data too long for column 'descrever_experiencia' at row 1 [ insert into cw_queremos_lhe_conhecer
				(id_user, exp_pcm, experiencia, utilizou_software_pcm, software_nome, software_nota, software_recursos_utilizados, software_dificuldades, relatorios_diarios, relatorios_gerencia, relatorios_graficos, maiores_desafios, controle_manutencao, descrever_formacao, descrever_experiencia)
				values ('2398', '1', 'Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.Descreva abaixo, resumidamente, a sua experiência.', '1', 'Sigma\n\nwww.centralsigma.com.br', '10', 'Controle de Manutenções Preventivas || Controle de Manutenções Corretivas || Check-list', 'Falta de recursos internos no software || Não houve problemas', 'Disponibilidade || Outro || asdfge', 'Máquina parada || OEE/EGE - Eficiência de máquina', 'Ordem de Serviço || Serviços Pendentes || Histórico de OS/SS por máquina || Históricos de OS por funcionário/Equipe || Mapa da manutenção preventiva ou preditiva ou lubrificação || Outro || adasdf', 'Falta de equipamentos adequado || Falta de apoio da Gerencia/diretoria || Equipamentos antigos e problemáticos || Falta de conhecimento sobre PCM || Falta de investimento || Falta de treinamento', 'Com digitadores das OS/SS. Os manutentores não usam micro/terminais para inserir dados || Sem digitadores das OS/SS. Os manutentores usam micro/terminais para inserir dados || Temos leitores, coletores e um bom aparato tecnológico', 'Descreva em 5 linhas sua formação. Descreva em 5 linhas sua formação. Descreva em 5 linhas sua formação. Descreva em 5 linhas sua formação. Descreva em 5 linhas sua formação. Descreva em 5 linhas sua formação. Descreva em 5 linhas sua formação. Descreva em 5 linhas sua formação. Descreva em 5 linhas sua formação.', 'Descreva em 5 linhas sua experiência profissional. Descreva em 5 linhas sua experiência profissional. Descreva em 5 linhas sua experiência profissional. Descreva em 5 linhas sua experiência profissional. Descreva em 5 linhas sua experiência profissional. Descreva em 5 linhas sua experiência profissional. Descreva em 5 linhas sua experiência profissional. Descreva em 5 linhas sua experiência profissional. Descreva em 5 linhas sua experiência profissional. Descreva em 5 linhas sua experiência profissional.') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-03-21 11:39:27 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into cw_...', false, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Form.php(138): Kohana_Database_Query->execute()
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Form->action_queremos_lhe_conhecer()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-03-21 12:36:56 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-03-21 12:36:56 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\base\init.php(4): Kohana_Session::instance('native')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Core.php(602): require_once('C:\wamp\www\cen...')
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\application\bootstrap.php(121): Kohana_Core::modules(Array)
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(102): require('C:\wamp\www\cen...')
#6 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125