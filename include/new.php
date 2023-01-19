<?php
class actu
{
    function __construct($title, $text) //mets les variables qui seront les textes dna sle fichier ($titre, $soustitre)
    {
        $html = '
    <div class="col-md-12 col-lg-4 column mb-5">
    <div class="card gr-3">
        <div class="txt">
            <h1>' . $title . '</h1>
            <p>' . $text . '
            </p>
        </div>
        <div class="ico-card actu3">
            <i class="fa fa-empire"></i>
        </div>
    </div>
</div>';
        echo $html;
    }
}
