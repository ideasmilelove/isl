<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-17 03:34:27 --- CRITICAL: View_Exception [ 0 ]: The requested view wigets/register could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-17 03:34:27 --- DEBUG: #0 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('wigets/register')
#1 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(30): Kohana_View->__construct('wigets/register', NULL)
#2 C:\xampp\htdocs\isl\application\classes\Controller\Template.php(27): Kohana_View::factory('wigets/register')
#3 C:\xampp\htdocs\isl\system\classes\Kohana\Controller.php(69): Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#6 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-17 20:44:11 --- CRITICAL: View_Exception [ 0 ]: The requested view form_auth could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-17 20:44:11 --- DEBUG: #0 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('form_auth')
#1 C:\xampp\htdocs\isl\system\classes\Kohana\View.php(30): Kohana_View->__construct('form_auth', NULL)
#2 C:\xampp\htdocs\isl\application\classes\Controller\Template.php(27): Kohana_View::factory('form_auth')
#3 C:\xampp\htdocs\isl\system\classes\Kohana\Controller.php(69): Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Template))
#6 C:\xampp\htdocs\isl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\isl\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\isl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\isl\system\classes\Kohana\View.php:137
2013-09-17 21:46:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\form_search.php [ 28 ] in file:line
2013-09-17 21:46:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-17 21:47:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\form_search.php [ 28 ] in file:line
2013-09-17 21:47:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-17 21:47:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\form_search.php [ 28 ] in file:line
2013-09-17 21:47:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-17 21:47:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\form_search.php [ 28 ] in file:line
2013-09-17 21:47:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-17 21:47:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\form_search.php [ 28 ] in file:line
2013-09-17 21:47:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-17 21:47:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\form_search.php [ 28 ] in file:line
2013-09-17 21:47:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-17 21:47:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\form_search.php [ 28 ] in file:line
2013-09-17 21:47:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-17 21:47:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\form_search.php [ 24 ] in file:line
2013-09-17 21:47:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-17 22:21:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function base_url() ~ APPPATH\views\frontpage.php [ 1 ] in file:line
2013-09-17 22:21:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line