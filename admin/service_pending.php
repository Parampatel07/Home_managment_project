<?php
require_once("inc2/header.php");
require_once("inc2/check_service_login.php");
require_once("../inc/connection.php");
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
                            Service Pending
                        </h1>
                        <!-- <nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="theme/dashboard-default.html">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="#">Blank</a></li>
								<li class="breadcrumb-item active" aria-current="page">Blank Page</li>
							</ol>
						</nav> -->
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title mb-0">Serivce's</h2>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Sr no.</th>
                                                    <th>Customer name</th>
                                                    <th>Catelog</th>
                                                    <th>Service date</th>
                                                    <th>Service time</th>
                                                    <th>Contact person</th>
                                                    <th>Contact number</th>
                                                    <th>Amount</th>
                                                    <th>Book_date</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $sql = "SELECT  s.id sbid,s.*, c.name, c.surname,ca.id,ca.title catelog ,ca.photo from service_book s,customer c,catelog ca WHERE s.service_proid={$_SESSION['service_id']} and c.id=s.customerid and s.catelogid=ca.id and status=2; 
                                            ";
                                            $stat = $db->prepare($sql);
                                            $stat->setFetchMode(PDO::FETCH_ASSOC);
                                            $stat->execute();
                                            $table = $stat->fetchAll();
                                            // var_dump($table);
                                            ?>
                                            <tbody>
                                                <?php
                                                $count = 1;
                                                foreach ($table as $row) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $count++; ?></td>
                                                        <td width="15%"><?php echo $row['name'] . " " . $row['surname'] ?></td>
                                                        <td align="center">
                                                            <img src="images/catelog/<?php echo $row['photo'] ?>" class=" mb-1 mt-3" style="border-radius: 50px; display:inline; height: 50px; width:80px;" alt=""><br>
                                                            <?php echo  $row['catelog'] ?>
                                                        </td>
                                                        <td><?php echo $row['servicedate'] ?></td>
                                                        <td><?php echo $row['servicetime'] ?></td>
                                                        <td><?php echo $row['contact_person'] ?></td>
                                                        <td><?php echo $row['contatcno'] ?></td>
                                                        <td>
                                                            <?php echo $row['amount'] ?>
                                                        </td>
                                                        <td>
                                                            
                                                            <?php echo $row['bookdate'] ?>
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