<?php
include "include/header.php";
include "./include/nav.php";
include "./include/banner.php";
include "./include/team.php";
include "include/footer.php";
include "./include/modele.php";

// include "include/news.php";
// new banner();

?>

<?php
new header("fr", "Professeurs")
?>
<header>
    <?php
    new nav("index", "", "", "", "", "active", "equipe-en", "english", "apropos", "actu", "projets", "matieres", "equipe");
    new banner("Professeurs", "Métiers du multimédia et de l’internet en 3 ans");
    ?>
</header>
<div class="equipe-container">

    <div class="wrapper">
        <div class="container">
            <h1 class="m-5">Professeurs</h1>
            <div class="row justify-content-center">
                <?php
                $profs=selectprofs();
                foreach($profs as $p){
                    new team($p["prenom"]." ".$p["nom"], $p["img"],$p["description"]);
                }
                ?>
            </div>
        <!--
            <div class="row justify-content-center">
                <?php
                new team("Gaëlle Charpentier", "gaelle.jpg", "Professeur d’Intégration Web");
                new team(" Anne Tasso", "anne.png", "Professeur d'Audiovisuel");
                new team("Matthieu Berthet", "berthet.jpg", "Professeur d'Hébergement");
                ?>
            </div>
            <div class="row justify-content-center">
                <?php
                new team("Alexandre Leroy", "alexandre.jpg", "Professeur d’Anglais");
                new team("Karim-Pierre Chabane", "kpc.jpg", "Professeur d’écriture multimédia et narration");
                new team("Odile Niel", "odile.jpg", "Professeur d’expression communication et rhétorique");
                ?>
            </div>
            <div class="row justify-content-center">
                <?php
                new team("Leyla Jaoued", "leyla.jpg", "Professeur de Stratégie de Communication");
                new team("Philippe Gambette", "gambette.jpg", "Professeur de Développement");
                new team("Renaud Eppstein", "eppstein.jpg", "Professeur de Développement Back");
                ?>
            </div>
            <div class="row justify-content-center">
                <?php
                ?>
            </div>
            <div class="row justify-content-center">
                <?php
                new team("Frédéric Poisson", "poisson.png", "Professeur de Graphisme");
                new team("Lahcen Soussi", "lahcen.jpg", "Professeur d’Audiovisuel");
                new team("Hervé Lo", "herve.jpg", "Professeur de Gestion de projet");
                ?>
            </div>
            <div class="row justify-content-center">
                <?php
                new team("Tony Houziaux", "tony.jpg", "Professeur de Culture Artistique");
                new team("Léa Bosco", "lea.jpg", "Professeur d’UX design");
                new team("Bilel Benbouzid", "bilel.jpg", "Professeur de Culture Numérique");
                ?>
            </div>
-->

        </div>
    </div>
</div>
<?php
new footer();
