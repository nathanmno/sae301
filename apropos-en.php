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
new header("en", "About")
?>
<header>
    <?php
    new nav("index-en", "active", "", "", "", "", "apropos", "french", "apropos-en", "actu-en", "projets-en", "matieres-en", "equipe-en","News","About","Projects","Subjects","Teachers");
    new banner("About", "Bachelor Multimedia and Internet Professions during 3 years");
    ?>
</header>
<div class="container">
    <?php new about("Creation of this website", "Our website was created by a team of four students from Gustave Eiffel school in Champs sur marne. We are all enthusiastic about sharing our passion and know-how in technology and development with our peers. 

On this site, you will find student projects, school news and information, as well as resources and training information. We hope this site will be useful for students and professionals looking to stay on the cutting edge of technology.

The four students behind the project are listed below.", "PROJECT LEADERS", "UI DESIGNER", "DEVELOPERS", "index-en", "MMI in Details"); ?>


</div>
<?php
new footer();
