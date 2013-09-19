<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-19 21:11:04 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\Applications\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-19 21:11:04 --- DEBUG: #0 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\Applications\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#9 {main} in D:\Applications\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-19 21:12:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: reg_txtfname ~ APPPATH\classes\Controller\User.php [ 11 ] in D:\Applications\xampp\htdocs\isl\application\classes\Controller\User.php:11
2013-09-19 21:12:10 --- DEBUG: #0 D:\Applications\xampp\htdocs\isl\application\classes\Controller\User.php(11): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Applications...', 11, Array)
#1 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Applications\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Applications\xampp\htdocs\isl\application\classes\Controller\User.php:11