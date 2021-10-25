<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\StudentController;

$router->get('/Students', 'StudentController@index');
$router->get('/Students/{id}', 'StudentController@show');
$router->post('/Students', 'StudentController@store');
$router->post('/Students/{id}', 'StudentController@imageupload');
$router->put('/Students/{id}', 'StudentController@update');
$router->delete('/Students/{id}', 'StudentController@destroy');
