<?php
return [
    '/' => 'UserController@index',
    '/users' => 'UserController@index',
    '/users/create' => 'UserController@create',
    '/users/store' => 'UserController@store',
    '/orders' => 'OrderController@index',
    '/orders/export' => 'OrderController@export',
    '/system/logs' => 'SystemController@logs',
];