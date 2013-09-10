<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-09 22:54:53 --- CRITICAL: View_Exception [ 0 ]: The requested view postTrip/postTripMain could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\Applications\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-09 22:54:53 --- DEBUG: #0 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('postTrip/postTr...')
#1 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\View.php(30): Kohana_View->__construct('postTrip/postTr...', NULL)
#2 D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php(25): Kohana_View::factory('postTrip/postTr...')
#3 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller.php(84): Controller_Template->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#6 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\Applications\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#9 {main} in D:\Applications\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-09 22:55:18 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Template.php [ 25 ] in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:25
2013-09-09 22:55:18 --- DEBUG: #0 D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\Applications...', 25, Array)
#1 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller.php(84): Controller_Template->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#4 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Applications\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:25
2013-09-09 22:56:12 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Template.php [ 25 ] in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:25
2013-09-09 22:56:12 --- DEBUG: #0 D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\Applications...', 25, Array)
#1 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller.php(84): Controller_Template->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#4 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Applications\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:25
2013-09-09 22:56:13 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Template.php [ 25 ] in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:25
2013-09-09 22:56:13 --- DEBUG: #0 D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\Applications...', 25, Array)
#1 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller.php(84): Controller_Template->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#4 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Applications\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:25
2013-09-09 22:56:13 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Template.php [ 25 ] in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:25
2013-09-09 22:56:13 --- DEBUG: #0 D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\Applications...', 25, Array)
#1 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller.php(84): Controller_Template->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#4 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Applications\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:25
2013-09-09 22:56:13 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Template.php [ 25 ] in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:25
2013-09-09 22:56:13 --- DEBUG: #0 D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\Applications...', 25, Array)
#1 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller.php(84): Controller_Template->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#4 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Applications\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:25
2013-09-09 22:56:13 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Template.php [ 25 ] in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:25
2013-09-09 22:56:13 --- DEBUG: #0 D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\Applications...', 25, Array)
#1 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller.php(84): Controller_Template->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#4 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Applications\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:25
2013-09-09 22:56:16 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Template.php [ 25 ] in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:25
2013-09-09 22:56:16 --- DEBUG: #0 D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\Applications...', 25, Array)
#1 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller.php(84): Controller_Template->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#4 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Applications\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:25
2013-09-09 22:58:24 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Template.php [ 24 ] in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:24
2013-09-09 22:58:24 --- DEBUG: #0 D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php(24): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\Applications...', 24, Array)
#1 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller.php(69): Controller_Template->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#4 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Applications\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:24
2013-09-09 22:58:25 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Template.php [ 24 ] in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:24
2013-09-09 22:58:25 --- DEBUG: #0 D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php(24): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\Applications...', 24, Array)
#1 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller.php(69): Controller_Template->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#4 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Applications\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:24
2013-09-09 22:58:25 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Template.php [ 24 ] in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:24
2013-09-09 22:58:25 --- DEBUG: #0 D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php(24): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\Applications...', 24, Array)
#1 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller.php(69): Controller_Template->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#4 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Applications\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:24
2013-09-09 22:58:25 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Template.php [ 24 ] in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:24
2013-09-09 22:58:25 --- DEBUG: #0 D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php(24): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\Applications...', 24, Array)
#1 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller.php(69): Controller_Template->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#4 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Applications\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php:24