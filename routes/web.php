<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'salaireservice'], function () use ($router) {
        $router->get('/', ['uses' => 'SalaireController@index']);
        $router->post('/', ['uses' => 'SalaireController@store']);
        $router->get('/{id}', ['uses' => 'SalaireController@show']);
        $router->patch('/{id}', ['uses' => 'SalaireController@update']);
        $router->delete('/{id}', ['uses' => 'SalaireController@destroy']);
    });
});

