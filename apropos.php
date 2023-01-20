<?php
include "include/header.php";
include "./include/nav.php";
include "./include/banner.php";
include "./include/about.php";
include "include/footer.php";

// include "include/news.php";
// new banner();

?>

<?php
new header("fr", "A propos")
?>
<header>
    <?php
    new nav("index", "active", "", "", "", "", "apropos-en", "french", "apropos", "actu", "projets", "matieres", "equipe","Actualités","À Propos","Projets","Matières","Equipe Pédagogique");
    new banner("A propos","Métiers du multimédia et de l’internet en 3 ans");
    ?>
</header>
<div class="container">
    <?php new about("Création de ce site", "Notre site Web a été créé par une équipe de quatre étudiants de l'école Gustave Eiffel de Champs sur marne. Nous sommes tous enthousiastes à l'idée de partager notre passion et notre savoir-faire en matière de technologies et de développement avec nos pairs. 

Sur ce site, vous trouverez des projets réalisés par des étudiants, des informations et des actualités scolaires, ainsi que des ressources et des informations sur la formation. Nous espérons que ce site sera utile pour les étudiants et les professionnels qui cherchent à rester à la pointe de la technologie.

Les quatre étudiants qui sont à l'origine du projet sont listés ci-dessous.", "CHEFS DE PROJET", "UI DESIGNER", "DEVELOPPEURS", "index", "MMI en Détails"); ?>


</div>
<?php
new footer();
