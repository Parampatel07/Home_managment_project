<?php
require_once("inc2/header.php");
require_once("../inc/connection.php");
require_once("inc2/check_admin_login.php");
$sql="SELECT * from category where id =?";
try
{
    $statement=$db->prepare($sql);
    $statement->bindparam(1,$_REQUEST['categoryid']);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $statement->execute();
    $row=$statement->fetch();
    // var_dump($row);
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
?>
</head>

<body>
    <div class="splash active">
        <div class="splash-icon"></div>
    </div>
    <div class="wrapper">
        <?php
        require_once("inc2/menu.php");
        ?>
        <div class="main">
            <?php
            require_once("inc2/logout.php")
            ?>
            <main class="content">
                <div class="container-fluid">
                    <div class="header">

                        <h1 class="header-title">
                            Category Management
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <?php
                                require_once("../inc/message.php");
                                ?>
                                <div class="card-header">
                                    <h1 class="mb-0">Update category</h1>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                        <form action="submit/edit_category.php" method="POST" enctype="multipart/form-data" name="form1">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Enter title here
                                                        </label>
                                                        <input type="text" name="title" value="<?php echo $row['title']; ?>" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Select photo for category
                                                        </label>
                                                        <input type="file" name="photo" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-12">
                                                    <label class="form-label">Enter description of category</label>
                                                    <textarea class="form-control" name="description" rows="2"> <?= $row['description']; ?></textarea>
                                                    <input type="hidden" name="categoryid" value="<?= $row['id']; ?>">
                                                    <input type="hidden" name="oldimage" value="<?= $row['photo'] ?>">
                                                </div>

                                                <div class="mb-3 col-lg-5 offset-lg-3">
                                                    <img src="images/category/<?= $row['photo'] ?>" height="350px"  class="img-fulid" alt="">
                                                </div>
                                                <div class="mt-2 text-end">
                                                    <input type="submit" name="submit" class="btn btn-primary" value="Save category">
                                                    <input type="reset" name="reset" class="btn btn-danger" value="Cancel">
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
</body>
</html>