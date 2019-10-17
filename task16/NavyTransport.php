<?php
require_once 'Transport.php';

abstract class NavyTransport extends Transport

{
    public $status= 'stop';

    public function sailT()
    {
        $this->status = 'sail';
    }
}

