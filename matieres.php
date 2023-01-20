<?php
include "include/header.php";
include "./include/nav.php";
include "./include/banner.php";
include "./include/matieres.php";
include "./include/news-projet.php";
include "include/footer.php";
include "include/news.php";
include "./include/modele.php"

// new banner();

?>

<?php
new header("fr", "Matières")
?>
<header>
    <?php
    new nav("index", "", "", "", "active", "", "matieres-en", "english", "apropos", "actu", "projets", "matieres", "equipe");
    new banner("Matières", "Métiers du multimédia et de l’internet en 3 ans");
    ?>
</header>
<div class="container">
    <h1 class="mb-3 mt-3">TOUTES LES MATIERES</h1>
    <div>

<?php
$matieres=selectmatieres();
foreach($matieres as $m){
    new matieres($m["id"],$m["nom"], $m["img"], $m["texte"]);
};

?>
</div>
<?php
     new news("Amel Chabah", "Resaweb", "projet1.png",  "Timothé Bureau", "Cv Vidéo", "projet2.jpg", "projets", "Projets en détails"); ?>
</div>
<?php
new footer();