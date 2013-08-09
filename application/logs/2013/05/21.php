<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-21 14:46:57 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-05-21 14:46:57 --- DEBUG: #0 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\trunk\portal_pcm\application\classes\Controller\Basetemplate.php(10): Kohana_Session::instance()
#3 [internal function]: Controller_Basetemplate->__construct(Object(Request), Object(Response))
#4 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-05-21 15:00:18 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in :
2013-05-21 15:00:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :