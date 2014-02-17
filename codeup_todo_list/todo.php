<?php

// Create array to hold list of todo items


$items = array();

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

//set function to write to $filename
function view_file($target_file) {

    $handle = fopen($target_file, "r");
    $contents = fread($handle, filesize($target_file));
    $contents_array = explode("\n", $contents);
    fclose($handle);
    return $contents_array;

}
//
function save_file($target_file, $new_items) {

    $handle = fopen($target_file, 'w');
    //foreach ($new_items as $new_item) {
    fwrite($handle, implode("\n", $new_items));
    //}
    fclose($handle);
}

// The loop!
do { 
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (R)emove item, (SO)rt, (V)iew, (C)lear, (SA)ve, (Q)uit : ';

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

    elseif ($input == 'V') {

        echo "What file shall we view?: ";

        $filename = get_input(); 

        $items = view_file($filename);

    }

    elseif ($input == 'SA') {

        echo "Are you sure you want to save this file? (Y/N): ";

            $save_items = get_input(TRUE);


        if ($save_items == 'Y') {

            echo "What shall we call this?: ";

            $filename = get_input();


            if (file_exists($filename)) {
                echo "Are you sure you want to override this file?: ";
                $override = get_input(TRUE);

                if ($override == 'Y') {
                    save_file($filename, $items);
                } elseif ($save_items == 'N') {

                    echo "Ok." . PHP_EOL;

                }
            } elseif (file_exists($filename)==FALSE) {
                save_file($filename, $items);
                echo "I just saved $filename!" . PHP_EOL;
            }
        }

        elseif ($save_items == 'N') {
            
            echo "Ok." . PHP_EOL;
        }

        //$items = save_file($filename, $items);
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

    elseif ($input == 'C') {
        echo "Dude, You're about to go nuclear...";
        $nuclear = get_input(TRUE);

        if ($nuclear == 'NUCLEAR') {
            unset($items);
            $items = array();
        } else {

        }
    }
            


// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Have a Nice Day!
echo "Have a Nice Day!\n";

// Exit with 0 errors
exit(0);







?>