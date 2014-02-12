<?php

$foo = rand(0x0, 0x100);
$bar = '';
$array = array(1,2,3);

//Before the first conditional, unset($foo). What happens? PHP Notices 
 //unset($foo);
//Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function set_or_empty($checkvar) {
	if (isset($checkvar)) {

		return TRUE;
	}

	if (!empty($checkvar)) {
		return TRUE;
	}

	elseif (isset($checkvar) && (empty($checkvar))) {
		# code...
	} else {

		return FALSE;
	}
}
// TEST: If var $foo is set, display '$foo is SET'
if (set_or_empty($foo)) {

	echo "\$foo ({$foo}) is a SET\n";

} else {

	echo "\$foo ({$foo}) is NOT a SET\n";
}
// TEST: If var $foo is empty, display '$foo is EMPTY'
if (set_or_empty($foo)) {

	echo "\$foo ({$foo}) is NOT EMPTY\n";

} else {
	echo "\$foo ({$foo}) is EMPTY\n";
}

// TEST: If var $bar is set, display '$bar is SET'
if (set_or_empty($bar)) {

	echo "\$bar ({$bar}) is a SET\n";

} else {

	echo "\$bar ({$bar}) is NOT a SET\n";
}
// TEST: If var $bar is empty, display '$bar is EMPTY'
if (set_or_empty($bar)) {

	echo "\$bar ({$bar}) is NOT EMPTY\n";

} else {
	echo "\$bar ({$bar}) is EMPTY\n";
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
	
	// if (is_array($d_array)) {
	// 	foreach ($d_array as $number) {
			echo "[{$number}] $value\n";
	// 	}
	// }

		
	// else {
	// 		echo FALSE . PHP_EOL;
	// 		}
}





// if (is_real($nothing)) {

// echo "Checking if \$nothing is real: \n";
// echo "TRUE\n";

// } else
// 	echo "FALSE\n";


?>