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
                        <div class="col-12 col-lg-12 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">My Services</h5>
                                </div>
                                <table id="datatables-dashboard-products" class="table table-striped my-0">
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
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php
    require_once("inc/script.php");
    ?>
</body>

</html>