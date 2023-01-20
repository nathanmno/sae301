<?php
include "include/header.php";
include "./include/nav.php";
include "./include/banner.php";
include "include/footer.php";
include "./include/callToAction.php";
include "./include/news.php";
include "./include/news-projet.php";
include "./include/modele.php"

?>

<?php
new header("fr", "Actualités")
?>
<header>
    <?php
    new nav("index", "", "active", "", "", "", "actu-en", "english", "apropos", "actu", "projets", "matieres", "equipe");
    new banner("Actualités", "Métiers du multimédia et de l’internet en 3 ans");
    ?>
</header>
<div class="container">
    <h1 class="m-5">Toutes les actualités</h1>
</div>

<?php
$actualites=selectactualites();
foreach($actualites as $a){
__construct($a["titre"], $a["texte"], $a["miniature"]);
};
?>

<hr>
<div class="actu-projets">
    <?php

    // new news("Timothé Bureau", "Cv Vidéo", "projet3.png",  "petit titre 2", "texte2", "projet1.png");
         $projets=selectdeuxprojets();

        new news($projets[0]["auteur"], $projets[0]["titre"], $projets[0]["miniature"], $projets[1]["auteur"], $projets[1]["titre"], $projets[1]["miniature"], "projets", "Projets en details");

    ?>
</div>
</div>
<?php
new footer();
