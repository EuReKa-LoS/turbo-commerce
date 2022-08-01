<?php
	//Affichage avec IMG
		require 'connect.php';
			$query = $pdo->query("SELECT * FROM livres INNER JOIN categories ON livres.categorieLivre = categories.id");
			while ($donnees = $query->fetch())
		{
		echo "<table><tr><td>";?>
		<p>Titre: <?php echo $donnees['titreLivre'] ?> </p>
		</td><td>
		<p>Catégorie: <?php echo $donnees['nameCategorie'] ?> </p>
		</td><td>
		<p>Description:
<p id="descriptionLivre" name="descriptionLivre">
		<?php echo $donnees['descriptionLivre'] ?>
					   </p>
		</td><td>
		<!-- Check de l'état -->
		<?php if($donnees['etatLivre']==0){
			echo "<p>Etat: <div class=\"text-warning\">Occasion</div>.</p>";
			}
			else{
				echo "<p>Etat: <div class=\"text-success\">Neuf<div>.</p>";
			}
		?>
		</td><td>
		<!-- Check de l'édition -->
		<?php if($donnees['reEditionLivre']==0){
			echo "<div class=\"text-success\"><p>Le livre est un original</p>";
			
			}
			else{
				echo "<div class=\"text-warning\"><p>Le livre est une rééition</p>";
			}
		?>
		</td><td>
		<p>Auteur: <?php echo $donnees['auteurLivre'] ?> </p>
		</td><td>
		<img src=<?php echo $donnees['imgLivre']?> alt="" width="80" height="120">
		</td><td>
		<p>Stock: <?php echo $donnees['stockLivre'] ?> </p>
		</td><td>
		<?php if($donnees['etatLivre']==0)
			{
			echo "<p>Prix neuf: ".$donnees['prixLivre']." €</p>";
			}
			else
			{
				echo "<p>Prix occasion: ".$donnees['prixLivre']." €</p>";
			}
			?>
		</td><td>
		<p>Code Barre: <?php echo $donnees['codeBarreLivre'] ?> </p>
		</td><td>
		<p>ISBN: <?php echo $donnees['ISBN'] ?> </p>
		<?php echo "</td><td></table></tr>";
		}
    ?>





<div class="products-wrapper">
        <?php foreach ($products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                &euro;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&euro;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
    <div class="buttons">
        <?php if ($current_page > 1): ?>
        <a href="index.php?page=products&p=<?=$current_page-1?>">Prev</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
        <a href="index.php?page=products&p=<?=$current_page+1?>">Next</a>
        <?php endif; ?>
    </div>