<?php

// intval($a [$base = 0]);
// intval($b [$base = 0]);


// Commit your changes for each step and push to GitHub.

// Validate all the arguments, and display an error if the input is not numeric.

// Validate divide by 0 errors, display error if attempts to divide by 0 are made.

// Make the error messages show the values of the arguments.

// Refactor the error messages into their own function, have the other functions use it for error messaging.


function add($a, $b) {
	if ((!is_numeric($a)) || (!is_numeric($b))) {
		echo "I'm sorry, but you didn't give me a number in one of the options. Please try again\n";
	} else {
		echo "$a + $b = "; 
		echo $a + $b . PHP_EOL;
	}
}

add('doobie', 4);


function subtract($a, $b) {
	if ((!is_numeric($a)) || (!is_numeric($b))) {
		echo "I'm sorry, but you didn't give me a number in one of the options. Please try again\n";
	} else {
		echo "$a - $b = "; 
		echo $a - $b . PHP_EOL;
	}
}

subtract(5, 4);


function multiply($a, $b) {
	if (!is_numeric($a)) {
		echo "I'm sorry, but {$a} isn't a number. Please try again.\n";

	} elseif (!is_numeric($b)) {
			echo "I'm sorry, but {$b} isn't a number. Please try again.\n";
		} 

	else {
		echo "$a * $b = "; 
		echo $a * $b . PHP_EOL;
	}
}

multiply(5, 4);


function divide($a, $b) {
	if ((!is_numeric($a)) || (!is_numeric($b))) {
		echo "I'm sorry, but you didn't give me a number in one of the options. Please try again\n";
	} elseif ($b === 0) {
			echo "I'm sorry, but, like your 8th grade algebra teacher would say, \"You cannot divide by zero.\"\n";
		} else {
		echo "$a + $b = "; 
		echo $a + $b . PHP_EOL;
	}
}

divide(12, 00);


function modulus($a, $b) {
	if ((!is_numeric($a)) || (!is_numeric($b))) {
		echo "I'm sorry, but you didn't give me a number in one of the options. Please try again\n";
	} else {
		echo "$a + $b = "; 
		echo $a + $b . PHP_EOL;
	}
}

modulus(5, 4);


?>