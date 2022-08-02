			<!-- Products tab & slick -->
			<div class="col-md-12">
					    <div class="row">
					        <div class="products-tabs">
					            <!-- tab -->
					            <div id="tab1" class="tab-pane active">
					                <div class="products-slick" data-nav="#slick-nav-1">
<?php
	//Affichage avec IMG
		require 'connect.php';
			$query = $pdo->query("SELECT * FROM livres INNER JOIN categories ON livres.categorieLivre = categories.id WHERE etatLivre=0");
			while ($donnees = $query->fetch())
		{ ?>
			<!-- product -->
			<div class="product">
				<div class="product-img">
					<img src=<?php echo $donnees['imgLivre']?> alt="<?php echo $donnees['titreLivre'] ?>">
					<?php
					if(isset($promo))
					{
					?>
					<div class="product-label">
						<span class="sale">-30%</span>
						<span class="new">NOUVEAU</span>
					</div>
				<?php	
				}
					?>
				</div>
				<div class="product-body">
					<p class="product-category"><?php echo $donnees['nameCategorie'] ?></p>
					<h3 class="product-name"><a href="#"><?php echo $donnees['titreLivre'] ?></a></h3>
					<h4 class="product-price"><?php echo $donnees['prixLivre'] ?><del class="product-old-price">990.00 €</del></h4>
					<div class="product-rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<div class="product-btns">
						<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">ajouter aux favoris</span></button>
						<!-- <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button> -->
						<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">vue rapide</span></button>
					</div>
				</div>
				<div class="add-to-cart">
					<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> ajouter au panier</button>
				</div>
			</div>
			<!-- /product -->
			<?php
		}
    ?>
</div>
					                <div id="slick-nav-1" class="products-slick-nav"></div>
					            </div>
					            <!-- /tab -->
					        </div>
					    </div>
					</div>
					<!-- Products tab & slick -->

