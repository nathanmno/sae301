<?php
include "./include/nav.php";
include "./include/banner.php";
include "include/footer.php";
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
    <title>BUT MMI CHAMPS | Actu</title>
</head>

<body>
    <header>
        <?php
        new nav("active", "", "", "", "");
        new banner("A propos");
        ?>
    </header>
    <h1>TITRE DE LA PAGE</h1>
    <p>petit texte</p>
    <div class="container">
        <div class="about-container">
            <h1 class="titre">À PROPOS</h1>
            <p class="contexte">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Exercitationem ad, reiciendis eligendi cum, eaque hic earum ipsa
                accusamus corrupti mollitia sed dolore! Hic necessitatibus eaque
                veniam, magni doloribus fugiat ut? Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Dolorum mollitia itaque sed alias, nobis
                ex culpa tenetur adipisci cupiditate! Eius nemo inventore quod
                consectetur atque natus sint repellat accusamus illum.
            </p>
            <div class="center2 createurs font-inter">
                <h2 class="job">CHEFS DE PROJET</h2>
                <div class="managers-img">
                    <div class="nathan">
                        <img src="./img/nathan.jpg" alt="" class="icon" />
                        <p class="name">Nathan Meneau</p>

                    </div>
                    <div class="ryan">
                        <img src="./img/ryan.jpg" alt="" class="icon" />
                        <p class="name">Ryan</p>

                    </div>

                </div>
            </div>
            <div class="center2 createurs font-inter">
                <h2 class="job">UI DESIGNER</h2>
                <img src="./img/akira.jpg" alt="" class="icon" />
                <p class="name">Akira Valade</p>
            </div>
            <h2 class="job center2 font-inter">DEVELOPPEURS</h2>
            <div class="container-flex container-dev center">
                <div class="center2">
                    <img src="./img/moussa.jpg" alt="" class="icon" />
                    <p class="name font-inter">Moussa Diakite</p>
                </div>
                <div class="center2">
                    <img src="./img/raphael.jpg" alt="" class="icon" />
                    <p class="name font-inter">Raphaël TRAN VAN TI</p>
                </div>
            </div>
        </div>
        <a href="./index.html#mmiendetails" class="decoration-none">
            <p class="mmi-en-details font-inter">MMI en Détails</p>
        </a>
    </div>
    <?php
    new footer();
