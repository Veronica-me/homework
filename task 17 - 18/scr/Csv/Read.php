<?php


namespace App\Csv;

use App\ReadInterface;

class Read implements ReadInterface
{
    public function __construct(string $pathFile)
    {
        $this->pathFile = $pathFile;
    }

    public function read(): array
    {

        $handle = fopen($this->pathFile, 'r');
        $i = 1;
        while (($line = fgetcsv($handle, 0,';')) !== false) {
            $data[$i] = $line;
            $i++;
        }

        fclose($handle);
        return $data;
        // TODO: Implement read() method.
    }
}