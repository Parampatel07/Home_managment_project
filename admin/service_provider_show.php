<?php
require_once("../inc/connection.php");
require_once("inc2/check_admin_login.php");
require_once("inc2/header.php");
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
                            Service providers
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <xdiv class="card">
                                <div class="card-header">
                                    <h1 class="mb-0">Service Providers List</h1>
                                </div>
                                <div class="card-body">
                                    <?php
$sql="SELECT sp.*, c.title`ctitle` from service_provider sp, category c  where sp.categoryid=c.id";

try{
$statement=$db->prepare($sql);
$statement->setfetchmode(PDO::FETCH_ASSOC);
$statement->execute();
$table=$statement->fetchall();
// var_dump($table);
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
                                    ?>
                                    <div class="my-5">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Sr no.</th>
                                                    <th>Category</th>
                                                    <th>Title</th>
                                                    <th>Logo</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody><?php
                                            $count=1;
                                                foreach($table as $row)
                                                {
                                                    ?>
                                                    <tr>
                                                    <td><?= $count++ ?></td>
                                                    <td width="15"><?= $row['ctitle']?></td>
                                                    <td><a href="service_provider_detail.php?s_proid=<?= $row['id'] ?>"><?= $row['title']?></a></td>
                                                    <td><img src="images/service_provider/<?= $row['logo'] ?>" height="100px" width="150px" alt=""></td>
                                                    <td><?= $row['name'] ?> <br> <?= $row['surname'] ?></td>
                                                    <td><?= $row['address1'] ?></td>
                                                    <td><?= $row['email']?></td>
                                                </tr><?php
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