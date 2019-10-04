const selectElement=(element)=>document.querySelector(element);
selectElement('.menu-icons').addEventListener('click',()=>{
    selectElement('nav').classList.toggle('active');
});


// <header>
//         <div class="nav-container">
//             <nav>
//                 <div class="menu-icons">
//                     <i class="fa fa-bars"></i>
//                     <i class="fa fa-close"></i>
//                 </div>
//                 <a href="home.html" class="logo">
//                     <img src="img/main-logo.png" width="140px" height="25px" style="display:block;float:left;margin-top: 0px;">
//                 </a>
//                 <ul class="nav-list">
//                     <li>
//                         <a href="">Home</a>
//                     </li>
//                     <li>
//                         <a href="#">Products
//                             <i class="icon ion-md-arrow-dropdown"></i></a>
//                         <ul class="sub-menu">
//                             <li>
//                                 <a href="">Sun-glasses</a>
//                             </li>
//                             <li>
//                                 <a href="">Flowers</a>
//                             </li>
//                             <li>
//                                 <a href="">Chocolates</a>
//                             </li>
//                             <li>
//                                 <a href="">Cakes</a>
//                             </li>
//                             <li>
//                                 <a href="#">More...
//                                     <i class="icon ion-md-arrow-dropdown"></i></a>
//                                 <ul class="sub-menu">
//                                     <li>
//                                         <a href="#">Watches
//                                             <i class="icon ion-md-arrow-dropdown"></i></a>
//                                         <ul class="sub-menu">
//                                             <li>
//                                                 <a href="">Digital</a>
//                                             </li>
//                                             <li>
//                                                 <a href="">Analog</a>
//                                             </li>
//                                         </ul>
//                                     </li>
//                                     <li>
//                                         <a href="">Clothes</a>
//                                     </li>
//                                 </ul>
//                             </li>
//                         </ul>
//                     </li>
//                     <li>
//                         <a href="">About</a>
//                     </li>
//                     <!-- <ul class="move-right">
//                         <li class=" btn">
//                             <a href="">Sign-In</a>
//                         </li>
//                         <li class=" btn">
//                             <a href="">Sign-Up</a>
//                         </li>
//                     </ul> -->
//                     <ul class="move-right">
//                         <li class=" btn">
//                              <a class="ripplelink primary " style="" href="signin.html">Sign-In</a>
//                         </li>
//                         <li class=" btn">
//                             <a class="ripplelink primary " style="" href="signup.html">Sign-Up</a>
//                         </li>
//                     </ul>
//                 </ul>
//             </nav>
//         </div>
       
//     </header>