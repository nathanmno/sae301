<?php
class matieres

{
    function __construct() //mets les variables qui seront les textes dna sle fichier ($titre, $soustitre)
    {
        $html = '
    <div class="accordion w-100 mb-5" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                Intégration
            </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
            <img src="./img/integration.jpg" alt="image matière integration" class="img-subjects w-md-100" />
            Cette matière enseignée par Mme Charpentier va vous apprendre à coder les langages HTML et CSS qui sont essentielles pour l’intégration web

            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                Développement Back
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/back.avif" alt="image matière développement back" class="img-subjects w-md-100" />
                Cette matière enseignée par Mr Eppstein va vous apprendre à coder les langages PHP et MYSQL essentielles pour créer un site web avec une base de données.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                Expression, communication et réthorique
            </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/communication.avif" alt="image matière communication" class="img-subjects w-md-100" />
                Cette matière enseignée par Mme Niel va vous apprendre à mieux écrire et parler le français tout en faisant un petit peu de communication.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                Représentation et traitement de l’information
            </button>
        </h2>
        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/rti.avif" alt="image matière rti" class="img-subjects w-md-100" />
                Cette matière enseignée par Mme Bister va vous apprendre à créer des contenus de qualités et les adapter aux produits multimédias.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                Culture Numérique
            </button>
        </h2>
        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/culture-numerique.avif" alt="image matière culture numérique" class="img-subjects w-md-100" />
                Cette matière enseignée par Mr Benbouzid va vous apprendre le monde du numérique dans toute sa splendeur en améliorant votre culture de celui-ci.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                Anglais
            </button>
        </h2>
        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/anglais.jpg" alt="image matière anglais" class="img-subjects w-md-100" />
                Cette matière enseignée par Mr Leroy va consolider et améliorer votre anglais, langue indispensable lorsque l’on travaille dans le monde de l’internet et du multimédia.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
            UX design
            </button>
        </h2>
        <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/ux-design.avif" alt="image matière ux design" class="img-subjects w-md-100" />
                Cette matière enseignée par Mme Bosco va vous apprendre comment comprendre l’utilisateur et ses besoins et ainsi créer un produit multimédia en fonction des ces critères.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingHeight">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseHeight" aria-expanded="false" aria-controls="panelsStayOpen-collapseHeight">
            Développement Front
            </button>
        </h2>
        <div id="panelsStayOpen-collapseHeight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingHeight">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/dev-front.jpg" alt="image matière développement front" class="img-subjects w-md-100" />
                Cette matière enseignée par Mr Gambette va vous apprendre le language Javascript très utile lorsqu’il est utilisé avec HTML et CSS.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingNine">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
            Ecriture multimédia et narration
            </button>
        </h2>
        <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingNine">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/emn.jpg" alt="image matière ecriture multimédia et narration" class="img-subjects w-md-100" />
                Cette matière enseignée par Mr Chabane va vous servir à écrire en fonction des différents supports de communication.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false" aria-controls="panelsStayOpen-collapseTen">
            Culture Artistique
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTen">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/cult-art.avif" alt="image matière culture artistique" class="img-subjects w-md-100" />
                Cette matière enseignée par Mr Houziaux va vous servir à améliorer votre culture artistique.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingEleven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEleven" aria-expanded="false" aria-controls="panelsStayOpen-collapseEleven">
            Gestion de Projet
            </button>
        </h2>
        <div id="panelsStayOpen-collapseEleven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEleven">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/gest-pro.jpg" alt="image matière gestion de projet" class="img-subjects w-md-100" />
                Cette matière enseignée par Mr Lo va vous apprendre à savoir s’organiser sur un projet de manière intelligente.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwelve">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwelve" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwelve">
            Hébergement
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTwelve" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwelve">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/hebergement.avif" alt="image matière hébergement" class="img-subjects w-md-100" />
                Cette matière enseignée par Mr Berthet va vous apprendre à utiliser les commandes des serveurs existants.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingThirteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThirteen" aria-expanded="false" aria-controls="panelsStayOpen-collapseThirteen">
            PPP
            </button>
        </h2>
        <div id="panelsStayOpen-collapseThirteen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThirteen">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/ppp.jpg" alt="image matière PPP" class="img-subjects w-md-100" />
                Cette matière enseignée par Mme Niel va vous permettre d’être accompagnés et aidé dans les étapes de votre projet professionnel.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFourteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFourteen" aria-expanded="false" aria-controls="panelsStayOpen-collapseFourteen">
            Stratégie de communication
            </button>
        </h2>
        <div id="panelsStayOpen-collapseFourteen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFourteen">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/strat-comm.avif" alt="image matière stratégie de communication" class="img-subjects w-md-100" />
                Cette matière enseignée par Mme Jaoued va vous permettre de comprendre comment mettre en valeur votre produits multimédia face aux clients en apprenant le marketing.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFifteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFifteen" aria-expanded="false" aria-controls="panelsStayOpen-collapseFifteen">
            Audiovisuel et Motion Design
            </button>
        </h2>
        <div id="panelsStayOpen-collapseFifteen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFifteen">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/audio-motion.avif" alt="image matière audiovisuel et motion design" class="img-subjects w-md-100" />
                Cette matière enseignée par Mme Tasso et Mr Soussi va vous apprendre à produire des contenus audiovisuel en prenant notamment les outils audiovisuels en main.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingSixteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSixteen" aria-expanded="false" aria-controls="panelsStayOpen-collapseSixteen">
            Production Graphique
            </button>
        </h2>
        <div id="panelsStayOpen-collapseSixteen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSixteen">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/prod-graph.jpg" alt="image matière production graphique" class="img-subjects w-md-100" />
                Cette matière enseignée par Mr Poisson va vous apprendre le graphisme grâce notamment aux outils de la suite Adobe.
            </div>
        </div>
    </div>
</div>';
        echo $html;
    }
}
