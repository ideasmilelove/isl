<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-20 01:25:08 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'isl' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in D:\Applications\xampp\htdocs\isl\modules\database\classes\Kohana\Database\MySQL.php:75
2013-09-20 01:25:08 --- DEBUG: #0 D:\Applications\xampp\htdocs\isl\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('isl')
#1 D:\Applications\xampp\htdocs\isl\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 D:\Applications\xampp\htdocs\isl\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\Applications\xampp\htdocs\isl\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('user')
#4 D:\Applications\xampp\htdocs\isl\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 D:\Applications\xampp\htdocs\isl\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 D:\Applications\xampp\htdocs\isl\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 D:\Applications\xampp\htdocs\isl\application\classes\Model\user.php(9): Kohana_ORM->__construct()
#8 D:\Applications\xampp\htdocs\isl\modules\orm\classes\Kohana\ORM.php(46): Model_user->__construct(NULL)
#9 D:\Applications\xampp\htdocs\isl\application\classes\Controller\User.php(11): Kohana_ORM::factory('user')
#10 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 D:\Applications\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#16 {main} in D:\Applications\xampp\htdocs\isl\modules\database\classes\Kohana\Database\MySQL.php:75
2013-09-20 01:26:38 --- CRITICAL: Database_Exception [ 1146 ]: Table 'isl.user' doesn't exist [ SHOW FULL COLUMNS FROM `user` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\Applications\xampp\htdocs\isl\modules\database\classes\Kohana\Database\MySQL.php:359
2013-09-20 01:26:38 --- DEBUG: #0 D:\Applications\xampp\htdocs\isl\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\Applications\xampp\htdocs\isl\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('user')
#2 D:\Applications\xampp\htdocs\isl\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\Applications\xampp\htdocs\isl\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\Applications\xampp\htdocs\isl\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\Applications\xampp\htdocs\isl\application\classes\Model\user.php(9): Kohana_ORM->__construct()
#6 D:\Applications\xampp\htdocs\isl\modules\orm\classes\Kohana\ORM.php(46): Model_user->__construct(NULL)
#7 D:\Applications\xampp\htdocs\isl\application\classes\Controller\User.php(11): Kohana_ORM::factory('user')
#8 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\Applications\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#14 {main} in D:\Applications\xampp\htdocs\isl\modules\database\classes\Kohana\Database\MySQL.php:359