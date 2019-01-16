<?php

namespace App\Data\Service;

use Symfony\Component\Filesystem\Filesystem;

class DataWriter
{
    private $fileSystem;

    public function __construct(Filesystem $fileSystem)
    {
        $this->fileSystem = $fileSystem;
    }

    public function write(string $data, string $path, string $name, int $permissionsCode = 0775)
    {
        $this->fileSystem->mkdir($path, $permissionsCode);
        $this->fileSystem->dumpFile($path . $name, $data);
    }
}
