<?php

namespace App\Frameworks;

use Laravel\Lumen\Application as LumenApplication;

class Application extends LumenApplication
{

    public function bootstrapRouter()
    {
        $this->router = new Router($this);
    }

    public function getMiddleware()
    {
        return $this->routeMiddleware;
    }

}
