<?php
class news
{
    function __construct($titre1, $text1, $image1, $titre2, $text2, $image2, $link, $detail)
    {
        $html = '
        <div class="py-3">
            <div class="row justify-content-center">
            <!-- Item 2 -->
            <div class="col-lg-5 mb-3 mb-lg-0">
                <div class="hover hover-1 text-white rounded"><img src="./img/' . $image1 . '" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                    <h3 class="hover-1-title text-uppercase font-weight-bold mb-0"> ' . $titre1 . '</h3>
                    <p class="hover-1-description font-weight-light mb-0"> ' . $text1 . '</p>
                </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="col-lg-5">
                <div class="hover hover-1 text-white rounded"><img src="./img/' . $image2 . '" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                    <h3 class="hover-1-title text-uppercase font-weight-bold mb-0"> ' . $titre2 . '</h3>
                    <p class="hover-1-description font-weight-light mb-0">' . $text2 . '</p>
                </div>
                </div>
            </div>
            </div>
            <a href="./' . $link . '.php" class="decoration-none">
        <p class="mmi-en-details font-inter">' . $detail . '</p>
    </a>
        </div>';
        echo $html;
    }
}
