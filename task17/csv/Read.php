<?php

class Read
{

    private $readCsvFile = null;

    public function __construct ($csvFile)
    {
        if (file_exists($csvFile)) {
            $this->readCsvFile = $csvFile;
        }else {
            echo '<br>file not found<br>';
        }
    }

    public function getFileData(){

        $handle = fopen($this->readCsvFile, 'r');

        while (($line = fgetcsv($handle, 0,';')) !== false) {
            $data = $line;
            printf('%s  %s  <br>', $data[0], $data[1]);

        }
        fclose($handle);

    }





}
