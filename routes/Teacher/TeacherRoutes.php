<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\TeacherController;

$router->get('/Teachers', 'TeacherController@index');
$router->get('/Teachers/{id}', 'TeacherController@show');
$router->post('/Teachers', 'TeacherController@store');
$router->post('/Teachers/{id}', 'TeacherController@imageupload');
$router->put('/Teachers/{id}', 'TeacherController@update');
$router->delete('/Teachers/{id}', 'TeacherController@destroy');
