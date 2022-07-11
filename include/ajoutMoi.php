<!-- <img src="imgs/<?= $product['img'] ?>" width="200" height="200" alt="<?= $product['name'] ?>"> -->


<?php
/*
$_POST['signup_first_name'] = 'admin';
$_POST['signup_last_name'] = 'admin';
$_POST['signup_email_users'] = 'admin@example.com';
$_POST['signup_gender'] = 'admin';*/
if (isset($_POST['books'])) {
    try {
        if(isset($_FILES['imgLivre'])){
            $tmpName = $_FILES['imgLivre']['tmp_name'];
            $name = $_FILES['imgLivre']['name'];
            $size = $_FILES['imgLivre']['size'];
            $error = $_FILES['imgLivre']['error'];
        
            $tabExtension = explode('.', $name);
            $extension = strtolower(end($tabExtension));
        
            $extensions = ['jpg', 'png', 'jpeg', 'gif'];
            $maxSize = 400000;
        
            if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0){
        
                $uniqueName = uniqid('', true);
                //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
                $file = $uniqueName.".".$extension;
                //$file = 5f586bf96dcd38.73540086.jpg
        
                move_uploaded_file($tmpName, './img/'.$file);
                $pathImg='./img/'.$file;
                $bdd = new PDO('mysql:host=localhost;dbname=librairie', 'root', ''); //Connexion BDD avec spécification UTF-8
			    $bdd->exec('SET NAMES "UTF8"');
                //$sql = "INSERT INTO livres (titreLivre, categorieLivre, descriptionLivre, auteurLivre, imgLivre, etatLivre, reEditionLivre, stockLivre, prixNeufLivre, prixOccasionLivre, codeBarreLivre, ISBN) VALUES (:titreLivre, :categorieLivre, :descriptionLivre, :auteurLivre, :imgLivre, :etatLivre, :reEditionLivre, :stockLivre, :prixNeufLivre, :prixOccasionLivre, :codeBarreLivre, :ISBN)";
                $sql = "INSERT INTO livres (titreLivre, categorieLivre, imgLivre, auteurLivre,  prixNeufLivre, prixOccasionLivre) VALUES (:titreLivre, :categorieLivre, :imgLivre, :auteurLivre,  :prixNeufLivre, :prixOccasionLivre)";
                $req = $bdd->prepare($sql);
                $data = [
                    'titreLivre' => $_POST['titreLivre'],
                    'categorieLivre' => $_POST['categorieLivre'],
                    'imgLivre' => $pathImg,
                    'auteurLivre' => $_POST['auteurLivre'],
                    'prixNeufLivre' => $_POST['prixNeufLivre'],
                    'prixOccasionLivre' => $_POST['prixOccasionLivre']
                ];
                $req->execute($data);
            }
            else{
                echo "Une erreur est survenue";
            }
        }
        

        
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
?>

<h1>Ajout de livre</h1>
<table class="table-books">
    <form method="post" action="index.php" class="form-books"  enctype="multipart/form-data">
        <li><label for="titreLivre">Titre du livre: </label> : <input type="text" id="titreLivre" name="titreLivre"></li>
        <li><label for="categorieLivre">Categorie du livre: </label> : <input type="text" id="categorieLivre" name="categorieLivre"></li>
        <!-- Gestion file -->
        <li><label for="imgLivre">Jaquette du livre: </label> : <input type="file" id="imgLivre" name="imgLivre"></li>
        <!-- Fin gestion file -->
        <li><label for="auteurLivre"></label>Auteur du livre:  <input type="text" id="auteurLivre" name="auteurLivre"></li>
        <li><label for="prixNeufLivre">Prix neuf: </label> : <input type="text" id="prixNeufLivre" name="prixNeufLivre"></li>
        <li><label for="prixOccasionLivre">Prix Occasion: </label> : <input type="text" id="prixOccasionLivre" name="prixOccasionLivre"></li>
        <input type="submit" name="books" value="Ajouter" />
    </form class="form-login">
</table class="table-login">
<form method="post" action="login.php">
</form>