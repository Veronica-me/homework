<?php

$myArray = 	[

    ['name' => 'Yan', 'salery' => '1200', 'work_hours' => 180],
    ['name' => 'Barda', 'salery' => '2150', 'work_hours' => 160],
    ['name' => 'Piter', 'salery' => '1500', 'work_hours' => 160],
    ['name' => 'Alex', 'salery' => '3340', 'work_hours' => 167],
    ['name' => 'Deiv', 'salery' => '1700', 'work_hours' => 176],
    ['name' => 'Bob', 'salery' => '1150', 'work_hours' => 182],
    ['name' => 'Claus', 'salery' => '2810', 'work_hours' => 155],
    ['name' => 'Lina', 'salery' => '1600', 'work_hours' => 169],
    ['name' => 'Rod', 'salery' => '2780', 'work_hours' => 191],
    ['name' => 'Kristy', 'salery' => '2180', 'work_hours' => 144],
    ['name' => 'Ron', 'salery' => '1670', 'work_hours' => 157],

];
var_dump($myArray);
echo '<br><br>';


//задание 1

$resArr = array_map(function ($value){
    if ($value['salery'] < 1600){
        $value['salery'] += 100;
    }
    return $value;
}, $myArray);

echo 'Массив после обработки 1: '.'<pre>';
print_r($resArr);
echo '</pre>';

//задание 2

$resArr_1 = array_map(function ($value){
    if ($value['work_hours'] > 180) {
        $value['salery'] *= 1.2;
    }
    return $value;
}, $myArray);

echo 'Массив после обработки 2: '.'<pre>';
print_r($resArr_1);

echo '</pre><br>';


//задание 3
$resArr_2 = array_filter($myArray, function ($value){
    if ($value['work_hours'] < 160){
        return $value;
    }
});

echo 'Сотрудники, отработавшие менее 160 часов:'.'<pre>';
print_r($resArr_2);
echo '</pre>';
echo '<br><br>';
//задание 4
$resArr_3 = array_filter($myArray, function ($value){
    if ($value['salery'] < 2000){
        return $value;
    }
});
echo 'Сотрудники, заработавщие менее 2000:'.'<pre>';
print_r($resArr_3);
echo '</pre>';