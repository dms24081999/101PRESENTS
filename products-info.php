<head>
    <title>Product-Info | 101PRESENTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/php/head.php'); ?>
    <style type="text/css">
    /*html,
    body {
        font-family: 'Roboto', sans-serif;
    }*/
    .products .image-container {
        margin-top: 20px;
    }
.product-color .product-configuration{
    display: inline-block;
}
    .product-container {
        /*max-width: 1200px;*/
        margin: 0 auto;
        padding: 15px;
        display: flex;
        height: auto;
    }

    .left-column {
        width: 65%;
        position: relative;
    }

    .right-column {
        width: 35%;
        height: auto;
        margin-top: 60px;
    }


    .product-description {
        border-bottom: 1px solid #E1E8EE;
        margin-bottom: 20px;
    }

    .product-description span {
        font-size: 12px;
        color: #358ED7;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-decoration: none;
    }

    .product-description h1 {
        font-weight: 300;
        font-size: 52px;
        color: #43484D;
        letter-spacing: -2px;
    }

    .product-description p {
        font-size: 16px;
        font-weight: 300;
        color: #86939E;
        line-height: 24px;
    }

    .product-color {
        margin-bottom: 30px;
    }

    .color-choose div {
        display: inline-block;
    }

    .color-choose input[type=radio] {
        display: none;
    }

    .color-choose input[type=radio]+label span {
        display: inline-block;
        width: 40px;
        height: 40px;
        margin: -1px 4px 0 0;
        vertical-align: middle;
        cursor: pointer;
        border-radius: 50%;
    }

    .color-choose input[type=radio]+label span {
        border: 2px solid #FFFFFF;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.33);
    }

    .color-choose input[type=radio]#red+label span {
        background-color: #C91524;
    }

    .color-choose input[type=radio]#blue+label span {
        background-color: #314780;
    }

    .color-choose input[type=radio]#black+label span {
        background-color: #323232;
    }

    .color-choose input[type=radio]:checked+label span {
        background-image: url(images/check-icn.svg);
        background-repeat: no-repeat;
        background-position: center;
    }

    .cable-choose {
        margin-bottom: 20px;
    }

    .cable-choose button {
        border: 2px solid #E1E8EE;
        border-radius: 6px;
        padding: 13px 20px;
        font-size: 14px;
        color: #5E6977;
        background-color: #fff;
        cursor: pointer;
        transition: all .5s;
    }

    .cable-choose button:hover,
    .cable-choose button:active,
    .cable-choose button:focus {
        border: 2px solid #86939E;
        outline: none;
    }

    .cable-config {
        border-bottom: 1px solid #E1E8EE;
        margin-bottom: 20px;
    }

    .cable-config a {
        color: #358ED7;
        text-decoration: none;
        font-size: 12px;
        position: relative;
        margin: 10px 0;
        display: inline-block;
    }

    .cable-config a:before {
        content: '';
        height: 15px;
        width: 15px;
        border-radius: 50%;
        border: 2px solid rgba(53, 142, 215, 0.5);
        display: inline-block;
        text-align: center;
        line-height: 16px;
        opacity: 0.5;
        margin-right: 5px;
    }

    .product-price {
        display: flex;
        align-items: center;
    }

    .product-price span {
        font-size: 26px;
        font-weight: 300;
        color: #43474D;
        margin-right: 20px;
    }

    .cart-btn {
        display: inline-block;
        background-color: #7DC855;
        border-radius: 6px;
        font-size: 16px;
        color: #FFFFFF;
        text-decoration: none;
        padding: 12px 30px;
        transition: all .5s;
    }

    .cart-btn:hover {
        background-color: #64af3d;
    }

    .products .card {
        width: 90%;
        height: 100%;
        position: absolute;
        margin: 10px;
    }

    .products .card .top-section {
        width: 100%;
        height: 100%;

    }

    .products .image-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        max-width: 100%;
        max-height: 100%;
    }
table th{
    text-align: left;
}

    @media (max-width: 940px) {
        .product-container {
            flex-direction: column;
            margin-top: 20px;
        }

        .left-column {
            width: 100%;
            height: 40vh;
        }
        .right-column {
            width: 100%;
            height: auto;
        }
    }
    </style>
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/php/headernav.php'); ?>
    <div class="main  body-top">
        <article>
            <main class="product-container">
                <!-- Left Column / Headphones Image -->
                <div class="left-column">
                    <div class="products">
                        <div class="card">
                            <div class="top-section">
                                <img id="image-container1" class="image-container" src="img/products/goggles/awesome-men-sunglasses/1.png" alt="">
                                <div class="nav">
                                    <img onclick="change_img(this)" img="image-container1" src="img/products/goggles/awesome-men-sunglasses/1.png" alt="">
                                    <img onclick="change_img(this)" img="image-container1" src="img/products/goggles/awesome-men-sunglasses/2.png" alt="">
                                    <img onclick="change_img(this)" img="image-container1" src="img/products/goggles/awesome-men-sunglasses/3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="right-column">
                    <!-- Product Description -->
                    <div class="product-description">
                        <mark>Sunglasses</mark> <bdi>चश्मा</bdi>
                        <h1>Brown Sunglasses</h1>
                        <p>Take your fashion endeavors to a whole new level with the S12B6302 sunglasses from JRS by Coolwinks. Packing an illustrious punch with its verve, these shades come with pilot shaped frames whose electrifying stance is hard to match. Equipped with black tinted lenses, these sunnies make for a perfect gear for those with square-shaped faces & are a flawless addition to the numerous attires present in your wardrobe. Actual product colors may vary slightly from colors shown on your Computer/Mobile Screen.</p>
                        <br>
                    </div>
                    <!-- Product Configuration -->
                    <div class="product-configuration">
                        <!-- Product Color -->
                        <div class="product-color">
                            <span>Color</span>
                            <div class="color-choose">
                                <div>
                                    <input data-image="red" type="radio" id="red" name="color" value="red" checked>
                                    <label for="red"><span></span></label>
                                </div>
                                <div>
                                    <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                                    <label for="blue"><span></span></label>
                                </div>
                                <div>
                                    <input data-image="black" type="radio" id="black" name="color" value="black">
                                    <label for="black"><span></span></label>
                                </div>
                            </div>
                        </div>
                        <!-- Cable Configuration -->
                        <!-- <div class="cable-config">
                            <span>Cable configuration</span>
                            <div class="cable-choose">
                                <button>Straight</button>
                                <button>Coiled</button>
                                <button>Long-coiled</button>
                            </div>
                            <a href="#">How to configurate your headphones</a>
                        </div> -->
                    </div>
                    <details>
                        <summary>More Info...</summary>
                        <table cellpadding="10">
                            <tr>
                                <th>Frame Material</th>
                                <th>:</th>
                                <td>Metal</td>
                            </tr>
                            <tr>
                                <th>Lens Color</th>
                                <th>:</th>
                                <td>Brown</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <th>:</th>
                                <td>Men, Women</td>
                            </tr>
                            <tr>
                                <th>Dimensions</th>
                                <th>:</th>
                                <td>58-14-135</td>
                            </tr>
                            <tr>
                                <th>Product Type</th>
                                <th>:</th>
                                <td>Sunglasses</td>
                            </tr>
                        </table>
                    </details>
                    <br>
                    <!-- Product Pricing -->
                    <div class="product-price">
                        <span>₹999</span>
                        <a href="#" class="cart-btn">Add to cart</a>
                    </div>
                </div>
            </main>
        </article>
        <aside class="rightaside">
        </aside>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/php/footer.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/php/notificationbox.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/php/loading.php'); ?>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/products.js"></script>
    <script src="js/notificationbox.js"></script>
    <script type="text/javascript">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/php/jscode.php'); ?> 
    $(document).ready(function() {

        $('.color-choose input').on('click', function() {
            var headphonesColor = $(this).attr('data-image');

            $('.active').removeClass('active');
            $('.left-column img[data-image = ' + headphonesColor + ']').addClass('active');
            $(this).addClass('active');
        });

    });
    </script>
</body>

</html>