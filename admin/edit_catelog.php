<?php
require_once("inc2/header.php");
require_once("../inc/connection.php");
require_once("inc2/check_service_login.php");
?>
</head>

<body>
    <div class="splash active">
        <div class="splash-icon"></div>
    </div>
    <div class="wrapper">
        <?php
        require_once("inc2/service_menu.php");
        ?>
        <div class="main">
            <?php
            require_once("inc2/service_logout.php");
            ?>
            <main class="content">
                <div class="container-fluid">
                    <div class="header">
                        <h1 class="header-title">
                            Catalogue Management
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h1 class="card-title mb-5">Add Catalogue</h1>
                                    <?php
                                    require_once("../inc/message.php");
                                    ?>
                                </div>
                                <div class="card-body" style="margin-top: -40px;">
                                    <div class="my-5">&nbsp;
                                        <form method="post" name="form1" id="form1" enctype="multipart/form-data" data-id=<?php echo $_REQUEST['catelogid'] ?>>
                                            <div class="row">
                                                <?php
                                                $catid = base64_decode($_REQUEST['catelogid']); // this function is used to decode javascript windows.btoa and may also work on other enctprytion
                                                // echo $catid;
                                                $sql = "SELECT * from catelog where id=?";
                                                $stat = $db->prepare($sql);
                                                $stat->bindparam(1, $catid);
                                                $stat->setFetchMode(PDO::FETCH_ASSOC);
                                                $stat->execute();
                                                $row = $stat->fetch();
                                                // var_dump($row);

                                                ?>
                                                <div class="col-6 mb-5">
                                                    <label for="" class="form-label">
                                                        Enter title
                                                    </label>
                                                    <input type="hidden" name="catelogid" value="<?php echo $catid?>">
                                                    <input type="text" class="form-control" name="title" placeholder="Enter Title for catalogue" value="<?php echo $row['title'];  ?>">
                                                </div>
                                                <div class="col-6 mb-5">
                                                    <label for="" class="form-label">
                                                        Enter details
                                                    </label>
                                                    <textarea class="form-control" onkeyup="textAreaAdjust(this)" placeholder="Textarea" name="description" rows="1"><?php echo $row['detail'];  ?></textarea>
                                                </div>
                                                <div class="col-6 mb-5">
                                                    <label for="" class="form-label">
                                                        Enter amount
                                                    </label>
                                                    <input type="number" class="form-control" name="amount" placeholder="Enter amount for catalogue" value="<?php echo $row['amount'] ?>">
                                                </div>
                                                <div class="col-6 mb-5">
                                                    <label for="image" class="form-label">
                                                        Select photo
                                                    </label>
                                                    <input type="file" class="form-control" accept="image/*" name="image" id="image">
                                                </div>
                                                <div class="col-12 mb-2" align="center">
                                                    <img id="oldimage" src="images/catelog/<?php echo $row['photo']  ?>" data-image="<?php echo $row['photo']  ?>" class="img-fluid" alt="">
                                                </div>
                                                <div class="text-end">
                                                    <input class="btn btn-primary" type="submit" id="update" value="update">
                                                    <a class="btn btn-danger" href="service_catelog.php">Back</a>
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
        function textAreaAdjust(element) {
            element.style.height = "1px";
            element.style.height = (25 + element.scrollHeight) + "px";
        }
        $(document).ready(function() {
            console.log("Jquery working");
            var catelogid = $('#form1').attr('data-id');
            catelogid = window.atob(catelogid);
            var oldimage=$("#oldimage").attr('data-image');
            // alert(catelogid);
            $("#form1").on('submit', (function(e) {
                e.preventDefault();
                $.ajax({
                    url: "submit/update_catelog.php?oldimage="+oldimage,
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        alert(data);
                    }
                });

            }));
        })
    </script>
</body>

</html>