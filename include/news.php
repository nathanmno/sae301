<?php
class allnews
{

    function __construct($title, $text, $image)
    {
        $html = '<div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex" style="background-image: url(\'' . $image . '\');background-size: cover;
            background-position: center center;"></div>
            <a href="actu.php" class="position-absolute w-100 lien-projets"></a>
    
            <!-- The content half -->
            <div class="col-md-6" style="background-color: black;">
                <div class="d-flex align-items-center py-5">
    
                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-12 mx-2">
                                <h2 class="display-4"> ' . $title . '</h2>
                                <p class="text-light mb-4">' . $text . '</p>
                            </div>
                        </div>
                    </div><!-- End -->
    
                </div>
            </div><!-- End -->
    
        </div>
    </div>';
        echo $html;
    }
}
function __construct($title, $text, $image)
{
    $html = '<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex" style="background-image: url(\'' . $image . '\');background-size: cover;
        background-position: center center;"></div>
        <a href="actu.php" class="position-absolute w-100 lien-projets"></a>

        <!-- The content half -->
        <div class="col-md-6" style="background-color: black;">
            <div class="d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-12 mx-2">
                            <h2 class="display-4"> ' . $title . '</h2>
                            <p class="text-light mb-4">' . $text . '</p>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>';
    echo $html;
}

function numbers($annee, $diplomes, $candidatures, $places){
    $html="<div class='index-container'>
    <div class='chiffre'>
        <h4 class='title-chiffres center2'>Chiffres de notre formation</h4>
        <div class='container-flex div-chiffres'>
            <div>
                <h4 class='texts-chiffres'>ANNÉES D'EXISTANCE</h4>
                <hr />
                <p class='chiffres' number='$annee'>0</p>
            </div>
            <div>
                <h4 class='texts-chiffres'>DIPLÔMÉS</h4>
                <hr />
                <p class='chiffres' number='$diplomes'>0</p>
            </div>
            <div>
                <h4 class='texts-chiffres'>CANDIDATS CHAQUE ANNÉES</h4>
                <hr />
                <p class='chiffres' number='$candidatures'>0</p>
            </div>
            <div>
                <h4 class='texts-chiffres'>PLACES</h4>
                <hr />
                <p class='chiffres' number='$places'>0</p>
            </div>
        </div>
        <hr />
    </div>";
    echo $html;
}
function numbersen($annee, $diplomes, $candidatures, $places){

    $html="<div class='index-container'>
    <div class='chiffre'>
        <h4 class='title-chiffres center2'>FIGURES OF OUR FORMATION</h4>
        <div class='container-flex div-chiffres'>
            <div>
                <h4 class='texts-chiffres'>YEARS OF EXISTENCE</h4>
                <hr />
                <p class='chiffres' number='$annee'>0</p>
            </div>
            <div>
                <h4 class='texts-chiffres'>GRADUATED </h4>
                <hr />
                <p class='chiffres' number='$diplomes'>0</p>
            </div>
            <div>
                <h4 class='texts-chiffres'>CANDIDATES EVERY YEARS</h4>
                <hr />
                <p class='chiffres' number='$candidatures'>0</p>
            </div>
            <div>
                <h4 class='texts-chiffres'>PLACES</h4>
                <hr />
                <p class='chiffres' number='$places'>0</p>
            </div>
        </div>
        <hr />
    </div>";
    echo($html);
}
