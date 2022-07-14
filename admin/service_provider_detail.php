<?php
require_once("../inc/connection.php");
require_once("inc2/check_admin_login.php");
require_once("inc2/header.php");
$sql = "SELECT sp.*, c.title`ctitle` from service_provider sp, category c  where sp.categoryid=c.id and sp.id=?";

try {
    $statement = $db->prepare($sql);
    $statement->bindparam(1, $_REQUEST['s_proid']);
    $statement->setfetchmode(PDO::FETCH_ASSOC);
    $statement->execute();
    $table = $statement->fetch();
    // var_dump($table);
} catch (PDOException $error) {
    LogError($error, __FILE__);
}
?>
<style>
    *
    {
        text-transform: capitalize;
    }
</style>
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
                            Service providers
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-xxl-3">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="mb-0" style="text-transform: capitalize;"><?= $table['title'] ?></h2>
                                </div>
                                <div class="card-body">
                                    <div class="row g-0">
                                        <div class="col-sm-3 col-xl-12 col-xxl-4 text-center">
                                            <img src="images/service_provider/<?= $table['logo'] ?>" width="84" height="84" class="rounded-circle mt-2" alt="Angelica Ramos">
                                            <br>
                                            <span>Logo of <?= $table['title'] ?></span>
                                        </div>
                                        <div class="col-sm-9 col-xl-12 col-xxl-8">
                                            <strong>Slogan</strong>
                                            <p><?= $table['slogan'] ?></p>
                                        </div>
                                    </div>

                                    <table class="table table-sm my-2">
                                        <tbody>
                                            <tr>
                                                <th>Title</th>
                                                <td><?= $table['title'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>category</th>
                                                <td><?= $table['ctitle'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>name</th>
                                                <td><?= $table['name'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Surname</th>
                                                <td><?= $table['surname'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>father name </th>
                                                <td><?= $table['father_name'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>email</th>
                                                <td><?= $table['email'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>mobile number1</th>
                                                <td><?= $table['mobile'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>address 1</th>
                                                <td><?= $table['address1'] ?></td>
                                            </tr>
                                            <th>address 2</th>
                                            <td><?= $table['address2'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h1 style="display: inline;" class="mb-0">Total Catelog by - name of provider</h1>
                                    <div class="text-end">
                                        <a style="display: inline;" class="btn btn-success" href="specific_service.php?s_proid=<?= $_REQUEST['s_proid']; ?>">View Total Booked Service</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                        <table id="example" class="display" style="width:100%">
                                            <?php
                                            $sql = "SELECT * from catelog order by id desc";
                                            try {
                                                $statement = $db->prepare($sql);
                                                $statement->setfetchmode(PDO::FETCH_ASSOC);
                                                $statement->execute();
                                                $table = $statement->fetchall();
                                                // var_dump($table);
                                            } catch (PDOException $error) {
                                                LogError($error, __FILE__);
                                            }
                                            ?>
                                            <thead>
                                                <tr>
                                                    <th>Sr no.</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Amount</th>
                                                    <th>Image</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count=1;
                                                foreach ($table as $row) {
                                                ?>
                                                    <tr>
                                                        <td><?= $count++ ?></td>
                                                        <td width="15%"><?= $row['title'] ?></td>
                                                        <td><?= $row['detail'] ?></td>
                                                        <td><?= $row['amount'] ?></td>
                                                        <td><img src="images/catelog/<?= $row['photo'] ?>" width="150px" height="100px"  alt=""></td>
                                                    </tr>
                                                <?php } ?>

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