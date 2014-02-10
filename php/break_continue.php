<?php

// Show the numbers between 1 & 100 using 'continue'
//
//
// Create another 'for' loop that counts from 1 to 100 but stops after 10 using 'break'

for ($number = 1; $number <= 100 ; $number++) { 
	echo $number . "\n";
	if ($number % 2 != 0 ) {
		continue;
	}
	echo "^ This is an even number\n";
}

for ($number = 1; $number <= 100 ; $number++) { 
	echo $number . "\n";
	if ($number >= 10 ) {
		break;
	}
}







?>