<?php 

    require_once('app/snippets/base.php');





    require('app/snippets/head.php');

    $PAGE_TITLE = "Регистрация";

?>

<link rel="stylesheet" type="text/css" href="styles/auth.css">



<div class="super_container">
    <?php 
        require('app/snippets/header.php');
    ?>
    <div class="container">
        <div class="row">
            <form action="app/actions/register.php" class="register-form" method="POST">
                <h2>Регистрация</h2>
                <?php include("app/snippets/form-errors.php");?>
                <input name="name" type="text" placeholder="Введите Имя">
                <input name="email" type="email" placeholder="Введите email">
                <input name="password" type="text" placeholder="Введите пароль">
                <input name="re_password" type="text" placeholder="Повторно Введите пароль">
                <button type="submit" class="btn">Регистрация</button>
            </form>
        </div>
    </div>

</div>