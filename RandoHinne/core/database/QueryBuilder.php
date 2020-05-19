<?php

class QueryBuilder {

    protected $pdo;

    public function __construct($pdo) {

        $this->pdo = $pdo;

    }

    public function selectAll($table) {

        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();
    
        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

}

/*
//Mental excercise to understand why we want different folders and files for different actions
//Also you can't just get them, by only calling the "Contractor "function""
//The function(the Contractor) needs these things in order to work
class Contractor {

    //This is how you get them
    //You have to define(call?) them in this way...
    public function __construct($electrician, $plumber, $designer) {

        $this->electrician = $electrician;

        $this->plumber = $plumber;
    }

    //Hey I need these people to perform my work
    //How do I get them?
    public function performWork() {

        //$electrician
        //$plumber
        //$designer
    }
}
*/