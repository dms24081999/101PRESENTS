<?php
session_start();
?>
<!DOCTYPE html>

<html>

<head>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/head.php'); ?>
    <?php
        include("db.php");
        include($_SERVER['DOCUMENT_ROOT']."/101PRESENTS/include/cookielogin.php");
    ?>
    <title>101PRESENTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/101PRESENTS/manifest.json" rel="manifest">
    
    <link rel="stylesheet" type="text/css" href="assets/css/testimonial.css">
    <style type="text/css">
    .typewritter {
        text-align: center;
        font-family: 'Source Code Pro', monospace;
        color: white;
    }

    .typewritter h1 {
        font-size: 30px;
    }

    /* Cursor Styling */
    .color {
        /*linear-gradient(172deg, #00dbde 0%, #fc00ff 100%)*/
        font-size: 2em;
        /* background: linear-gradient(172deg, #00dbde 0%, #fc00ff 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;*/
        color: white
    }

    .cursor:after {
        content: '';
        display: inline-block;
        background-color: white;
        animation-name: blink;
        animation-duration: 0.5s;
        animation-iteration-count: infinite;
    }

    h1.cursor:after {
        height: 1em;
        width: 13px;
    }

    p.cursor:after {
        height: 0.9em;
        width: 6px;
    }

    .caption {
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        text-align: center;
        color: #000;
    }

    .caption span.border {
        background-color: #111;
        color: #fff;
        padding: 18px;
        font-size: 25px;
        letter-spacing: 10px;
    }

    @keyframes blink {
        0% {
            opacity: 1;
        }

        49% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }

        100% {
            opacity: 0;
        }
    }



    .bgimg-1,
    .bgimg-2,
    .bgimg-3 {
        position: relative;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

    }

    .bgimg-1 {
        background-image: linear-gradient(rgba(255, 0, 0, 0.3), rgba(0, 255, 0, 0.3), rgba(0, 0, 255, 0.3)), url("assets/images/bg.jpg");
        height: 100vh;
    }

    .bgimg-2 {
        background-image: linear-gradient(rgba(255, 0, 0, 0.3), rgba(0, 255, 0, 0.3), rgba(0, 0, 255, 0.3)), url("assets/images/bg1.jpg");
        height: 50vh;
    }

    .bgimg-3 {
        background-image: linear-gradient(rgba(255, 0, 0, 0.3), rgba(0, 255, 0, 0.3), rgba(0, 0, 255, 0.3)), url("img_parallax3.jpg");
        height: 50vh;

    }

    /*.products {
        padding: 0px;
    }
    .products .row {
        display: flex;
        flex-wrap: nowrap;
        min-width: 100%;
        overflow-x: auto;
        flex-direction: row;
        justify-content: flex-start;
    }
    .products .column {
        margin: 10px;
    }
    .products .row::-webkit-scrollbar {
        width: 0px;
        background: transparent;
    }
    .products .row::-webkit-scrollbar-thumb {
        background: transparent;
    }*/

    section#products {
        margin: 0;
        padding-top: 20px;
        height: auto;
        position: relative;
        background-color: black;
    }

    section#about {
        margin: 0;
        height: auto;
    }

    .more-circle-icon {
        background: black;
        color: white;
        padding: 10px;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        bottom: -50%;

    }


    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1024px) {

        .bgimg-1,
        .bgimg-2,
        .bgimg-3 {
            background-attachment: scroll;
        }
    }
    </style>
</head>

<body>
   
    <audio id="my_audio" src="assets/audios/welcome.mp3"  autoplay="autoplay"></audio>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/headernav.php'); ?>
    <section id="home">
        <div class="bgimg-1">
            <div class="caption">
                <span>
                    <div style="height: 60vh; vertical-align: middle;text-align: center;">
                        <div class="typewritter" id="typewritter">
                            <h1 class="cursor color" style="font-family: 'Open Sans', sans-serif;font-weight: bold; font-size: 2.4em"></h1>
                            <p class="color" style="font-family: 'BioRhyme', serif;font-weight: bolder; font-size: 2.8em"> </p>
                        </div>
                    </div>
                </span>
            </div>
        </div>
    </section>
    <section id="products" style="">
        <div style="color: #777;text-align:center;text-align: justify;height: auto;display: block;">
            <h2 style="text-align: center;font-size: 35px">Products</h2>
            
                <div class="gallery">
                    <a href="products.html#goggles">
                        <div class="gallery-item">
                            <img class="gallery-image" src="assets/images/products/goggles/cat-eye-women-sunglasses-green/1.webp" alt="">
                            <div class="bottom-text">Sun-glasses</div>
                        </div>
                    </a>
                    <a href="products.html#flowers">
                        <div class="gallery-item">
                            <img class="gallery-image" src="assets/images/products/flowers/special-birthday-vase-arrangement/1.webp" alt="">
                            <div class="bottom-text">Flowers</div>
                        </div>
                    </a>
                    <a href="products.html#chocolates">
                        <div class="gallery-item">
                            <img class="gallery-image" src="assets/images/products/chocolates/personalised-mug-ferrero-rocher-combo/1.webp" alt="">
                            <div class="bottom-text">Chocolates</div>
                        </div>
                    </a>
                    <a href="products.html#cakes">
                        <div class="gallery-item">
                            <img class="gallery-image" src="assets/images/products/cakes/black-forest-cake/2.webp" alt="">
                            <div class="bottom-text">Cakes</div>
                        </div>
                    </a>
              
            </div>
        </div>
        <a href="products.html">
            <div style="text-align: center;position:absolute;bottom: -25px;left: 50%;margin-left: -25px;z-index: 1;">
                <span class=""><i class="fa fa-angle-down fa-2x more-circle-icon " style="background: white;color: black"></i></span>
            </div>
        </a>
    </section>
   <!--  <div class="bgimg-2">
        <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">LESS HEIGHT</span>
        </div>
    </div> -->
   <!--  <div style="position:relative;">
        <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
            <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
        </div>
    </div> -->
    <!--   <section id="home-gallery" style="background: white;padding: 20px">
        <div class="wrapper">
            <div class="carousel">
                <button type="button" id="carousel-arrow-prev" class="carousel-arrow carousel-arrow-prev" arial-label="Image précédente"></button>
                <button type="button" id="carousel-arrow-next" class="carousel-arrow carousel-arrow-next" arial-label="Image suivante"></button>
                <img id="carousel-0" class="carousel-img carousel-img-displayed" src="http://res.cloudinary.com/dnqehhgmu/image/upload/v1509718497/winter_cttfdr.jpg" alt="Winter" />
                <img id="carousel-1" class="carousel-img carousel-img-noDisplay" src="http://res.cloudinary.com/dnqehhgmu/image/upload/v1509718497/sea_ej0zoc.jpg" alt="Sea" />
                <img id="carousel-2" class="carousel-img carousel-img-noDisplay" src="http://res.cloudinary.com/dnqehhgmu/image/upload/v1509718497/night_pw1bpm.jpg" alt="Night" />
                <img id="carousel-3" class="carousel-img carousel-img-noDisplay" src="http://res.cloudinary.com/dnqehhgmu/image/upload/v1509718497/mountain_dekhfd.jpg" alt="Moutain" />
                <img id="carousel-4" class="carousel-img carousel-img-noDisplay" src="http://res.cloudinary.com/dnqehhgmu/image/upload/v1509718497/desert_zy3uth.jpg" alt="Desert" />
            </div>
        </div>
    </section> -->
    <section id="about" class="bgimg-2" style="">
        <div class="" style="">
            <h2 style="text-align: center;padding-top: 20px;color: white;font-size: 35px">About Us</h2>
            <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/aboutowner.php'); ?> 
        </div>
        <a href="about.php">
            <div style="text-align: center;position:absolute;bottom: -25px;left: 50%;margin-left: -25px;">
                <span class=""><i class="fa fa-angle-down fa-2x more-circle-icon " style=""></i></span>
            </div>
        </a>
    </section>
    <div class="testimonial-section">
        <div class="inner-width">
            <h1>What Our Customers Say</h1>
            <div class="testimonial-pics">
                <img src="assets/images/testimonial/sanket.jpg" alt="test-1" class="active">
                <img src="assets/images/testimonial/komal.jpg" alt="test-2">
                <img src="assets/images/testimonial/arbaz.jpg" alt="test-3">
                <img src="assets/images/testimonial/manas.jpg" alt="test-4">
            </div>
            <div class="testimonial-contents">
                <div class="testimonial active" id="test-1">
                    <p><em>“Over the years I have used 101PRESENTS numerous times. What a fabulous company! They are family oriented and the service is incredible. I have seen the company grow and change over the years and definitely change for the better!”</em></p>
                    <span class="description">Sanket Dalvi</span>
                </div>
                <div class="testimonial" id="test-2">
                    <p><em>“I have used 101PRESENTS for the past 2 years and would never go anywhere else. I've had wonderful experiences and look forward to the upcoming year. Fundraising couldn't get any easier.”</em></p>
                    <span class="description">Komal Torlikonda</span>
                </div>
                <div class="testimonial" id="test-3">
                    <p><em>“A great company, the kids loved doing their own shopping and they are very quick and helpful when you need them.”</em></p>
                    <span class="description">Arbaz Khan</span>
                </div>
                <div class="testimonial" id="test-4">
                    <p><em>“Super gifts for school kids and awesome support! My granddaughter bought a great mug from her school "Santa's Workshop". It's a program where the school can order a "store's" worth of items, and put on a little sale for the kids and let them buy gifts for their family.”</em></p>
                    <span class="description">Manas Acharya</span>
                </div>
            </div>
        </div>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/footer.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/notificationbox.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/loading.php'); ?>
    <script src="/101PRESENTS/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/101PRESENTS/assets/js/script.js"></script>
    <script src="/101PRESENTS/assets/js/navbar.js"></script>
    <script src="/101PRESENTS/assets/js/notificationbox.js"></script>
    <script type="text/javascript">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/jscode.php'); ?>  
    // if('serviceWorker' in navigator) {
    //     navigator.serviceWorker
    //        .register('/101PRESENTS/sw.js')
    //        .then(function() { console.log("Service Worker Registered"); });
    // }  
  

    window.onload = function() {
        document.getElementById("my_audio").play();
    }

    //--------------------------------------------------Testimonials--------------------------------------------------
    $('.testimonial-pics img').click(function() {
        $(".testimonial-pics img").removeClass("active");
        $(this).addClass("active");
        $(".testimonial").removeClass("active");
        $("#" + $(this).attr("alt")).addClass("active");
    });



    //--------------------------------------------------Type Writter effect--------------------------------------------------
    var i = 0,
        a = 0,
        isBackspacing = false,
        isParagraph = false;
    // Typerwrite text content. Use a pipe to indicate the start of the second line "|".  
    var textArray = [
        "Welcome to|101PRESENTS"

    ];
    // Speed (in milliseconds) of typing.
    var speedForward = 100, //Typing Speed
        speedWait = 1000, // Wait between typing and backspacing
        speedBetweenLines = 1000, //Wait between first and second lines
        speedBackspace = 25; //Backspace Speed

    //Run the loop
    typeWriter("typewritter", textArray);

    function typeWriter(id, ar) {
        var element = $("#" + id),
            aString = ar[a],
            eHeader = element.children("h1"), //Header element
            eParagraph = element.children("p"); //Subheader element
        // Determine if animation should be typing or backspacing
        if (!isBackspacing) {
            // If full string hasn't yet been typed out, continue typing
            if (i < aString.length) {
                // If character about to be typed is a pipe, switch to second line and continue.
                if (aString.charAt(i) == "|") {
                    isParagraph = true;
                    eHeader.removeClass("cursor");
                    eParagraph.addClass("cursor");
                    i++;
                    setTimeout(function() { typeWriter(id, ar); }, speedBetweenLines);
                    // If character isn't a pipe, continue typing.
                } else {
                    // Type header or subheader depending on whether pipe has been detected
                    if (!isParagraph) {
                        eHeader.text(eHeader.text() + aString.charAt(i));
                    } else {
                        eParagraph.text(eParagraph.text() + aString.charAt(i));
                    }
                    i++;
                    setTimeout(function() { typeWriter(id, ar); }, speedForward);
                }
                // If full string has been typed, switch to backspace mode.
            } else if (i == aString.length) {
                isBackspacing = true;
                setTimeout(function() { typeWriter(id, ar); }, speedWait);
            }

            // If backspacing is enabled
        } else {
            // If either the header or the paragraph still has text, continue backspacing
            if (eHeader.text().length > 0 || eParagraph.text().length > 0) {
                // If paragraph still has text, continue erasing, otherwise switch to the header.
                if (eParagraph.text().length > 0) {
                    eParagraph.text(eParagraph.text().substring(0, eParagraph.text().length - 1));
                } else if (eHeader.text().length > 0) {
                    eParagraph.removeClass("cursor");
                    eHeader.addClass("cursor");
                    eHeader.text(eHeader.text().substring(0, eHeader.text().length - 1));
                }
                setTimeout(function() { typeWriter(id, ar); }, speedBackspace);
                // If neither head or paragraph still has text, switch to next quote in array and start typing.
            } else {
                isBackspacing = false;
                i = 0;
                isParagraph = false;
                a = (a + 1) % ar.length; //Moves to next position in array, always looping back to 0
                setTimeout(function() { typeWriter(id, ar); }, 50);
            }
        }
    }


    //-------------------------------------------NAVBAR SCROLL ANIMATIONS--------------------------------------------------------
    $(document).on('click', 'a[href^="#"]', function(e) {
        // target element id
        var id = $(this).attr('href');
        // target element
        var $id = $(id);
        if ($id.length === 0) {
            return;
        }
        // prevent standard hash navigation (avoid blinking in IE)
        e.preventDefault();
        // top position relative to the document
        var pos = $id.offset().top;
        // animated top scrolling
        $('body, html').animate({ scrollTop: pos });
    });
    </script>
</body>

</html>