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
    $router->get('pegawai', ['uses' => 'PegawaiController@showAll']);
    $router->get('pegawai/{id}', ['uses' => 'PegawaiController@showOne']);
    $router->post('pegawai', ['uses' => 'PegawaiController@create']);
    $router->delete('pegawai/{id}', ['uses' => 'PegawaiController@delete']);
    $router->put('pegawai/{id}', ['uses' => 'PegawaiController@update']);

    // jwt-auth
    $router->post('login', ['uses' => 'AuthController@login']);
    $router->post('logout', ['uses' => 'AuthController@logout']);
    $router->post(
        'refresh',
        ['uses' => 'AuthController@refresh']
    );
    $router->post('user-profile', ['uses' => 'AuthController@me']);
});
