<?php

use Slim\App;
use Slim\Container;

require_once dirname(__DIR__).'/vendor/autoload.php';

$container = new Container([
    'settings' => require dirname(__DIR__).'/config/app.php',
]);

$container['PDO'] = function () {
    $config = require dirname(__DIR__).'/config/database.php';
    return new PDO(
        "{$config['driver']}:dbname={$config['database']};host={$config['host']};port={$config['port']}",
        $config['username'],
        $config['password'],
        [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
};

$container['view'] = function (Container $c) {
    $view = new \Slim\Views\Twig(dirname(__DIR__).'/resources/views', [
        'cache' => dirname(__DIR__).'/storage/view',
    ]);

    // Instantiate and add Slim specific extension
    $router = $c->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));

    return $view;
};

$app = new App($container);

$app->group('', require dirname(__DIR__).'/routes/web.php');
$app->group('/api', require dirname(__DIR__).'/routes/api.php');

return $app;
