<?php
require_once("inc/header.php");
?>
</head>

<body>
    <!-- Main Wrapper Start -->
    <!--header area start-->
    <?php
require_once("inc/menu.php");
?>
    <!--header area end-->
    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay">
    </div>
  
    <!--Offcanvas menu area end-->
    <!--error section area start-->
    <!-- customer login start -->
    <div class="customer_login mt-60 ">
        <div class="container">
            <div class="row">
               <!--login area start-->
                <div class="col-lg-6 offset-lg-3 col-md-6">
                    <div class="account_form" style="">
                        <h2 class="text-center">login</h2>
                        <form action="#">
                            <p>   
                                <label>Username or email <span>*</span></label>
                                <input type="text">
                             </p>
                             <p>   
                                <label>Passwords <span>*</span></label>
                                <input type="password">
                             </p>   
                            <div class="login_submit">
                               <a href="#">Lost your password?</a>
                                <!-- <label for="remember">
                                    <input id="remember" type="checkbox">
                                    Remember me
                                </label> -->
                                <button type="submit">login</button>
                                
                            </div>

                        </form>
                     </div>    
                </div>
                <!--login area start-->
            </div>
        </div>    
    </div>
    <!-- customer login end -->
    <!--brand area end-->
    <!--footer area start-->
   <?php
require_once("inc/script.php")
   ?>
</body>
</html>