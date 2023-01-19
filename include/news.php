<?php
class allnews
{
    function __construct($title, $text, $title2, $text2, $title3, $text3) //mets les variables qui seront les textes dna sle fichier ($titre, $soustitre)
    {
        $html = '
        <div class="h-100">
            <div class="row align-middle">
                <div class="col-md-6 col-lg-4 column">
                    <div class="card gr-1">
                        <div class="txt">
                            <h1>' . $title . '</h1>
                            <p>' . $text . '
                            </p>
                        </div>
                        <div class="ico-card actu1">
                            <i class="fa fa-rebel"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 column">
                    <div class="card gr-2">
                        <div class="txt">
                        <h1>' . $title2 . '</h1>
                        <p>' . $text2 . '
                        </p>
                        </div>
                        <div class="ico-card actu2">
                            <i class="fa fa-codepen"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 column">
                    <div class="card gr-3">
                        <div class="txt">
                        <h1>' . $title3 . '</h1>
                        <p>' . $text3 . '
                        </p>
                        </div>
                        <div class="ico-card actu3">
                            <i class="fa fa-empire"></i>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>';
        echo $html;
    }
}
