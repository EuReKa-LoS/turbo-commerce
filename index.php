<?php session_start();
// Varaible pour le menu Hot Deal
$hotdeal=false;
if (isset($_SESSION["email"])) {
echo $_SESSION["email"];
}
?>
<!doctype html>
<html lang="en">

<?php
$path="styles.css";
include "include/head.php";
?>
<body>
<?php include 'include/header.php' ?>

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<!-- <ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Hot Deals</a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Laptops</a></li>
						<li><a href="#">Smartphones</a></li>
						<li><a href="#">Cameras</a></li>
						<li><a href="#">Accessories</a></li>
					</ul> -->
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
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>TOP 1</h3>
								<a href="#" class="cta-btn">Acheter Maintenant <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
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

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../projet-site-biblio/img/product1.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Colonne 2 Produit 2</p>
										<h3 class="product-name"><a href="#">titre du livre</a></h3>
										<h4 class="product-price">980.00 € <del class="product-old-price">990.00 €</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../projet-site-biblio/img/product1.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Colonne 3 Produit 3</p>
										<h3 class="product-name"><a href="#">titre du livre</a></h3>
										<h4 class="product-price">980.00 € <del class="product-old-price">990.00 €</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

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
								<!-- product widget -->
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
								<!-- product widget -->
							</div>

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
								<!-- product widget -->
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
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>inscris toi pour recevoir les <strong>NOUVELLES</strong></p>
							<form>
								<input class="input" type="email" placeholder="Entre Ton Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Valider</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">A Propos De Nous</h3>
								<p>Voici notres projet</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>59140 Dunkerque</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>03 28 29 30 31</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>projet@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Offre Du Moments</a></li>
									<li><a href="#">Livres Neufs</a></li>
									<li><a href="#">Livres D'occasions</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Informations</h3>
								<ul class="footer-links">
									<li><a href="#">A Propos</a></li>
									<li><a href="#">Contactez Nous</a></li>
									<li><a href="#">Police Privé</a></li>
									<li><a href="#">Retour De Produit</a></li>
									<li><a href="#">Conditions D'utilisation</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Services</h3>
								<ul class="footer-links">
                  <?php 
                  //si session active affiché mon compte sinon connexion
                  if(isset($_SESSION))
                  {
                    echo "<li><a href='account.php'>Mon Compte</a></li>";
                  }
                  else
                  {
                    echo "<li><a href='login.php'>Connexion</a></li>";
                  }
                  
                  ?>
									
									<li><a href="#">Mon Panier</a></li>
									<li><a href="#">Favoris</a></li>
									<li><a href="#">Suivre Mon Colis</a></li>
									<li><a href="#">Aide</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> Droit Reservé | Le template a était fait par Danny, Hervé, Davy, Kévin <a href="https://colorlib.com" target="_blank"></a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
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
