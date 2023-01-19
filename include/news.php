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
