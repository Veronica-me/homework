<?php
require_once 'Transport.php';

abstract class FlyTransport extends Transport

{
    public $status= 'stop';

    public function flyT()
    {
        $this->status = 'fly';
    }
}
