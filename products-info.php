<?php
session_start();
?>
<head>
<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/head.php'); ?>
<?php
        include("db.php");
        include($_SERVER['DOCUMENT_ROOT']."/101PRESENTS/include/cookielogin.php");
            // echo $_GET['id'];
        $sql = "SELECT * FROM products where productid=".$_GET['id'].";";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            $productinfo = mysqli_fetch_array($result);
            // echo "<br> id: ". $productinfo["productid"]. " - Name: ". $productinfo["name"]. " " . $productinfo["price"] . "<br>";
        } else {
            // echo "0 results";
            header("location:404.php"); 
            echo "<script type='text/javascript'> document.location = '404.php'; </script>";
        }
        if(isset($_SESSION['user_id'])){
            $sqluser = "SELECT * FROM users where username='".$_SESSION['user_id']."'  limit 1;";
            $resultuser = mysqli_query($con,$sqluser);
            $valueuser=mysqli_fetch_assoc($resultuser);
            $authuser=$valueuser["userid"];
            // echo $authuser;
        }else{
            $authuser=0;
        }
        $con->close();
    ?>

    <title><?php echo $productinfo["name"]; ?> | 101PRESENTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/head.php'); ?>
    <link rel="stylesheet" type="text/css" href="/101PRESENTS/assets/css/products-info.css">
    <style type="text/css">
    .products .card {
        background: none;
    }
    
    </style>
</head>

<body>

<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/headernav.php'); ?>
    <div class="main  body-top">
        <article>
            <main class="product-container">
                <!-- Left Column / Headphones Image -->
                <div class="left-column">
                    <div class="products">
                        <div class="card">
                            <div class="top-section">
                                <img id="image-container1" class="image-container" src="data:image/jpeg;base64,<?php echo base64_encode( $productinfo["img1"] ); ?>" alt="">
                                <div class="nav">
                                    <img onclick="change_img(this)" img="image-container1" src="data:image/jpeg;base64,<?php echo base64_encode( $productinfo["img1"] ); ?>" alt="">
                                    <img onclick="change_img(this)" img="image-container1" src="data:image/jpeg;base64,<?php echo base64_encode( $productinfo["img2"] ); ?>" alt="">
                                    <img onclick="change_img(this)" img="image-container1" src="data:image/jpeg;base64,<?php echo base64_encode( $productinfo["img3"] ); ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="right-column">
                    <!-- Product Description -->
                    <div class="product-description">
                        <mark><?php echo $productinfo["tag"]; ?></mark> <bdi><?php echo $productinfo["bdi"]; ?></bdi>
                        <h1><?php echo $productinfo["name"]; ?></h1>
                        <p><?php echo $productinfo["description"]; ?></p>
                        <br>
                    </div>
                    <!-- Product Configuration -->
                    <div class="product-configuration">
                        <!-- Product Color -->
                        <!-- <div class="product-color">
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
                        </div> -->
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
                        <?php
                        // Load XML file
                            $xml = new DOMDocument;
                            $xml->load($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/assets/xml/products/'.$productinfo["detailsxml"]);
                            // Load XSL file
                            $xsl = new DOMDocument;
                            $xsl->load($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/productdetailstable.xsl');
                            // Configure the transformer
                            $proc = new XSLTProcessor;
                            // Attach the xsl rules
                            $proc->importStyleSheet($xsl);
                            echo $proc->transformToXML($xml);
                        ?>
                    </details>
                    <br>
                    <!-- Product Pricing -->
                    <div class="product-price">
                        <span>₹<?php echo $productinfo["price"]; ?></span>
                        <a href="#" class="cart-btn addcart" data-prodid="<?php echo $productinfo['productid']; ?>" data-userid="<?php echo $authuser ?>">Add to cart</a>
                    </div>
                </div>
            </main>
        </article>
        <!-- <aside class="rightaside">
        </aside> -->
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/footer.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/notificationbox.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/loading.php'); ?>
    <script src="/101PRESENTS/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/101PRESENTS/assets/js/script.js"></script>
    <script src="/101PRESENTS/assets/js/navbar.js"> </script>
    <script src="/101PRESENTS/assets/js/forms.js"> </script>
    <script src="/101PRESENTS/assets/js/notificationbox.js"></script>
    <script src="/101PRESENTS/assets/js/products.js"></script>
    <script type="text/javascript">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/jscode.php'); ?> 
        // if('serviceWorker' in navigator) {
        //     navigator.serviceWorker
        //     .register('/101PRESENTS/sw.js')
        //     .then(function() { console.log("Service Worker Registered"); });
        // }  

        $(document).ready(function() {
            $('.color-choose input').on('click', function() {
                var headphonesColor = $(this).attr('data-image');
                $('.active').removeClass('active');
                $('.left-column img[data-image = ' + headphonesColor + ']').addClass('active');
                $(this).addClass('active');
            });
            $('.addcart').click(function(e) {
                e.preventDefault();
                userid=$(this).attr('data-userid');
                prodid=$(this).attr('data-prodid');
                console.log(userid,prodid)
                if(userid==null){
                    alert("You're not logged in!")
                }else if(userid!==null){
                    var r = confirm("Add to Cart?");
                    if (r == true) {
                        $.ajax({
                            type:'POST',
                            url:'ajax/addtocart.php',
                            data:{
                                userid:userid,
                                prodid:prodid
                            },
                            success: function(data){
                            console.log(data)
                            console.log(data)
                                if(data=="YES"){
                                    console.log("added")
                                }else{
                                    alert("can't add the row")
                                }
                            }
                        })
                    } else {
                        txt = "You pressed Cancel!";
                    }
                }
            });
        });
    </script>
</body>

</html>