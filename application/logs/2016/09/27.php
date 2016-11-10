<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-09-27 16:58:08 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-09-27 16:58:08 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-09-27 16:58:14 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-09-27 16:58:14 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145
2016-09-27 16:58:20 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/anketa/system/classes/Kohana/View.php:145
2016-09-27 16:58:20 --- DEBUG: #0 /var/www/anketa/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/anketa/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/anketa/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /var/www/anketa/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /var/www/anketa/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/anketa/system/classes/Kohana/View.php:145