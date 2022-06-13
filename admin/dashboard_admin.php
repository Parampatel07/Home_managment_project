<?php
require_once("inc2/header.php");
session_start();
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
            <?php
            require_once("inc2/logout.php")
            ?>
            <main class="content">
                <div class="container-fluid">

                    <div class="header">
                        <h1 class="header-title">
                            Website Overview
                        </h1>
                        <p class="header-subtitle">Your services increased by 4.25% and booking increased by 5.12%.</p>
                        <?php 
require_once("../inc/message.php");
                        ?>  
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-3 col-xl">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Total Service provider</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                    <i class="align-middle" data-feather="dollar-sign"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="display-5 mt-1 mb-3">2530</h1>
                                    <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.65% </span>
                                        Lorem ipsum dolor sit elit.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xl">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Total catelogs</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                    <i class="align-middle" data-feather="shopping-cart"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="display-5 mt-1 mb-3">12000</h1>
                                    <div class="mb-0">
                                        <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.50% </span>
                                        Lorem ipsum dolor sit amet conit.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xl">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Total visitors</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                    <i class="align-middle" data-feather="activity"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="display-5 mt-1 mb-3">29870</h1>
                                    <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -4.25% </span>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xl">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Service Completed</h5>
                                        </div>
                                        <div class="col-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                    <i class="align-middle" data-feather="dollar-sign"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="display-5 mt-1 mb-3">894</h1>
                                    <div class="mb-0">
                                        <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 8.35% </span>
                                        Lorem ipsum dolor sit amet.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-7 col-xxl-4 d-flex">
                            <div class="card flex-fill w-100">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">BOOKED / COMPLETED</h5>
                                </div>
                                <div class="card-body d-flex w-100">
                                    <div class="align-self-center chart">
                                        <canvas id="chartjs-dashboard-bar-alt"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 col-xl-5 d-flex">
                            <div class="card flex-fill w-100">
                                <div class="card-header">
                                    <div class="card-actions float-end">
                                        <a href="#" class="me-1">
                                            <i class="align-middle" data-feather="refresh-cw"></i>
                                        </a>
                                        <div class="d-inline-block dropdown show">
                                            <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                                <i class="align-middle" data-feather="more-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="card-title mb-0">SERVICE RATIO</h5>
                                </div>
                                <div class="card-body d-flex">
                                    <div class="align-self-center w-100">
                                        <div class="py-3">
                                            <div class="chart chart-xs">
                                                <canvas id="chartjs-dashboard-pie"></canvas>
                                            </div>
                                        </div>

                                        <table class="table mb-0">
                                            <tbody>
                                                <tr>
                                                    <td><i class="fas fa-circle text-success fa-fw"></i>Completed</td>
                                                    <td class="text-end">4401</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fas fa-circle text-warning fa-fw"></i>Requested</td>
                                                    <td class="text-end">4003</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fas fa-circle text-primary fa-fw"></i>Accepted</td>
                                                    <td class="text-end">1589</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fas fa-circle text-danger fa-fw"></i>Rejected</td>
                                                    <td class="text-end">2500</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-6 ">
                            <div class="card flex-fill">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">TOP CATEGORIES</h5>
                                </div>
                                <table id="datatables-dashboard-products" class="table table-striped my-0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th class="d-none d-xl-table-cell">Description</th>
                                            <th class="d-none d-xl-table-cell">Image</th>
                                            <th class="d-none d-xl-table-cell">Total bookings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>plumber</td>
                                            <td class="d-none d-xl-table-cell">Lorem ipsum dolor sit amet consectetur.</td>
                                            <td><img src="https://picsum.photos/50/50" class="img-fluid" style="border-radius: 50px;" alt=""></td>
                                            <td class="d-none d-xl-table-cell">500</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>plumber</td>
                                            <td class="d-none d-xl-table-cell">Lorem ipsum dolor sit amet consectetur.</td>
                                            <td><img src="https://picsum.photos/50/50" class="img-fluid" style="border-radius: 50px;" alt=""></td>
                                            <td class="d-none d-xl-table-cell">500</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>plumber</td>
                                            <td class="d-none d-xl-table-cell">Lorem ipsum dolor sit amet consectetur.</td>
                                            <td><img src="https://picsum.photos/50/50" class="img-fluid" style="border-radius: 50px;" alt=""></td>
                                            <td class="d-none d-xl-table-cell">500</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>plumber</td>
                                            <td class="d-none d-xl-table-cell">Lorem ipsum dolor sit amet consectetur.</td>
                                            <td><img src="https://picsum.photos/50/50" class="img-fluid" style="border-radius: 50px;" alt=""></td>
                                            <td class="d-none d-xl-table-cell">500</td>
                                            
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                       <div class="col-12 col-lg-6 ">
                            <div class="card flex-fill">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">TOP CAtelogs</h5>
                                </div>
                                <table id="datatables-dashboard-products" class="table table-striped my-0">
                                    <thead>
                                        <tr>
                                            <th>Provider</th>
                                            <th class="d-none d-xl-table-cell">Title</th>
                                            <th class="d-none d-xl-table-cell">Image</th>
                                            <th class="d-none d-xl-table-cell">Amount</th>
                                            <th class="d-none d-xl-table-cell">Total bookings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>plumber</td>
                                            <td class="d-none d-xl-table-cell">lorem</td>
                                            <td><img src="https://picsum.photos/50/50" class="img-fluid" style="border-radius: 50px;" alt=""></td>
                                            <td class="d-none d-xl-table-cell">500</td>
                                            <td>1500</td>
                                            
                                        </tr>
                                      <tr>
                                            <td>plumber</td>
                                            <td class="d-none d-xl-table-cell">lorem</td>
                                            <td><img src="https://picsum.photos/50/50" class="img-fluid" style="border-radius: 50px;" alt=""></td>
                                            <td class="d-none d-xl-table-cell">500</td>
                                            <td>1500</td>
                                            
                                        </tr>
                                      <tr>
                                            <td>plumber</td>
                                            <td class="d-none d-xl-table-cell">lorem</td>
                                            <td><img src="https://picsum.photos/50/50" class="img-fluid" style="border-radius: 50px;" alt=""></td>
                                            <td class="d-none d-xl-table-cell">500</td>
                                            <td>1500</td>
                                            
                                        </tr>
                                      <tr>
                                            <td>plumber</td>
                                            <td class="d-none d-xl-table-cell">lorem</td>
                                            <td><img src="https://picsum.photos/50/50" class="img-fluid" style="border-radius: 50px;" alt=""></td>
                                            <td class="d-none d-xl-table-cell">500</td>
                                            <td>1500</td>
                                            
                                        </tr>
                                      <tr>
                                            <td>plumber</td>
                                            <td class="d-none d-xl-table-cell">lorem</td>
                                            <td><img src="https://picsum.photos/50/50" class="img-fluid" style="border-radius: 50px;" alt=""></td>
                                            <td class="d-none d-xl-table-cell">500</td>
                                            <td>1500</td>
                                            
                                        </tr>
                                      <tr>
                                            <td>plumber</td>
                                            <td class="d-none d-xl-table-cell">lorem</td>
                                            <td><img src="https://picsum.photos/50/50" class="img-fluid" style="border-radius: 50px;" alt=""></td>
                                            <td class="d-none d-xl-table-cell">500</td>
                                            <td>1500</td>
                                            
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
    require_once("inc2/script.php");
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Bar chart
            new Chart(document.getElementById("chartjs-dashboard-bar-alt"), {
                type: "bar",
                data: {
                    labels: ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"],
                    datasets: [{
                        label: "Completed",
                        backgroundColor: window.theme.primary,
                        borderColor: window.theme.primary,
                        hoverBackgroundColor: window.theme.primary,
                        hoverBorderColor: window.theme.primary,
                        data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                        barPercentage: .75,
                        categoryPercentage: .5
                    }, {
                        label: "Booked",
                        backgroundColor: "#E8EAED",
                        borderColor: "#E8EAED",
                        hoverBackgroundColor: "#E8EAED",
                        hoverBorderColor: "#E8EAED",
                        data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68],
                        barPercentage: .75,
                        categoryPercentage: .5
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            gridLines: {
                                display: false
                            },
                            stacked: false,
                            ticks: {
                                stepSize: 20
                            }
                        }],
                        xAxes: [{
                            stacked: false,
                            gridLines: {
                                color: "transparent"
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <!-- above script is for booked and completed -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Pie chart
            new Chart(document.getElementById("chartjs-dashboard-pie"), {
                type: 'pie',
                data: {
                    labels: ["Chrome", "Firefox", "IE", "Other"],
                    datasets: [{
                        data: [1589, 4003, 2500, 4401],
                        backgroundColor: [
                            window.theme.primary,
                            window.theme.warning,
                            window.theme.danger,
                            window.theme.success,
                            "#E8EAED"
                        ],
                        borderColor: "transparent"
                    }]
                },
                options: {
                    responsive: !window.MSInputMethodContext,
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    cutoutPercentage: 75
                }
            });
        });
    </script>
    <!-- above code is for pie chart -->

</body>

</html>