<?php

abstract class Transport
{
    protected $status = 'stop'; //статус транспорта stop/go/load/unload
    protected $maxFilling; //допустимое количество груза/пассажиров
    protected static $filling = 0; //загружаемая величина

    public function __construct(int $maxFilling)
    {
        $this->maxFilling = $maxFilling;
    }

    public function changeStatus (string $status)
    {
        if ($status === 'stop' && self::$filling !=0 ){
            echo '<br> Транспорт заполнен, требуется разгрузка <br>';
        } elseif ($status === 'stop' && self::$filling === 0) {
            $this->status = $status;
        } elseif ($status === 'go' || $status === 'load' || $status === 'unload'){
            $this->status = $status;
        } else {
            echo '<br>Выбран неверный статус!!<br>';
        }

    }

    public function getStatus(): string
    {
        return $this->status;
    }

}
