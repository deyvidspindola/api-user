<?php

use App\Core\Route;

$route = new Route;

//$route->get('/users', 'UsersController@index');
$route->get('/user/{id}', 'UsersController@store');

$route->get('/login', 'LoginController@index');