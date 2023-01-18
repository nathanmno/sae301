<?php
include "./include/nav.php";
include "include/footer.php";
include "./include/callToAction.php";
include "./include/news.php";
// include "include/news.php";
// new banner();

?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <title>BUT MMI CHAMPS | Accueil</title>
</head>

<body>
    <header>
        <?php
        new nav("", "", "", "", "", "");
        ?>
        <div class="container-flex container-banner">
            <img src="./img/octogon.png" alt="" srcset="" class="index-octogon">
            <div class="container-text-header">
                <h1 class="titre-header">BUT MMI</h1>
                <h2 class="sous-titre-header">Champs-sur-marne</h2>
                <h3 class="texte-header">
                    Bachelor Multimedia and Internet Professions during 3 years
                </h3>
                <div class="container-flex all-btn-header">
                    <a href="http://www.dut-mmi-champs.fr/jpo/2022/index.html" class="decoration-none">
                        <h4 class="btn-header">Open Day</h4>
                    </a>
                    <a href="./projets.html" class="decoration-none">
                        <h4 class="btn-header">Students Projects</h4>
                    </a>
                    <a href="#mmiendetails2" class="decoration-none">
                        <h4 class="btn-header">MMI in details</h4>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="chiffre">
            <h4 class="title-chiffres center2">Chiffres de notre formation</h4>
            <div class="container-flex div-chiffres">
                <div>
                    <h4 class="texts-chiffres">ANNÉES D'EXISTANCE</h4>
                    <hr />
                    <p class="chiffres" number="28">0</p>
                </div>
                <div>
                    <h4 class="texts-chiffres">DIPLÔMÉS</h4>
                    <hr />
                    <p class="chiffres" number="1600">0</p>
                </div>
                <div>
                    <h4 class="texts-chiffres">CANDIDATS CHAQUE ANNÉES</h4>
                    <hr />
                    <p class="chiffres" number="2500">0</p>
                </div>
                <div>
                    <h4 class="texts-chiffres">PLACES</h4>
                    <hr />
                    <p class="chiffres" number="56">0</p>
                </div>
            </div>
            <hr />
        </div>
        <?php
        new callToAction("iut.jpg", "MMI | Description de la formation", "", "");
        ?>
    </div>
    <?php
    // include "include/footer.php";
    new footer();
