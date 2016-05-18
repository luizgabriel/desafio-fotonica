<?php

/* @var \Illuminate\Routing\Router $router */

$router->get('/', function () {
    $config = \Fotonica\ServerConfiguration::find(1);
    return view('static.index', compact('config'));
});

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->resource('server', 'API\ServerController', ['only' => 'update']);

});



