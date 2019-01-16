<?php

namespace App\Data\Service;

use Symfony\Component\Serializer\SerializerInterface;

class Serializer
{
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function get()
    {
        return $this->serializer;
    }
}
