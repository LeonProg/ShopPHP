<?php
require_once('app/snippets/base.php');
require('app/snippets/head.php');
?>
<link rel="stylesheet" type="text/css" href="styles/auth.css">



<div class="super_container">
    <?php
    require('app/snippets/header.php');
    ?>
    <div class="container">
        <div class="row">
            <?php include("app/snippets/form-errors.php"); ?>
            <form action="app/actions/login.php" class="register-form" method="POST">
                <h2 class="title">Вход</h2>
                <input type="text" name="email" placeholder="Введите email">
                <input type="text" name="password" placeholder="Введите пароль">
                <input class="btn" type="submit" placeholder="Войти" value="Войти">
            </form>
        </div>
    </div>
</div>