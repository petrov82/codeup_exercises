<?php

$new_cities = ['Changhua County, Taiwan', 'Hamina, Finland', 'St Ghislain, Belgium', 'Dublin, Ireland'];


$filename = "data/cities.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
echo $contents;
fclose($handle);


$filename = "data/cities.txt";
$handle = fopen($filename, 'a');
foreach ($new_cities as $city) {
    fwrite($handle, PHP_EOL . $city);
}
fclose($handle);

?>