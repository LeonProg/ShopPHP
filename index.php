<?php 

require_once('app/snippets/base.php');

// $PAGE_TITLE = "PC BUILD";

?>

<!DOCTYPE html>
<html lang="en">

<?php 
    require('app/snippets/head.php');
?>

<body>

<div class="super_container">

	<!-- Header -->
    <?php 
        require('app/snippets/header.php');
    ?>
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(assets/img/hero_block1.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">Купить готовый пк</div>
										<div class="home_slider_subtitle">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id dolor debitis in consectetur alias veniam architecto, sunt aliquam corrupti rem deleniti aspernatur maxime ratione sed accusamus, temporibus beatae dicta quo!</div>
										<div class="button button_light home_button"><a href="#">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(assets/img/hero_block2.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">A new Online Shop experience.</div>
										<div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
										<div class="button button_light home_button"><a href="#">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products  substr php-->
    <?php 
        $items = $database->query("SELECT * FROM `category`")->fetchAll(PDO::FETCH_ASSOC);
    ?>
	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="product_grid">
                        <?php foreach($items as $item): ?>
                            <div class="product-main product">
                                <div class="product_image"><img src="assets/product_1.jpg" alt=""></div>
                                <div class="product_extra product_new"><a href="categories.php">New</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="categories.php?id=<?=$item['id']?>"><?=$item['name']?></a></div>
                                </div>
                            </div>
                        <?php endforeach?>
					</div>
						
				</div>
			</div>
		</div>
	</div>

	<!-- Ad -->

	<div class="avds_xl">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="avds_xl_container clearfix">
						<div class="avds_xl_background" style="background-image:url(assets/avds_xl.jpg)"></div>
						<div class="avds_xl_content">
							<div class="avds_title">Собрать свою сборку</div>
							<div class="button button_light home_button"><a href="configurator.php">Собрать</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Icon Boxes -->

	<!-- Newsletter -->

	<!-- Footer -->
	
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>