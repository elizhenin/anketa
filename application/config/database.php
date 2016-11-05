<?php defined('SYSPATH') OR die('No direct access allowed.');
return array
(
    'default' => array(
        'type' => 'MySQLi',
        'connection' => array(
            //'dsn' => 'mysql:host=localhost;dbname=anketa',
		'database'=>'anketa',
            'username' => 'anketa',
            'password' => 'anketa123',
            'persistent' => FALSE,
        ),
        /**
         * string   identifier  set the escaping identifier
         */
        'table_prefix' => '',
        'charset' => 'utf8',
        'caching' => FALSE,
        'profiling' => TRUE,
        'identifier' => '"'
    )
);
