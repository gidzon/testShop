<?php

use Slim\App;

return function (App $app) {
    $app->get('/', '\App\Http\IndexController:actionIndex');
    $app->get('/single/{id}', '\App\Http\ProductController:actionView');
    $app->get('/cart/add{id}', '\App\Http\CartController:actionAddAjax');

};

