<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-11 01:18:13 --- CRITICAL: View_Exception [ 0 ]: The requested view logoandquote could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\Applications\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-11 01:18:13 --- DEBUG: #0 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('logoandquote')
#1 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\View.php(30): Kohana_View->__construct('logoandquote', NULL)
#2 D:\Applications\xampp\htdocs\isl\application\classes\Controller\Template.php(16): Kohana_View::factory('logoandquote')
#3 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller.php(69): Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#6 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\Applications\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#9 {main} in D:\Applications\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-11 02:20:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\Template.php [ 23 ] in file:line
2013-09-11 02:20:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-11 02:50:59 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Controller_Template::show_logo() should not be called statically ~ APPPATH\views\logoandquote.php [ 5 ] in D:\Applications\xampp\htdocs\isl\application\views\logoandquote.php:5
2013-09-11 02:50:59 --- DEBUG: #0 D:\Applications\xampp\htdocs\isl\application\views\logoandquote.php(5): Kohana_Core::error_handler(2048, 'Non-static meth...', 'D:\Applications...', 5, Array)
#1 D:\Applications\xampp\htdocs\isl\application\views\logoandquote.php(5): Controller_Template::show_logo()
#2 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\View.php(61): include('D:\Applications...')
#3 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Applications...', Array)
#4 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\Applications\xampp\htdocs\isl\application\views\layout.php(13): Kohana_View->__toString()
#6 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\View.php(61): include('D:\Applications...')
#7 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Applications...', Array)
#8 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#12 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\Applications\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\Applications\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#15 {main} in D:\Applications\xampp\htdocs\isl\application\views\logoandquote.php:5