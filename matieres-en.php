<?php
include "include/header.php";
include "./include/nav.php";
include "./include/banner.php";
include "./include/matiere-en.php";
include "./include/news-projet.php";
include "include/footer.php";
include "include/new.php";

// new banner();

?>

<?php
new header("en", "Subjects")
?>
<header>
    <?php
    new nav("index-en", "", "", "", "active", "", "matieres", "french", "apropos-en", "actu-en", "projets-en", "matieres-en", "equipe-en");
    new banner("Subjects", "Bachelor Multimedia and Internet Professions during 3 years");
    ?>
</header>
<div class="container">
    <h1 class="m-5">All subjects</h1>
    <div>

        <?php
        new matieresEn();
        ?>
    </div>
    <?php
    new actu("Trip in London</br>for the MMI2", "MMI2 traveled to London this year for about 1 week. Before this covid epidemic, the second-year trip was a tradition. Thanks to the improvement of this epidemic, the trip could take place. Always appreciated by both the accompanying teachers and the students, these trips have been a success for years.")
    ?>
</div>
<?php
new footer();
