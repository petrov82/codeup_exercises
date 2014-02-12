<?php

$nothing = 0xFF;
$something = '';
$array = array(1,2,3);

// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function set_or_empty($checkvar) {
	if (!isset($checkvar)){
		return FALSE;
	}	elseif (empty($checkvar)) {
		return FALSE;
	} else {
		return TRUE;
	}
}
// TEST: If var $nothing is set, display '$nothing is SET'
// TEST: If var $something is set, display '$something is SET'
if (set_or_empty($something)) {

	echo "\$something ({$something}) is a SET\n";

} else {

	echo "\$something ({$something}) is not a SET\n";
}
// TEST: If var $nothing is empty, display '$nothing is EMPTY'
// TEST: If var $something is empty, display '$something is EMPTY'
if (set_or_empty($something)) {

	echo "\$something ({$something}) is not EMPTY\n";

} else {
	echo "\$something ({$something}) is EMPTY\n";
}

// Serialize the array $array, and output the results
// $array = array(1,2,3,4,5,6,7,8,9,0);

$serialized = serialize($array);

echo $serialized  . PHP_EOL;
// Unserialize the array $array, and output the results
$deser = unserialize($serialized);

var_dump($deser);
print_r($deser);
foreach ($deser as $key => $value) {
	
	if (is_array($thing)) {
		foreach ($thing as $number) {
			echo "$number\n";
		}
	}

		
	else {
			echo "$thing\n";
			}
}





// if (is_real($nothing)) {

// echo "Checking if \$nothing is real: \n";
// echo "TRUE\n";

// } else
// 	echo "FALSE\n";


?>