<?php


require_once 'Transport.php';
require_once 'FreeSpace.php';
require_once 'Load.php';
require_once 'Unload.php';
require_once 'UnloadAll.php';
require_once 'FlyTransport.php';

class FlyCargo extends FlyTransport
{
    use FreeSpace, Load, Unload, UnloadAll;

    private $transportType = 'cargo';
}
