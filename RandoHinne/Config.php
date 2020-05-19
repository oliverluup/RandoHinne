<?php


return [

    'database' => [

        'name' => 'randohinne',
        'username' => 'root',
        'password' => '',
        'port' => '3306',
        'charset' => 'utf8mb4',
        'host' => '127.0.0.1',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
    
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
            
        ]
    ]
];

/*
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$port = '3306';
$charset = 'utf8mb4';
$db = 'randohinne';

$con = mysql_connect($host, $user, $pass, $port, $charset, $db) or die ("MySQL Error");
mysql_select_db($db);
*/