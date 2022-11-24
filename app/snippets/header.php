<?php
    $categories = $database->query("SELECT * FROM `category` LIMIT 5  ")->fetchAll(PDO::FETCH_ASSOC);

	$cart_counter = 0;

	if ($AUTH_USER) {
		$get_cart_count = "SELECT * FROM `cart` WHERE `user_id` = {$AUTH_USER['id']}";
		$cart_items = $database->query($get_cart_count)->fetchAll(PDO::FETCH_ASSOC);
		$cart_counter = count($cart_items);
	} 
?>
<header class="header">
	<div class="header_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<a class="logo" href="/"><img src="assets/img/logo.svg" alt=""></a>
						<nav class="main_nav">
							<ul>
								<li class="hassubs">
									<a href="categories.php">Категории</a>
									<ul>
										<?php foreach ($categories as $category) : ?>
											<li>
												<a href="categories.php?id=<?=$category['id']?>"><?= $category['name'] ?></a>
											</li>
										<?php endforeach ?>
									</ul>
								</li>
								<!-- <?php if($AUTH_USER['role'] == 'admin' ) : ?>
									<li><a href="admin.php">Админ панель</a></li>
								<?php endif?> -->
							</ul>
						</nav>
						<div class="header_extra ml-auto">
							<div class="shopping_cart">
								<a href="cart.php">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
										<g>
											<path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3
													c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1
													C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462
													H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41
													c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z" />
										</g>
									</svg>
									<div>Корзина <span><?=$cart_counter ?></span></div>
								</a>
							</div>
							<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
						</div>
						<?php if ($AUTH_USER === NULL) : ?>
							<a href="login.php" class="login menu-word">Войти</a>
							<a href="register.php" class="login menu-word">Зарегистрироваться</a>
						<?php else : ?>
							<a href="exit.php" class="login menu-word">Выйти</a>
						<?php endif ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="menu menu_mm trans_300">
	<div class="menu_container menu_mm">
		<div class="page_menu_content">
			<div class="page_menu_search menu_mm">
				<form action="#">
					<input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
				</form>
			</div>
			<ul class="page_menu_nav menu_mm">
				<li class="page_menu_item has-children menu_mm">
					<a href="index.html">Home<i class="fa fa-angle-down"></i></a>
					<ul class="page_menu_selection menu_mm">
						<li class="page_menu_item menu_mm"><a href="categories.html">Categories<i class="fa fa-angle-down"></i></a></li>
						<li class="page_menu_item menu_mm"><a href="product.html">Product<i class="fa fa-angle-down"></i></a></li>
						<li class="page_menu_item menu_mm"><a href="cart.html">Cart<i class="fa fa-angle-down"></i></a></li>
						<li class="page_menu_item menu_mm"><a href="checkout.html">Checkout<i class="fa fa-angle-down"></i></a></li>
						<li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
					</ul>
				</li>
				<li class="page_menu_item has-children menu_mm">
					<a href="categories.html">Categories<i class="fa fa-angle-down"></i></a>
					<ul class="page_menu_selection menu_mm">
						<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
						<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
						<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
						<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
					</ul>
				</li>
				<li class="page_menu_item menu_mm"><a href="index.html">Accessories<i class="fa fa-angle-down"></i></a></li>
				<li class="page_menu_item menu_mm"><a href="#">Offers<i class="fa fa-angle-down"></i></a></li>
				<li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
			</ul>
		</div>
	</div>
	<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

</div>