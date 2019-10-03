<?php

trait Unload
{
    public function unloadTransport($fillItem)
    {
        if ($fillItem <= self::$filling) {
            self::$filling -= $fillItem;
        }else {
            echo '<br> Неверные данные для разгрузки! Осталось: '.self::$filling;
        }
    }
}
