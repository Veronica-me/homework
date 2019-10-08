<?php

class Write
{
    private $readCsvFile = null;

    public function __construct($csvFile)
    {
        if (file_exists($csvFile)) {
            $this->readCsvFile = $csvFile;
        }else {
            echo '<br>file not found<br>';
        }
    }

    public function setFile($csv)
    {
        $handle = fopen($this->readCsvFile, 'a');

        fputcsv($handle, $csv, ';');

        fclose($handle);
    }



}
