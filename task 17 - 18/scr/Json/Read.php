<?php

namespace App\Json;

use App\ReadInterface;

class Read implements ReadInterface
{
    public function __construct(string $pathFile)
    {
        $this->pathFile = $pathFile;
    }

    public function read(): array
    {
        // TODO: Implement read() method.
    }
}