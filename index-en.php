<?php
include "include/header.php";
include "./include/nav.php";
include "./include/callToAction.php";
include "./include/news-projet.php";
include "./include/quotes.php";
include "include/footer.php";
include "./include/modele.php";
include "include/news.php";
// new banner();

?>

<?php
new header("en", "Home")
?>
<header>
    <?php
    new nav("index-en", "", "", "", "", "", "index", "french", "apropos-en", "actu-en", "projets-en", "matieres-en", "equipe-en","News","About","Projects","Subjects","Teachers");
    ?>
    <div class="container-flex container-banner">
        <img src="./img/octogon.png" alt="" srcset="" class="index-octogon">
        <div class="container-text-header">
            <h1 class="titre-header">BUT MMI</h1>
            <h2 class="sous-titre-header">Champs-sur-marne</h2>
            <h3 class="texte-header">
                Bachelor Multimedia and Internet Professions during 3 years
            </h3>
            <div class="container-flex all-btn-header">
                <a href="http://www.dut-mmi-champs.fr/jpo/2022/index.html" class="decoration-none">
                    <h4 class="btn-header">Open Day</h4>
                </a>
                <a href="./projets-en.php" class="decoration-none">
                    <h4 class="btn-header">Students Projects</h4>
                </a>
                <a href="#mmiendetails2" class="decoration-none">
                    <h4 class="btn-header">MMI in details</h4>
                </a>
            </div>
        </div>
    </div>
</header>
    <?php
    $chiffres=selectchiffresmmi();
    numbersen($chiffres["annee"], $chiffres["diplomes"], $chiffres["candidatures"], $chiffres["places"]);
    // ($titre, $sousTitre, $text, $image)
    new callToAction("MMI | Description of the training ", "“MMI IN BRIEF: ACQUIRING AND DEVELOPING MULTIDISCIPLINARY SKILLS
    CONNECTED TO THE WORLD OF THE INTERNET", "The BUT MMI trains you in web professions, from back-end development, to UX Design, through Webmarketing or the production of audiovisual products. This training allows you to acquire sufficient knowledge to enter the professional world or continue your master's studies. BUT MMI has 2600 hours of teaching over three years (about 33 hours of teaching per week) shared between communication, languages, IT, graphic culture, scientific culture and networks.”", "iut.jpg");
    ?>
    <div class="newws-container text-center">
        <h2 class="mt-5">STUDENTS PROJECTS</h2>
        <?php

// new news("Timothé Bureau", "Cv Vidéo", "projet3.png",  "petit titre 2", "texte2", "projet1.png");
     $projets=selectdeuxprojets();

    new news($projets[0]["auteur"], $projets[0]["titre"], $projets[0]["miniature"], $projets[1]["auteur"], $projets[1]["titre"], $projets[1]["miniature"], "projets-en", "Projets en details");

?>
    </div>
    <?php
    new quotes("TESTIMONIALS", "For 25 years, the BUT (formerly DUT) MMI Champs-sur-Marne has trained professionals in the Web field", "I am an engineering student", "Laurence, from the class of 2021", "I chose MMI because it offers a good balance between technical and artistic training. With a wide range of disciplines taught, it also promotes self-discovery (for high school students who are still unsure of their direction): the areas that we prefer, those that we like less, and those that we want to pursue further.\"", "Future director", "Guillaume, class of 2019", "\"When I arrived at DUT MMI, I only had a vague idea of my future. I've always loved cinema and audiovisual but I thought it was a very difficult field to enter. However, thanks to the many film analysis courses and the production of several short films, I transformed this passion into a true vocation. Thanks to the training, I received all the knowledge I needed, and I now see only one future for myself: becoming a director.\"", "UX UI Designer", "Flora, class of 2015", "\"We never get bored, we work on projects that address very diverse problems. Furthermore, being able to work by combining code and business/marketing is really interesting. MMI allows access to this type of job, quickly and professionally.")
    ?>

</div>
<?php
// include "include/footer.php";
new footer();
