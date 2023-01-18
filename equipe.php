<?php
include "./include/nav.php";
include "./include/banner.php";
include "./include/team.php";
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
        new nav("", "", "", "", "active");
        new banner("Professeurs");
        ?>
    </header>
    <h1>TITRE DE LA PAGE</h1>
    <p>petit texte</p>
    <div class="container">
        <?php
        new team();

        ?>
    </div>
    <?php
    new footer();
