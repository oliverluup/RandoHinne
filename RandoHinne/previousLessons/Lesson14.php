<?php

$query = require 'bootstrap.php';


$tasks = $query->selectAll('todos');


require 'Lesson13.view.php';

//This ep we made the config file and also edited the connection file

//Structure of things
//
//1. Load bootstrap.php, loads all the things we need
//2. Fetch Config.php
//3. Form a database connection using Connection.php
//4. Instantiate a query builder, passing in our instance of PDO, QueryBuilder.php
//5. QueryBuilder returns an instance of the QuerBuilder class that contains helpful methods for querying the database, our case selectAll aka SELECT *
//6. We call selectAll, (Lesson14.php), we pass in todos (our table name)
//7. We load a view, Lesson13.view.php and in that file we work with that data we fetched from the database