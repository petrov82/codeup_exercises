<?php

$a = 2;

do {
	echo "\$a is less than or equal to {$a}\n";
	$a *= $a;
} while ($a <= 1000000);

?>