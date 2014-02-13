<?php

// echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";
// and output this result:

//Some of the most famous fictional theoretical physicists are Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, and Tony Stark.
$conjunction = 'and';

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicists_array = explode(', ', $physicists_string);

	// var_dump($physicists_array);

// Converts array into list n1, n2, ..., and n3
function humanized_list($array) {

	$last_item = array_pop($array);

	$other_names = implode(', ', $array);

	return "$other_names, and $last_item";

}



echo (humanized_list($physicists_array));

// var_dump($physicists_array);

// // List of famous peeps
// $physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// // Humanize that list
// $famous_fake_physicists = humanized_list($physicists_string);

// // Output sentence
// echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";

?>