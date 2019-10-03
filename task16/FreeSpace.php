<?php

trait FreeSpace
{
    public function getSpace(): int
    {
        return $this->maxFilling - self::$filling;
    }
}
