<?php

require_once 'Transport.php';
require_once 'FreeSpace.php';
require_once 'Load.php';
require_once 'Unload.php';
require_once 'UnloadAll.php';


class GroundCargo extends Transport
{
    use FreeSpace, Load, Unload, UnloadAll;

    private $transportType = 'cargo';
}
