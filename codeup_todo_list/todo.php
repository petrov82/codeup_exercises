<?php

// Create array to hold list of todo items

// After each exercise item, commit and push changes to your GitHub repository.

// Update the code to allow upper and lowercase inputs from user for all menu items. Test adding, removing, and quiting.

// Update the program to start numbering the list with 1 instead of 0. Make sure remove still works as expected.

$items = array();

// The loop!
do {
    // Iterate through list items
    foreach ($items as $key => $item) {
       
        $key2 = $key++;
            
        // Display each item and a newlines
        echo "[{$key2}] {$item}\n";
    }

    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = strtoupper(trim(fgets(STDIN)));

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = trim(fgets(STDIN));
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
            $key--;
        // Remove from array
        unset($items[$key]);
            $key--;

    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);







?>