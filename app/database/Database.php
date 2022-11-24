<?php



$user = 'root';

$password = 'root';

$dbname = 'z217';

$host = 'localhost';


$dsn = "mysql:host=".$host."; dbname=".$dbname.";charset=utf8";


return $database = new PDO($dsn, $user, $password);



