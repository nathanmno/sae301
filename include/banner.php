<?php
class banner
{
  function __construct($subtitle, $text) //mets les variables qui seront les textes dna sle fichier ($titre, $soustitre)
  {
    $html = '
        <div class="banner">
        <img src="./img/octogon2.png" alt="" class="banner-img" />
        <div class="banner-text">
          <span class="banner-title">MMI</span>
          <span class="banner-subtitle">' . $subtitle . '</span>
          <p>' . $text . '</p>
        </div>
      </div>';
    echo $html;
  }
}
