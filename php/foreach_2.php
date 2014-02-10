<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    ),
    'Code of Hammurabi' => array(
    	'published' => -1772,
    	'author' => 'Hammurabi',
    	'pages' => 4
    ),
    'Down and Out in the Magic Kingdom' => array(
    	'published' => 2003,
    	'author' => 'Cory Doctorow',
    	'pages' => 208
    ),
    'Piers Plowman' => array(
    	'published' => 1387,
    	'author' => 'William Langland',
    	'pages' => 262
    ),
    'Thompson Chain-Reference Bible' => array(
    	'published' => 1908,
    	'author' => 'Frank C. Thompson',
    	'pages' => null
    ),
    'Ivanhoe' => array(
    	'published' => 1820,
    	'author' => 'Sir Walter Scott',
    	'pages' => 499
    ),

);

//set the keys to the $title of the $book so that $title prints appropiately and all data inside of the $book group is released properly
//Update your loop to only show books that were written after 1950.
foreach ($books as $title => $book) {

	if ($book['published'] <= 1950) {
	echo "{$title} was written in {$book['published']}, by {$book['author']}, and has {$book['pages']} pages\n";
	echo '*' . PHP_EOL;
	}
	
}
?>