<?php

// Create array to hold list of todo items

// After each exercise item, commit and push changes to your GitHub repository.

// Update the code to allow upper and lowercase inputs from user for all menu items. Test adding, removing, and quiting.

// Update the program to start numbering the list with 1 instead of 0. Make sure remove still works as expected.

// Create array to hold list of todo items

// $filename = todo.txt

$items = array();

//set function to write to $filename
// function can_write_file($content) {

//         // Let's make sure the file exists and is writable first.
//     if (is_writable($filename)) {

//         // In our example we're opening $filename in append mode.
//         // The file pointer is at the bottom of the file hence
//         // that's where $somecontent will go when we fwrite() it.
//         if (!$handle = fopen($filename, 'a')) {
//              return "Cannot open file ($filename)";
//              exit;
//         }

//         // Write $somecontent to our opened file.
//         if (fwrite($handle, $somecontent) === FALSE) {
//             echo "Cannot write to file ($filename)";
//             exit;
//         }

//         echo "Success, wrote ($somecontent) to file ($filename)";

//         fclose($handle);

//     } else {
//         echo "The file $filename is not writable";
//         }

// }
// List array items formatted for CLI
// Iterate through list items
function list_items($assignment) {

    $list = '';
 
    foreach ($assignment as $key => $value) {

       $list .= $value . PHP_EOL;
   }
   return $list;
            
        // Display each item and a newlines
        
    // Return string of list items separated by newlines.
    // Should be listed [KEY] Value like this:
    // [1] TODO item 1
    // [2] TODO item 2 - blah
    // DO NOT USE ECHO, USE RETURN
    }

// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
function get_input($upper = FALSE) {

   $input =  (trim(fgets(STDIN)));

    if ($upper) {

       return strtoupper($input);
    
    } else {
        return ucfirst($input);
    }

    // Return filtered STDIN input
}


// The loop!
do { 
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (R)emove item, (SO)rt, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $new_item = get_input();

            echo "Shall we add this to the (B)eginning or the e(N)d of the list?: ";

            $beg_or_end = get_input(TRUE);

                if ($beg_or_end == 'B') {
                     
                    array_unshift($items, $new_item);

                } elseif ($beg_or_end == 'N') {

                    array_push($items, $new_item);

                }

    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
            $key--;
        // Remove from array
        unset($items[$key]);
        // move all items in list to lower empty keys
        $items = array_values($items);

    } elseif ($input == 'SO') {

         echo '(A)-Z, (Z)-A,?: ';

         $sort_command = get_input(TRUE);


        if ($sort_command == 'A') {
                 
            sort($items);

        } elseif ($sort_command == 'Z') {

            rsort($items);
        }
    }

    elseif ($input == 'F') {

        echo "Are you sure you want to remove the first item, Buddy? (Y/N): ";

         $remove_first = get_input(TRUE);


        if ($remove_first == 'Y') {
                 
            array_shift($items);

        } elseif ($remove_first == 'N') {

            echo "Ok, I'll hold onto it a little longer." . PHP_EOL;
        }
    }

    elseif ($input == 'L') {

        echo "Are you sure you want to remove the last item, Buddy? (Y/N): ";

         $remove_last = get_input(TRUE);


        if ($remove_last == 'Y') {
                 
            array_pop($items);

        } elseif ($remove_last == 'N') {

            echo "Ok, I'll hold onto it a little longer." . PHP_EOL;

        }

    }
            


    
    // elseif ($input == 'S') {

    //     write_file($content);
    // }

// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Have a Nice Day!
echo "Have a Nice Day!\n";

// Exit with 0 errors
exit(0);







?>