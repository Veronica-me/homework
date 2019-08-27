<?php
// задание 1
//вариант switch-case
$num = 2;
switch ($num) {
    case 1:
	    $result = 'зима';
        echo $result;
        break;
    case 2:
		$result = 'весна';
        echo $result;
        break;
    case 3:
		$result = 'лето';
        echo $result;
        break;
    case 4:
		$result = 'осень';
        echo $result;
        break;

	}
//
echo '<br>'.'_________'.'<br>';	
// вариант if/else

	$num = 4;

if ($num  == 1) {
	   $result = 'зима';
	   echo $result;
} elseif ($num  == 2) {
		$result = 'весна';
        echo $result;
} elseif ($num  == 3) {
		$result = 'лето';
        echo $result;
} elseif ($num  == 4) {
		$result = 'осень';
        echo $result;
}

//
echo '<br>'.'_________'.'<br>';
// задание 2

$day = 12;
// вариант if/else
if ($day < 11) {
	echo 'день относится к 1 декаде'.'<br>';
} elseif ($day < 21) {
	echo 'день относится ко 2 декаде'.'<br>';
} elseif ($day >= 21) {
	echo 'день относится к 3 декаде'.'<br>';
}
//вариант switch-case
switch ($day) {
 case $day < 11:
	    echo 'день относится к 1 декаде'.'<br>';
        break;
 case $day < 21:
	    echo 'день относится ко 2 декаде'.'<br>';
        break;
 case $day >= 21:
	    echo 'день относится к 3 декаде'.'<br>';
        break;			
}


//
echo '<br>'.'_________'.'<br>';
// задание 3

$month = 12;

// вариант if/else
if ($month < 3 or $month == 12) {
	echo 'это зима'.'<br>';
} elseif  ($month < 6) {
	echo 'это весна'.'<br>';
} elseif  ($month < 9) {
	echo 'это лето'.'<br>';
} elseif  ($month < 12) {
	echo 'это осень'.'<br>';
}

//вариант switch-case

switch ($month) {
 case $month < 3:
	    echo 'это зима'.'<br>';
        break;
 case $month < 6:
	    echo 'это весна'.'<br>';
        break;
 case $month < 9:
	    echo 'это лето'.'<br>';
        break;			
 case $month < 12:
	    echo 'это осень'.'<br>';
        break;			
 case 12:
	    echo 'это зима'.'<br>';
        break;			
		}







?>