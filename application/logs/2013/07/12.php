<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-12 08:02:50 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\portal_pcm\system\classes\Kohana\Session.php:125
2013-07-12 08:02:50 --- DEBUG: #0 C:\wamp\www\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\portal_pcm\modules\base\init.php(4): Kohana_Session::instance('native')
#3 C:\wamp\www\portal_pcm\system\classes\Kohana\Core.php(602): require_once('C:\wamp\www\por...')
#4 C:\wamp\www\portal_pcm\application\bootstrap.php(122): Kohana_Core::modules(Array)
#5 C:\wamp\www\portal_pcm\index.php(102): require('C:\wamp\www\por...')
#6 {main} in C:\wamp\www\portal_pcm\system\classes\Kohana\Session.php:125
2013-07-12 08:02:56 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php:430
2013-07-12 08:02:56 --- DEBUG: #0 C:\wamp\www\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php(430): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\portal_pcm\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('dc1h6d8nsalmtso...')
#2 [internal function]: Kohana_Database->quote('dc1h6d8nsalmtso...')
#3 C:\wamp\www\portal_pcm\modules\database\classes\Kohana\Database\Query.php(196): array_map(Array, Array)
#4 C:\wamp\www\portal_pcm\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 C:\wamp\www\portal_pcm\application\classes\Controller\Ajaxrequests.php(57): Kohana_Database_Query->execute()
#6 C:\wamp\www\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Ajaxrequests->action_onlineuser()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxrequests))
#9 C:\wamp\www\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\portal_pcm\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php:430