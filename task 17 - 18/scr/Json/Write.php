<?php
namespace App\Json;
use App\WriteInterface;
class Write implements WriteInterface
{
    public function __construct(string $pathFile)
    {
        $this->pathFile = $pathFile;
    }
    public function write(array $data)
    {
        // TODO: Implement write() method.
    }
}