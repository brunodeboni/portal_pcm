<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-08 06:34:17 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Cursos.php [ 490 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php:490
2013-04-08 06:34:17 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php(490): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\cen...', 490, Array)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Cursos->action_certificado()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cursos))
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Cursos.php:490
2013-04-08 09:25:36 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Uma tentativa de conexão falhou porque o componente conectado nã (trying to connect via tcp://186.202.121.119:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php:430
2013-04-08 09:25:36 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php(430): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('56ueqhrf4m6s836...')
#2 [internal function]: Kohana_Database->quote('56ueqhrf4m6s836...')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(196): array_map(Array, Array)
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Ajaxrequests.php(57): Kohana_Database_Query->execute()
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Ajaxrequests->action_onlineuser()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxrequests))
#9 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php:430
2013-04-08 12:00:52 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Uma tentativa de conexão falhou porque o componente conectado nã (trying to connect via tcp://186.202.121.119:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php:171
2013-04-08 12:00:52 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select??????(se...', false, Array)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\application\classes\Controller\Iframes.php(43): Kohana_Database_Query->execute()
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Iframes->action_onlineagora()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Iframes))
#6 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php:171