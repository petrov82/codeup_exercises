<?php

// intval($a [$base = 0]);
// intval($b [$base = 0]);


// Commit your changes for each step and push to GitHub.

// Validate all the arguments, and display an error if the input is not numeric.

// Validate divide by 0 errors, display error if attempts to divide by 0 are made.

// Make the error messages show the values of the arguments.

// Refactor the error messages into their own function, have the other functions use it for error messaging.


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