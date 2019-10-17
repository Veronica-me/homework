<?php

abstract class Transport
{
    public $status = 'stop'; //статус транспорта stop/go/load/unload
    protected $maxFilling; //допустимое количество груза/пассажиров
    protected static $filling = 0; //загружаемая величина

    public function __construct($maxFilling)
    {
        $this->maxFilling = $maxFilling;
    }

    public function stopT()
    {
        if (self::$filling != 0) {
            return false;
        }
        $this->status = 'stop';
    }

    public function loadT()
    {
            $this->status = 'load';

    }

    public function unLoadT()
    {
        $this->status = 'unload';

    }

    public function getStatus()
    {
        return $this->status;
    }

}
