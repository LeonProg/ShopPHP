<?php

require_once('app/snippets/base.php');

global $database;

$id = abs( intval($_GET['id']));
$items = $database->query("SELECT * FROM `item` WHERE `category_id`= $id ")->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<?php
require('app/snippets/head.php');
?>
<link rel="stylesheet" type="text/css" href="styles/categories.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">

<body>
    <div class="super_container">
        <?php
        require('app/snippets/header.php');
        ?>
        <div class="products">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!-- Product Sorting -->
                        <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                            <div class="results">Showing <span>12</span> results</div>
                            <div class="sorting_container ml-md-auto">
                                <div class="sorting">
                                    <ul class="item_sorting">
                                        <li>
                                            <span class="sorting_text">Sort by</span>
                                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            <ul>
                                                <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
                                                <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                                                <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Name</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    
                        <div class="product_grid ">
                            <?php foreach($items as $item) : ?>
                            <!-- Product -->
                            <div class="product product_categories">
                                <div class="product_image"><img src=<?=$item['img_path'] ?> alt=""></div>
                                <div class="product_extra product_new"><a href="categories.php">New</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="product.php?id=<?=$item['id']?>"><?= $item['name'] ?></a></div>
                                    <div class="product_price"><?= $item['price'] ?></div>
                                </div>
                            </div>
                            <?php endforeach?>

                            

                        </div>
                        <div class="product_pagination">
                            <ul>
                                <li class="active"><a href="#">01.</a></li>
                                <li><a href="#">02.</a></li>
                                <li><a href="#">03.</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Icon Boxes -->

        <div class="icon_boxes">
            <div class="container">
                <div class="row icon_box_row">

                    <!-- Icon Box -->
                    <div class="col-lg-4 icon_box_col">
                        <div class="icon_box">
                            <div class="icon_box_image"><img src="assets/icon_1.svg" alt=""></div>
                            <div class="icon_box_title">Free Shipping Worldwide</div>
                            <div class="icon_box_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Icon Box -->
                    <div class="col-lg-4 icon_box_col">
                        <div class="icon_box">
                            <div class="icon_box_image"><img src="assets/icon_2.svg" alt=""></div>
                            <div class="icon_box_title">Free Returns</div>
                            <div class="icon_box_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Icon Box -->
                    <div class="col-lg-4 icon_box_col">
                        <div class="icon_box">
                            <div class="icon_box_image"><img src="assets/icon_3.svg" alt=""></div>
                            <div class="icon_box_title">24h Fast Support</div>
                            <div class="icon_box_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>