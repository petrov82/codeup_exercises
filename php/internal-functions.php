<?php

$nothing = rand(0x1, 0xFF);
$something = '';
$array = array(1,2,3);

//Before the first conditional, unset($nothing). What happens? PHP Notices 
 //unset($nothing);
//Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
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
if (set_or_empty($nothing)) {

	echo "\$nothing ({$nothing}) is a SET\n";

} else {

	echo "\$nothing ({$nothing}) is not a SET\n";
}
// TEST: If var $nothing is empty, display '$nothing is EMPTY'
// TEST: If var $something is empty, display '$something is EMPTY'
if (set_or_empty($nothing)) {

	echo "\$nothing ({$nothing}) is not EMPTY\n";

} else {
	echo "\$nothing ({$nothing}) is EMPTY\n";
}

// Serialize the array $array, and output the results
// $array = array(1,2,3,4,5,6,7,8,9,0);

$s_array = serialize($array);

echo $s_array  . PHP_EOL;
// Unserialize the array $array, and output the results
$d_array = unserialize($s_array);

var_dump($d_array);
print_r($d_array);
foreach ($d_array as $number => $value) {
	
	if (is_array($d_array)) {
		foreach ($d_array as $number) {
			echo "[{$number}] $value\n";
		}
	}

		
	else {
			echo FALSE . PHP_EOL;
			}
}





// if (is_real($nothing)) {

// echo "Checking if \$nothing is real: \n";
// echo "TRUE\n";

// } else
// 	echo "FALSE\n";


?>