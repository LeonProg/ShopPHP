<?php 

session_start();

require('../database/Database.php');

global $database;



if (isset($_GET['id'])) {

    $delete_query ="DELETE FROM `cart` WHERE `item_id` = {$_GET['id']} AND `user_id` = {$_SESSION['AUTH_USER_ID']} ";

    $database->query($delete_query);

}



header("Location: /cart.php");