<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\CourseController;

$router->get('/Courses', 'CourseController@index');
$router->get('/Courses/{id}', 'CourseController@show');
$router->post('/Courses', 'CourseController@store');
$router->post('/Courses/{id}', 'CourseController@imageupload');
$router->put('/Courses/{id}', 'CourseController@update');
$router->delete('/Courses/{id}', 'CourseController@destroy');

