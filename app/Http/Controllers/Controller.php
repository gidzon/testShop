<?php

namespace App\Http\Controllers;

use Slim\Http\Response;
use Slim\Views\Twig;

abstract class Controller
{
    /**
     * @var Twig
     */
    public $view;

    /**
     * @var \Slim\Container
     */
    public $container;

    public function __construct(\Slim\Container $container)
    {
        $this->container = $container;
        $this->view = $container['view'];
    }

    public function view($template, $data = [])
    {
        return $this->view->render(
            $this->container->get('response'),
            str_replace('.', DIRECTORY_SEPARATOR, $template).'.twig',
            $data
        );
    }

    protected function redirect($path, $data = []): Response
    {
        return $this->container->get('response')->withRedirect($this->container->get('router')->pathFor($path, $data));
    }
}
