<?php
// Si l'utilisateur clic sur ajouter sur la page produit on peut check les données du formulaire
if (isset($_POST['idLivre'], $_POST['quantity']) && is_numeric($_POST['idLivre']) && is_numeric($_POST['quantity'])) {
    // Set the post variables so we easily identify them, also make sure they are integer
    $idLivre = (int)$_POST['idLivre'];
    $quantity = (int)$_POST['quantity'];
    // Prepare the SQL statement, we basically are checking if the product exists in our databaser
    $stmt = $pdo->prepare('SELECT * FROM livres WHERE idLivre = ?');
    $stmt->execute([$_POST['idLivre']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if ($product && $quantity > 0) {
        // Product exists in database, now we can create/update the session variable for the cart
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($idLivre, $_SESSION['cart'])) {
                // Product exists in cart so just update the quanity
                $_SESSION['cart'][$idLivre] += $quantity;
            } else {
                // Product is not in cart so add it
                $_SESSION['cart'][$idLivre] = $quantity;
            }
        } else {
            // There are no products in cart, this will add the first product to cart
            $_SESSION['cart'] = array($idLivre => $quantity);
        }
    }
    // Prevent form resubmission...
    header('location: index.php?page=cart');
    exit;
} // Remove product from cart, check for the URL param "remove", this is the product id, make sure it's a number and check if it's in the cart
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    // Remove the product from the shopping cart
    unset($_SESSION['cart'][$_GET['remove']]);
}
// Update product quantities in cart if the user clicks the "Update" button on the shopping cart page
if (isset($_POST['update']) && isset($_SESSION['cart'])) {
    // Loop through the post data so we can update the quantities for every product in cart
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'quantity') !== false && is_numeric($v)) {
            $id = str_replace('quantity-', '', $k);
            $quantity = (int)$v;
            // Always do checks and validation
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                // Update new quantity
                $_SESSION['cart'][$id] = $quantity;
            }
        }
    }
    // Prevent form resubmission...
    header('location: index.php?page=cart');
    exit;
}
// Send the user to the place order page if they click the Place Order button, also the cart should not be empty
if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    header('Location: index.php?page=placeorder');
    exit;
}
// Check the session variable for products in cart
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
// If there are products in cart
if ($products_in_cart) {
    // There are products in the cart so we need to select those products from the database
    // Products in cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $pdo->prepare('SELECT * FROM livres WHERE idLivre IN (' . $array_to_question_marks . ')');
    // We only need the array keys, not the values, the keys are the id's of the products
    $stmt->execute(array_keys($products_in_cart));
    // Fetch the products from the database and return the result as an Array
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Calculate the subtotal
    foreach ($products as $product) {
        $subtotal += (float)$product['prixLivre'] * (int)$products_in_cart[$product['idLivre']];
    }
}
?>
<?= template_header('Cart') ?>

<div class="cart content-wrapper">
    <h1>Panier</h1>
    <form action="index.php?page=cart" method="post">
        <table>
            <thead>
                <tr>
                    <td colspan="2">Produit</td>
                    <td>Prix</td>
                    <td>Quantité</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($products)) : ?>
                    <tr>
                        <td colspan="5" style="text-align:center;">Aucun produit dans votre panier.</td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($products as $product) : ?>
                        <tr>
                            <td class="img">
                                <a href="index.php?page=livre&idLivre=<?= $product['idLivre'] ?>">
                                    <img src="../<?= $product['imgLivre'] ?>" width="45" height="85" alt="<?= $product['titreLivre'] ?>">
                                </a>
                            </td>
                            <td>
                                <a href="index.php?page=livre&idLivre=<?= $product['idLivre'] ?>"><?= $product['titreLivre'] ?></a>
                                <br>
                                <a href="index.php?page=cart&remove=<?= $product['idLivre'] ?>" class="remove">Supprimer</a>
                            </td>
                            <td class="price">&euro;<?= $product['prixLivre'] ?></td>
                            <td class="quantity">
                                <input type="number" name="quantity-<?= $product['idLivre'] ?>" value="<?= $products_in_cart[$product['idLivre']] ?>" min="1" max="<?= $product['stockLivre'] ?>" placeholder="Quantity" required>
                            </td>
                            <td class="price">&euro;<?= $product['prixLivre'] * $products_in_cart[$product['idLivre']] ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="subtotal">
            <span class="text">Subtotal</span>
            <span class="price">&euro;<?= $subtotal ?></span>
        </div>
        <div class="buttons">
            <input type="submit" value="Update" name="update">
            <input type="submit" value="Place Order" name="placeorder">
            <div class="paypal">
                <button type="submit" name="paypal"><img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-100px.png" border="0" alt="PayPal Logo"></button>
            </div>
        </div>
    </form>
</div>

<?= template_footer() ?>