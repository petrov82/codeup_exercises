// <?php

// Prompt user for a starting number and ending number,

// $prompt_one = <<<PROMPT
// Give me two numbers (any numbers),
// one lower and the other higher,
// so I can count through that number set: 
// PROMPT;


// fwrite(STDIN, $prompt_one);

$number_start = 0;
$number_end = 0x100;
$number_count = 0x10;
intval($number_start [$base = 0]);
intval($number_end [$base = 0]);
intval($number_count) [$base = 0];


// then display all the numbers from the starting to ending using a for loop.
for ($i = $number_start; $i <= $number_end; $i += $number_count) { 
	echo "\$i is equal to {$i}\n";
}

// Refactor to allow user to choose increment. (count by 1, 2, 10, ...)
// Default increment to 1 if no input.

// Make sure you are only allowing users to pass in numbers. Give an error message is both passed arguments are not numeric. See php.net/in_numeric.

?>