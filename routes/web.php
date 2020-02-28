<?php

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
/** @var Laravel\Lumen\Routing\Router $router */
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('customer/register', 'CustomerAuthController@register');
$router->post('customer/login', 'CustomerAuthController@login');

$router->post('author/register', 'AuthorAuthController@register');
$router->post('author/login', 'AuthorAuthController@login');

$router->group(['middleware' => 'auth:customers'], function ($router) {
    $router->get('news', 'NewsController@latest');
});

$router->group(['middleware' => 'auth:authors'], function ($router) {
    /** @var Laravel\Lumen\Routing\Router $router */
    $router->post('author/news', 'AuthorController@createNews');
});
