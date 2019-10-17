<?php

trait Load
{
    public function setLoadStatus($fillItem)
    {
        if ($fillItem <= $this->maxFilling - self::$filling) {
        self::$filling += $fillItem;
         } else {
            echo 'Transport overload!!  Max load value: '.$this->getSpace();
        }
    }
}
