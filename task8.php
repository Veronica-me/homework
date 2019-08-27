<?php
//задание 1
$arr = [2, -5, -9, 15, 11, -4, 7, 1, -10];
print_r($arr);
$positive = 0;
$negative = 0;

foreach ($arr as $val) {
    if ($val > 0)  $positive = $positive + $val;
	else $negative = $negative + $val;
}
echo '<br>сумма положительных элементов: '.$positive.'<br>';
echo 'сумма отрицательных элементов: '.$negative.'<br>';

//задание 2

$number1 = 42;
$key = 1;
for ($i = 1; $i <= $number1; $i++) {
    $mod = $number1 % $i;
	if ($mod == 0 ) {
		$arrOfnumber[$key] = $i; 
		$key++;
		}
}
print_r($arrOfnumber);

//задание 3
$number = 10; 
for ($i = $number; $i > 0; $i--) {
    $k = $i;
	do {
	  echo '*';
	  $k--;
} while ($k > 0);
	echo '<br>';
		}