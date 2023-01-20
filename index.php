<?php
include "include/header.php";
include "./include/nav.php";
include "./include/callToAction.php";
include "./include/news-projet.php";
include "./include/quotes.php";
include "include/footer.php";
include "include/news.php";
include "./include/modele.php";


// include "include/news.php";
// new banner();

?>

<?php
new header("fr", "Accueil")
?>
<header>
    <?php
    new nav("index", "", "", "", "", "", "index-en", "english", "apropos", "actu", "projets", "matieres", "equipe");
    ?>
    <div class="container-flex container-banner">
        <img src="./img/octogon.png" alt="" srcset="" class="index-octogon">
        <div class="container-text-header">
            <h1 class="titre-header">BUT MMI</h1>
            <h2 class="sous-titre-header">Champs-sur-marne</h2>
            <h3 class="texte-header">
                Brevet Universitaire Technologique des <br> Métiers du Multimédia et de l'Internet <br>(en 3 ans)
            </h3>
            <div class="container-flex all-btn-header">
                <a href="http://www.dut-mmi-champs.fr/jpo/2022/index.html" class="decoration-none">
                    <h4 class="btn-header">Portes ouvertes</h4>
                </a>
                <a href="./projets.php" class="decoration-none">
                    <h4 class="btn-header">Projets étudiants</h4>
                </a>
                <a href="#mmiendetails2" class="decoration-none">
                    <h4 class="btn-header">MMI en détails</h4>
                </a>
            </div>
        </div>
    </div>
</header>
    <?php
    $chiffres=selectchiffresmmi();
    numbers($chiffres["annee"], $chiffres["diplomes"], $chiffres["candidatures"], $chiffres["places"]);
    // ($titre, $sousTitre, $text, $image)
    new callToAction("MMI | Description de la formation ", "MMI EN BREF : ACQUÉRIR ET DÉVELOPPER DES COMPÉTENCES PLURIDISCIPLINAIRES
        CONNECTÉES AU MONDE DE L’INTERNET
        ", "Le BUT MMI vous forme aux métiers du web, du développement back-end, à l’UX Design, en passant par le Webmarketing ou la réalisation de produits audiovisuels. Cette formation vous permet d’acquérir un bagage suffisant pour entrer dans le monde professionnel ou poursuivre vos études en master. Le BUT MMI compte 2600 heures d’enseignement sur trois ans (soit environ 33 h d’enseignement par semaine) partagées entre la communication, les langues, l’informatique, la culture graphique, la culture scientifique et les réseaux.”
        ", "iut.jpg");
    new allnews("Nuit du dev", "Ces étudiants n'ont passés que 24 h sur ce projet", "./img/nuit-du-dev.png")
    ?>

    <div class="newws-container text-center">
        <h2 class="mt-5">PROJETS ETUDIANTS</h2>
        <?php

// new news("Timothé Bureau", "Cv Vidéo", "projet3.png",  "petit titre 2", "texte2", "projet1.png");
     $projets=selectdeuxprojets();

    new news($projets[0]["auteur"], $projets[0]["titre"], $projets[0]["miniature"], $projets[1]["auteur"], $projets[1]["titre"], $projets[1]["miniature"], "projets", "Projets en details");

?>
    </div>
    <?php
    new quotes("Témoignages", "Depuis 25 ans, le BUT (ex. DUT) MMI Champs-sur-Marne forme les professionnels du Web", "Étudiante Ingénieur", "Laurence, promo 2021", "J’ai choisi MMI car c'est une formation qui propose un bon mélange entre technique et artistique. Par son grand nombre de disciplines enseignées, c'est également une formation qui favorise la découverte de soi (pour les lycéens encore un peu perdus) : les domaines que l'on préfère, ceux que l'on aime moins, et ceux sur lesquels on souhaiterait poursuivre.\"", "Futur réalisateur", "Guillaume, Promo 2019", "\"À mon arrivée en DUT MMI, je n’avais qu’une vague idée de mon futur, j’ai toujours beaucoup aimé le cinéma et l’audiovisuel mais je pensais que c’était un monde très difficile d’accès. Cependant, grâce aux nombreux cours d’analyse filmique et à la réalisation de plusieurs courts-métrages j’ai transformé cette passion en véritable vocation, grâce à la formation j’ai reçu toutes les connaissances dont j’avais besoin, et je ne vois plus qu’un seul avenir pour moi : devenir réalisateur.\"", "UX UI Designer", "Flora, promo 2015", "\"On ne s'ennuie jamais, on travaille sur des projets qui répondent à des problématiques très diverses. De plus, le fait de pouvoir travailler en associant code et business/marketing est vraiment intéressant. MMI permet d'avoir accès à ce type de métier, rapidement et de manière professionnelle.")
    ?>

</div>
<?php
// include "include/footer.php";
new footer();
