<?php
class nav //remplir avec le nom de la fonction a appeler
{
  function __construct($link, $active1, $active2, $active3, $active4, $active5, $langue, $drapeau, $pageEn1, $pageEn2, $pageEn3, $pageEn4, $pageEn5,$pageName1,$pageName2,$pageName3,$pageName4,$pageName5) //mets les variables qui seront les textes dna sle fichier ($titre, $soustitre)
  {
    $html = '
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="./' . $link . '.php"><img src="./img/logo.png" alt="logo du BUT MMI Champs"
              class="logo-nav" /></a>
              
         <button class="navbar-toggler" type="button" onclick="this.classList.toggle(\'opened\');this.setAttribute(\'aria-expanded\', this.classList.contains(\'opened\'))" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
           aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"><svg class="navbar-toggler-icon width="100" height="100" viewBox="0 0 100 100">
          <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
          <path class="line line2" d="M 20,50 H 80" />
          <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
        </svg></span>
         </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link ' . $active1 . '" aria-current="page" href="./' . $pageEn1 . '.php">'.$pageName1.'</a>
              <a class="nav-link ' . $active2 . '" href="./' . $pageEn2 . '.php">'.$pageName2.'</a>
              <a class="nav-link ' . $active3 . '" href="./' . $pageEn3 . '.php">'.$pageName3.'</a>
              <a class="nav-link ' . $active4 . '" href="./' . $pageEn4 . '.php">'.$pageName4.'</a>
              <a class="nav-link ' . $active5 . '" href="./' . $pageEn5 . '.php">'.$pageName5.'</a>
            </div>
            <a class="navbar-brand" href="./' . $langue . '.php"><img src="./img/' . $drapeau . '-btn.png"
                alt="button english page version" class="btn-english-nav center" /></a>
          </div>
        </div>
      </nav>
        
        ';
    echo $html;
  }
}
