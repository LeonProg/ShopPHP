<?php

function getProductById($id) {
    global $database;

    $data = $database->query("SELECT * FROM `item` WHERE `id` = " . $id)->fetch(PDO::FETCH_ASSOC);

    if ($data == '') {
        $data = [];
    }

    return $data;
}