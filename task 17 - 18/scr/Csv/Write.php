<?php

namespace App\Csv;

use App\WriteInterface;

class Write implements WriteInterface
{
    public function __construct(string $pathFile)
    {
        $this->pathFile = $pathFile;
    }

    public function write(array $data)
    {
        $handle = fopen($this->pathFile, 'a');
        fputcsv($handle, $data, ';');
        fclose($handle);
    }
}