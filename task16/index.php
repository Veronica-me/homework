<?php

require_once 'FlyCargo.php';
require_once 'FlyPass.php';
require_once 'NavyCargo.php';
require_once 'NavyPass.php';
require_once 'GroundCargo.php';
require_once 'GroundPass.php';

//самолет

$boeing = new FlyPass(121);
$boeing->setLoadStatus(90);
echo 'начальный статус самолета: '.$boeing->getStatus();
echo '<br>осталось свободных мест: '.$boeing->getSpace();

$boeing->changeStatus('go');
echo '<br> Статус самолета: '.$boeing->getStatus();

$boeing->setLoadStatus(30);
echo '<br>осталось свободных мест: '.$boeing->getSpace();

$boeing->unloadAll();
echo '<br>осталось свободных мест: '.$boeing->getSpace();
$boeing->changeStatus('stop');
echo '<br> Статус самолета: '.$boeing->getStatus();


//танкер
$tanker = new NavyCargo(380);
$tanker->setLoadStatus(300);
echo '<br> Можно загрузить еще '.$tanker->getSpace().' тысяч тонн <br>';
$tanker->unloadTransport(20);
echo '<br> Можно загрузить еще '.$tanker->getSpace().' тысяч тонн <br>';
$tanker->setLoadStatus(100);
echo '<br> Можно загрузить еще '.$tanker->getSpace().' тысяч тонн <br>';
$tanker->unloadAll();

//грузовик
$truck = new GroundCargo(20);
$truck->setLoadStatus(12);
echo '<br> Можно загрузить еще '.$truck->getSpace().' тонн <br>';
$truck->setLoadStatus(8);
echo '<br> Можно загрузить еще '.$truck->getSpace().' тонн <br>';
$truck->unloadAll();