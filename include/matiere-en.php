<?php
class matieresEn

{
    function __construct($id, $titre, $img, $texte) //mets les variables qui seront les textes dna sle fichier ($titre, $soustitre)
    {
        $html = '
    <div class="accordion w-100 mb-5" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-heading'.$id.'">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse'.$id.'" aria-expanded="true" aria-controls="panelsStayOpen-collapse'.$id.'">
                '.$titre.'
            </button>
        </h2>
        <div id="panelsStayOpen-collapse'.$id.'" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading'.$id.'">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
            <img src="'.$img.'" alt="" class="img-subjects w-md-100" />
           '. $texte.'

            </div>
        </div>
    </div>
    
</div>';
        echo $html;
    }
}
