<div id='notification-box'>
<!----- first div(open btn) ----->
    <div class='button-notification-box'><button onclick='openAndCloseNotificationBox()'>
            <!-- notification btn ---></button></div>
    <!----- first div(open btn) ends ----->
    <!----- content section ----->
    <div id='notification-content-section'>
        <!----- text section ----->
        <div id='text-section-notification-box'>
            <h2>New</h2>
            <?php
            include($_SERVER['DOCUMENT_ROOT']."/101PRESENTS/db.php");
                $sql = "SELECT * FROM products where notification=1;";
                $result=mysqli_query($con,$sql);
                while($productinfo = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    echo "
                        <!--- row 1 ---->
                        <div class='rows-notification-box'>
                            <div class='head-section-notification-row'>
                                <h4>".$productinfo['name']."</h4>
                                <span></span>
                            </div>
                            <div class='details-notification-row'>".$productinfo['description']."</div>
                            <div class='bottom-section-notification-row'>
                                <a href='/101PRESENTS/products-info.php?id=".$productinfo['productid']."'>
                                    <span>more info..</span>
                                    <img src='/101PRESENTS/assets/images/icon/external-link-blue.png'>
                                </a>
                            </div>
                        </div>";
                }
            ?>

        </div>
        <!----- text section ends ----->
    </div>
    <!----- content section ends ----->
    <div class='button-notification-box'><button onclick='openAndCloseNotificationBox()'>
    </button></div>

</div>

