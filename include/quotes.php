<?php
class quotes
{

    function __construct($title, $subtitle, $profession1, $nom1, $avis1, $profession2, $nom2, $avis2, $profession3, $nom3, $avis3)
    {
        $html = '
        <div class="container py-5">
            <h1 class=""text-light>' . $title . '</h1>
            <h2 class="text-light">' . $subtitle . '</h2>
            <div class="row text-center py-5 align-items-center">
                <!-- Pricing Table-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="p-5 rounded-lg shadow">
                        <h1 class="h6 text-white text-uppercase font-weight-bold mb-4">' . $profession1 . '</h1>
                        <h2 class="h1 text-white font-weight-bold">' . $nom1 . '</h2>

                        <div class="custom-separator my-4 mx-auto bg-secondary"></div>
                        <p class="text-white">' . $avis1 . ' 
                        </p>
                    </div>
                </div>
                <!-- END -->

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="p-5 rounded-lg shadow">
                        <h1 class="h6 text-white text-uppercase font-weight-bold mb-4">' . $profession2 . '</h1>
                        <h2 class="h1 text-white font-weight-bold">' . $nom2 . '</h2>

                        <div class="custom-separator my-4 mx-auto bg-secondary"></div>
                        <p class="text-white"> ' . $avis2 . ' 
                        </p>
                    </div>
                </div>
                <!-- END -->

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="p-5 rounded-lg shadow">
                        <h1 class="h6 text-white text-uppercase font-weight-bold mb-4">' . $profession3 . '</h1>
                        <h2 class="h1 text-white font-weight-bold">' . $nom3 . '</h2>

                        <div class="custom-separator my-4 mx-auto bg-secondary"></div>
                        <p class="text-white">' . $avis3 . ' 
                        "</p>
                    </div>
                </div>
                <!-- END -->

            </div>
        </div>';
        echo $html;
    }
}
