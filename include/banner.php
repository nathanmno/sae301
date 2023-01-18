<?php
class banner
{
  function __construct($subtitle) //mets les variables qui seront les textes dna sle fichier ($titre, $soustitre)
  {
    $html = '
        <div class="banner">
        <img src="./img/octogon2.png" alt="" class="banner-img" />
        <div class="banner-text">
          <span class="banner-title">MMI</span>
          <span class="banner-subtitle">' . $subtitle . '</span>
          <p>Métiers du multimédia et de l’internet en 3 ans</p>
        </div>
      </div>';
    echo $html;
  }
}
