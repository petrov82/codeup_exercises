<?php

class Hello {

    public static $defaultMessage = "Hello, World!";






}



$h1 = new Hello();
$h2 = new Hello();

echo Hello::$defaultMessage . PHP_EOL;
//$h1->defaultMessage = "Hello, CodeUp!";

//echo $h1->defaultMessage . PHP_EOL;
//echo $h2->defaultMessage . PHP_EOL;














?>
