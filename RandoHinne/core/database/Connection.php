<?php

class Connection {

    //The "static" makes it globally accessible
    public static function make($config) {

        try {
    
            return new PDO(

                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']

            );
    
        } catch (\PDOException $e) {
    
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
    
        }

    }

}

//This is if we don't make it global
//$connection = new Connection();
//$connection->make();

//Calling the connection if its global
//$pdo = Connection::make();