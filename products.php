<html>

<head>
    <title>Products | 101PRESENTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/head.php'); ?>
    <style type="text/css">
    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("assets/images/bg.jpg");
    }

    section.products {
        margin: 0;
        /*padding-top: 50px;*/
        height: auto;
        /*width: 40%;*/

        position: relative;
        /*background-color: black;*/
    }

    .products {
        padding: 0px;
    }

    .products .row {

        display: flex;
        flex-wrap: nowrap;
        min-width: 100%;
        /*min-height: 200px;*/
        overflow-x: auto;
        flex-direction: row;
        justify-content: flex-start;
    }

    .products .column {
        /*min-width: 200px;*/
        margin: 10px;
    }

    .products .row::-webkit-scrollbar {
        width: 0px;
        /* Remove scrollbar space */
        background: transparent;
        /* Optional: just make scrollbar invisible */
    }

    /* Optional: show position indicator in red */
    .products .row::-webkit-scrollbar-thumb {
        background: transparent;
    }

    .products .main-head {
        float: left;
        font-size: 35px;
        margin-block-end: 0em;
        color: white
    }
    </style>
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/headernav.php'); ?>
    <div class="main body-top">
        <!--  <aside class="leftaside">
            
        </aside> -->
        <article>
            <section class="products" id="goggles" style="">
                <div style="text-align:center;text-align: justify;height: auto">
                    <h2 class="main-head" style="">Sun-glasses</h2>
                    <div class="products">
                        <div class="row" id="products-list">
                            <div class="column">
                                <div class="card">
                                    <div class="top-section">
                                        <img id="image-container1" class="image-container" src="assets/images/products/goggles/awesome-men-sunglasses/1.png" alt="">
                                        <div class="nav">
                                            <img onclick="change_img(this)" img="image-container1" src="assets/images/products/goggles/awesome-men-sunglasses/1.png" alt="">
                                            <img onclick="change_img(this)" img="image-container1" src="assets/images/products/goggles/awesome-men-sunglasses/2.png" alt="">
                                            <img onclick="change_img(this)" img="image-container1" src="assets/images/products/goggles/awesome-men-sunglasses/3.png" alt="">
                                        </div>
                                        <div class="price">₹999</div>
                                    </div>
                                    <div class="product-info">
                                        <div class="name">Brown Sunglasses</div>
                                        <div class="dis">Gifts Online</div>
                                        <a class="add ripplelink btn" href="#"><i class="fa fa-cart-plus"></i>&nbsp;Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="top-section">
                                        <img id="image-container2" class="image-container" src="assets/images/products/goggles/cat-eye-women-sunglasses-green/1.webp" alt="">
                                        <div class="nav">
                                            <img onclick="change_img(this)" img="image-container2" src="assets/images/products/goggles/cat-eye-women-sunglasses-green/1.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container2" src="assets/images/products/goggles/cat-eye-women-sunglasses-green/2.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container2" src="assets/images/products/goggles/cat-eye-women-sunglasses-green/3.webp" alt="">
                                        </div>
                                        <div class="price">₹999</div>
                                    </div>
                                    <div class="product-info">
                                        <div class="name">Cat Eye Women Sunglasses Green</div>
                                        <div class="dis">Sanglasses</div>
                                        <a class="add ripplelink btn" href="#"><i class="fa fa-cart-plus"></i>&nbsp;Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="top-section">
                                        <img id="image-container3" class="image-container" src="assets/images/products/goggles/mirrored-women-wayfarer-sunglasses/1.webp" alt="">
                                        <div class="nav">
                                            <img onclick="change_img(this)" img="image-container3" src="assets/images/products/goggles/mirrored-women-wayfarer-sunglasses/1.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container3" src="assets/images/products/goggles/mirrored-women-wayfarer-sunglasses/2.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container3" src="assets/images/products/goggles/mirrored-women-wayfarer-sunglasses/3.webp" alt="">
                                        </div>
                                        <div class="price">₹999</div>
                                    </div>
                                    <div class="product-info">
                                        <div class="name">Mirrored Wayfarer Sunglasses</div>
                                        <div class="dis">Sunglasses</div>
                                        <a class="add ripplelink btn" href="#"><i class="fa fa-cart-plus"></i>&nbsp;Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="top-section">
                                        <img id="image-container4" class="image-container" src="assets/images/products/goggles/brown-wayfarer-unisex-sunglasses/1.webp" alt="">
                                        <div class="nav">
                                            <img onclick="change_img(this)" img="image-container4" src="assets/images/products/goggles/brown-wayfarer-unisex-sunglasses/1.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container4" src="assets/images/products/goggles/brown-wayfarer-unisex-sunglasses/2.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container4" src="assets/images/products/goggles/brown-wayfarer-unisex-sunglasses/3.webp" alt="">
                                        </div>
                                        <div class="price">₹999</div>
                                    </div>
                                    <div class="product-info">
                                        <div class="name">Brown Wayfarer Sunglasses</div>
                                        <div class="dis">Awesome Men Sanglasses</div>
                                        <a class="add ripplelink btn" href="#"><i class="fa fa-cart-plus"></i>&nbsp;Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="top-section">
                                        <img id="image-container5" class="image-container" src="assets/images/products/goggles/black-round-unisex-sunglasses/1.webp" alt="">
                                        <div class="nav">
                                            <img onclick="change_img(this)" img="image-container5" src="assets/images/products/goggles/black-round-unisex-sunglasses/1.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container5" src="assets/images/products/goggles/black-round-unisex-sunglasses/2.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container5" src="assets/images/products/goggles/black-round-unisex-sunglasses/3.webp" alt="">
                                        </div>
                                        <div class="price">₹999</div>
                                    </div>
                                    <div class="product-info">
                                        <div class="name">Black Round Sunglasses</div>
                                        <div class="dis">Sunglasses Gifts Online</div>
                                        <a class="add ripplelink btn" href="#"><i class="fa fa-cart-plus"></i>&nbsp;Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="top-section">
                                        <img id="image-container6" class="image-container" src="assets/images/products/goggles/mirrored-rectangle-unisex-sunglasses/1.webp" alt="">
                                        <div class="nav">
                                            <img onclick="change_img(this)" img="image-container6" src="assets/images/products/goggles/mirrored-rectangle-unisex-sunglasses/1.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container6" src="assets/images/products/goggles/mirrored-rectangle-unisex-sunglasses/2.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container6" src="assets/images/products/goggles/mirrored-rectangle-unisex-sunglasses/3.webp" alt="">
                                        </div>
                                        <div class="price">₹999</div>
                                    </div>
                                    <div class="product-info">
                                        <div class="name">Mirrored Rectangle Sunglasses</div>
                                        <div class="dis">Sunglasses</div>
                                        <a class="add ripplelink btn" href="#"><i class="fa fa-cart-plus"></i>&nbsp;Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="products" id="flowers" style="">
                <div style="text-align:center;text-align: justify;height: auto">
                    <h2 class="main-head" style="">Flowers</h2>
                    <div class="products">
                        <div class="row" id="products-list">
                            <div class="column">
                                <div class="card">
                                    <div class="top-section">
                                        <img id="image-container51" class="image-container" src="assets/images/products/flowers/fantastic-jade-terrarium/1.webp" alt="">
                                        <div class="nav">
                                            <img onclick="change_img(this)" img="image-container51" src="assets/images/products/flowers/fantastic-jade-terrarium/1.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container51" src="assets/images/products/flowers/fantastic-jade-terrarium/2.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container51" src="assets/images/products/flowers/fantastic-jade-terrarium/3.webp" alt="">
                                        </div>
                                        <div class="price">₹599</div>
                                    </div>
                                    <div class="product-info">
                                        <div class="name">Jade Terrarium</div>
                                        <div class="dis">Plants Online</div>
                                        <a class="add ripplelink btn" href="#"><i class="fa fa-cart-plus"></i>&nbsp;Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="top-section">
                                        <img id="image-container52" class="image-container" src="assets/images/products/flowers/special-birthday-vase-arrangement/1.webp" alt="">
                                        <div class="nav">
                                            <img onclick="change_img(this)" img="image-container52" src="assets/images/products/flowers/special-birthday-vase-arrangement/1.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container52" src="assets/images/products/flowers/special-birthday-vase-arrangement/2.webp" alt="">
                                        </div>
                                        <div class="price">₹949</div>
                                    </div>
                                    <div class="product-info">
                                        <div class="name">Special Birthday Vase Arrangement</div>
                                        <div class="dis">Send Flowers Online</div>
                                        <a class="add ripplelink btn" href="#"><i class="fa fa-cart-plus"></i>&nbsp;Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="top-section">
                                        <img id="image-container53" class="image-container" src="assets/images/products/flowers/romancing-roses-n-daisies/1.webp" alt="">
                                        <div class="nav">
                                            <img onclick="change_img(this)" img="image-container53" src="assets/images/products/flowers/romancing-roses-n-daisies/1.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container53" src="assets/images/products/flowers/romancing-roses-n-daisies/2.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container53" src="assets/images/products/flowers/romancing-roses-n-daisies/3.webp" alt="">
                                        </div>
                                        <div class="price">₹1,149</div>
                                    </div>
                                    <div class="product-info">
                                        <div class="name">Romancing Roses N Daisies</div>
                                        <div class="dis">Send Flowers Online</div>
                                        <a class="add ripplelink btn" href="#"><i class="fa fa-cart-plus"></i>&nbsp;Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="top-section">
                                        <img id="image-container54" class="image-container" src="assets/images/products/flowers/red-roses-love-arrangement/1.webp" alt="">
                                        <div class="nav">
                                            <img onclick="change_img(this)" img="image-container54" src="assets/images/products/flowers/red-roses-love-arrangement/1.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container54" src="assets/images/products/flowers/red-roses-love-arrangement/2.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container54" src="assets/images/products/flowers/red-roses-love-arrangement/3.webp" alt="">
                                        </div>
                                        <div class="price">₹949</div>
                                    </div>
                                    <div class="product-info">
                                        <div class="name">Red Roses Love Arrangement</div>
                                        <div class="dis">Plants Online</div>
                                        <a class="add ripplelink btn" href="#"><i class="fa fa-cart-plus"></i>&nbsp;Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="top-section">
                                        <img id="image-container55" class="image-container" src="assets/images/products/flowers/basket-of-roses-tulips-with-ferrero-rocher/1.webp" alt="">
                                        <div class="nav">
                                            <img onclick="change_img(this)" img="image-container55" src="assets/images/products/flowers/basket-of-roses-tulips-with-ferrero-rocher/1.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container55" src="assets/images/products/flowers/basket-of-roses-tulips-with-ferrero-rocher/2.webp" alt="">
                                        </div>
                                        <div class="price">₹6,549</div>
                                    </div>
                                    <div class="product-info">
                                        <div class="name">Basket of Roses & Tulips with Ferrero Rocher</div>
                                        <div class="dis">Plants Online</div>
                                        <a class="add ripplelink btn" href="#"><i class="fa fa-cart-plus"></i>&nbsp;Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="top-section">
                                        <img id="image-container56" class="image-container" src="assets/images/products/flowers/mesmerizing-roses-lilies-posy/1.webp" alt="">
                                        <div class="nav">
                                            <img onclick="change_img(this)" img="image-container56" src="assets/images/products/flowers/mesmerizing-roses-lilies-posy/1.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container56" src="assets/images/products/flowers/mesmerizing-roses-lilies-posy/2.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container56" src="assets/images/products/flowers/mesmerizing-roses-lilies-posy/3.webp" alt="">
                                        </div>
                                        <div class="price">₹3,549</div>
                                    </div>
                                    <div class="product-info">
                                        <div class="name">Mesmerizing Roses & Lilies Posy</div>
                                        <div class="dis">Send Flowers Online</div>
                                        <a class="add ripplelink btn" href="#"><i class="fa fa-cart-plus"></i>&nbsp;Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="products" id="chocolates" style="">
                <div style="text-align:center;text-align: justify;height: auto">
                    <h2 class="main-head" style="">Chocolates</h2>
                    <div class="products">
                        <div class="row" id="products-list">
                            <div class="column">
                                <div class="card">
                                    <div class="top-section">
                                        <img id="image-container101" class="image-container" src="assets/images/products/chocolates/meri-pyari-maa-chocolate-box/1.webp" alt="">
                                        <div class="nav">
                                            <img onclick="change_img(this)" img="image-container101" src="assets/images/products/chocolates/meri-pyari-maa-chocolate-box/1.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container101" src="assets/images/products/chocolates/meri-pyari-maa-chocolate-box/2.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container101" src="assets/images/products/chocolates/meri-pyari-maa-chocolate-box/3.webp" alt="">
                                        </div>
                                        <div class="price">₹749</div>
                                    </div>
                                    <div class="product-info">
                                        <div class="name">Meri Pyari Maa Chocolate Box</div>
                                        <div class="dis">Chocolate Gifts Online</div>
                                        <a class="add ripplelink btn" href="#"><i class="fa fa-cart-plus"></i>&nbsp;Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="top-section">
                                        <img id="image-container102" class="image-container" src="assets/images/products/chocolates/personalised-mug-ferrero-rocher-combo/1.webp" alt="">
                                        <div class="nav">
                                            <img onclick="change_img(this)" img="image-container102" src="assets/images/products/chocolates/personalised-mug-ferrero-rocher-combo/1.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container102" src="assets/images/products/chocolates/personalised-mug-ferrero-rocher-combo/2.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container102" src="assets/images/products/chocolates/personalised-mug-ferrero-rocher-combo/3.webp" alt="">
                                        </div>
                                        <div class="price">₹1,099</div>
                                    </div>
                                    <div class="product-info">
                                        <div class="name">Personalised Mug & Ferrero Rocher Combo Birthday</div>
                                        <div class="dis">Chocolate Gifts</div>
                                        <a class="add ripplelink btn" href="#"><i class="fa fa-cart-plus"></i>&nbsp;Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="top-section">
                                        <img id="image-container103" class="image-container" src="assets/images/products/chocolates/my-mom-my-love-chocolate-box/1.webp" alt="">
                                        <div class="nav">
                                            <img onclick="change_img(this)" img="image-container103" src="assets/images/products/chocolates/my-mom-my-love-chocolate-box/1.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container103" src="assets/images/products/chocolates/my-mom-my-love-chocolate-box/2.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container103" src="assets/images/products/chocolates/my-mom-my-love-chocolate-box/3.webp" alt="">
                                        </div>
                                        <div class="price">₹799</div>
                                    </div>
                                    <div class="product-info">
                                        <div class="name">My Mom Chocolate Box</div>
                                        <div class="dis">Chocolate Gifts</div>
                                        <a class="add ripplelink btn" href="#"><i class="fa fa-cart-plus"></i>&nbsp;Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="products" id="cakes" style="">
                <div style="text-align:center;text-align: justify;height: auto">
                    <h2 class="main-head" style="">Cakes</h2>
                    <div class="products">
                        <div class="row" id="products-list">
                            <div class="column">
                                <div class="card">
                                    <div class="top-section">
                                        <img id="image-container151" class="image-container" src="assets/images/products/cakes/black-forest-cake/1.webp" alt="">
                                        <div class="nav">
                                            <img onclick="change_img(this)" img="image-container151" src="assets/images/products/cakes/black-forest-cake/1.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container151" src="assets/images/products/cakes/black-forest-cake/2.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container151" src="assets/images/products/cakes/black-forest-cake/3.webp" alt="">
                                        </div>
                                        <div class="price">₹549</div>
                                    </div>
                                    <div class="product-info">
                                        <div class="name">Black Forest Cake</div>
                                        <div class="dis">Cake Delivery</div>
                                        <a class="add ripplelink btn" href="#"><i class="fa fa-cart-plus"></i>&nbsp;Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="top-section">
                                        <img id="image-container152" class="image-container" src="assets/images/products/cakes/creamy-vanilla-fruit-cake/1.webp" alt="">
                                        <div class="nav">
                                            <img onclick="change_img(this)" img="image-container152" src="assets/images/products/cakes/creamy-vanilla-fruit-cake/1.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container152" src="assets/images/products/cakes/creamy-vanilla-fruit-cake/2.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container152" src="assets/images/products/cakes/creamy-vanilla-fruit-cake/3.webp" alt="">
                                        </div>
                                        <div class="price">₹849</div>
                                    </div>
                                    <div class="product-info">
                                        <div class="name">Creamy Vanilla Fruit Cake</div>
                                        <div class="dis">Cake Delivery</div>
                                        <a class="add ripplelink btn" href="#"><i class="fa fa-cart-plus"></i>&nbsp;Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="top-section">
                                        <img id="image-container153" class="image-container" src="assets/images/products/cakes/chocolaty-rose-cake/1.webp" alt="">
                                        <div class="nav">
                                            <img onclick="change_img(this)" img="image-container153" src="assets/images/products/cakes/chocolaty-rose-cake/1.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container153" src="assets/images/products/cakes/chocolaty-rose-cake/2.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container153" src="assets/images/products/cakes/chocolaty-rose-cake/3.webp" alt="">
                                        </div>
                                        <div class="price">₹849</div>
                                    </div>
                                    <div class="product-info">
                                        <div class="name">Chocolaty Rose Cake</div>
                                        <div class="dis">Cake Delivery</div>
                                        <a class="add ripplelink btn" href="#"><i class="fa fa-cart-plus"></i>&nbsp;Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="top-section">
                                        <img id="image-container154" class="image-container" src="assets/images/products/cakes/flakey-hearts-black-forest-cake/1.webp" alt="">
                                        <div class="nav">
                                            <img onclick="change_img(this)" img="image-container154" src="assets/images/products/cakes/flakey-hearts-black-forest-cake/1.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container154" src="assets/images/products/cakes/flakey-hearts-black-forest-cake/2.webp" alt="">
                                            <img onclick="change_img(this)" img="image-container154" src="assets/images/products/cakes/flakey-hearts-black-forest-cake/3.webp" alt="">
                                        </div>
                                        <div class="price">₹699</div>
                                    </div>
                                    <div class="product-info">
                                        <div class="name">Flakey Hearts Black Forest Cake</div>
                                        <div class="dis">Cake Delivery</div>
                                        <a class="add ripplelink btn" href="#"><i class="fa fa-cart-plus"></i>&nbsp;Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
        <aside class="rightaside">
        </aside>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/footer.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/notificationbox.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/loading.php'); ?>
    <script src="/101PRESENTS/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/101PRESENTS/assets/js/script.js"></script>
    <script src="/101PRESENTS/assets/js/navbar.js"></script>
    <script src="/101PRESENTS/assets/js/products.js"></script>
    <script src="/101PRESENTS/assets/js/notificationbox.js"></script>
    <script type="text/javascript">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/jscode.php'); ?> 

        if('serviceWorker' in navigator) {
            navigator.serviceWorker
            .register('/101PRESENTS/sw.js')
            .then(function() { console.log("Service Worker Registered"); });
        }  
    
    //----------------------------------------Call Scroll products div with mouse scroll from main scripts file------------------------------------------
    $(document).ready(function() {
        $('.row').hScroll(60); // You can pass (optionally) scrolling amount
    });
    </script>
</body>

</html>