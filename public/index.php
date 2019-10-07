<?php

$route = new Route();

$route->get('/user/', function ($request) {
    $user = new UsersController();
    return $user->index();
});

$route->post('/user', function ($request) {
    $user = new UsersController();
    return $user->create($request);
});

$route->put('/user', function ($request) {
    $user = new UsersController();
    return $user->update($request);
});

$route->delete('/user', function ($request) {
    $user = new UsersController();
    return $user->destroy($request);
});