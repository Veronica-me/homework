<?php

require_once 'FlyCargo.php';
require_once 'FlyPass.php';
require_once 'NavyCargo.php';
require_once 'NavyPass.php';
require_once 'GroundCargo.php';
require_once 'GroundPass.php';

//самолет

/** @var TYPE_NAME $boeing */
$boeing = new FlyPass(121);

//var_dump($boeing);

$boeing->setLoadStatus(90);
echo 'начальный статус самолета: '.$boeing->getStatus().'<br>';
echo '<br>осталось свободных мест: '.$boeing->getSpace().'<br>';
$boeing->flyT();
echo 'статус самолета: '.$boeing->getStatus().'<br>';
$boeing->setLoadStatus(30);
echo '<br>осталось свободных мест: '.$boeing->getSpace();
$boeing->unloadAll();
echo '<br>осталось свободных мест: '.$boeing->getSpace();
$boeing->stopT();
echo '<br> Статус самолета: '.$boeing->getStatus();

//танкер

$tanker = new NavyCargo(380);
echo '<br> Статус танкера: '.$tanker->getStatus();


$tanker->setLoadStatus(300);
echo '<br> Можно загрузить еще '.$tanker->getSpace().' тысяч тонн <br>';
$tanker->unloadTransport(20);
echo '<br> Можно загрузить еще '.$tanker->getSpace().' тысяч тонн <br>';
$tanker->setLoadStatus(100);
echo '<br> Можно загрузить еще '.$tanker->getSpace().' тысяч тонн <br>';
$tanker->sailT();
echo '<br> Статус танкера: '.$tanker->getStatus();
$tanker->unloadAll();
$tanker->stopT();

//грузовик
$truck = new GroundCargo(20);
$truck->setLoadStatus(12);
echo '<br> Можно загрузить еще '.$truck->getSpace().' тонн <br>';
$truck->setLoadStatus(8);
echo '<br> Можно загрузить еще '.$truck->getSpace().' тонн <br>';
$truck->driveT();
echo '<br> Статус грузовика: '.$truck->getStatus();
$truck->unloadAll();
$truck->stopT();