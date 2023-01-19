<?php
class footer
{
  function __construct() //mets les variables qui seront les textes dna sle fichier ($titre, $soustitre)
  {
    $html = '
    <footer class="text-center text-lg-start text-white" style="background-color: #242424">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              IUT ADDRESS
            </h6>
            <p>
              2 rue Albert Einstein,
              77420 Champs-sur-marne
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">CONTACT MMI</h6>
            <p>
              <a class="text-white">01.60.95.85.90 </a>
            </p>
            <p>
              <a class="text-white">mmi-dir.iut@univ-eiffel.f</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              TRANSPORTS
            </h6>
            <p>
              <a class="text-white"> RER A: Station Noisy-Champs </a>
            </p>
            <p>
              <a class="text-white">Bus lignes 212 et 312 : Arrêt Nobel </a>
            </p>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-3">

      <!-- Section: Copyright -->
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <!-- Copyright -->
            <div class="p-3">
            © 2021 - BUT METIERS DU MULTIMEDIA ET DE L\'INTERNET, CHAMPS-SUR-MARNE
            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">

          <!-- Instagram -->
          <a href="https://www.instagram.com/mmi_champs/" class="btn  btn-floating m-1" role="button"><img src="./img/insta.png" alt="" srcset=""></i></a>

            <!-- Twitter -->
            <a href="https://twitter.com/MMI_Champs/with_replies?lang=en" class="btn  btn-floating m-1" role="button"><img src="./img/twitter.png" alt="" srcset=""></a>

          </div>
          <!-- Grid column -->
        </div>
      </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script type="text/javascript" src="index.js"></script>
  </body>';
    echo $html;
  }
}
