<?php

namespace App\Data\Service;

use GuzzleHttp\Middleware;

class LogMiddleware
{
    private $middleware;

    public function __construct(Logger $logger, MessageFormatter $messageFormatter)
    {
        $this->middleware = Middleware::log(
          $logger->get(),
          $messageFormatter->get()
        );
    }

    public function get()
    {
        return $this->middleware;
    }
}
