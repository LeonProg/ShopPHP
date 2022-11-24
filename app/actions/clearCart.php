<?php 
session_start();

require('../database/Database.php');


global $database;

$delete_query ="DELETE FROM `cart` WHERE `user_id` = {$_SESSION['AUTH_USER_ID']} ";
$database->query($delete_query);

header("Location: /cart.php");
