<?php
include "include/header.php";
include "./include/nav.php";
include "./include/banner.php";
include "include/footer.php";
include "./include/callToAction.php";
include "./include/news.php";
include "./include/news-projet.php";
include "./include/modele.php"

?>

<?php
new header("en", "News")
?>
<header>
    <?php
    new nav("index-en", "", "active", "", "", "", "actu", "french", "apropos-en", "actu-en", "projets-en", "matieres-en", "equipe-en","News","About","Projects","Subjects","Teachers");
    new banner("News", "Bachelor Multimedia and Internet Professions during 3 years ");
    ?>
</header>
<div class="container">
    <h1 class="mb-5">All news</h1>
</div>
<?php
$actualites=selectactualites();
foreach($actualites as $a){
__construct($a["titre"], $a["texte2"], $a["miniature"]);
};
?>
<hr>

<div class="actu-ptojets">
    <?php
    $projets=selectdeuxprojets();

    new news($projets[0]["auteur"], $projets[0]["titre"], $projets[0]["miniature"], $projets[1]["auteur"], $projets[1]["titre"], $projets[1]["miniature"], "projets", "Projets en details");

    ?>
</div>
</div>
<?php
new footer();
