<?php
include "include/header.php";
include "./include/nav.php";
include "./include/banner.php";
include "include/projects.php";
include "include/news-projet.php";
include "include/footer.php";
include "./include/modele.php";
// include "include/news.php";
// new banner();

?>

<?php
new header("fr", "projets")
?>
<header>
    <?php
    new nav("index", "", "", "active", "", "", "projets-en", "english", "apropos", "actu", "projets", "matieres", "equipe");
    new banner("Projets étudiants", "Métiers du multimédia et de l’internet en 3 ans");
    ?>
</header>
<div class="container mb-5">
    <h1 class="m-5 ">Projets étudiants</h1>
    <?php
    // $titre, $text, $date, $nomEtudiant, $lienImage, $lienProjet
    // new projects("Titre", "Text", "Date", "", "", "");
    $projets=selectprojets();
    foreach($projets as $p){
        new Projects($p["titre"], '', $p["date"], $p["auteur"], $p["miniature"], $p["texte"]);
    }

    ?>
</div>
<?php
  $projets=selectdeuxprojets();

        new news($projets[0]["auteur"], $projets[0]["titre"], $projets[0]["miniature"], $projets[1]["auteur"], $projets[1]["titre"], $projets[1]["miniature"], "projets", "Projets en details"); ?>
<?php
new footer();
