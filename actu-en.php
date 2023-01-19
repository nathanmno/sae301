<?php
include "include/header.php";
include "./include/nav.php";
include "./include/banner.php";
include "include/footer.php";
include "./include/callToAction.php";
include "./include/news.php";
include "./include/news-projet.php";

?>

<?php
new header("en", "News")
?>
<header>
    <?php
    new nav("index-en", "", "active", "", "", "", "actu", "french", "apropos-en", "actu-en", "projets-en", "matieres-en", "equipe-en");
    new banner("News", "Bachelor Multimedia and Internet Professions during 3 years ");
    ?>
</header>
<h1 class="mb-5">All news</h1>

<div class="actu-container">
    <?php
    new allnews("The night </br>
    of development", "During the month of December 2022, some of BUT MMI students participated in the night of development 2022. The night of development is a programming marathon which consists of designing a digital product in a collaborative way in a limited time. For this edition, the challenge was to create, in 4 p.m., a site for the prevention of sexually transmitted diseases. To carry out this major project, they were a team of 17 students, each with their specialties. In order to optimize time, we have divided the team into 5 poles: a development pole, a research pole, a writing pole, a design pole and finally a video pole. The site was to include: a game, a section with information on different diseases, a section on the means of protecting oneself against these diseases and a section on what to do in the event of contamination.
    BUT MMI Champs students finished first national for Discord bot and second national for cleanest code.
    ", "Departure in Canada </br>
    MMI2 2023", "Every second year some MMI spends a semester in Canada. This year the tradition continues. At the end of December, two students have already gone to their place of work for the new semester. Here is a photo taken by one of the two MMIs already present in Canada. We wish them a good semester and we hope they will like their new places of life.", "Trip in London</br>for the MMI2", "MMI2 traveled to London this year for about 1 week. Before this covid epidemic, the second-year trip was a tradition. Thanks to the improvement of this epidemic, the trip could take place. Always appreciated by both the accompanying teachers and the students, these trips have been a success for years.")
    ?>

</div>


<div class="actu-ptojets">
    <?php
    new news("Amel Chabah", "Resaweb", "projet1.png",  "Timothé Bureau", "Cv Vidéo", "projet2.jpg", "projets-en", "projects in detail");
    // new news("Timothé Bureau", "Cv Vidéo", "projet3.png",  "petit titre 2", "texte2", "projet1.png");

    ?>
</div>
</div>
<?php
new footer();
