<?php
$array1 = range(90, 150, 3);

$array2 = range(150, 90, 3);

$multiArray = array_combine($array2, $array1);



$multiArray2 = $multiArray;
ksort($multiArray2);

print_r($multiArray);
echo '<br>';
print_r($multiArray2);