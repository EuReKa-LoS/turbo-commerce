<?php
$monnaie="&euro;";
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['idLivre'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $pdo->prepare('SELECT * FROM livres WHERE idLivre = ?');
    $stmt->execute([$_GET['idLivre']]);
    // Fetch the product from the database and return the result as an Array
    $livre = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if (!$livre) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        exit('Product does not exist!');
    }
} else {
    // Simple error to display if the id wasn't specified
    exit('Product does not exist!');
}
?>
<?=template_header('Product')?>

<div class="product content-wrapper">
    <img src="../<?=$livre['imgLivre']?>" width="300" height="500" alt="<?=$livre['titreLivre']?>">
    <div>
        <h1 class="name"><?=$livre['titreLivre']?></h1>
        <span class="price">
        <?=$monnaie.":".$livre['prixLivre']?>
        </span>
        <form action="index.php?page=cart" method="post">
            <?php if(($livre['stockLivre'])!=0){
            ?>
            <input type="number" name="quantity" value="1" min="1" max="<?=$livre['stockLivre']?>" placeholder="Quantity" required>
            <input type="hidden" name="idLivre" value="<?=$livre['idLivre']?>">
            <input type="submit" value="Add To Cart">
            <?php
            }
            else
            {
                ?>
                <input type="text" name="quantity" value="Indisponible" disabled>
                <?php
            }
            ?>
        </form>
        <div class="description">
            <?=$livre['descriptionLivre']?>
        </div>
    </div>
</div>

<?=template_footer()?>