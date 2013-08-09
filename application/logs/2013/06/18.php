<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-18 10:44:02 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-06-18 10:44:02 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Base.php(9): Kohana_Session::instance()
#3 [internal function]: Controller_Base->__construct(Object(Request), Object(Response))
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-06-18 10:44:06 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php:430
2013-06-18 10:44:06 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php(430): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\trunk\portal_pcm\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('20anumc0gn6sjrn...')
#2 [internal function]: Kohana_Database->quote('20anumc0gn6sjrn...')
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