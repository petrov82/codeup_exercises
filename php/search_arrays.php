<?php

// Array of names in a Premium user array
$premium_users = ['Tina', 'Dana', 'Amy', 'Mike', 'Adam'];
// Array of names in current-logged-in file
$currently_logged_in = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


// Function to search within an array
function IsInArray($array, $value) {

	return in_array($value, $array);
}


// Function compares differences between 2 arrays, Array 2 is base, array 1 yeilds names not in base array
function compareArray($array1, $array2) {
	 
	 return array_diff($array1, $array2);
}


$query = 'BOB';

$result = array_search($query, $premium_users);

if ($result) {
    echo "$premium_users[$result] is a premium user" . PHP_EOL;

	} else {
    		echo "$query is not a premium user" . PHP_EOL;
    	}

print_r(array_diff($premium_users, $currently_logged_in))

?>