<?php

trait UnloadAll
{
    public function unloadAll(){
        self::$filling = 0;
    }
}
