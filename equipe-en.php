<?php
include "include/header.php";
include "./include/nav.php";
include "./include/banner.php";
include "./include/team.php";
include "include/footer.php";
include "./include/modele.php"
// include "include/news.php";
// new banner();

?>

<?php
new header("en", "Teachers")
?>
<header>
    <?php
    new nav("index-en", "", "", "", "", "active", "equipe", "french", "apropos-en", "actu-en", "projets-en", "matieres-en", "equipe-en");
    new banner("Teachers", "Bachelor Multimedia and Internet Professions during 3 years");
    ?>
</header>
<div class="equipe-container">

    <div class="wrapper">
        <div class="container">
            <h1 class="m-5">Teachers</h1>
            <div class="row justify-content-center">
                <?php
                 
                 $profs=selectprofs();
                 foreach($profs as $p){
                     new team($p["prenom"]." ".$p["nom"], $p["img"],$p["description2"]);
                 }
                
                ?>
            </div>
            

        </div>
    </div>
</div>
<?php
new footer();
