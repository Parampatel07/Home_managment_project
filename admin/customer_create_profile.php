<?php
// session_start();
require_once("../inc/check_customer_login.php");
require_once("inc2/header.php");
?>
</head>

<body>
    <div class="splash active">
        <div class="splash-icon"></div>
    </div>
    <div class="wrapper">
        <?php
        // require_once("inc/service_menu.php");
        ?>
        <div class="main">
            <main class="content">
                <div class="container-fluid">
                    <div class="header">
                        <h1 class="header-title">
                            Create your profile
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Create profile</h5>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                        <form action="" method="POST" id="form1" enctype="multipart/form-data" name="form1">
                                            <div class="row">
                                                <div class="col-lg-4 mb-5">
                                                    <label for="" class="form-label">
                                                        Enter your email
                                                    </label>
                                                    <input type="email" name="email" class="form-control" placeholder="Enter your name" required>
                                                </div>
                                                <div class="col-lg-4 mb-5">
                                                    <label for="" class="form-label">
                                                        Set password
                                                    </label>
                                                    <input type="password" name="password" class="form-control" placeholder="Enter your name" required>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <label class="form-label">Mobile number</label>
                                                    <input type="number" name="mob" class="form-control" placeholder="Enter mobile number " required>
                                                </div>
                                                <div class="col-lg-4 mb-5">
                                                    <label for="" class="form-label">
                                                        Enter your name
                                                    </label>
                                                    <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                                                </div>
                                                <div class="col-lg-4 mb-5">
                                                    <label for="" class="form-label">
                                                        Enter your surname
                                                    </label>
                                                    <input type="text" name="surname" class="form-control" placeholder="Enter your surname" required>
                                                </div>
                                                <div class="col-lg-4 mb-5">
                                                    <label for="" class="form-label">
                                                        Enter your father name
                                                    </label>
                                                    <input type="text" name="father_name" class="form-control" placeholder="Enter your father name" required>
                                                </div>
                                                <div class="col-lg-2 mt-2">
                                                    <label for="">Select Gender</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"  name="gender" id="Male" value="1" checked>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Male
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"  name="gender" id="Female" value="2" >
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Female
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 mb-3">
                                                    <label class="form-label">Enter address 1</label>
                                                    <textarea class="form-control" required placeholder="address 1" rows="2" name="address1"></textarea>
                                                </div>
                                                <div class="col-lg-5 mb-3">
                                                    <label class="form-label">Enter address 2</label>
                                                    <textarea class="form-control" required placeholder="address 2" rows="2" name="address2"></textarea>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-5">
                                                        <label for="" class="form-label">
                                                            Enter City
                                                        </label>
                                                        <input type="text" name="city" class="form-control" placeholder="Enter City" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-5">
                                                        <label for="" class="form-label">
                                                            Enter State
                                                        </label>
                                                        <input type="text" name="state" class="form-control" placeholder="Enter state" required>
                                                    </div>
                                                </div>
                                                <div class="text-end mt-4">
                                                    <button type="button" id="btnsubmit" class="btn btn-primary">Create profile</button>
                                                    <input type="reset" value="Clear all" class="btn btn-danger">
                                                    <a href="../register.php" class="btn btn-warning">Back</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php
    require_once("inc2/script.php");
    ?>
    <script>
        $(document).ready(function() {
            console.log("Jquery working");
            $('body').on('click','#btnsubmit',function(){
                if($('#form1').valid()==true)
                {
                    var page="submit/create_custome_profile2.php"
                    $.post(page,$('#form1').serialize(),function(data,status){
                        console.log(data,status);
                        $(location).attr('href','../index.php');
                    });
                }
            });
        });
    </script>
</body>

</html>