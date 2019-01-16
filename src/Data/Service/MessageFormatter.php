<?php

namespace App\Data\Service;

use GuzzleHttp\MessageFormatter as Formatter;

class MessageFormatter
{
    private $format;
    const FORMAT = Formatter::DEBUG;

    public function __construct()
    {
        $this->format = new Formatter(self::FORMAT);
    }

    public function get()
    {
        return $this->format;
    }
}
