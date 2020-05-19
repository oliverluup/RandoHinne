<?php

//require 'Functions.php';

class Task {
    
    //We could do it more complicated for security reasons
    //protected $description;

    public $description;

    public $completed = false;

    //functions in classes are called methods
    public function __construct($description) {
        
        //Whatever the user sets as the description gets to be the $description
        $this->description = $description;
        
    }

    public function complete(){

        $this->completed = true;

    }

    public function isComplete(){

        return $this->completed;

    }

    /*
    public function description() {

        return $this->description;

    }
    */
}

/*
$task = new Task('Go to the store'); //a new task object???


$task->complete(); //complete the task

var_dump($task -> isComplete());

*/

$tasks = [

    new Task('Go to the store'),
    new Task('Lükkab tobi'),
    new Task('Clean my room')

];

$tasks[0]->complete();

//The guy said we don't need functions
//dd($tasks);


require 'Lesson12.view.php';