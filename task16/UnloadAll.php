<?php

trait UnloadAll
{
    public function unloadAll(){
        self::$filling = 0;
        echo '<br>разгрузка завершена<br>';
    }
}
