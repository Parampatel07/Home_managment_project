<?php
require_once("inc2/header.php");
require_once("../inc/connection.php");
require_once("inc2/check_admin_login.php");
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
                                    <h1 class="mb-0">Insert category</h1>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                        <form action="submit/insert_category.php" method="POST" enctype="multipart/form-data" name="form1">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Enter title here
                                                        </label>
                                                        <input type="text" name="title" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Select photo for category
                                                        </label>
                                                        <input type="file" name="photo" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-12">
                                                    <label class="form-label">Enter description of category</label>
                                                    <textarea class="form-control" placeholder="Textarea" name="description" required rows="2"></textarea>
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
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title mb-0">View category</h2>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                        <?php
                                        try {
                                            $sql = "SELECT * FROM category ORDER by id desc";
                                            $statement = $db->prepare($sql);
                                            $statement->setFetchMode(PDO::FETCH_ASSOC);
                                            $statement->execute();
                                            $table = $statement->fetchall();
                                        } catch (PDOException $error) {
                                            LogError($error, __FILE__);
                                        }
                                        ?>
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Sr no.</th>
                                                    <th width="50%">Title</th>
                                                    <th>Image</th>
                                                    <th width="40%">Description</th>
                                                    <th>Operations</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count = 1;
                                                foreach ($table as $row) {
                                                    // var_dump($row);
                                                ?>
                                                    <tr>
                                                        <td><?= $count++  ?></td>
                                                        <td width="15%"><?= $row['title'] ?></td>
                                                        <td><img src="images/category/<?= $row['photo'] ?>" width="100px" alt=""></td>
                                                        <td><?= $row['description'] ?></td>
                                                        <td>
                                                            <h2>
                                                                <a href="update_category.php?categoryid=<?php echo $row['id']; ?>"> <i class="align-middle me-2 fas fa-fw fa-edit"></i></a>
                                                                <a href="delete_category.php?categoryid=<?php echo $row['id']; ?>&photo=<?= $row['photo'] ?>"><i class="align-middle me-2 fas fa-fw fa-trash-alt"></i></a>
                                                            </h2>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
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