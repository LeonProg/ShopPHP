<?php 

session_start();

require_once('app/database/Database.php');
require_once('app/database/models/User.php');
require_once('app/database/models/Product.php');

global $database;

$AUTH_USER = NULL;



if (isset($_SESSION['AUTH_USER_ID'])) $AUTH_USER = getUserById($_SESSION['AUTH_USER_ID']);



echo "<prev>";
print_r($AUTH_USER);
echo "</prev>";
