<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php @session_start();?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Finca Bonanza</title>
    <meta name="Resource-type" content="Document"/>
    <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.fullpage.min.js"></script>
    <script type="text/javascript" src="js/jquery.mousewheel.pack.js"></script>
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
    <link rel="stylesheet" href="css/jquery.fancybox-buttons.css" type="text/css" media="screen" />
    <script type="text/javascript" src="js/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-media.js"></script>
    <link rel="stylesheet" href="css/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
    <script type="text/javascript" src="js/jquery.fancybox-thumbs.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            sectionsColor: ['#fff', '#fff', '#fff', '#fff', '#fff'],
            anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
            menu: '#menu',
            verticalCentered: true,
            scrollingSpeed: 800,
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
                <a class="fancybox" rel="gallery" href="imgs/img6.png">
                    <img id="landscape" data-src="imgs/img6.png" />
                </a>
            </div>
            <div class="slide" id="slide2">
                <a class="fancybox" rel="gallery" href="imgs/dyp1.png">
                    <img id="landscape" data-src="imgs/dyp1.png" />
                </a>
            </div>
            <div class="slide" id="slide3">
                 <a class="fancybox" rel="gallery" href="imgs/img5.jpg">
                    <img id="landscape" data-src="imgs/img5.jpg" />
                </a>
            </div>
            <div class="slide" id="slide4">
                <a class="fancybox" rel="gallery" href="imgs/img7.png">
                    <img id="landscape" data-src="imgs/img7.png" />
                </a>
            </div>
            <div class="slide" id="slide4">
                <a class="fancybox" rel="gallery" href="imgs/img8.png">
                    <img id="landscape" data-src="imgs/img8.png" />
                </a>
            </div>
            <div class="slide" id="slide5">
                <a class="fancybox" rel="gallery" href="imgs/img9.png">
                    <img id="landscape" data-src="imgs/img9.png" />
                </a>
            </div>
        </div>
        <div class="section" id="section2">
            <div class="slide" id="slide1">
                <a class="fancybox" rel="gallery1" href="imgs/variete.jpg">
                    <img id="landscape" data-src="imgs/variete.jpg" />
                </a>
            </div>
            <div class="slide" id="slide2">
                <a class="fancybox" rel="gallery1" href="imgs/localisation.png">
                    <img id="landscape" data-src="imgs/localisation.png" />
                </a>
            </div>
        </div>
        <div class="section" id="section3">
            <div class="slide active" id="slide1">
                <a class="fancybox" rel="gallery2" href="imgs/img11.png">
                    <img id="landscape" data-src="imgs/img11.png" />
                </a>
            </div>
            <div class="slide" id="slide2">
                <a class="fancybox" rel="gallery2" href="imgs/img10.png">
                    <img id="landscape" data-src="imgs/img10.png" />
                </a>
            </div>
            <div class="slide" id="slide3">
                <a class="fancybox" data-fancybox-type="iframe" rel="gallery2" href="imgs/vid.mp4">
                    <video id="landscape" loop muted controls="false" data-autoplay>
                        <source data-src="imgs/vid.mp4" type="video/mp4" />    
                    </video>
                </a>
            </div>
            <div class="slide" id="slide4">
                <a class="fancybox" rel="gallery2" href="imgs/img12.gif">
                    <img id="landscape" data-src="imgs/img12.gif" />
                </a>
            </div>
            <div class="slide" id="slide5">
                <a class="fancybox" rel="gallery2" href="imgs/img13.png">
                    <img id="landscape" data-src="imgs/img13.png" />
                </a>
            </div>
            <div class="slide" id="slide6">
                <a class="fancybox" rel="gallery2" href="imgs/img14.png">
                    <img id="landscape" data-src="imgs/img14.png" />
                </a>
            </div>
            <div class="slide" id="slide7">
                <a class="fancybox" rel="gallery2" href="imgs/img15.png">
                    <img id="landscape" data-src="imgs/img15.png" />
                </a>
            </div>
            <div class="slide" id="slide8">
                <a class="fancybox" rel="gallery2" href="imgs/img16.png">
                    <img id="landscape" data-src="imgs/img16.png" />
                </a>
            </div>
        </div>
        <div class="section" id="section4">
            <div class="slide active" id="slide1">
                <a class="fancybox" data-fancybox-type="iframe" rel="gallery3" href="imgs/vid1.MP4">
                    <video id="landscape" loop muted controls="false" data-autoplay>
                        <source data-src="imgs/vid1.MP4" type="video/mp4" />
                    </video>
                </a>
            </div>
            <div class="slide" id="slide2">
                <a class="fancybox" rel="gallery3" href="imgs/img17.png">
                    <img id="landscape" data-src="imgs/img17.png" />
                </a>
            </div>
            <div class="slide" id="slide3">
                <a class="fancybox" rel="gallery3" href="imgs/img18.png">
                    <img id="landscape" data-src="imgs/img18.png" />
                </a>
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
            if ($(window).width() > 980){
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
    <script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect  : 'none',
            closeEffect : 'none'
        });
    });
    </script>
</body>

</html>