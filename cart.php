
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/head.php'); ?>
    <?php
    session_start();
    include("db.php");
    include($_SERVER['DOCUMENT_ROOT']."/101PRESENTS/include/cookielogin.php");
      if ( isset( $_SESSION['user_id'] ) ) {
          // Grab user data from the database using the user_id
          // Let them access the "logged in only" pages
      } else {
          // Redirect them to the login page
          header("Location: signin.php");
      }   
    // You'd put this code at the top of any "protected" page you create
    // Always start this first
      
      include("db.php");
      
    ?>
    <title>Cart | 101PRESENTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="/101PRESENTS/assets/css/cart.css">
    
    <style type="text/css">
    /*html,
    body {
        font-family: 'Roboto', sans-serif;
    }*/
   
    </style>
</head>

<body>

    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/headernav.php'); ?>
    <div class="main  body-top">
        <article>
        <h1>Shopping Cart</h1>

<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>

<?php
$sql1 = "SELECT * FROM users where username='".$_SESSION['user_id']."'  limit 1;";
$result1 = mysqli_query($con,$sql1);
$value1=mysqli_fetch_assoc($result1);
$sql2 = "SELECT * FROM cart where userid=".$value1["userid"].";";
$result2=mysqli_query($con,$sql2);
while($cart = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
  //echo $cart["productid"];
  $sql="SELECT * FROM products where productid=".$cart["productid"].";";
  $result=mysqli_query($con,$sql);
  while($productinfo = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    //echo $productinfo["name"];
    $img=$productinfo['img1'];
  echo  "<div class='product' id='cart".$cart['cartid']."'>
    <div class='product-image'>
      <img src='data:image/jpeg;base64,".base64_encode($img)."' />
    </div>
    <div class='product-details'>
      <div class='product-title'>".$productinfo['name']."</div>
      <p class='product-description'>".$productinfo['description']."</p>
    </div>
    <div class='product-price'>".$productinfo['price']."</div>
    <div class='product-quantity'>
      <input type='number' data-id=".$cart['cartid']." value='".$cart['quantity']."' min='1'>
    </div>
    <div class='product-removal'>
      <button class='remove-product' data-id='".$cart['cartid']."'>
        Remove
      </button>
    </div>
    <div class='product-line-price'>".$productinfo['price']."</div>
  </div>";
  
  }
}
?>

<!-- 
  <div class="product">
    <div class="product-image">
      <img src="https://s.cdpn.io/3/large-NutroNaturalChoiceAdultLambMealandRiceDryDogFood.png">
    </div>
    <div class="product-details">
      <div class="product-title">Nutro™ Adult Lamb and Rice Dog Food</div>
      <p class="product-description">Who doesn't like lamb and rice? We've all hit the halal cart at 3am while quasi-blackout after a night of binge drinking in Manhattan. Now it's your dog's turn!</p>
    </div>
    <div class="product-price">45.99</div>
    <div class="product-quantity">
      <input type="number" value="1" min="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price">45.99</div>
  </div> -->

  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal">71.97</div>
    </div>
    <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total">90.57</div>
    </div>
  </div>
      
      <button class="checkout">Checkout</button>

</div>
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
    <script src="/101PRESENTS/assets/js/cart.js"></script>
    <script src="/101PRESENTS/assets/js/notificationbox.js"></script>
    <script type="text/javascript">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/jscode.php'); ?> 
navigator.serviceWorker.getRegistrations().then(
function(registrations) {
    for(let registration of registrations) {  
        registration.unregister();
    }
});
$(document).ready(function(){
  recalculateCart()
    })
    </script>
</body>

</html>