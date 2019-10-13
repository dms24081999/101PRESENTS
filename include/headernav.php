<header>
        <div class="nav-container">
            <nav>
                <div class="menu-icons">
                    <i class="fa fa-bars"></i>
                    <i class="fa fa-close"></i>
                </div>
                <a href="index.php" class="logo">
                    <img src="/101PRESENTS/assets/images/logo/main-logo.png" width="140px" height="25px" style="display:block;float:left;margin-top: 0px;">
                </a>
                <ul class="nav-list">
                    <li>
                        <a href="/101PRESENTS/index.php" >Home</a>
                    </li>
                    <li>
                        <a href="#">Products
                            <i class="icon ion-md-arrow-dropdown"></i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="/101PRESENTS/products.php#goggles">Sun-glasses</a>
                            </li>
                            <li>
                                <a href="/101PRESENTS/products.php#flowers">Flowers</a>
                            </li>
                            <!-- <li>
                                <a href="/101PRESENTS/products.php#chocolates">Chocolates</a>
                            </li>
                            <li>
                                <a href="/101PRESENTS/products.php#cakes">Cakes</a>
                            </li> -->
                            <li>
                                <a href="#">More...
                                    <i class="icon ion-md-arrow-dropdown"></i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="/101PRESENTS/products.php#chocolates">Chocolates</a>
                                    </li>
                                    <li>
                                        <a href="/101PRESENTS/products.php#cakes">Cakes</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/101PRESENTS/about.php">About</a>
                    </li>
                    <ul class="move-right">
                    <?php
                        if ( isset( $_SESSION['user_id'] ) ) {
                            echo "<li><a href='#'>Account
                                <i class='icon ion-md-arrow-dropdown'></i></a>
                                <ul class='auth sub-menu' style=''>
                                    <li>
                                        <a href='/101PRESENTS/updateprofile.php'>Update Profile</a>
                                    </li>
                                    <li>
                                        <a href='/101PRESENTS/cart.php'>My Cart</a>
                                    </li>
                                    <li>
                                    <a href='/101PRESENTS/logout.php'>Logout</a>
                                    </li>
                                </ul></li>";
                        } else {
                            echo "<li class=' btn'>
                                <a class='ripplelink primary ' style='' href='/101PRESENTS/signin.php'>Sign-In</a>
                                </li>
                                <li class=' btn'>
                                    <a class='ripplelink primary ' style='' href='/101PRESENTS/signup.php'>Sign-Up</a>
                                </li>";
                        } 
                    ?>
                      
                        
                    </ul>
                </ul>
            </nav>
        </div>
    </header>