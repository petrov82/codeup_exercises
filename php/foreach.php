<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $thing) {

	if (is_bool($thing)) {
		echo "$thing is a bool\n";
	}

	if (is_int($thing)) {
		echo "$thing is an integer\n";
	}

	if (is_float($thing)) {
		echo "$thing is a double\n";
	}

	if (is_null($thing)) {
		echo "$thing is null\n";
	}
	
	if (is_array($thing)) {
		foreach ($thing as $number) {
			echo "$number is a number\n";
		}
		echo "\$thing is an array\n";
	}

	if (is_string($thing)) {
		echo "$thing is a string\n";
	}
}
?>