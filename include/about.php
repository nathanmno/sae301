<?php
class about
{
    function __construct($titre, $contexte, $chefs, $design, $devs, $link, $detail) //mets les variables qui seront les textes dna sle fichier ($titre, $soustitre)
    {
        $html = '
    <h1 class="text-center mt-5">' . $titre . '</h1>
    <p class="text-light">
        ' . $contexte . '

    </p>
    <div class="center2 createurs font-inter">
        <h2 class="job">' . $chefs . '</h2>
        <div class="managers-img justify-content-center">
            <div class="nathan">
                <img src="./img/nathan.jpg" alt="" class="icon" />
                <p class="name">Nathan Meneau</p>

            </div>
            <div class="ryan">
                <img src="./img/ryan.jpg" alt="" class="icon" />
                <p class="name">Ryan</p>

            </div>

        </div>
    </div>
    <div class="center2 createurs font-inter">
        <h2 class="job">' . $design . '</h2>
        <img src="./img/akira.jpg" alt="" class="icon" />
        <p class="name">Akira Valade</p>
    </div>
    <h2 class="job center2 font-inter">' . $devs . '</h2>
    <div class="container-flex container-dev center">
        <div class="center2">
            <img src="./img/moussa.jpg" alt="" class="icon" />
            <p class="name font-inter">Moussa Diakite</p>
        </div>
        <div class="center2">
            <img src="./img/raphael.jpg" alt="" class="icon" />
            <p class="name font-inter">Raphaël TRAN VAN TI</p>
        </div>
    </div>
    <a href="./' . $link . '.php" class="decoration-none">
        <p class="mmi-en-details font-inter">' . $detail . '</p>
    </a>';
        echo $html;
    }
}
