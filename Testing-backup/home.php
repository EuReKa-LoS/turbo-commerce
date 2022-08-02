<?php
// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM livres ORDER BY date DESC LIMIT 5');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?=template_header('Home')?>

<div class="featured">
    <h2>Shop</h2>
</div>
<div class="recentlyadded content-wrapper">
    <h2>Ajout récent</h2>
    <div class="products">
        <?php foreach ($recently_added_products as $livre): ?>
        <!--<a href="index.php?page=livre&id=<?=$livre['idLivre']?>" class="livre">-->
            <a href="index.php?page=livre&idLivre=<?=$livre['idLivre']?>" class="livre">
            <img src="../<?=$livre['imgLivre']?>" width="200" height="300" alt="<?=$livre['titreLivre']?>">
            <span class="name"><?=$livre['titreLivre']?></span>
            <span class="price">
                &euro;<?=$livre['prixLivre']?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>


<?php 
/*

session_start();
// Varaible pour le menu Hot Deal
$hotdeal=false;
$newsletter=false;

?>
<!doctype html>
<html lang="en">

<?php
$path="styles.css";
include "include/head.php";
?>
<body>
<!-- HEADER -->
<?php include 'include/header.php' ?>
<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<?php include  'include/navbar.php' ?>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<?php include 'include/shop.php' ?>
					<!-- /shop -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Livres Neufs</h3>
						</div>
					</div>
					<!-- /section title -->

        <!-- Include sliders ici -->
        <?php include 'include/Neuf.php' ?>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<?php include 'include/hotDeal.php' ?>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Livres D'occasions</h3>
							<!-- <div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab2">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab2">Accessories</a></li>
								</ul>
							</div> -->
						</div>
					</div>
					<!-- /section title -->

				<!-- Include livre d'occasion -->
        <?php include 'include/Occasion.php' ?>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top ventes</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../projet-site-biblio/img/product1.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Colonne 1 Produit 1</p>
										<h3 class="product-name"><a href="#">titre du livre</a></h3>
										<h4 class="product-price">980.00 € <del class="product-old-price">990.00 €</del></h4>
									</div>
								</div>
								<!-- /product widget -->

							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Meilleur notes</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
							
								<!-- /product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top ventes</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../projet-site-biblio/img/product1.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categories</p>
										<h3 class="product-name"><a href="#">titre du livre</a></h3>
										<h4 class="product-price">980.00 € <del class="product-old-price">990.00 €</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<!-- NEWSLETTER -->
		<?php include 'include/newsletter.php' ?>
		<!-- /NEWSLETTER -->
		<!-- FOOTER -->
		<?php include 'include/footer.php' ?>
		<!-- /FOOTER -->
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
*/
?>