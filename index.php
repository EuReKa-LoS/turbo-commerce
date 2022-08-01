<?php session_start();
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
  <nav class="navbar navbar-expand-xl navbar-dark bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand text-warning fs-1" href="admin/login.php">Connexion</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark" aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>
  </nav>


<?php
//Fonction message d'accueil
//Si l'utilisateur est connecté ca affiche "Bonjour et prénom" de l'utilisateur
if(isset($_SESSION['prenom'])){
   echo "<h1>Bonjour ".$_SESSION['prenom']."</h1>";
   echo "<li><a href='admin/logout.php'>Déconnexion</a></li>";
   }
   //Sinon on affiche juste Bienvenue
   else{ echo "<h1>Bienvenue</h1>";
   }?>
  <div class="text-center mt-4 name ">
    <?php //include ("include/ajoutMoi.php"); ?>
    <?php // include ("Testing-backup/ajoutMoiForeignKey.php"); ?>
    <!-- Affichage de la table livre -->
    <?php include ("Testing-backup/modifieMoiForeignKey.php"); ?>
    <?php //include ("include/recherche.php"); ?>
    <?php //include ("include/show.php"); ?>
  </div>

  </div>
</body>
<footer></footer>

</html>