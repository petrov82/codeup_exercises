<?php

define ('SIDES_OF_DICE', 20);

$roll = mt_rand(1, SIDES_OF_DICE);

ECHO "You rolled {$roll}\n";

?>