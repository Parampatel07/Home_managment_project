<?php 
require_once("inc2/header.php");
require_once("../inc/connection.php");
try
{
    $sql="SELECT f.*,c.name,c.surname,s.title service_title from feedback f, customer c,service_provider s where c.id=f.customerid and f.service_proid=s.id";
    $stat=$db->prepare($sql);
    $stat->setfetchmode(PDO::FETCH_ASSOC);
    $stat->execute();
    $table=$stat->fetchall();
    // var_dump($table);
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
            <main class="content">
                <div class="container-fluid">
                    <div class="header">
                        <h1 class="header-title">
                        View feedback
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="my-5">
                                    <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Customer Name</th>
                                                    <th>Service pro</th>
                                                    <th>time</th>
                                                    <th>title</th>
                                                    <th>Description</th>
                                                    <th>Rating</th>
                                                    <th>Operation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    // $count=1;
                                                    foreach($table as $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td><?= $row['name']." ". $row['surname'] ?></td>
                                                    <td ><?= $row['service_title'] ?></td>
                                                    <td><?= $row['feedbackdatetime'];?></td>
                                                    <td><?= $row['title']?></td>
                                                    <td><?= $row['description']?></td>
                                                    <td><?=  $row['rating']?></td>
                                                    <td>
                                                        <h1 style="display: inline;"><a href="send_feedback.php"><i class="align-middle me-2 fab fa-fw fa-facebook-messenger" style="display: inline;"></i></a></h1>
                                                        <h1 style="display: inline;"><a href=""><i class="align-middle me-2 fas fa-fw fa-trash" style="display: inline;"></i></a><h1>
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