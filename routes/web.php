<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix'=>'api'],function() use ($router){

    $router->post('register','AuthController@register');
    $router->post('login','AuthController@login');

    $router->group(['middleware'=>'auth'],function() use ($router){

        require __DIR__.'/Course/CourseRoutes.php';
        require __DIR__.'/Headmaster/HeadmasterRoutes.php';
        require __DIR__.'/School/SchoolRoutes.php';
        require __DIR__.'/Teacher/TeacherRoutes.php';
        require __DIR__.'/Student/StudentRoutes.php';

        $router->post('logout','AuthController@logout');
        $router->post('profile','AuthController@me');
        //$router->apiResource('school',\App\Http\Controllers\SchoolController::class);
    });
});


