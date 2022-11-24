<?php

require_once('app/snippets/base.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require('app/snippets/head.php');
    ?>
    <link rel="stylesheet" type="text/css" href="styles/cart.css">
    <link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/configurator.css">

</head>

<body>
    <div class="super_container">
        <?php
        require('app/snippets/header.php');
        ?>
    </div>
    <!-- Cart Info -->
    <div class="cart_info">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Column Titles -->
                    <div class="cart_info_columns clearfix">
                        <div class="cart_info_col cart_info_col_product">Product</div>
                        <div class="cart_info_col cart_info_col_price">Price</div>
                        <div class="cart_info_col cart_info_col_quantity">Quantity</div>
                        <div class="cart_info_col cart_info_col_total">Total</div>
                    </div>
                </div>
            </div>
            <div class="row cart_items_row">
                <div class="col">
                    <!-- Cart Item -->
                    <div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                        <!-- Name -->
                        <div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
                            <div class="cart_item_image">
                                <div class="skeleton"><img src="assets/svg/cpu_skeleton.svg" alt=""></div>
                            </div>
                            <div class="cart_item_name_container">
                                <div class="cart_item_name">Процессор</div>
                            </div>
                        </div>
                        <div class="cart_item_total"></div>
                        <div class="button click-items remove-btn"><a>Посмотреть</a></div>
                    </div>
                    <div class="items-list">
                        <?php
                        $items = $database->query("SELECT * FROM `item` WHERE `category_id`= 1 ")->fetchAll(PDO::FETCH_ASSOC);
                        ?>
                        <?php foreach ($items as $item) : ?>
                            <div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                                <div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_item_image ">
                                        <div ><img src=<?= $item['img_path'] ?> alt=""></div>
                                    </div>
                                    <div class="cart_item_name_container">
                                        <div class="cart_item_name"><a href="#"><?= $item['name'] ?></a></div>
                                    </div>
                                </div>
                                <div class="cart_item_total"><?= $item['price'] ?>руб</div>
                                <div class="button open-items remove-btn"><a>Заменить</a></div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="row row_cart_buttons">
                <div class="col">
                    <div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
                        <div class="cart_buttons_right ml-lg-auto">
                            <div class="button clear_cart_button"><a href="app/actions/clearCart.php">Очистить корзину</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row_extra">
                <div class="col-lg-6 offset-lg-2">
                    <div class="cart_total">
                        <div class="section_title">Общая стоимость</div>
                        <div class="cart_total_container">
                            <ul>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_total_title">Стоимость</div>
                                    <?php
                                    $total = 0;
                                    foreach ($cart_items as $item) {
                                        $total = $total + intval($item['price']);
                                    }
                                    ?>
                                    <div class="cart_total_value ml-auto"><?= $total ?> руб</div>
                                </li>
                            </ul>
                        </div>
                        <div class="button checkout_button"><a href="#">Заказать</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<script src="js/configurator.js"></script>