<?php
class team
{
    function __construct()
    {
        $html = '
        <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card mx-30">
                        <img src="./img/gaelle.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                Julia Thorn</h5>
                            <h6>
                                Junior Developer</h6>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse amet repellat, eaque
                                aliquid similique eius alias facilis quisquam, ipsa dolor.</p>
                            <div class="socials">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mx-30">
                        <img src="./img/anne.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                Martha David</h5>
                            <h6>
                                UI / UX Designer</h6>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse amet repellat, eaque
                                aliquid similique eius alias facilis quisquam, ipsa dolor.</p>
                            <div class="socials">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mx-30">
                        <img src="./img/eppstein.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                Laura Chedd</h5>
                            <h6>
                                Full-Stack Developer</h6>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse amet repellat, eaque
                                aliquid similique eius alias facilis quisquam, ipsa dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mx-30">
                        <img src="./img/alexandre.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                Laura Chedd</h5>
                            <h6>
                                Full-Stack Developer</h6>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse amet repellat, eaque
                                aliquid similique eius alias facilis quisquam, ipsa dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mx-30">
                        <img src="./img/gambette.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                Laura Chedd</h5>
                            <h6>
                                Full-Stack Developer</h6>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse amet repellat, eaque
                                aliquid similique eius alias facilis quisquam, ipsa dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mx-30">
                        <img src="./img/odile.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                Laura Chedd</h5>
                            <h6>
                                Full-Stack Developer</h6>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse amet repellat, eaque
                                aliquid similique eius alias facilis quisquam, ipsa dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mx-30">
                        <img src="./img/berthet.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                Laura Chedd</h5>
                            <h6>
                                Full-Stack Developer</h6>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse amet repellat, eaque
                                aliquid similique eius alias facilis quisquam, ipsa dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mx-30">
                        <img src="./img/herve.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                Laura Chedd</h5>
                            <h6>
                                Full-Stack Developer</h6>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse amet repellat, eaque
                                aliquid similique eius alias facilis quisquam, ipsa dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mx-30">
                        <img src="./img/poisson.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                Laura Chedd</h5>
                            <h6>
                                Full-Stack Developer</h6>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse amet repellat, eaque
                                aliquid similique eius alias facilis quisquam, ipsa dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mx-30">
                        <img src="./img/lea.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                Laura Chedd</h5>
                            <h6>
                                Full-Stack Developer</h6>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse amet repellat, eaque
                                aliquid similique eius alias facilis quisquam, ipsa dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mx-30">
                        <img src="./img/lahcen.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                Laura Chedd</h5>
                            <h6>
                                Full-Stack Developer</h6>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse amet repellat, eaque
                                aliquid similique eius alias facilis quisquam, ipsa dolor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
        echo $html;
    }
}
