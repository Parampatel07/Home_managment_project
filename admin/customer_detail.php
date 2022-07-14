<?php
require_once("../inc/connection.php");
require_once("inc2/check_admin_login.php");
require_once("inc2/header.php");
$sql = "SELECT * FROM customer WHERE id=?";
try {
    $statement = $db->prepare($sql);
    $statement->setfetchmode(PDO::FETCH_ASSOC);
	$statement->bindparam(1,$_REQUEST['customerid']);
    $statement->execute();
    $table = $statement->fetch();
    // var_dump($table);
} catch (PDOException $error) {
    LogError($error, __FILE__);
}
// var_dump($_REQUEST);
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
            <main class="content">
                <div class="container-fluid">
                    <div class="header">
                        <h1 class="header-title">
                            Customer info
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-xxl-3">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="mb-0"><?= $table['name']; ?>&nbsp; <?= $table['surname'] ?></h2>
                                </div>
                                <div class="card-body">
                                    <table class="table table-sm my-2">
                                        <tbody>
                                            <tr>
                                                <th>Name</th>
                                                <td><?= $table['name'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>surname</th>
                                                <td><?= $table['surname'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>father name</th>
                                                <td><?= $table['fathername'] ?></td>
                                            </tr>
                                            <tr>
                                                <?php
													if($table['gender']=='1')
													{
														$gender="male";
													}
													elseif($table['gender']=='2')
													{
														$gender="female";
													}
												?>
                                                <th>Gender</th>
                                                <td><?= $gender ?></td>
                                            </tr>
                                            <tr>
                                                <th>address1</th>
                                                <td><?= $table['address1'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>address2</th>
                                                <td><?= $table['address2'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>city</th>
                                                <td><?= $table['city'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>State</th>
                                                <td><?= $table['state'] ?></td>
                                            </tr>
                                            <th>mobile</th>
                                            <td><?= $table['mobile'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td><?= $table['email'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
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