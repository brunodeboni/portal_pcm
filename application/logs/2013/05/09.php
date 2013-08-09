<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-09 10:29:38 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-09 10:29:38 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select??????(se...', false, Array)
#2 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Iframes.php(43): Kohana_Database_Query->execute()
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Iframes->action_onlineagora()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Iframes))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-09 11:32:08 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\historicos\index.php [ 100 ] in C:\wamp\www\trunk\portal_pcm\application\views\historicos\index.php:100
2013-05-09 11:32:08 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\application\views\historicos\index.php(100): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\tru...', 100, Array)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#2 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#3 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\trunk\portal_pcm\application\views\base.php(31): Kohana_View->__toString()
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(61): include('C:\wamp\www\tru...')
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\tru...', Array)
#7 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Historicos))
#11 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\trunk\portal_pcm\application\views\historicos\index.php:100
2013-05-09 13:52:24 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php:430
2013-05-09 13:52:24 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php(430): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\trunk\portal_pcm\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('pluh33bldiccd56...')
#2 [internal function]: Kohana_Database->quote('pluh33bldiccd56...')
#3 C:\wamp\www\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(196): array_map(Array, Array)
#4 C:\wamp\www\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Ajaxrequests.php(57): Kohana_Database_Query->execute()
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Ajaxrequests->action_onlineuser()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxrequests))
#9 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php:430