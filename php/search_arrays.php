<?php

//first names
$premium_users = ['Tina', 'Dana', 'Amy', 'Mike', 'Adam'];

$currently_logged_in = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function IsInArray($array, $value) {
	return in_array($value, $array);
}

function compareArray($array1, $array2) {

}

$query = 'BOB';

$result = array_search($query, $premium_users);

if ($result) {
    echo "$premium_users[$result] is a premium user";

	} else {
    		echo "$query is FALSE";
    	}


?>