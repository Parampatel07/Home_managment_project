<?php
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
                            <div class="card">
                                <div class="card-header">
                                    <h1 style="display: inline;" class="mb-0">Service provided by - name of provider</h1>
                                    <div class="text-end">
                                        <a style="display: inline;" class="btn btn-success" href="dashboard_admin.php">Back to Dashboard</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="my-5 table-responsive">
                                        <table id="example" class="display table " style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Sr no.</th>
                                                    <th>Customer</th>
                                                    <th>Catelog</th>
                                                    <th>Book date</th>
                                                    <th>Service date</th>
                                                    <th>Contact person</th>
                                                    <th>Contact 1</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody class="p-4">
                                                <tr>
                                                    <td>1</td>
                                                    <td>param patel</td>
                                                    <td>dulex</td>
                                                    <td>10/02/05</td>
                                                    <td>13/02/05</td>
                                                    <td>jeet patel</td>
                                                    <td>9584512545</td>
                                                    <td>12500</td>
                                                    <td> <span class="badge bg-success  p-2">SERVED</span></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>param patel</td>
                                                    <td>dulex</td>
                                                    <td>10/02/05</td>
                                                    <td>13/02/05</td>
                                                    <td>jeet patel</td>
                                                    <td>9584512545</td>
                                                    <td>12500</td>
                                                    <td> <span class="badge bg-danger p-2">REJECTED</span></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>param patel</td>
                                                    <td>dulex</td>
                                                    <td>10/02/05</td>
                                                    <td>13/02/05</td>
                                                    <td>jeet patel</td>
                                                    <td>9584512545</td>
                                                    <td>12500</td>
                                                    <td> <span class="badge bg-primary p-2">ACCEPTED</span></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>param patel</td>
                                                    <td>dulex</td>
                                                    <td>10/02/05</td>
                                                    <td>13/02/05</td>
                                                    <td>jeet patel</td>
                                                    <td>9584512545</td>
                                                    <td>12500</td>
                                                    <td>
                                                        <span class="badge bg-warning p-2">REQUESTED</span>
                                                    </td>
                                                </tr>
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