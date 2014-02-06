<?php

$a = 12;
$b = 8;
$c = '10';

echo 'Test Exercise' . PHP_EOL;
//this is an example exercise before the preal print for the main exercise is executed

if ($a == $b) {
	echo "$a is equal to $b\n";
} else {
	echo "$a is not equal to $b\n";
}
//end Test Exercise

echo 'Exercise' . PHP_EOL;

if ($a < $b) {
	//output the appropriate result
	echo "$a is less than $b\n";
} else {
	//output the appropriate result
	echo "$a is greater than $b\n";
}

if ($b >= $c) {
	//output the appropriate result
	echo "$b is greater than or equal to $c\n";
} else {
	//output the appropriate result
	echo "$b is less than or equal to $c\n";
}

if ($b === $c) {
	//output the appropriate result
	echo "$b is identical to $c\n";
} elseif ($b == $c) {
	//output the appropriate result
	echo "$b is equal to $c\n";
} elseif ($b != $c) {
	//output the appropriate result
	echo "$b is not equal to $c\n";
} else {
	echo "$b is not identical to $c\n";
}

?>