<?php
require_once("inc2/header.php");
require_once("../inc/connection.php");
require_once("inc2/check_service_login.php");
?>
 <?php
try
{
    $sql="SELECT sb.*,c.name,c.surname,ct.title from service_book sb,customer c,catelog ct where sb.id=? and c.id=sb.customerid and ct.id=sb.catelogid";
    $stat=$db->prepare($sql);
    $stat->setFetchMode(PDO::FETCH_ASSOC);
    $stat->bindparam(1,$_SESSION['service_id']);
    $stat->execute();
    $table=$stat->fetchAll();
    var_dump($table);
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
                                ?>
<style>
    * {
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
        require_once("inc2/service_menu.php");
        ?>
        <div class="main">
            <?php
            require_once("inc2/service_logout.php")
            ?>
            <main class="content">
                <div class="container-fluid">
                    <div class="header">
                        <h1 class="header-title">
                            My Services
                        </h1>
                    </div>
                    <div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Total service's </h5>
									<!-- <h6 class="card-subtitle text-muted"></h6> -->
								</div>
                               
								<div class="card-body">
									<table id="datatables-column-search-text-inputs" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th>Customer</th>
												<th>Catelog</th>
												<th>Book date</th>
												<th>service date</th>
												<th>contact person</th>
												<th>contact no</th>
												<th>amount</th>
												<th>status</th>
											</tr>
										</thead>
										<tbody>
                                            <?php
                                            
foreach($table as $row)
{
    if($row['status']==1)
                                            {
                                                $word="Requested";
                                            }
                                            else if($row['status']==2)
                                            {
                                                $word="Accepted";
                                            }
                                            else if($row['status']==3)
                                            {
                                                $word="Served";
                                            }
                                            else if($row['status']==4)
                                            {
                                                $word="Rejected";
                                            }
                                                ?>
											<tr>
												<td><?php echo $row['name']."  " ."  ".$row['surname'];?></td>
												<td><?php echo $row['title']?></td>
												<td><?php echo $row['bookdate'] ?></td>
												<td><?php echo $row['servicedate']?></td>
												<td><?php echo $row['contact_person']?></td>
												<td><?php echo $row['contatcno']?></td>
												<td><?php echo $row['amount']?></td>
												<td><span class="badge bg-danger"><?php echo $word  ?></span></td>
											</tr>
<?php
}
?>
                                    </tbody>
										<tfoot>
											<tr>
												<th>Name</th>
												<th>Position</th>
												<th>Office</th>
												<th>Age</th>
												<th>Start date</th>
												<th>Salary</th>
											</tr>
										</tfoot>
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
    <script>
        // DataTables with Column Search by Text Inputs
        document.addEventListener("DOMContentLoaded", function() {
            // Setup - add a text input to each footer cell
            $('#datatables-column-search-text-inputs tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<input type="text" class="form-control" placeholder="Search ' + title + '" />');
            });
            // DataTables
            var table = $('#datatables-column-search-text-inputs').DataTable();
            // Apply the search
            table.columns().every(function() {
                var that = this;
                $('input', this.footer()).on('keyup change clear', function() {
                    if (that.search() !== this.value) {
                        that
                            .search(this.value)
                            .draw();
                    }
                });
            });
        });
        // DataTables with Column Search by Select Inputs
        document.addEventListener("DOMContentLoaded", function() {
            $('#datatables-column-search-select-inputs').DataTable({
                initComplete: function() {
                    this.api().columns().every(function() {
                        var column = this;
                        var select = $('<select class="form-control"><option value=""></option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );
                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });
                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>')
                        });
                    });
                }
            });
        });
    </script>
</body>

</html>