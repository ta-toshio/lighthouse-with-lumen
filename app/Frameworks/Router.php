<?php

namespace App\Frameworks;

use Laravel\Lumen\Routing\Router as LumenRouter;

class Router extends LumenRouter
{

    /**
     * The application instance.
     *
     * @var Application
     */
    public $app;

    public function getMiddleware()
    {
        return $this->app->getMiddleware();
    }

    public function getMiddlewareGroups()
    {
        return [];
    }

}