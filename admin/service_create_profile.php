<?php
session_start();
require_once("inc2/header.php");
require_once("../inc/connection.php");
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
                    <?php
                    $sql = "SELECT * FROM `category`; ";
                    $stat = $db->prepare($sql);
                    $stat->setFetchMode(PDO::FETCH_ASSOC);
                    $stat->execute();
                    $row = $stat->fetchAll();
                    ?>
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
                                                <div class="col-4">
                                                    <div class="mb-5">
                                                        <label for="" class="form-label">
                                                            Enter slogan here
                                                        </label>
                                                        <input type="text" name="title" class="form-control" placeholder="Enter company name / service name" required>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mb-5">
                                                        <label for="" class="form-label">
                                                            Select logo
                                                        </label>
                                                        <input type="file" accept="image/*" name="logo" class="form-control" required>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="mb-5">
                                                        <label for="" class="form-label">
                                                            Select Category
                                                        </label>
                                                        <select class="form-select" name="categoryid" id="cateory" required>
                                                            <option value="">Select Category</option>
<?php
foreach($row as $key)
{
?>
                                                            <option value="<?= $key['id']?>"><?= $key['title'] ?></option>
                                                            <?php
}
?>                                                          
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-4 mb-5">
                                                    <label for="" class="form-label">
                                                        Enter your name
                                                    </label>
                                                    <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                                                </div>
                                                <div class="col-4 mb-5">
                                                    <label for="" class="form-label">
                                                        Enter your surname
                                                    </label>
                                                    <input type="text" name="surname" class="form-control" placeholder="Enter your surname" required>
                                                </div>
                                                <div class="col-4 mb-5">
                                                    <label for="" class="form-label">
                                                        Enter your father name
                                                    </label>
                                                    <input type="text" name="father_name" class="form-control" placeholder="Enter your father name" required>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <label class="form-label">Enter address 1</label>
                                                    <textarea class="form-control" name="address1" required placeholder="address 1" rows="2"></textarea>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <label class="form-label">Enter address 2</label>
                                                    <textarea class="form-control" name="address2" required placeholder="address 2" rows="2"></textarea>
                                                </div>
                                                <div class="text-end mt-4">
                                                    <input type="submit" class="btn btn-primary" id="create_profile" value="Create profile">
                                                    <input type="reset" value="Clear all" class="btn btn-danger">
                                                    <a class="btn btn-danger" href="../index.php" class="btn btn-danger">Back</a>
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
        $(document).ready(function(){
            console.log('Jquery working');
            $("#form1").on('submit', (function(e) {
                e.preventDefault();
                $.ajax({
                    url: "../ajax/service_create_profile.php",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        console.log(data);
                        $(location).attr('href','../index.php');
                    }
                });
            }));
        });
    </script>
</body>
</html>