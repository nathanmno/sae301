<?php
include "include/header.php";
include "./include/nav.php";
include "./include/banner.php";
include "./include/team.php";
include "include/footer.php";

// include "include/news.php";
// new banner();

?>

<?php
new header("en", "Teachers")
?>
<header>
    <?php
    new nav("index-en", "", "", "", "", "active", "equipe", "french", "apropos-en", "actu-en", "projets-en", "matieres-en", "equipe-en");
    new banner("Teachers", "Bachelor Multimedia and Internet Professions during 3 years");
    ?>
</header>
<div class="equipe-container">

    <div class="wrapper">
        <div class="container">
            <h1 class="m-5">Teachers</h1>
            <div class="row justify-content-center">
                <?php
                new team("Gaëlle Charpentier", "gaelle.jpg", "Teacher of Integration");
                new team(" Anne Tasso", "anne.png", "Teacher of Audiovisual ");
                new team("Matthieu Berthet", "berthet.jpg", "Teacher web hosting");
                ?>
            </div>
            <div class="row justify-content-center">
                <?php
                new team("Alexandre Leroy", "alexandre.jpg", "Teacher of English");
                new team("Karim-Pierre Chabane", "kpc.jpg", "Teacher of multimedia writing and storytelling");
                new team("Odile Niel", "odile.jpg", "Teacher of expression, communication and rhetoric");
                ?>
            </div>
            <div class="row justify-content-center">
                <?php
                new team("Leyla Jaoued", "leyla.jpg", "Teacher of  Communication Strategy");
                new team("Philippe Gambette", "gambette.jpg", "Teacher of Front Development");
                new team("Renaud Eppstein", "eppstein.jpg", "Teacher of Back Development");
                ?>
            </div>
            <div class="row justify-content-center">
                <?php
                ?>
            </div>
            <div class="row justify-content-center">
                <?php
                new team("Frédéric Poisson", "poisson.png", "Teacher of  Graphic Production");
                new team("Lahcen Soussi", "lahcen.jpg", "Teacher of Audiovisual");
                new team("Hervé Lo", "herve.jpg", "Teacher of  Project management");
                ?>
            </div>
            <div class="row justify-content-center">
                <?php
                new team("Tony Houziaux", "tony.jpg", "Teacher of  Culture Artistique");
                new team("Léa Bosco", "lea.jpg", "Teacher of UX design");
                new team("Bilel Benbouzid", "bilel.jpg", "Teacher of  Artistic culture ");
                ?>
            </div>

        </div>
    </div>
</div>
<?php
new footer();
