<?php

require("../database/Database.php");
require_once('../database/models/User.php');
require_once('../database/models/Product.php');

global $database;

if (isset($_POST)) {
    $user_id = $_POST['user_id'];
    $product_id = $_POST['product_id'];

    $user = getUserById($user_id);
    $product = getProductById($product_id);


    if (empty($user)) header('Location: /product.php?='. $product_id);
    if (empty($product)) header('Location: /index.php');

    $create_cart_query = "INSERT INTO `cart` (`user_id`, `item_id`) VALUES ($user_id, $product_id)";

    $database->query($create_cart_query);

    header('Location: /cart.php');

    die();
    
}

header('Location /index.php');