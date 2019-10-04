//Add responsive properties to selectors when menu item is presswd to open menu
function ResponsiveNav() {
    var x = document.getElementById("topNavID");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


//Indication on navbar, about which section is active/viewed in browser
$(document).ready(function() { // $divs includes all of the container divs that relate to menu items.
    var $divs = $('section'); // The user scrolls
    $(window).scroll(function() { // currentScroll is the number of pixels the window has been scrolled
        var currentScroll = $(this).scrollTop(); // $currentdiv is somewhere to place the div we must be looking at
        var $currentdiv // We check the position of each of the divs compared to the windows scroll positon
        $divs.each(function() { // divPosition is the position down the page in px of the current div we are testing      
            var divPosition = $(this).offset().top; // If the divPosition is less the the currentScroll position the div we are testing has moved above the window edge.     
            if (divPosition - 1 < currentScroll) { // the -1 is so that it includes the div 1px before the div leave the top of the window.
                $currentdiv = $(this); // We have either read the div or are currently reading the div so we'll call it our current div
                // If the next div has also been read or we are currently reading it we will overwrite this value again. This will leave us with the LAST div that passed.
            }
            var id = $currentdiv.attr('id'); // This is the bit of code that uses the currentdiv as its source of ID
            $('a').removeClass('active');
            $("[href='#" + id + "']").addClass('active');
        })
    });
});


//Only for Parallax Home
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










//For Home with Parallax
// <header>
//         <nav id="topNavID" class="topnav">
//             <a href="#home" id="logo" class="a capital nav-item-cont logo"><img src="img/main-logo.png" width="140px" height="25px" style="display:block;float:left;margin-top: 0px;"></a>
//             <div class="dropdown mt-5 nav-item-cont">
//                 <a href="#products">
//                     <button class="dropbtn capital nav-item " style="cursor: pointer;">Products
//                         <i class="fa fa-caret-down"></i> <!-- onclick="window.location.href = 'products.html';" -->
//                     </button>
//                 </a>
//                 <div class="dropdown-content">
//                     <a href="products.html#goggles">Sun-glasses</a>
//                     <a href="products.html#flowers">Flowers</a>
//                     <a href="products.html#chocolates">Chocolates</a>
//                     <a href="products.html#cakes">Cake</a>
//                 </div>
//             </div>
//             <!-- <a href="products.html" class="mt-5 capital">Products</a> -->
//             <a href="#about" class="a mt-5 capital nav-item nav-item-cont">About</a>
//             <div class="login nav-item-cont">
//                 <a class="ripplelink a primary signinbutton nav-item " style="padding: 8px 20px" href="signin.html">Sign-In</a>
//                 <a class="ripplelink a primary signupbutton nav-item " style="padding: 8px 20px" href="signup.html">Sign-Up</a>
//             </div>
//             <a href="javascript:void(0);" class="a icon" onclick="ResponsiveNav()">
//                 <i class="fa fa-bars"></i>
//             </a>
//         </nav>
//     </header> 












//For other
// <header>
//         <nav id="topNavID" class="topnav">
//             <a href="home.html" id="logo" class="a capital nav-item-cont logo"><img src="img/main-logo.png" width="140px" height="25px" style="display:block;float:left;margin-top: 0px;"></a>
//             <div class="dropdown mt-5 nav-item-cont">
//                 <a href="products.html">
//                     <button class="dropbtn capital nav-item " style="cursor: pointer;">Products
//                         <i class="fa fa-caret-down"></i> <!-- onclick="window.location.href = 'products.html';" -->
//                     </button>
//                 </a>
//                 <div class="dropdown-content">
//                     <a href="products.html#goggles">Sun-glasses</a>
//                     <a href="products.html#flowers">Flowers</a>
//                     <a href="products.html#chocolates">Chocolates</a>
//                     <a href="products.html#cakes">Cake</a>
//                 </div>
//             </div>
//             <!-- <a href="products.html" class="mt-5 capital">Products</a> -->
//             <a href="about.html" class="a mt-5 capital nav-item nav-item-cont">About</a>
//             <div class="login nav-item-cont">
//                 <a class="ripplelink a primary signinbutton nav-item " style="padding: 8px 20px" href="signin.html">Sign-In</a>
//                 <a class="ripplelink a primary signupbutton nav-item " style="padding: 8px 20px" href="signup.html">Sign-Up</a>
//             </div>
//             <a href="javascript:void(0);" class="a icon" onclick="ResponsiveNav()">
//                 <i class="fa fa-bars"></i>
//             </a>
//         </nav>
//     </header>   