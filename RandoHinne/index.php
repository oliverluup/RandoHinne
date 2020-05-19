<?php

$query = require 'core/bootstrap.php';

$router = new Router;

//We require routes.php
//routes.php has access to a router object
//It can then call method define
//We pass it a array called $routes
//We assign that array to the property protected
//Now protected routes = []; will be equal to the array in routes.php
require 'routes.php';


//trim trims any whitespaces at the beginning or end, at the end we specify that we want to trim "/"-s
$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router->direct($uri);


//If you go to example.com/about
//The router goes "Ooh, I need to route you to views/about.php