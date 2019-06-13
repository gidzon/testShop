<?php

use Slim\App;

return function (App $app) {
    $app->get('', function () {
        return 'This is Api';
    });
};
