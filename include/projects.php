<?php
class projects
{

    function __construct($titre, $text, $date, $nomEtudiant, $lienImage, $lienProjet)
    {
        $html = '
        <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="card card-image rounded shadow" style="background-image: url(' . $lienImage . ');background-size: cover;background-position: center; padding:0;">
                        <div class="text-white shadow text-left d-flex align-items-top rgba-black-strong py-4 px-4 px-md-5 rounded justify-content-between" style="background-color: rgba(0, 0, 0, .25); ">
                            <div>
                                <h3>
                                ' . $date . '
                                </h3>
                                <h2 class="py-3 font-weight-bold">
                                    <strong>' . $titre . '</strong>
                                </h2>
                                <p>
                                ' . $text . '
                                </p>
                            </div>
                            <h3 class="text-end">
                            ' . $nomEtudiant . '
                            </h3>
                        </div>
                        <a href="' . $lienProjet . '" class="position-absolute w-100 lien-projets"></a>
                    </div>
                </div>
            </div>';
        echo $html;
    }
}
