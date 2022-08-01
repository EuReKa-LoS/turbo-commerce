<?php
session_start();
$config_bdd="../SQL/connectionBDD.php";
require $config_bdd;
// Affichage des livre récement mis à jour (ajouté en stock par exemple)
$stmt = $bdd->prepare('SELECT * FROM livres ORDER BY date DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="featured">
    <h2>Shop</h2>
</div>
<div class="recentlyadded content-wrapper">
    <h2>Ajout récent</h2>
    <div class="products">
        <?php foreach ($recently_added_products as $livre): ?>
        <!--<a href="index.php?page=livre&id=<?=$livre['idLivre']?>" class="livre">-->
            <a href="ShowBooksForCart.php?page=livre&id=<?=$livre['idLivre']?>" class="livre">
            <img src="../<?=$livre['imgLivre']?>" width="200" height="200" alt="<?=$livre['titreLivre']?>">
            <span class="name"><?=$livre['titreLivre']?></span>
            <span class="price">
                &euro;<?=$livre['prixLivre']?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>