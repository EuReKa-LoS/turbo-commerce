<?php
// Start the session
session_start(); ?>
<h1>Dashboard</h1>
<ul>
<?php
if(isset($_SESSION['prenom'])){
    echo "<h1>Bonjour ".$_SESSION['prenom']."</h1>";
    echo "<li><a href='admin/logout.php'>Déconnexion</a></li>";
    }
?>
<li><a href="#">Mettre à jour mon profil</a></li>
<li><a href="../../index.php">Index</a></li>
</ul>