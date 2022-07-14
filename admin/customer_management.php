<?php
require_once("../inc/connection.php");
require_once("inc2/check_admin_login.php");
require_once("inc2/header.php");
$sql = "SELECT * FROM customer";
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
                            Customer Management
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <xdiv class="card">
                                <div class="card-header">
                                    <h1 class="">Customer List</h1>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Sr no.</th>
                                                    <th>Name</th>
                                                    <th>Gender</th>
                                                    <th>address</th>
                                                    <th>City</th>
                                                    <th>Mobile</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count=1;
                                                foreach ($table as $row) {
                                                ?>
                                                    <tr>
                                                        <td><?= $count++ ?></td>
                                                        <td width="15%"><a href="customer_detail.php?customerid=<?php echo $row['id'] ?>"><?= $row['name'] ?></a></td>

                                                        <?php
                                                        if ($row['gender'] == '1') {
                                                            $gender = 'male';
                                                        }
                                                        else if ($row['gender'] == '2') {
                                                            $gender = 'female';
                                                        }
                                                        ?>
                                                        <td><?= $gender ?></td>
                                                        <td><?= $row['address1']?></td>
                                                        <td><?= $row['city'] ?></td>
                                                        <td><?= $row['mobile'] ?></td>
                                                        <td><?= $row['email'] ?></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </xdiv>
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