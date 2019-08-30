<?php
// задание 1
function operation( int $numOne, int $numTwo, string $operator) {
if ($operator == 'add') {
$result = $numOne + $numTwo;
echo 'сумма чисел равна: '.$result;
}
elseif ($operator == 'subtract') {
$result = $numOne - $numTwo;
echo  'разность чисел равна: '.$result;	
}
elseif ($operator == 'multiply') {
$result = $numOne * $numTwo;
echo 'произведение чисел равно: '.$result;	
}
elseif ($operator == 'divide') {
$result = $numOne / $numTwo;
echo 'частное чисел равно: '.$result;	
}

}

operation ( $_GET['numOne'], $_GET['numTwo'], $_GET['operator']);

//задание 2

function add(int $a, int $b){
	$result = $a + $b;
	echo $result;
}
function sub(int $a, int $b){
	$result = $a - $b;
	echo $result;
}
function operation(int $numOne, int $numTwo, string $operator) {
	if ($operator == 'add'){
		add ($numOne, $numTwo);
	}
	elseif ($operator == 'sub') {
		sub ($numOne, $numTwo);
	}
	else echo 'unknown operator <br>';
}
operation ( $_GET['numOne'], $_GET['numTwo'], $_GET['operator']);