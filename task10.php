<?php
// задание 1

function inv ($N) {
	if ($N) {
	$k = $N % 10;
	echo $k.'   ';
    $N = $N - $k;	
	$N = $N / 10;
		inv ($N);
}
	
}

inv (89165);

// задание 2

function sequence (int $N) {
	static $i = 0;
	$i++;
	$k = 0;
	if ($N > 0) {
	do {
		if ($N- 1 > 0) echo "$i .. ";
		elseif ($N - 1 == 0) echo "$i";
		$k++;
		$N--;
	} while ($k < $i);
	
	sequence ($N);
	}
		
}

sequence (29);

