<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\HeadmasterController;

$router->get('/Headmasters', 'HeadmasterController@index');
$router->get('/Headmasters/{id}', 'HeadmasterController@show');
$router->post('/Headmasters', 'HeadmasterController@store');
$router->post('/Headmasters/{id}', 'HeadmasterController@imageupload');
$router->put('/Headmasters/{id}', 'HeadmasterController@update');
$router->delete('/Headmasters/{id}', 'HeadmasterController@destroy');
