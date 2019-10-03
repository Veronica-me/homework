<?php

abstract class Transport
{
    protected $status = 'stop'; //статус транспорта stop/go/load/unload
    protected $maxFilling; //допустимое количество груза/пассажиров
    protected static $filling = 0;

    public function __construct(int $maxFilling)
    {
        $this->maxFilling = $maxFilling;
    }

    public function changeStatus (string $status)
    {

    }

}
