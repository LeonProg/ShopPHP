<?php 

session_start();

require("../database/Database.php");

unset($_SESSION['errors']);
$_SESSION['errors'] = [];

global $database;

if (isset($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
    
    $user =  $database->query("SELECT * FROM `user` WHERE `email` = '$email' ")->fetch(PDO::FETCH_ASSOC);
    
    if ($user == '') {
        $user = [];
    }

    if (!empty($user)) {
        $_SESSION['errors'][] = "Пользователь с электронной почтой '$email' уже существует!";
    }

    if ($password !== $re_password) {
        $_SESSION['errors'][] = "Введеные пароли не совпадают!";
    }

    if (strlen($password) < 6) {
        $_SESSION['errors'][] = "Минимальная длина пароля 6 символов!";
    }


    if (count($_SESSION['errors']) === 0) {
        $hash_password = md5($password);
        $query_create_user = "INSERT INTO `user`(`name`, `email`, `password`) 
        VALUES ('$name', '$email', '$hash_password')";
        $database->query($query_create_user);
        $user_id = $database->lastInsertId();
        // $user = $database->("SELECT * FROM `user` WHERE `id` = '$user_id' ")->fetch(PDO::FETCH_ASSOC);
        $_SESSION['AUTH_USER_ID'] = $user_id;
        header('Location: /index.php');
        die();

    }

}


header('Location: /register.php');