<?php
require_once('app/snippets/base.php');
require('app/snippets/translateArray.php');
global $database;
$id = abs(intval($_GET['id']));
$item = $database->query("SELECT * FROM `item` WHERE `id`= $id ")->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	require('app/snippets/head.php');
	?>
	<link rel="stylesheet" type="text/css" href="styles/product.css">
	<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
</head>



<body>
	<div class="super_container">
		<?php
		require('app/snippets/header.php');
		?>
		<div class="product_details">
			<div class="container">
				<div class="row details_row">
					<!-- Product Image -->
					<div class="col-lg-6">
						<div class="details_image">
							<div class="details_image_large"><img src=<?=$item['img_path'] ?> alt="">
								<div class="product_extra product_new"><a href="categories.html">New</a></div>
							</div>
						</div>
					</div>
					<!-- Product Content -->
					<div class="col-lg-5">
						<div class="details_content">
							<div class="details_name"><?= $item['name'] ?></div>
							<!-- <div class="details_discount">$890</div> -->
							<div class="details_price"><?= $item['price'] ?></div>
							<!-- In Stock -->
							<div class="in_stock_container">
								<div class="availability">Availability:</div>
								<span>In Stock</span>
							</div>
							<!-- Product Quantity -->
							<div class="product_quantity_container">
								<?php if ($AUTH_USER) : ?>
									<form action="app/actions/addToCart.php" method="POST">
										<input type="hidden" name="product_id" value="<?= $item['id']; ?>">
										<input type="hidden" name="user_id" value="<?= $AUTH_USER['id']; ?>">
										<button class="btn" type="submit" href="#">Купить</button>
									</form>
								<?php else : ?>
									<div class="button cart_button"><a href="#">Авторизироваться</a></div>
								<?php endif ?>
							</div>
						</div>
					</div>
				</div>
				<?php
				$array = json_decode($item['сharacteristic']);
				?>
				<div class="row description_row">
					<div class="col">
						<div class="description_title_container">
							<div class="description_title">Характеристики</div>
							<ul class="produc_сharacteristic">
								<?php foreach ($array as $name => $value) : ?>
									<li class="produc_сharacteristic__li">
										<span><?= $translate[$name] ?></span>
										<div></div>
										<span><?= $value ?></span>
									</li>
								<?php endforeach ?>
							</ul>
							<div class="reviews_title"><a href="#">Отзывы <span>(1)</span></a></div>
						</div>
						<div class="description_text">
							<p><?= $item['content'] ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>