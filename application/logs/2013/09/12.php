<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-12 21:35:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH\views\tabpages\register.php [ 8 ] in file:line
2013-09-12 21:35:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-12 21:36:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH\views\tabpages\register.php [ 8 ] in file:line
2013-09-12 21:36:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-12 21:36:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH\views\tabpages\register.php [ 8 ] in file:line
2013-09-12 21:36:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-12 21:40:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\tabpages\register.php [ 7 ] in file:line
2013-09-12 21:40:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-12 21:42:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\tabpages\register.php [ 7 ] in file:line
2013-09-12 21:42:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-12 21:42:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\tabpages\register.php [ 7 ] in file:line
2013-09-12 21:42:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-12 23:22:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH\views\tabpages\register.php [ 4 ] in file:line
2013-09-12 23:22:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-12 23:27:32 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant FORM - assumed 'FORM' ~ APPPATH\views\tabpages\register.php [ 2 ] in C:\xampp\htdocs\isl\application\views\tabpages\register.php:2
2013-09-12 23:27:32 --- DEBUG: #0 C:\xampp\htdocs\isl\application\views\tabpages\register.php(2): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isl\application\views\layout.php(48): Kohana_View->__toString()
#5 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#11 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isl\application\views\tabpages\register.php:2
2013-09-12 23:27:49 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant Form - assumed 'Form' ~ APPPATH\views\tabpages\register.php [ 2 ] in C:\xampp\htdocs\isl\application\views\tabpages\register.php:2
2013-09-12 23:27:49 --- DEBUG: #0 C:\xampp\htdocs\isl\application\views\tabpages\register.php(2): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isl\application\views\layout.php(48): Kohana_View->__toString()
#5 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#11 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isl\application\views\tabpages\register.php:2
2013-09-12 23:31:50 --- CRITICAL: View_Exception [ 0 ]: The requested view tabpages/register could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-12 23:31:50 --- DEBUG: #0 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('tabpages/regist...')
#1 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(30): Kohana_View->__construct('tabpages/regist...', NULL)
#2 C:\xampp\htdocs\isl\application\classes\Controller\Template.php(27): Kohana_View::factory('tabpages/regist...')
#3 C:\xampp\htdocs\isl\system\classes\Kohana\Controller.php(69): Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#6 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-12 23:35:47 --- CRITICAL: View_Exception [ 0 ]: The requested view wigets/register could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-12 23:35:47 --- DEBUG: #0 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('wigets/register')
#1 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(30): Kohana_View->__construct('wigets/register', NULL)
#2 C:\xampp\htdocs\isl\application\classes\Controller\Template.php(27): Kohana_View::factory('wigets/register')
#3 C:\xampp\htdocs\isl\system\classes\Kohana\Controller.php(69): Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#6 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-12 23:35:47 --- CRITICAL: View_Exception [ 0 ]: The requested view wigets/register could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-12 23:35:47 --- DEBUG: #0 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('wigets/register')
#1 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(30): Kohana_View->__construct('wigets/register', NULL)
#2 C:\xampp\htdocs\isl\application\classes\Controller\Template.php(27): Kohana_View::factory('wigets/register')
#3 C:\xampp\htdocs\isl\system\classes\Kohana\Controller.php(69): Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#6 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-12 23:35:47 --- CRITICAL: View_Exception [ 0 ]: The requested view wigets/register could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-12 23:35:47 --- DEBUG: #0 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('wigets/register')
#1 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(30): Kohana_View->__construct('wigets/register', NULL)
#2 C:\xampp\htdocs\isl\application\classes\Controller\Template.php(27): Kohana_View::factory('wigets/register')
#3 C:\xampp\htdocs\isl\system\classes\Kohana\Controller.php(69): Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#6 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-12 23:35:48 --- CRITICAL: View_Exception [ 0 ]: The requested view wigets/register could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-12 23:35:48 --- DEBUG: #0 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('wigets/register')
#1 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(30): Kohana_View->__construct('wigets/register', NULL)
#2 C:\xampp\htdocs\isl\application\classes\Controller\Template.php(27): Kohana_View::factory('wigets/register')
#3 C:\xampp\htdocs\isl\system\classes\Kohana\Controller.php(69): Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#6 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-12 23:36:34 --- CRITICAL: View_Exception [ 0 ]: The requested view wigets/register could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-12 23:36:34 --- DEBUG: #0 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('wigets/register')
#1 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(30): Kohana_View->__construct('wigets/register', NULL)
#2 C:\xampp\htdocs\isl\application\classes\Controller\Template.php(27): Kohana_View::factory('wigets/register')
#3 C:\xampp\htdocs\isl\system\classes\Kohana\Controller.php(69): Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#6 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-12 23:36:34 --- CRITICAL: View_Exception [ 0 ]: The requested view wigets/register could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-12 23:36:34 --- DEBUG: #0 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('wigets/register')
#1 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(30): Kohana_View->__construct('wigets/register', NULL)
#2 C:\xampp\htdocs\isl\application\classes\Controller\Template.php(27): Kohana_View::factory('wigets/register')
#3 C:\xampp\htdocs\isl\system\classes\Kohana\Controller.php(69): Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#6 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-12 23:36:34 --- CRITICAL: View_Exception [ 0 ]: The requested view wigets/register could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-12 23:36:34 --- DEBUG: #0 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('wigets/register')
#1 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(30): Kohana_View->__construct('wigets/register', NULL)
#2 C:\xampp\htdocs\isl\application\classes\Controller\Template.php(27): Kohana_View::factory('wigets/register')
#3 C:\xampp\htdocs\isl\system\classes\Kohana\Controller.php(69): Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#6 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137