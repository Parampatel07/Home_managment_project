<?php
require_once("inc2/header.php");
require_once("../inc/connection.php");
extract($_REQUEST);
// var_dump($_REQUEST);
$sql="Select id from catelog where service_proid=?";
try
{
    $stat=$db->prepare($sql);
    $stat->bindparam(1,$s_proid);
    $stat->setfetchmode(PDO::FETCH_ASSOC);
    $stat->execute();
    $c_id=$stat->fetchall();
    // var_dump($c_id);
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
                            Service providers
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h1 style="display: inline;" class="mb-0">Service provided by - name of provider</h1>
                                </div>
                                <div class="card-body">
                                    <div class="my-5 table-responsive">
                                        <table id="example" class="display table " style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Sr no.</th>
                                                    <th>Customer</th>
                                                    <th>service provider</th>
                                                    <th>Book date</th>
                                                    <th>Service date</th>
                                                    <th>Contact person</th>
                                                    <th>Contact 1</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody class="p-4">
                                                <?php
                                                $count=1;
                                                // foreach($c_id as $key=>$value)
                                                // {
                                                    // foreach($value as $t_value)
                                                    // {
                                                        // echo $t_value," ";
                                                        try
                                                        {
                                                
                                                            $sql="SELECT s.*, c.name, c.surname,ca.id,ca.title catelog,sp.title serviceprovider from service_book s,customer c,catelog ca,service_provider sp WHERE c.id=s.customerid and s.catelogid=ca.id and s.service_proid=sp.id";
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
                                                foreach($table as $row)
                                                {
                                                    // var_dump($row)
                                                ?>
                                                    <tr>
                                                    <td><?= $count++; ?></td>
                                                    <td><?= $row['name']." ".$row['surname'];?></td>
                                                    <td><?= $row['serviceprovider'];?></td>
                                                    <td><?= $row['bookdate']?></td>
                                                    <td><?= $row['servicedate']?></td>
                                                    <td><?= $row['contact_person']?></td>
                                                    <td><?= $row['contatcno']?></td>
                                                    <td><?= $row['amount']?></td>   
                                                    <?php
                                                        $i_status="REQUESTED";
                                                        $i_color="bg-warning";
                                                        if($row['status']==2)
                                                        {
                                                            $i_status="ACCEPTED";
                                                            $i_color="bg-primary";
                                                        }
                                                        else if($row['status']==3)
                                                        {
                                                            $i_status="SERVED";
                                                            $i_color="bg-success";
                                                        }
                                                        else if($row['status']==4)
                                                        {
                                                            $i_status="REJECTED";
                                                            $i_color="bg-danger";
                                                        }
                                                    ?>
                                                    <td><span class="badge <?= $i_color ?>  p-2"><?= $i_status ?></span></td>
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