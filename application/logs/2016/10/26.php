<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-26 11:35:36 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 11:35:36 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request/Client/Internal.php(114): HTTP_Exception_404->get_response()
#4 /var/www/anketa/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/anketa/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/anketa/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 11:37:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/classes/Controller/Menu.php [ 10 ] in /var/www/anketa/application/classes/Controller/Menu.php:10
2016-10-26 11:37:16 --- DEBUG: #0 /var/www/anketa/application/classes/Controller/Menu.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/anketa...', 10, Array)
#1 /var/www/anketa/system/classes/Kohana/Controller.php(84): Controller_Menu->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/anketa/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#4 /var/www/anketa/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/anketa/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/anketa/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/anketa/application/classes/Controller/Menu.php:10
2016-10-26 12:36:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:36:35 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:36:37 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:36:37 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:37:46 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:37:46 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:38:06 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:38:06 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:38:45 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:38:45 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:39:15 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:39:15 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:41:56 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:41:56 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:46:37 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:46:37 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request/Client/Internal.php(114): HTTP_Exception_404->get_response()
#4 /var/www/anketa/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/anketa/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/anketa/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:46:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:46:38 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:48:01 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:48:01 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:48:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:48:35 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:50:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/tpl_front.php [ 19 ] in /var/www/anketa/application/views/tpl_front.php:19
2016-10-26 12:50:33 --- DEBUG: #0 /var/www/anketa/application/views/tpl_front.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/anketa...', 19, Array)
#1 /var/www/anketa/system/classes/Kohana/View.php(62): include('/var/www/anketa...')
#2 /var/www/anketa/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/anketa...', Array)
#3 /var/www/anketa/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/anketa/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/anketa/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Anketa))
#7 /var/www/anketa/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/anketa/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/anketa/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/anketa/application/views/tpl_front.php:19
2016-10-26 12:50:33 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:50:33 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:52:07 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:52:07 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:53:14 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:53:14 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:53:15 --- EMERGENCY: View_Exception [ 0 ]: The requested view anketa/poliklinnika could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:53:15 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('anketa/poliklin...')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('anketa/poliklin...', NULL)
#2 /var/www/anketa/application/classes/Controller/Anketa.php(16): Kohana_View::factory('anketa/poliklin...')
#3 /var/www/anketa/system/classes/Kohana/Controller.php(84): Controller_Anketa->action_poliklinnika()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/anketa/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Anketa))
#6 /var/www/anketa/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/anketa/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/anketa/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:53:16 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:53:16 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:53:53 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:53:53 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:53:56 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:53:56 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:53:57 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:53:57 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:53:58 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:53:58 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:56:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:56:35 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:56:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:56:38 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:57:07 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 12:57:07 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 13:08:16 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 13:08:16 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 13:08:53 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 13:08:53 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 13:16:58 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 13:16:58 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 13:40:15 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 13:40:15 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 13:44:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 13:44:18 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 13:49:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 13:49:51 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:04:39 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:04:39 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:04:43 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:04:43 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:09:14 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:09:14 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:09:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:09:51 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:10:22 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:10:22 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:10:55 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:10:55 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:11:15 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:11:15 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:11:36 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:11:36 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:16:13 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:16:13 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:16:37 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:16:37 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:17:15 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:17:15 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:17:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:17:38 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:17:56 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:17:56 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:18:25 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:18:25 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:19:07 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:19:07 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:22:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:22:05 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:28:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:28:00 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:30:57 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:30:57 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:36:02 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:36:02 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:36:15 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:36:15 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:37:02 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:37:02 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:46:56 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:46:56 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:47:54 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:47:54 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:48:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:48:38 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:49:02 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:49:02 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:50:11 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:50:11 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:54:45 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:54:45 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:55:37 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:55:37 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:56:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 14:56:05 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:16:22 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:16:22 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:16:59 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:16:59 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:17:25 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:17:25 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:17:28 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:17:28 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:17:57 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:17:57 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:18:46 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:18:46 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:19:23 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:19:23 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:19:30 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:19:30 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:19:56 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:19:56 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:20:21 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:20:21 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:20:50 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:20:50 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:21:02 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:21:02 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:21:32 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:21:32 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:21:39 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:21:39 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:21:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/admin/toolbar.php [ 16 ] in /var/www/anketa/application/views/admin/toolbar.php:16
2016-10-26 15:21:49 --- DEBUG: #0 /var/www/anketa/application/views/admin/toolbar.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/anketa...', 16, Array)
#1 /var/www/anketa/system/classes/Kohana/View.php(62): include('/var/www/anketa...')
#2 /var/www/anketa/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/anketa...', Array)
#3 /var/www/anketa/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/anketa/application/views/admin/index.php(4): Kohana_View->__toString()
#5 /var/www/anketa/system/classes/Kohana/View.php(62): include('/var/www/anketa...')
#6 /var/www/anketa/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/anketa...', Array)
#7 /var/www/anketa/system/classes/Kohana/View.php(236): Kohana_View->render()
#8 /var/www/anketa/application/views/tpl_front.php(26): Kohana_View->__toString()
#9 /var/www/anketa/system/classes/Kohana/View.php(62): include('/var/www/anketa...')
#10 /var/www/anketa/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/anketa...', Array)
#11 /var/www/anketa/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /var/www/anketa/application/classes/Controller/Tmp.php(21): Kohana_Controller_Template->after()
#13 /var/www/anketa/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/anketa/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#16 /var/www/anketa/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/anketa/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/anketa/index.php(118): Kohana_Request->execute()
#19 {main} in /var/www/anketa/application/views/admin/toolbar.php:16
2016-10-26 15:21:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:21:49 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:22:22 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:22:22 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:22:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Syslog' not found ~ APPPATH/classes/Model/Users.php [ 11 ] in file:line
2016-10-26 15:22:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-26 15:22:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Syslog' not found ~ APPPATH/classes/Model/Users.php [ 11 ] in file:line
2016-10-26 15:22:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-26 15:22:37 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:22:37 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:22:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Syslog' not found ~ APPPATH/classes/Model/Users.php [ 11 ] in file:line
2016-10-26 15:22:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-26 15:22:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Syslog' not found ~ APPPATH/classes/Model/Users.php [ 11 ] in file:line
2016-10-26 15:22:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-26 15:24:17 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:24:17 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:29:11 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:29:11 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:32:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:32:26 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:32:29 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:32:29 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:32:53 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:32:53 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:32:59 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:32:59 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:33:03 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:33:03 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:33:45 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:33:45 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:33:47 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 15:33:47 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:30:37 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:30:37 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:31:06 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:31:06 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:31:17 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:31:17 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:32:14 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:32:14 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:32:23 --- EMERGENCY: View_Exception [ 0 ]: The requested view stat/medorg/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:32:23 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('stat/medorg/ind...')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('stat/medorg/ind...', NULL)
#2 /var/www/anketa/application/classes/Controller/Admin.php(54): Kohana_View::factory('stat/medorg/ind...')
#3 /var/www/anketa/system/classes/Kohana/Controller.php(84): Controller_Admin->action_medorgedit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/anketa/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /var/www/anketa/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/anketa/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/anketa/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:32:24 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:32:24 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:32:42 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:32:42 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:32:58 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:32:58 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:45:39 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:45:39 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:46:03 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:46:03 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:47:08 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:47:08 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:48:37 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:48:37 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:48:56 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:48:56 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:49:23 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:49:23 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:56:25 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:56:25 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:57:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: medorg_id ~ APPPATH/classes/Model/Anketa.php [ 12 ] in /var/www/anketa/application/classes/Model/Anketa.php:12
2016-10-26 19:57:40 --- DEBUG: #0 /var/www/anketa/application/classes/Model/Anketa.php(12): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/anketa...', 12, Array)
#1 /var/www/anketa/application/classes/Controller/Anketa.php(18): Model_Anketa::AddPoliklinnika(Array)
#2 /var/www/anketa/system/classes/Kohana/Controller.php(84): Controller_Anketa->action_poliklinnika()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/anketa/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Anketa))
#5 /var/www/anketa/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/anketa/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/anketa/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/anketa/application/classes/Model/Anketa.php:12
2016-10-26 19:57:40 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:57:40 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:59:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: medorg ~ APPPATH/classes/Model/Anketa.php [ 12 ] in /var/www/anketa/application/classes/Model/Anketa.php:12
2016-10-26 19:59:14 --- DEBUG: #0 /var/www/anketa/application/classes/Model/Anketa.php(12): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/anketa...', 12, Array)
#1 /var/www/anketa/application/classes/Controller/Anketa.php(18): Model_Anketa::AddPoliklinnika(Array)
#2 /var/www/anketa/system/classes/Kohana/Controller.php(84): Controller_Anketa->action_poliklinnika()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/anketa/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Anketa))
#5 /var/www/anketa/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/anketa/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/anketa/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/anketa/application/classes/Model/Anketa.php:12
2016-10-26 19:59:15 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 19:59:15 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:00:14 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:00:14 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:00:45 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:00:45 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:02:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:02:05 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:06:50 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:06:50 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:06:53 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:06:53 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:29:21 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:29:21 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:42:29 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:42:29 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:42:55 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:42:55 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:43:03 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:43:03 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:43:28 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-10-26 20:43:28 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145