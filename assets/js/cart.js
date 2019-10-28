/* Set rates + misc */
var taxRate = 0.05;
var shippingRate = 15.00; 
var fadeTime = 300;


/* Assign actions */
$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal button').click( function() {
  del_id=$(this).attr("data-id");
  thisid=$(this)
  // console.log("hello")
  console.log($(this).attr("data-id"))
  $.ajax({
    type:'POST',
    url:'ajax/deletecart.php',
    data:{del_id:del_id},
    success: function(data){
      console.log(data)
         if(data=="YES"){
           console.log("del")
            removeItem(thisid);
         }else{
             alert("Can't delete the row")
         }
    }
  })
});


/* Recalculate cart */
function recalculateCart(){
  var subtotal = 0;
  
  /* Sum up row totals */
  $('.product').each(function () {
    subtotal += parseFloat($(this).children('.product-line-price').text());
  });
  
  /* Calculate totals */
  var tax = subtotal * taxRate;
  var shipping = (subtotal > 0 ? shippingRate : 0);
  var total = subtotal + tax + shipping;
  
  /* Update totals display */
  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-tax').html(tax.toFixed(2));
    $('#cart-shipping').html(shipping.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}


/* Update quantity */
function updateQuantity(quantityInput){
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.product-price').text());
  var quantity = $(quantityInput).val();
  var prodid=$(quantityInput).attr("data-id");
  console.log("data"+prodid)
  var linePrice = price * quantity;
  $.ajax({
    type:'POST',
    url:'ajax/updatecart.php',
    data:{
      prodid:prodid,
      quantity:quantity
    },
    success: function(data){
      console.log(data)
         if(data=="YES"){
           console.log("upd")
           productRow.children('.product-line-price').each(function () {
            $(this).fadeOut(fadeTime, function() {
              $(this).text(linePrice.toFixed(2));
              recalculateCart();
              $(this).fadeIn(fadeTime);
            });
          }); 
         }else{
             alert("can't upd the row")
         }
    }
  })
  /* Update line price display and recalc cart totals */
   
}


/* Remove item from cart */
function removeItem(removeButton){
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
  });
}