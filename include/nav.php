<?php
class nav //remplir avec le nom de la fonction a appeler
{
  function __construct($active1, $active2, $active3, $active4, $active5) //mets les variables qui seront les textes dna sle fichier ($titre, $soustitre)
  {
    $html = '
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.php"><img src="./img/logo.png" alt="logo du BUT MMI Champs"
              class="logo-nav" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link ' . $active1 . '" aria-current="page" href="./apropos.php">À Propos</a>
              <a class="nav-link ' . $active2 . '" href="./actu.php">Actualités</a>
              <a class="nav-link ' . $active3 . '" href="./projets.php">Projets</a>
              <a class="nav-link ' . $active4 . '" href="./matieres.php">Matières</a>
              <a class="nav-link ' . $active5 . '" href="./equipe.php">Equipe Pédagogique</a>
            </div>
            <a class="navbar-brand" href="./index-en.php"><img src="./img/english-btn.png"
                alt="button english page version" class="btn-english-nav center" /></a>
          </div>
        </div>
      </nav>
        
        ';
    echo $html;
  }
}
