<?php

//задание 1
$var = 1;

$var += 12;

$var -= 14;

$var *= 5;

$var /= 7;

$var ++;

$var --;

echo $var. '<br>';


//задание 2
$a = 17;
$b = 10;
$c = $a + $b;
$d = 7;
$result = $c + $d;
echo $result. '<br>';

//задание 3
$age = '35';
$strAge = "Мне $age лет!";
echo $strAge. '<br>';

//задание 4
$strName = "Иванов Иван Петрович";
echo "Задано ФИО: ".$strName."<br>Результат:<br>";
$world = explode(" ", $strName);

echo $world[0]." ".substr($world[1], 0, 2).". ".substr($world[2], 0, 2).". ";