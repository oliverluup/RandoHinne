<?php

$config = require 'Config.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Router.php';

return new QueryBuilder(Connection::make($config['database']));

//Longform
//$pdo = Connection::make();
//$query = new QueryBuilder($pdo);

//If you want you could save it as a global variable
//$query = new QueryBuilder(Connection::make());