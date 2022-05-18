<?php
require_once("inc/header.php")
?>
</head>

<body>
    <?php
require_once("inc/menu.php")
?>
    <!-- do work area -->

    <!-- PAGE-CONTENT START -->
    <section class="page-content">
        <!-- PAGE-BANNER START -->
        <div class="page-banner-area  margin-bottom-80">
            <div class="container">
                <!-- <div class="row"> -->
                    <div class="col-lg-12">
                        <div class="page-banner-menu">
                            <h2 class="page-banner-title">Login</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGE-BANNER END -->
        <!-- LOGIN-AREA START -->
        <div class="lognin-area">
            <div class="container">
                <div class="row">
                    <!-- Registered-Customers Start -->
                    <div class="col-lg-6 offset-lg-3">
                        <form action="#">
                            <div class="registered-customers">
                                <h2 class="login-title text-center">Login</h2>
                                <div class="registered">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="text" class="custom-form" name="email"
                                                placeholder="Email Address" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="password" class="custom-form" placeholder="Password" />
                                        </div>
                                    </div>
                                    <p><label class="forgot"><a href="forgot_password.php">Forgot your password?</a></label></p>
                                    <div class="float-end">
                                        <input type="submit" class="custom-submit-2 " value="login" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- LOGIN-AREA END -->
    </section>
    <!-- PAGE-CONTENT END -->

    <!-- end of do work area -->

    <?php
require_once("inc/footer.php");
?>
    <?php
require_once("inc/script.php");
?>
</body>

</html>