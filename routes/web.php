<?php

use Slim\App;

return function (App $app) {
    $app->get('/', '\App\Http\Controllers\IndexController:actionIndex');
};
