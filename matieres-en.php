<?php
include "include/header.php";
include "./include/nav.php";
include "./include/banner.php";
include "./include/matiere-en.php";
include "./include/news-projet.php";
include "include/footer.php";
include "include/new.php";
include "./include/modele.php"

// new banner();

?>

<?php
new header("en", "Subjects")
?>
<header>
    <?php
    new nav("index-en", "", "", "", "active", "", "matieres", "french", "apropos-en", "actu-en", "projets-en", "matieres-en", "equipe-en","News","About","Projects","Subjects","Teachers");
    new banner("Subjects", "Bachelor Multimedia and Internet Professions during 3 years");
    ?>
</header>
<div class="container">
    <h1 class="m-5">All subjects</h1>
    <div>

        <?php
        $matieres=selectmatieres();
        foreach($matieres as $m){
            new matieresEn($m["id"],$m["nom"], $m["img"], $m["texte2"]);
        };
     
        ?>
    </div>
</div>
    <?php

     // new news("Timothé Bureau", "Cv Vidéo", "projet3.png",  "petit titre 2", "texte2", "projet1.png");
          $projets=selectdeuxprojets();
 
         new news($projets[0]["auteur"], $projets[0]["titre"], $projets[0]["miniature"], $projets[1]["auteur"], $projets[1]["titre"], $projets[1]["miniature"], "projets", "Projets en details");
 
     ?>
<?php
new footer();
