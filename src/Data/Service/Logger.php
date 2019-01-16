<?php

namespace App\Data\Service;

use GuzzleHttp\MessageFormatter;
use Psr\Log\LoggerInterface;

class Logger
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function get()
    {
        return $this->logger;
    }
}
