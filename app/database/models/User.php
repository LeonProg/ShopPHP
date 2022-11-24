<?php



function getUserById($id) {
    global $database;
    $data = $database->query("SELECT * FROM `user` WHERE `id` = " . $id)->fetch(PDO::FETCH_ASSOC);
    if ($data == '') {
        $data = [];
    }
    return $data;

}

