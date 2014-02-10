<?php

//switch statements are different

// $value = 'Hello!';

// switch (gettype($value)) {
//     case 'integer':
//         echo '$value is an integer';
//         break;
//     case 'float':
//         echo '$value is a float';
//         break;        
//     case 'boolean':
//         echo '$value is a boolean';
//         break;            
//     case 'array':
//         echo '$value is an array';
//         break;
//     case 'null':
//         echo '$value is null';
//         break;        
//     case 'string':
//         echo '$value is a string';
//         break;            
// }


// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');

$day_of_week = rand(1, 7);

switch($day_of_week) {
    case 1:
    	echo "Today is Monday\n";
    	break;
        // Output Monday
    case 2: 
    	echo "Today is Tuesday\n";
        break;
        // Output Tuesday
    case 3:
    	echo "Today is Wednesday\n";
        break;
        // Output Monday
    case 4:
    	echo "Today is Thursday\n"; 
        break;
        // Output Tuesday
    case 5:
    	echo "Friday, Friday, gotta get down on Friday\n";
        break;
        // Output Monday
    default: 
    	echo "It's the Weekend\n";
        break;
        // Output Weekend
    //etc
}

//go thru m-f but set default that other days are on a weekend
?>