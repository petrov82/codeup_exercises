<?php

// for ($i = 1; $i <= 100; $i++) {
//     echo $i . "\n";
//     if ($i == 5) {
//         break;
//     }
// }

// $i = 1;

// while (TRUE) {
// 	# code...

//}


// for ($i = 1; $i <= 10; $i++) {
//     echo $i . "\n";
//     if ($i % 2 == 0) {
//         continue;
//     }
//     echo "^ that is an odd number.\n";
// }


$numbers = array(1,2,3,4,5);
// Loop 1
foreach ($numbers as $key => $value) {
    echo "{$value}\n";
    // Loop 2
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 2) {
            echo "{$i}\n";
            break 2;
        }
    }
}
echo "done!\n";

?>