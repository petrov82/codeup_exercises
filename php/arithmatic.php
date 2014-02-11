<?php

function add($a, $b) {
	echo "$a + $b = "; 
	echo $a + $b . PHP_EOL;
}

add(5, 4);

function subtract($a, $b) {
	echo "$a - $b = "; 
	echo $a - $b . PHP_EOL;
}

subtract(5, 4);

function multiply($a, $b) {
	echo "$a * $b = "; 
	echo $a * $b . PHP_EOL;
}

multiply(5, 4);

function divide($a, $b) {
	echo "$a / $b = "; 
	echo $a / $b . PHP_EOL;
}

divide(5, 4);

function modulus($a, $b) {
	echo "$a % $b = "; 
	echo $a % $b . PHP_EOL;
}

modulus(5, 4);
?>