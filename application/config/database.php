<?php defined('SYSPATH') or die('No direct script access.');
return array(
    //'title' => 'Our Shiny Website',
    //'analytics' => FALSE, // analytics code goes here, set to FALSE to disable
	 'default' => array
    (
        'type'       => 'mysql',
        'connection' => array(
            'hostname'   => 'localhost',
            'username'   => 'root',
            'password'   => '',
            'persistent' => FALSE,
            'database'   => 'isl',
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'profiling'    => TRUE,
    ),
);