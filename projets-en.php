<?php
include "include/header.php";
include "./include/nav.php";
include "./include/banner.php";
include "include/projects.php";
include "include/news-projet.php";
include "include/footer.php";
include "./include/modele.php"
// include "include/news.php";
// new banner();

?>

<?php
new header("en", "Projects")
?>
<header>
    <?php
    new nav("index-en", "", "", "active", "", "", "projets", "french", "apropos-en", "actu-en", "projets-en", "matieres-en", "equipe-en","News","About","Projects","Subjects","Teachers");
    new banner("Student Projects", "Bachelor Multimedia and Internet Professions during 3 years");
    ?>
</header>
<div class="container mb-5">
    <h1 class="m-5">Student Projects</h1>
    <?php
 $projets=selectprojets();
 foreach($projets as $p){
     new Projects($p["titre"], '', $p["date"], $p["auteur"], $p["miniature"], $p["texte"]);
 }
 ?>
</div>

<?php
new footer();
