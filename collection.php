<?php 

require_once('app/snippets/base.php');

global $database;

if (isset($_GET['id'])) {
    $id = abs( intval($_GET['id']));

    $collection = $database->query("SELECT * FROM `category` WHERE `id` = $id ")->fetch(PDO::FETCH_ASSOC);

    if (!$collection) header('Location: /index.php');

    $products = $database->query("SELECT * FROM `item` WHERE `category_id` = $id ")->fetchAll(PDO::FETCH_ASSOC);
    
    var_dump($products);

}

$PAGE_TITLE = "Коллекция";