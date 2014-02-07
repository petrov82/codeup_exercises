<?php

// The specs for the game are:
do {
	// - game picks a random number between 1 and 100.
	$right_number = mt_rand(1, 100);

	$guess_count = 0;

	// - prompts user to guess the number
	do {
		fwrite(STDOUT, 'Guess? ');

		$guess = fgets(STDIN);

		// - if user's guess is less than the number, it outputs "HIGHER"
		// - if user's guess is more than the number, it outputs "LOWER"
		// - if a user guesses the number, the game should declare "GOOD GUESS!"
		// - if a user guesses greater than 100 or less than 1, it declares " YOU LOSE"
		if ($guess < $right_number) {
			echo "HIGHER\n";
			$guess_count++;
		} elseif ($guess > $right_number) {
			echo "LOWER\n";
			$guess_count++;
		}
	} while ($guess != $right_number);


	echo "GOOD GUESS\n";
	echo "$guess_count\n";

	fwrite(STDOUT, "PLAY AGAIN Y/N?");
	$again = fgets(STDIN);

} while ($again == 'Y');

$end = ["gg bro gg\n", "the only way to win is not to play\n"];
	echo $end[mt_rand(0,1)];
//}
 
// - if a user wins or loses, the game asks if the user wants to play again, asks Y/N
// - if Y, loop back to begin game, if N, rand('gg bro gg' , 'the only way to win is not to play)'

// Hints:
// - Using conditionals and loops here is important
// - Random numbers can be made with the internal rand() function
// - If user is right, tell them they won
// - While they are wrong, give them hints and keep asking
// - Use exit(0) to end the game
// - If you get stuck in game, ctrl-c will exit.
?>