<?php
class team
{
    function __construct($nom, $image, $matière)
    {
        $html = '
                <div class="col-md-5 col-lg-3">
                    <div class="card mx-30">
                        <img src="' . $image . '" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                            ' . $nom . '</h5>
                            <h6>
                            ' . $matière . '</h6>
                        </div>
                    </div>
                </div>';
        echo $html;
    }
}
