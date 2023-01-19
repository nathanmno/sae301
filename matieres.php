<?php
include "include/header.php";
include "./include/nav.php";
include "./include/banner.php";
include "./include/matieres.php";
include "./include/news-projet.php";
include "include/footer.php";
include "include/new.php";
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
    <h1 class="m-5">Toutes les matières</h1>
    <div>

        <?php
        new matieres();
        ?>
    </div>
    <?php
    new actu("Voyage à Londres</br>pour le MMI2", "Les MMI2 se sont rendus cette année à Londres pendant environ 1 semaine. Avant cette épidémie de covid le voyage en deuxième année était une tradition. Grâce à l’amélioration de cette épidémie le voyage à pu avoir lieu. Toujours apprécié tant par les professeurs accompagnateurs que par les élèves, ces voyages sont une réussite depuis des années.")
    ?>
</div>
<?php
new footer();
