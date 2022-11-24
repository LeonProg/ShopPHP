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
</head>
<body>
	<div class="super_container">
		<?php
		require('app/snippets/header.php');
		?>
	</div>
	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(assets/cart.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="categories.html">Categories</a></li>
										<li>Shopping Cart</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
					<?php
					$cart_items = $database->query("SELECT * FROM `cart` JOIN `item` ON `user_id` = {$AUTH_USER['id']} AND item.id = cart.item_id")->fetchAll(PDO::FETCH_ASSOC);
					?>
					<?php foreach ($cart_items as $cart_item) : ?>
						<!-- Cart Item -->
						<div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
							<!-- Name -->
							<div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
								<div class="cart_item_image">
									<div><img src=<?= $cart_item['img_path'] ?> alt=""></div>
								</div>
								<div class="cart_item_name_container">
									<div class="cart_item_name"><a href="#"><?= $cart_item['name'] ?></a></div>
								</div>
							</div>
							<div class="cart_item_total"><?=$cart_item['price']?>руб</div>
							<div class="button remove-btn"><a href="app/actions/removeFromCart.php?id=<?=$cart_item['id'] ?>">Удалить</a></div>
						</div>
					<?php endforeach ?>
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
										foreach($cart_items as $item) {
											$total = $total + intval($item['price']);
										}
									?>
									<div class="cart_total_value ml-auto"><?=$total?> руб</div>
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