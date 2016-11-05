<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-11-03 18:54:47 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/zdrav36/anketa.zdrav36.ru/system/classes/Kohana/View.php:145
2016-11-03 18:54:47 --- DEBUG: #0 /home/zdrav36/anketa.zdrav36.ru/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /home/zdrav36/anketa.zdrav36.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /home/zdrav36/anketa.zdrav36.ru/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /home/zdrav36/anketa.zdrav36.ru/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /home/zdrav36/anketa.zdrav36.ru/index.php(118): Kohana_Request->execute()
#5 {main} in /home/zdrav36/anketa.zdrav36.ru/system/classes/Kohana/View.php:145
2016-11-03 20:31:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/zdrav36/anketa.zdrav36.ru/system/classes/Kohana/View.php:145
2016-11-03 20:31:51 --- DEBUG: #0 /home/zdrav36/anketa.zdrav36.ru/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /home/zdrav36/anketa.zdrav36.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /home/zdrav36/anketa.zdrav36.ru/application/classes/HTTP/Exception/404.php(7): Kohana_View::factory('template')
#3 /home/zdrav36/anketa.zdrav36.ru/system/classes/Kohana/Request.php(987): HTTP_Exception_404->get_response()
#4 /home/zdrav36/anketa.zdrav36.ru/index.php(118): Kohana_Request->execute()
#5 {main} in /home/zdrav36/anketa.zdrav36.ru/system/classes/Kohana/View.php:145