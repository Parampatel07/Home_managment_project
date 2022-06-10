<?php
require_once("inc/header.php");
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
        require_once("inc/service_menu.php");
        ?>
        <div class="main">
            <?php
            require_once("inc/service_logout.php")
            ?>
            <main class="content">
                <div class="container-fluid">
                    <div class="header">
                        <h1 class="header-title">
                            My Services
                        </h1>
                    </div>
                    <div class="row">
                        <!-- <div class="col-12 col-lg-12 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">My Services</h5>
                                </div>
                                <table id="datatables-dashboard-projects" class="table table-striped my-0">
                                    <thead>
                                        <tr>
                                            <th>Customer Name</th>
                                            <th class="d-none d-xl-table-cell">Cagtelog</th>
                                            <th class="d-none d-xl-table-cell">Amount</th>
                                            <th class="d-none d-xl-table-cell">booked date</th>
                                            <th class="d-none d-xl-table-cell">Service date</th>
                                            <th class="d-none d-xl-table-cell">City</th>
                                            <th class="d-none d-xl-table-cell">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>AppStack</td>
                                            <td class="d-none d-xl-table-cell">Single license</td>
                                            <td class="d-none d-xl-table-cell">50</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">Bhavnagar</td>
                                            <td><span class="badge bg-success">HTML</span></td>
                                        </tr>
                                        <tr>
                                            <td>AppStack</td>
                                            <td class="d-none d-xl-table-cell">Single license</td>
                                            <td class="d-none d-xl-table-cell">50</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">Bhavnagar</td>
                                            <td><span class="badge bg-primary">HTML</span></td>
                                        </tr>
                                        <tr class="table-danger">
                                            <td>AppStack</td>
                                            <td class="d-none d-xl-table-cell">Single license</td>
                                            <td class="d-none d-xl-table-cell">50</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">Bhavnagar</td>
                                            <td><span class="badge bg-danger">HTML</span></td>
                                        </tr>
                                        <tr>
                                            <td>AppStack</td>
                                            <td class="d-none d-xl-table-cell">Single license</td>
                                            <td class="d-none d-xl-table-cell">50</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">Bhavnagar</td>
                                            <td><span class="badge bg-warning">HTML</span></td>
                                        </tr>
                                        <tr>
                                            <td>AppStack</td>
                                            <td class="d-none d-xl-table-cell">Single license</td>
                                            <td class="d-none d-xl-table-cell">50</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">Bhavnagar</td>
                                            <td><span class="badge bg-success">HTML</span></td>
                                        </tr>
                                        <tr>
                                            <td>AppStack</td>
                                            <td class="d-none d-xl-table-cell">Single license</td>
                                            <td class="d-none d-xl-table-cell">50</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">Bhavnagar</td>
                                            <td><span class="badge bg-warning">HTML</span></td>
                                        </tr>
                                        <tr class="table-danger">
                                            <td>AppStack</td>
                                            <td class="d-none d-xl-table-cell">Single license</td>
                                            <td class="d-none d-xl-table-cell">50</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">Bhavnagar</td>
                                            <td><span class="badge bg-danger">HTML</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div> -->
                        <!-- <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">DataTables with Column Search by Text Inputs</h5>
                                    <h6 class="card-subtitle text-muted">The searching functionality provided by DataTables is useful for quickly search through
                                        the information in the table. See official documentation <a href="https://datatables.net/examples/api/multi_filter.html" target="_blank" rel="noopener noreferrer nofollow">here</a>.</h6>
                                </div>
                                <div class="card-body">
                                    <table id="datatables-column-search-text-inputs" class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Customer Name</th>
                                                <th class="d-none d-xl-table-cell">Cagtelog</th>
                                                <th class="d-none d-xl-table-cell">Amount</th>
                                                <th class="d-none d-xl-table-cell">booked date</th>
                                                <th class="d-none d-xl-table-cell">Service date</th>
                                                <th class="d-none d-xl-table-cell">City</th>
                                                <th class="d-none d-xl-table-cell">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>AppStack</td>
                                            <td class="d-none d-xl-table-cell">Single license</td>
                                            <td class="d-none d-xl-table-cell">50</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">Bhavnagar</td>
                                            <td><span class="badge bg-success">HTML</span></td>
                                        </tr>
                                        <tr>
                                            <td>AppStack</td>
                                            <td class="d-none d-xl-table-cell">Single license</td>
                                            <td class="d-none d-xl-table-cell">50</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">Bhavnagar</td>
                                            <td><span class="badge bg-primary">HTML</span></td>
                                        </tr>
                                        <tr class="table-danger">
                                            <td>AppStack</td>
                                            <td class="d-none d-xl-table-cell">Single license</td>
                                            <td class="d-none d-xl-table-cell">50</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">Bhavnagar</td>
                                            <td><span class="badge bg-danger">HTML</span></td>
                                        </tr>
                                        <tr>
                                            <td>AppStack</td>
                                            <td class="d-none d-xl-table-cell">Single license</td>
                                            <td class="d-none d-xl-table-cell">50</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">Bhavnagar</td>
                                            <td><span class="badge bg-warning">HTML</span></td>
                                        </tr>
                                        <tr>
                                            <td>AppStack</td>
                                            <td class="d-none d-xl-table-cell">Single license</td>
                                            <td class="d-none d-xl-table-cell">50</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">Bhavnagar</td>
                                            <td><span class="badge bg-success">HTML</span></td>
                                        </tr>
                                        <tr>
                                            <td>AppStack</td>
                                            <td class="d-none d-xl-table-cell">Single license</td>
                                            <td class="d-none d-xl-table-cell">50</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">Bhavnagar</td>
                                            <td><span class="badge bg-warning">HTML</span></td>
                                        </tr>
                                        <tr class="table-danger">
                                            <td>AppStack</td>
                                            <td class="d-none d-xl-table-cell">Single license</td>
                                            <td class="d-none d-xl-table-cell">50</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">720</td>
                                            <td class="d-none d-xl-table-cell">Bhavnagar</td>
                                            <td><span class="badge bg-danger">HTML</span></td>
                                        </tr>
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
                        </div> -->

                    </div>
                    <div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">DataTables with Column Search by Text Inputs</h5>
									<h6 class="card-subtitle text-muted">The searching functionality provided by DataTables is useful for quickly search through
										the information in the table. See official documentation <a href="https://datatables.net/examples/api/multi_filter.html"
											target="_blank" rel="noopener noreferrer nofollow">here</a>.</h6>
								</div>
								<div class="card-body">
									<table id="datatables-column-search-text-inputs" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th>Cagtelog</th>
												<th>Amount</th>
												<th>book date</th>
												<th>service date</th>
												<th>City</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Single license</td>
												<td>50</td>
												<td>720</td>
												<td>720</td>
												<td>Bhavnagar</td>
												<td><span class="badge bg-danger">HTML</span></td>
											</tr>
												<tr>
												<td>Single license</td>
												<td>50</td>
												<td>720</td>
												<td>720</td>
												<td>Bhavnagar</td>
												<td><span class="badge bg-success">HTML</span></td>
											</tr>
												<tr>
												<td>Single license</td>
												<td>50</td>
												<td>720</td>
												<td>720</td>
												<td>Bhavnagar</td>
												<td><span class="badge bg-warning">HTML</span></td>
											</tr>
												<tr>
												<td>Single license</td>
												<td>50</td>
												<td>720</td>
												<td>720</td>
												<td>Bhavnagar</td>
												<td><span class="badge bg-primary">HTML</span></td>
											</tr>
											
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
    require_once("inc/script.php");
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