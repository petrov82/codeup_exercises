<?php



// The loop!
do { 
    echo list_items($items);

    // ask for #of peple who eat 1
    echo 'How many guests eat only 1 slice of pizza: ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input();

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

    elseif ($input == 'O') {

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