<?php

//dump arg count
//var_dump($argc);

//dump arg variables
//var_dump($argv);

//number of arguments must be 3
//arg 2 & 3 must be numbers
//arg 2 must be  less than arg 3
$error = <<<TEST
Welcome to High/Low!
To play, type "php highlow.php"
and then include your minimum and maximum numbers 
for your guessing range. 
Then, press the "enter/return" key.
TEST;

if (($argc != 3) || !is_numeric($argv[1]) || !is_numeric($argv[2]) || ($argv[1] > $argv[2])) {
	echo $error;

	exit(0);

//When all inputs are correct, run the program. :)	
} else {

	$minimum = $argv[1];
	$maximum = $argv[2];

	// intval(($minimum) $base = 0);
	// intval(($maximum) $base = 0);

// The specs for the game are:
	do {
		// - game picks a random number between 1 and 100.
		$right_number = mt_rand($minimum, $maximum);

		//counts the number of guesses
		$guess_count = 0;

		// - prompts user to guess the number
		do {
			fwrite(STDOUT, 'Make a guess: ');

			$guess = fgets(STDIN);

			// - if user's guess is less than the number, it outputs "HIGHER"
			// - if user's guess is more than the number, it outputs "LOWER"
			// - if a user guesses the number, the game should declare "GOOD GUESS!"
			// - if a user guesses greater than 100 or less than 1, it declares " YOU LOSE"?
			if ($guess < $right_number) {
				echo "Try a HIGHER number!\n";
				$guess_count++;
			} elseif ($guess > $right_number) {
				echo "Try a LOWER number¡\n";
				$guess_count++;
			}
		} while ($guess != $right_number);


		echo "GOOD GAME!\n";
		echo "You made $guess_count guess(es).\n";

		fwrite(STDOUT, "WOULD YOU LIKE TO PLAY AGAIN, Y/N?");
		$again = fgets(STDIN);

	// - if a user wins or loses, the game asks if the user wants to play again, asks Y/N
	} while ($again == 'Y' || "y" || "YES" || "Yes" || "yes");

	// - if Y, loop back to begin game, if N, rand('gg bro gg' , 'the only way to win is not to play)
	$end = ["gg bro gg\n", "the only way to win is not to play\n"];
		echo $end[mt_rand(0,1)];
}


	// Hints:
	// - Using conditionals and loops here is important
	// - Random numbers can be made with the internal rand() function
	// - If user is right, tell them they won
	// - While they are wrong, give them hints and keep asking
	// - Use exit(0) to end the game
	// - If you get stuck in game, ctrl-c will exit.
	?>