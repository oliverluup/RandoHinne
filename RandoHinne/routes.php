<?php

$router->define([
    '' => 'cotrollers/index.php',
    'about' => 'cotrollers/about.php',
    'about/culture' => 'controllers/about-culture.php',
    'contact' => 'controllers/contact.php'
]);

/*
//Some solutions might look like this
$router->define('', 'controllers/index.php');
$router->define('about', 'controllers/about.php');
Route::get('about', 'controllers/about.php'); //How Laravel does it
$router->define('', 'controllers/index.php');
$router->define('', 'controllers/index.php');
*/