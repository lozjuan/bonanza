<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php @session_start();?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Finca Bonanza</title>
    <meta name="Resource-type" content="Document" />
    <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.fullpage.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            sectionsColor: ['#fff', '#fff', '#fff', '#fff', '#fff'],
            anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
            menu: '#menu',
            verticalCentered: true,
            scrollingSpeed: 300,
            loopHorizontal: true,
            scrollBar: false,
        });
    });
    </script>
</head>

<body>
    <ul id="menu">
        <li data-menuanchor="firstPage" class="active">
            <a id="home" href="#firstPage">
                <img id="home" style="width: 250px;" src="imgs/title.png">
            </a>
        </li>
        <li id="gallery" data-menuanchor="secondPage"><a href="#secondPage">La plantation</a></li>
        <li id="gallery" data-menuanchor="3rdPage"><a href="#3rdPage">Variété et Localisation</a></li>
        <li id="gallery" data-menuanchor="4thpage"><a href="#4thpage">L'avenir</a></li>
        <li id="gallery" data-menuanchor="lastPage"><a href="#lastPage">La Production</a></li>
    </ul>
    <div id="fullpage">
        <div class="section" data-slides-home='[imgs/img1.jpg, imgs/img3.jpg, imgs/img0.jpg]' id="section0">
            <img id="logo-home" data-src="imgs/logo_singe.png">
        </div>
        <div class="section" id="section1">
            <div class="slide active" id="slide1">
                <img id="landscape" data-src="imgs/img6.png" />
            </div>
            <div class="slide" id="slide2">
                <img id="landscape" data-src="imgs/dyp1.png" />
            </div>
            <div class="slide" id="slide3">
                <img id="landscape" data-src="imgs/img5.jpg" />
            </div>
            <div class="slide" id="slide4">
                <img id="landscape" data-src="imgs/img7.png" />
            </div>
            <div class="slide" id="slide4">
                <img id="landscape" data-src="imgs/img8.png" />
            </div>
            <div class="slide" id="slide4">
                <img id="landscape" data-src="imgs/img9.png" />
            </div>
        </div>
        <div class="section" id="section2">
            <div class="slide" id="slide1">
                <img id="landscape" data-src="imgs/variete.jpg" />
            </div>
            <div class="slide" id="slide2">
                <img id="landscape" data-src="imgs/localisation.png" />
            </div>
        </div>
        <div class="section" id="section3">
            <div class="slide active" id="slide1">
                <img id="landscape" data-src="imgs/img11.png" />
            </div>
            <div class="slide" id="slide2">
                <img id="landscape" data-src="imgs/img10.png" />
            </div>
            <div class="slide" id="slide3">
                <video id="landscape" loop muted controls="false" data-autoplay>
                    <source data-src="imgs/vid.mp4" type="video/mp4" />
                </video>
            </div>
            <div class="slide" id="slide4">
                <img id="landscape" data-src="imgs/img12.gif" />
            </div>
            <div class="slide" id="slide5">
                <img id="landscape" data-src="imgs/img13.png" />
            </div>
            <div class="slide" id="slide6">
                <img id="landscape" data-src="imgs/img14.png" />
            </div>
            <div class="slide" id="slide7">
                <img id="landscape" data-src="imgs/img15.png" />
            </div>
            <div class="slide" id="slide8">
                <img id="landscape" data-src="imgs/img16.png" />
            </div>
        </div>
        <div class="section" id="section4">
            <div class="slide active" id="slide1">
                <video id="landscape" loop muted controls="false" data-autoplay>
                    <source data-src="imgs/vid1.MP4" type="video/mp4" />
                </video>
            </div>
            <div class="slide" id="slide2">
                <img id="landscape" data-src="imgs/img17.png" />
            </div>
            <div class="slide" id="slide3">
                <img id="landscape" data-src="imgs/img18.png" />
            </div>
        </div>
    </div>
    <script type="text/javascript">
    (function($) {
        'use strict';
        var $slides = $('[data-slides-home]');
        var images = $slides.data('slides-home').replace("[", "").replace("]", "").split(",");
        var count = images.length;
        var slideshow = function() {
            if ($(window).width()> 768){
                $slides
                .css('background-image', 'url("' + images[Math.floor(Math.random() * count)] + '")')
                .show(0, function() {
                    setTimeout(slideshow, 3000);
                });
            } else {
                $slides
                .css('background-image', 'url("imgs/img3.jpg")').show()
            }
            
        };
        slideshow();
    }(jQuery));
    </script>
</body>

</html>