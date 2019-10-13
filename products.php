<?php
session_start();
?>
<html>

<head>
<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/head.php'); ?>
    <?php
        include("db.php");
        include($_SERVER['DOCUMENT_ROOT']."/101PRESENTS/include/cookielogin.php");
        $sqluser = "SELECT * FROM users where username='".$_SESSION['user_id']."'  limit 1;";
        $resultuser = mysqli_query($con,$sqluser);
        $valueuser=mysqli_fetch_assoc($resultuser);
        echo $valueuser["userid"]
    ?>
    <title>Products | 101PRESENTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
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
                            <?php
                                $sql = "SELECT * FROM products where producttype='goggles';";
                                $result=mysqli_query($con,$sql);
                                while($productinfo = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                    echo "<div class='column'>
                                    <a href='/101PRESENTS/products-info.php?id=".$productinfo['productid']."'>
                                        <div class='card' style='cursor:pointer;'>
                                            <div class='top-section'>
                                                <img id='image-container".$productinfo['productid']."' class='image-container' src='data:image/jpeg;base64,".base64_encode($productinfo['img1'])."' alt=''>
                                                <div class='nav'>
                                                    <img onclick='change_img(this)' img='image-container".$productinfo['productid']."' src='data:image/jpeg;base64,".base64_encode($productinfo['img1'])."' alt=''>
                                                    <img onclick='change_img(this)' img='image-container".$productinfo['productid']."' src='data:image/jpeg;base64,".base64_encode($productinfo['img2'])."' alt=''>";
                                                    if(!empty($productinfo['img3'])){
                                                        echo "<img onclick='change_img(this)' img='image-container".$productinfo['productid']."' src='data:image/jpeg;base64,".base64_encode($productinfo['img3'])."' alt=''>";
                                                    }
                                        echo "</div>
                                                <div class='price'>₹".$productinfo['price']."</div>
                                            </div>
                                            <div class='product-info'>
                                                <div class='name'>".$productinfo['name']."</div>
                                                <div class='dis'>".$productinfo['tag']."</div>
                                                <a class='add ripplelink btn addcart' data-prodid=".$productinfo['productid']." data-userid=".$valueuser["userid"]." href='#'><i class='fa fa-cart-plus'></i>&nbsp;Add to Cart</a>
                                            </div>
                                        </div>
                                        </a>
                                    </div>";
                                }
                            ?>      
                        </div>
                    </div>
                </div>
            </section>
            <section class="products" id="flowers" style="">
                <div style="text-align:center;text-align: justify;height: auto">
                    <h2 class="main-head" style="">Flowers</h2>
                    <div class="products">
                        <div class="row" id="products-list">
                            <?php
                                $sql = "SELECT * FROM products where producttype='flowers';";
                                $result=mysqli_query($con,$sql);
                                while($productinfo = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                    echo "<div class='column'>
                                    <a href='/101PRESENTS/products-info.php?id=".$productinfo['productid']."'>
                                        <div class='card' style='cursor:pointer;'>
                                            <div class='top-section'>
                                                <img id='image-container".$productinfo['productid']."' class='image-container' src='data:image/jpeg;base64,".base64_encode($productinfo['img1'])."' alt=''>
                                                <div class='nav'>
                                                    <img onclick='change_img(this)' img='image-container".$productinfo['productid']."' src='data:image/jpeg;base64,".base64_encode($productinfo['img1'])."' alt=''>
                                                    <img onclick='change_img(this)' img='image-container".$productinfo['productid']."' src='data:image/jpeg;base64,".base64_encode($productinfo['img2'])."' alt=''>";
                                                    if(!empty($productinfo['img3'])){
                                                        echo" <img onclick='change_img(this)' img='image-container".$productinfo['productid']."' src='data:image/jpeg;base64,".base64_encode($productinfo['img3'])."' alt=''>";
                                                    }
                                        echo "</div>
                                                <div class='price'>₹".$productinfo['price']."</div>
                                            </div>
                                            <div class='product-info'>
                                                <div class='name'>".$productinfo['name']."</div>
                                                <div class='dis'>".$productinfo['tag']."</div>
                                                <a class='add ripplelink btn addcart' data-prodid=".$productinfo['productid']." data-userid=".$valueuser["userid"]." href='#'><i class='fa fa-cart-plus'></i>&nbsp;Add to Cart</a>
                                            </div>
                                        </div>
                                        </a>
                                    </div>";
                                }
                            ?>        
                        </div>
                    </div>
                </div>
            </section>
            <section class="products" id="chocolates" style="">
                <div style="text-align:center;text-align: justify;height: auto">
                    <h2 class="main-head" style="">Chocolates</h2>
                    <div class="products">
                        <div class="row" id="products-list">
                            <?php
                                $sql = "SELECT * FROM products where producttype='chocolates';";
                                $result=mysqli_query($con,$sql);
                                while($productinfo = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                    echo "<div class='column'>
                                    <a href='/101PRESENTS/products-info.php?id=".$productinfo['productid']."'>
                                        <div class='card' style='cursor:pointer;'>
                                            <div class='top-section'>
                                                <img id='image-container".$productinfo['productid']."' class='image-container' src='data:image/jpeg;base64,".base64_encode($productinfo['img1'])."' alt=''>
                                                <div class='nav'>
                                                    <img onclick='change_img(this)' img='image-container".$productinfo['productid']."' src='data:image/jpeg;base64,".base64_encode($productinfo['img1'])."' alt=''>
                                                    <img onclick='change_img(this)' img='image-container".$productinfo['productid']."' src='data:image/jpeg;base64,".base64_encode($productinfo['img2'])."' alt=''>";
                                                    if(!empty($productinfo['img3'])){
                                                        echo" <img onclick='change_img(this)' img='image-container".$productinfo['productid']."' src='data:image/jpeg;base64,".base64_encode($productinfo['img3'])."' alt=''>";
                                                    }
                                        echo "</div>
                                                <div class='price'>₹".$productinfo['price']."</div>
                                            </div>
                                            <div class='product-info'>
                                                <div class='name'>".$productinfo['name']."</div>
                                                <div class='dis'>".$productinfo['tag']."</div>
                                                <a class='add ripplelink btn addcart' data-prodid=".$productinfo['productid']." data-userid=".$valueuser["userid"]." href='#'><i class='fa fa-cart-plus'></i>&nbsp;Add to Cart</a>
                                            </div>
                                        </div>
                                        </a>
                                    </div>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="products" id="cakes" style="">
                <div style="text-align:center;text-align: justify;height: auto">
                    <h2 class="main-head" style="">Cakes</h2>
                    <div class="products">
                        <div class="row" id="products-list">
                            <?php
                                $sql = "SELECT * FROM products where producttype='cakes';";
                                $result=mysqli_query($con,$sql);
                                while($productinfo = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                    echo "<div class='column'>
                                    <a href='/101PRESENTS/products-info.php?id=".$productinfo['productid']."'>
                                        <div class='card' style='cursor:pointer;'>
                                            <div class='top-section'>
                                                <img id='image-container".$productinfo['productid']."' class='image-container' src='data:image/jpeg;base64,".base64_encode($productinfo['img1'])."' alt=''>
                                                <div class='nav'>
                                                    <img onclick='change_img(this)' img='image-container".$productinfo['productid']."' src='data:image/jpeg;base64,".base64_encode($productinfo['img1'])."' alt=''>
                                                    <img onclick='change_img(this)' img='image-container".$productinfo['productid']."' src='data:image/jpeg;base64,".base64_encode($productinfo['img2'])."' alt=''>";
                                                    if(!empty($productinfo['img3'])){
                                                        echo" <img onclick='change_img(this)' img='image-container".$productinfo['productid']."' src='data:image/jpeg;base64,".base64_encode($productinfo['img3'])."' alt=''>";
                                                    }
                                        echo "</div>
                                                <div class='price'>₹".$productinfo['price']."</div>
                                            </div>
                                            <div class='product-info'>
                                                <div class='name'>".$productinfo['name']."</div>
                                                <div class='dis'>".$productinfo['tag']."</div>
                                                <a class='add ripplelink btn addcart' data-prodid=".$productinfo['productid']." data-userid=".$valueuser["userid"]." href='#'><i class='fa fa-cart-plus'></i>&nbsp;Add to Cart</a>
                                            </div>
                                        </div>
                                        </a>
                                    </div>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </article>
        <!-- <aside class="rightaside">
        </aside> -->
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

        // if('serviceWorker' in navigator) {
        //     navigator.serviceWorker
        //     .register('/101PRESENTS/sw.js')
        //     .then(function() { console.log("Service Worker Registered"); });
        // }  
    
    //----------------------------------------Call Scroll products div with mouse scroll from main scripts file------------------------------------------
    $(document).ready(function() {
        $('.row').hScroll(60); // You can pass (optionally) scrolling amount

        $('.addcart').click(function(e) {
            e.preventDefault();
            userid=$(this).attr('data-userid');
            prodid=$(this).attr('data-prodid');
            console.log(userid,prodid)
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
        });
    });
    </script>
</body>

</html>