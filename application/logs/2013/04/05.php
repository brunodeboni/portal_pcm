<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-05 07:42:54 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-04-05 07:42:54 --- NOTICE: #0 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\centralsigma\trunk\portal_pcm\modules\base\init.php(4): Kohana_Session::instance('native')
#3 C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Core.php(602): require_once('C:\wamp\www\cen...')
#4 C:\wamp\www\centralsigma\trunk\portal_pcm\application\bootstrap.php(121): Kohana_Core::modules(Array)
#5 C:\wamp\www\centralsigma\trunk\portal_pcm\index.php(102): require('C:\wamp\www\cen...')
#6 {main} in C:\wamp\www\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-04-05 13:52:36 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in :
2013-04-05 13:52:36 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-05 13:52:37 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Session\Native.php [ 43 ] in :
2013-04-05 13:52:37 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :