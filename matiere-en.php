<?php
class matieresEn

{
    function __construct() //mets les variables qui seront les textes dna sle fichier ($titre, $soustitre)
    {
        $html = '
    <div class="accordion w-100 mb-5" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                Integration
            </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
            <img src="./img/integration.jpg" alt="image matière integration" class="img-subjects w-md-100" />
            This subject teach by Ms. Charpentier will teach you how to code the HTML and CSS languages which are essential for web integration

            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
            Back development
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/back.avif" alt="image matière développement back" class="img-subjects w-md-100" />
                This subject taught by Mr Eppstein will teach you how to code the essential PHP and MYSQL languages to create a website with a database.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
            Expression, communication and rhetoric
            </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/communication.avif" alt="image matière communication" class="img-subjects w-md-100" />
                This subject taught by Mrs. Niel will teach you to write and speak French better while doing a little bit of communication.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
            Representation and traitement of information
            </button>
        </h2>
        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/rti.avif" alt="image matière rti" class="img-subjects w-md-100" />
                This subject taught by Ms. Bister will teach you how to create quality content and adapt it to multimedia products.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
            Digital Culture
            </button>
        </h2>
        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/culture-numerique.avif" alt="image matière culture numérique" class="img-subjects w-md-100" />
                This subject taught by Mr Benbouzid will teach you the digital world in all its splendor by improving your culture of it.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                English
            </button>
        </h2>
        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/anglais.jpg" alt="image matière anglais" class="img-subjects w-md-100" />
                This subject taught by Mr Leroy will consolidate and improve your English, an essential language when working in the world of the Internet and multimedia.
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
                This subject taught by Ms. Bosco will teach you how to understand the user and his needs and create a multimedia product according to these criteria.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingHeight">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseHeight" aria-expanded="false" aria-controls="panelsStayOpen-collapseHeight">
            Front development
            </button>
        </h2>
        <div id="panelsStayOpen-collapseHeight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingHeight">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/dev-front.jpg" alt="image matière développement front" class="img-subjects w-md-100" />
                This subject taught by Mr Gambette will teach you the very useful Javascript language when used with HTML and CSS.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingNine">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
            Multimedia writing and storytelling
            </button>
        </h2>
        <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingNine">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/emn.jpg" alt="image matière ecriture multimédia et narration" class="img-subjects w-md-100" />
                This subject taught by Mr Chabane will help you to write according to the different communication media.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false" aria-controls="panelsStayOpen-collapseTen">
            Artistic culture
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTen">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/cult-art.avif" alt="image matière culture artistique" class="img-subjects w-md-100" />
                This subject taught by Mr Houziaux will help you improve your artistic culture.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingEleven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEleven" aria-expanded="false" aria-controls="panelsStayOpen-collapseEleven">
            Project management
            </button>
        </h2>
        <div id="panelsStayOpen-collapseEleven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEleven">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/gest-pro.jpg" alt="image matière gestion de projet" class="img-subjects w-md-100" />
                This subject taught by Mr Lo will teach you how to organize yourself on a project in an intelligent way.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwelve">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwelve" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwelve">
            Web hosting
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTwelve" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwelve">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/hebergement.avif" alt="image matière hébergement" class="img-subjects w-md-100" />
                This subject taught by Mr Berthet will teach you how to use the commands of existing servers.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingThirteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThirteen" aria-expanded="false" aria-controls="panelsStayOpen-collapseThirteen">
            Personalized professional project
            </button>
        </h2>
        <div id="panelsStayOpen-collapseThirteen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThirteen">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/ppp.jpg" alt="image matière PPP" class="img-subjects w-md-100" />
                This subject taught by Mrs. Niel will allow you to be accompanied and helped in the stages of your professional project.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFourteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFourteen" aria-expanded="false" aria-controls="panelsStayOpen-collapseFourteen">
            Strategie of communication
            </button>
        </h2>
        <div id="panelsStayOpen-collapseFourteen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFourteen">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/strat-comm.avif" alt="image matière stratégie de communication" class="img-subjects w-md-100" />
                This subject taught by Ms. Jaoued will allow you to understand how to highlight your multimedia products to customers by learning marketing.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFifteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFifteen" aria-expanded="false" aria-controls="panelsStayOpen-collapseFifteen">
            Audiovisual et Motion Design
            </button>
        </h2>
        <div id="panelsStayOpen-collapseFifteen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFifteen">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/audio-motion.avif" alt="image matière audiovisuel et motion design" class="img-subjects w-md-100" />
                This subject taught by Mrs. Tasso and Mr. Soussi will teach you how to produce audiovisual content by taking audiovisual tools in hand.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingSixteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSixteen" aria-expanded="false" aria-controls="panelsStayOpen-collapseSixteen">
            Graphic Production
            </button>
        </h2>
        <div id="panelsStayOpen-collapseSixteen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSixteen">
            <div class="accordion-body d-flex flex-lg-row flex-column gap-3">
                <img src="./img/prod-graph.jpg" alt="image matière production graphique" class="img-subjects w-md-100" />
                This subject taught by Mr Poisson will teach you graphic design thanks in particular to the tools of the Adobe suite
            </div>
        </div>
    </div>
</div>';
        echo $html;
    }
}
