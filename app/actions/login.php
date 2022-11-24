<?php 



session_start();



require("../database/Database.php");



global $database;



unset($_SESSION['errors']);

$_SESSION['errors'] = [];



if (isset($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $user = $database

        ->query("SELECT * FROM `user` WHERE `email` = '$email' " )

        ->fetch(PDO::FETCH_ASSOC);    



    if ($user == '') {

        $user = [];

    } 



    if (empty($user)) $_SESSION['errors'][] = 'Адрес электронной почты не существует!';

    

    if (!empty($user)) {

        $hash_password = md5($password);



        if ($hash_password !== $user['password']) {

            $_SESSION['errors'][] = "Пароли не совпадают";

        } 

    

        if (count($_SESSION['errors']) === 0) {

            $_SESSION['AUTH_USER_ID'] = $user['id'];



            header('Location: /index.php');

            die();

        }

    }

}


header('Location: /login.php');