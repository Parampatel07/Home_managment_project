<?php
require_once("inc/header.php");
require_once("inc/check_customer_login.php");
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
                        <h2 class="page-banner-title">Change password</h2>
                      
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
                        <form action="" name="myform" id="myform" enctype="multipart/form-data" method="post">
                            <div class="registered-customers">
                                <h2 class="login-title text-center">Change password</h2>
                                <?php
                        require_once("inc/message.php");
                        ?>
                                <div class="registered">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for="">Enter your old password</label>
                                            <input type="password" class="custom-form" name="oldpassword" placeholder="current password" required />
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="">Enter your new password</label>
                                            <input type="password" class="custom-form" name="newpassword" placeholder="New password"  required />
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="">Confirm password</label>
                                            <input type="password" class="custom-form" name="conspassword" placeholder="Confirm password"  required/>
                                        </div>
                                    </div>
                                    <div class="float-end">
                                        <button type="button" id="btnsubmit" class="custom-submit-2">Change</button>
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
    <script>
        $(document).ready(function() {
            console.log("Jquery Working");
            $('body').on('click', '#btnsubmit', function() {
                var page = "ajax/update_password.php";
                if ($('#myform').valid() == true) {
                    $.post(page, $('#myform').serialize(), function(data, status) {
                        console.log(data, status);
                        $(location).attr('href','change_password.php');
                    });
                }
            });
        });
    </script>
</body>

</html>