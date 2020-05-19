<?php

/*
Normal Array, but we don't get keys, we only get values
$person = [

    31, 'brown'

];
*/

/*
//If its not an associative array this is how you add
$names = ['Oliver', 'Heino', 'Alex'];

$names[] ='Ott';
*/

$person = [

    'age' => 19,
    'hair' => 'brown',
    'career' => 'student'

];

$person['name'] = 'Oliver';

//Used to remove an item(I guess in encompasses key and value) from array
unset($person['age']);

/*
We only get the value, not the key
echo $person['age'];
*/

/*
//For not using require
echo '<pre>';
var_dump($person);
echo '</pre>';
*/

//Only executes code to this point, then quits
//die(var_dump($person));

//(var_dump($person);
//die();


require 'Lesson7.view.php';