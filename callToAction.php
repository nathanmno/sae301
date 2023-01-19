<?php
class callToAction
{
  function __construct($titre, $sousTitre, $text, $image) //mets les variables qui seront les textes dna sle fichier ($titre, $soustitre)
  {
    $html = '
        <!--Section: Content-->
        <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">
    
          <!--Grid row-->
          <div class="row">
    
            <!--Grid column-->
            <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">
    
              <img src="./img/' . $image . '" class="img-fluid" alt="">
    
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-lg-6 mb-4 mb-lg-0">
    
              <h3 class="font-weight-bold text-light">' . $titre . '</h3>
    
              <p class="font-weight-bold text-light">' . $sousTitre . '</p>
    
              <p class="text-light">
              ' . $text . '</p>
            </div>
            <!--Grid column-->
    
          </div>
          <!--Grid row-->
    
    
        </section>
        <!--Section: Content-->';
    echo $html;
  }
}
