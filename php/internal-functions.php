<?php

$nothing = NULL;
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

if (set_or_empty($nothing)) {

	echo "\$nothing is SET\n";
} else {

	echo "\$nothing is not a SET\n";
}

if (set_or_empty($nothing)) {

	echo "\$nothing is not EMPTY\n";

} else {
	echo "\$nothing is EMPTY\n";
}

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results




// if (is_real($nothing)) {

// echo "Checking if \$nothing is real: \n";
// echo "TRUE\n";

// } else
// 	echo "FALSE\n";


?>