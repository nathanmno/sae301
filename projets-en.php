<?php
include "include/header.php";
include "./include/nav.php";
include "./include/banner.php";
include "include/projects.php";
include "include/news-projet.php";
include "include/footer.php";
// include "include/news.php";
// new banner();

?>

<?php
new header("en", "Projects")
?>
<header>
    <?php
    new nav("index-en", "", "", "active", "", "", "projets", "french", "apropos-en", "actu-en", "projets-en", "matieres-en", "equipe-en");
    new banner("Student Projects", "Bachelor Multimedia and Internet Professions during 3 years");
    ?>
</header>
<div class="container mb-5">
    <h1 class="m-5">Student Projects</h1>
    <?php
    // $titre, $text, $date, $nomEtudiant, $lienImage, $lienProjet
    // new projects("Titre", "Text", "Date", "", "", "");
    new Projects("Galactrip", "", "05/2022", "Amel Chabah", "./img/projet1.png", "https://chabah.butmmi.o2switch.site/resaweb/");
    new Projects("Let there be light", "", "01/2023", "Timothé Bureau", "./img/projet2.jpg", "https://youtu.be/gdu32msarY0");
    new Projects("Motion design HeadMoi", "", "06/2022", "Killian Quelavoine, Anna Hassani, Nell Antona, Amel Chabah, Amézir Messaoud", "./img/projet3.png", "https://chabah.butmmi.o2switch.site/resaweb/");
    new Projects("Infinite Travel", "", "05/2022", "Driss Benadjal", "./img/projet4.png", "https://benadjal.butmmi.o2switch.site/infinitetravel/");
    new Projects("Portrait Chinois", "", "01/2022", "Clara Many", "./img/projet5.png", "https://many.butmmi.o2switch.site/portrait-chinois/portrait-chinois/");
    new Projects("Air Dataviz", "", "10/2022", "Amel Chabah, Ambre Lascoux, Eléa Crunchant", "./img/projet6.png", "https://amelchabah.github.io/airdataviz/");
    new Projects("CV Vidéo", "", "01/2023", "Yanis Choucha", "./img/projet7.png", "https://www.youtube.com/watch?v=K9Figz3U0VQ");
    ?>
</div>
<?php
new news("Amel Chabah", "Resaweb", "projet1.png",  "Timothé Bureau", "Cv Vidéo", "projet2.jpg", "projets", "Projets en détails"); ?>
<?php
new footer();
