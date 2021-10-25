<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\SchoolController;

$router->get('/Schools', 'SchoolController@index');
$router->get('/Schools/{id}', 'SchoolController@show');
$router->post('/Schools', 'SchoolController@store');
$router->post('/Schools/{id}', 'SchoolController@imageupload');
$router->put('/Schools/{id}', 'SchoolController@update');
$router->delete('/Schools/{id}', 'SchoolController@destSchool');
