<?php

require 'Task13.php';
require 'Functions.php';


//We change this later on
$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);



require 'Lesson13.view.php';