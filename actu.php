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
new header("fr", "Actualités")
?>
<header>
    <?php
    new nav("index", "", "active", "", "", "", "actu-en", "english", "apropos", "actu", "projets", "matieres", "equipe");
    new banner("Actualités", "Métiers du multimédia et de l’internet en 3 ans");
    ?>
</header>
<h1 class="mb-5">Toutes les actualités</h1>

<div class="actu-container">
    <?php
    new allnews("La Nuit </br>
    Du Dév", "Au cours du mois de décembre 2022, une partie des étudiants du BUT MMI, ont participé à la Nuit de l’info 2022. La Nuit de l’info est un marathon de programmation qui consiste à concevoir un produit digital de manière collaborative dans un temps limité. Pour cette édition, le challenge était de réaliser en 16h, un site de prévention sur les maladies sexuellement transmissibles. Pour réaliser ce projet de taille, nous étions une équipe de 17 étudiants avec chacun nos spécialités. Afin d’optimiser le temps, nous avons divisé l’équipe en 5 pôles : un pôle développement, un pôle recherche, un pôle écriture, un pôle design et enfin un pôle vidéo.

    Le site devait comprendre: un jeu, une rubrique comportant des informations sur différentes maladies, une rubrique sur les moyens de se protéger contre ces maladies et une sur que faire en cas de contamination.

    Les étudiants du BUT MMI Champs ont terminé premier national pour le bot Discord et deuxième national pour le code le plus propre.", "Départ au Canada </br>
    MMI2 2023", "Tous les ans des MMI deuxième année passe un semestre au Canada. Cette année la tradition se perpétue. Fin décembre, deux étudiants se sont déjà rendus sur leur lieu de travail pour le nouveau semestre. Voici une photo prise par un des deux MMI déjà présent au Canada. Ont leur souhaite un bon semestre et on espère qu'ils vont aimer leurs nouveaux lieux de vie.", "Voyage à Londres</br>pour le MMI2", "Les MMI2 se sont rendus cette année à Londres pendant environ 1 semaine. Avant cette épidémie de covid le voyage en deuxième année était une tradition. Grâce à l’amélioration de cette épidémie le voyage à pu avoir lieu. Toujours apprécié tant par les professeurs accompagnateurs que par les élèves, ces voyages sont une réussite depuis des années.")
    ?>

</div>


<div class="actu-ptojets">
    <?php
    new news("Amel Chabah", "Resaweb", "projet1.png",  "Timothé Bureau", "Cv Vidéo", "projet2.jpg", "projets", "Projets en détails");
    // new news("Timothé Bureau", "Cv Vidéo", "projet3.png",  "petit titre 2", "texte2", "projet1.png");

    ?>
</div>
</div>
<?php
new footer();
