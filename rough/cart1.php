<head>
    <title>Product-Info | 101PRESENTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/head.php'); ?>
    <link rel="stylesheet" type="text/css" href="/101PRESENTS/css/cart.css">
    
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
        <div class="main">
  <h1>Shopping cart</h1>
  <h2 class="sub-heading">Free shipping from $100!</h2>

  <section class="shopping-cart">
    <ol class="ui-list shopping-cart--list" id="shopping-cart--list">

      <script id="shopping-cart--list-item-template" type="text/template">
        <li class="_grid shopping-cart--list-item">
          <div class="_column product-image">
            <img class="product-image--img" src="{{=img}}" alt="Item image" />
          </div>
          <div class="_column product-info">
            <h4 class="product-name">{{=name}}</h4>
            <p class="product-desc">{{=desc}}</p>
            <div class="price product-single-price">${{=price}}</div>
          </div>
          <div class="_column product-modifiers" data-product-price="{{=price}}">
            <div class="_grid">
              <button class="_btn _column product-subtract">&minus;</button>
              <div class="_column product-qty">0</div>
              <button class="_btn _column product-plus">&plus;</button>
            </div>
            <button class="_btn entypo-trash product-remove">Remove</button>
            <div class="price product-total-price">$0.00</div>
          </div>
        </li>
      </script>

    </ol>

    <footer class="_grid cart-totals">
      <div class="_column subtotal" id="subtotalCtr">
        <div class="cart-totals-key">Subtotal</div>
        <div class="cart-totals-value">$0.00</div>
      </div>
      <div class="_column shipping" id="shippingCtr">
        <div class="cart-totals-key">Shipping</div>
        <div class="cart-totals-value">$0.00</div>
      </div>
      <div class="_column taxes" id="taxesCtr">
        <div class="cart-totals-key">Taxes (6%)</div>
        <div class="cart-totals-value">$0.00</div>
      </div>
      <div class="_column total" id="totalCtr">
        <div class="cart-totals-key">Total</div>
        <div class="cart-totals-value">$0.00</div>
      </div>
      <div class="_column checkout">
        <button class="_btn checkout-btn entypo-forward">Checkout</button>
      </div>
    </footer>

  </section>
</div>
        </article>
        <aside class="rightaside">
        </aside>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/footer.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/notificationbox.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/loading.php'); ?>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/products.js"></script>
    <script src="js/notificationbox.js"></script>
    <script src="js/cart.js"></script>
    <script type="text/javascript">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/jscode.php'); ?> 
    </script>
</body>

</html>