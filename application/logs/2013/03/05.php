<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-05 05:43:26 --- CRITICAL: Kohana_Exception [ 0 ]: The password property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php:600
2013-03-05 05:43:26 --- DEBUG: #0 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('password')
#1 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM->__get('password')
#2 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('9281035780', 'giovanneafonso', false)
#3 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\application\classes\Controller\Auth.php(148): Kohana_Auth->login('9281035780', 'giovanneafonso')
#4 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php:600
2013-03-05 06:05:49 --- CRITICAL: Kohana_Exception [ 0 ]: The password property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php:600
2013-03-05 06:05:49 --- DEBUG: #0 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('password')
#1 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM->__get('password')
#2 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('9281035780', 'giovanneafonso', false)
#3 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\application\classes\Controller\Auth.php(148): Kohana_Auth->login('9281035780', 'giovanneafonso')
#4 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php:600
2013-03-05 06:07:27 --- CRITICAL: Kohana_Exception [ 0 ]: The password property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php:600
2013-03-05 06:07:27 --- DEBUG: #0 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('password')
#1 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM->__get('password')
#2 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('9281035780', 'giovanneafonso', false)
#3 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\application\classes\Controller\Auth.php(148): Kohana_Auth->login('9281035780', 'giovanneafonso')
#4 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php:600
2013-03-05 06:17:57 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= '9281035780' LIMIT 1' at line 1 [ SELECT `cwk_user`.`id` AS `id`, `cwk_user`.`senha` AS `senha`, `cwk_user`.`logins` AS `logins`, `cwk_user`.`last_login` AS `last_login`, `cwk_user`.`dh_inscrito` AS `dh_inscrito`, `cwk_user`.`ativo` AS `ativo`, `cwk_user`.`empresa` AS `empresa`, `cwk_user`.`uf` AS `uf`, `cwk_user`.`nome` AS `nome`, `cwk_user`.`telefone` AS `telefone`, `cwk_user`.`email` AS `email`, `cwk_user`.`celular` AS `celular`, `cwk_user`.`cargo` AS `cargo`, `cwk_user`.`como_conheceu` AS `como_conheceu`, `cwk_user`.`curriculo` AS `curriculo` FROM `cwk_users` AS `cwk_user` WHERE = '9281035780' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-03-05 06:17:57 --- DEBUG: #0 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `cwk_use...', false, Array)
#1 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\application\classes\Kohana\Auth\ORM.php(76): Kohana_ORM->find()
#4 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('9281035780', 'giovanneafonso', false)
#5 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\application\classes\Controller\Auth.php(148): Kohana_Auth->login('9281035780', 'giovanneafonso')
#6 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php:251
2013-03-05 06:19:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 23 ] in :
2013-03-05 06:19:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-05 18:09:18 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-03-05 18:09:18 --- DEBUG: #0 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\base\init.php(4): Kohana_Session::instance('native')
#3 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Core.php(602): require_once('C:\wamp\www\ri\...')
#4 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\application\bootstrap.php(121): Kohana_Core::modules(Array)
#5 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\index.php(102): require('C:\wamp\www\ri\...')
#6 {main} in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Session.php:125
2013-03-05 18:09:18 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): A socket operation was attempted to an unreachable host.
 ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php:430
2013-03-05 18:09:18 --- DEBUG: #0 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php(430): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('162vvkampjnuh98...')
#2 [internal function]: Kohana_Database->quote('162vvkampjnuh98...')
#3 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(196): array_map(Array, Array)
#4 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\application\classes\Controller\Ajaxrequests.php(57): Kohana_Database_Query->execute()
#6 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Controller.php(84): Controller_Ajaxrequests->action_onlineuser()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxrequests))
#9 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\ri\repositorios\centralsigma\trunk\portal_pcm\modules\database\classes\Kohana\Database\MySQL.php:430