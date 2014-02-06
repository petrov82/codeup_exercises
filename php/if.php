<?php

$a = 5;
$b = 10;
$c = '10';

echo 'Test Exercise' . PHP_EOL;
//this is an example exercise before the preal print for the main exercise is executed

if ($a == $b) {
	echo "$a is equal to $b\n";
}

if ($a != $b) {
	echo "$a is not equal to $b\n";
}
//end Test Exercise

echo 'Exercise' . PHP_EOL;

if ($a < $b) {
	//output the appropriate result
	echo "$a is less than $b\n";
}

if ($b > $a) {
	//output the appropriate result
	echo "$b is greater than $a\n";
}

if ($b >= $c) {
	//output the appropriate result
	echo "$b is greater than or equal to $c\n";
}

if ($b <= $c) {
	//output the appropriate result
	echo "$b is less than or equal to $c\n";
}

if ($b == $c) {
	//output the appropriate result
	echo "$b is equal to $c\n";
}

if ($b === $c) {
	//output the appropriate result
	echo "$b is identical to $c\n";
}

//output the appropriate result
if ($b !== $c) {
	echo "$b is not identical to $c\n";
}

?>