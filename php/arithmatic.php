<?php

// intval($a [$base = 0]);
// intval($b [$base = 0]);


// Commit your changes for each step and push to GitHub.

// Validate all the arguments, and display an error if the input is not numeric.

// Validate divide by 0 errors, display error if attempts to divide by 0 are made.

// Make the error messages show the values of the arguments.

// Refactor the error messages into their own function, have the other functions use it for error messaging.

function is_a_number($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {

		echo "One of the parameters won't work. Try again.\n";
		var_dump($a, $b);

	} else {

		return TRUE;
	}

}

function divide_by_zero($a, $b) {
	if ($b == 0) {

		echo "You cannot divide by zero. Try again.\n";
		var_dump($a, $b);

	} else {

		
		return TRUE;
	}
}

function add($a, $b) {

	if (is_a_number($a, $b)) {

	return $a + $b . PHP_EOL;

	} else {

		echo "Sorry.\n";
	}
}

echo add('Hello', 4);


function subtract($a, $b) {

	if (is_a_number($a, $b)) {

	return $a - $b . PHP_EOL;

	} else {

		echo "Sorry.\n";
	}
}

echo subtract(5, 4);


function multiply($a, $b) {

	if (is_a_number($a, $b)) {

	return $a * $b . PHP_EOL;

	} else {

		echo "Sorry.\n";
	}
}

echo multiply(5, 4);


function divide($a, $b) {
	
	if (is_a_number($a, $b)) {

	return $a / $b . PHP_EOL;

	} else {

		echo "Sorry.\n";
	}
}

echo divide('Mike', 10);


function modulus($a, $b) {
	
	if (is_a_number($a, $b)) {

	return $a % $b . PHP_EOL;

	} else {

		echo "Sorry.\n";
	}
}

echo modulus(5, 4);


?>