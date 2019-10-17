<?php
require_once 'Transport.php';

abstract class GroundTransport extends Transport
{
    public $status= 'stop';

    public function driveT()
    {
        $this->status = 'drive';
    }
}
