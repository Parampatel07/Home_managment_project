<?php
require_once("inc2/header.php");
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
                            Service provider name - analysis
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-3 col-xl">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Service completed</h5>
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
                                            <h5 class="card-title">service Accepted</h5>
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
                                            <h5 class="card-title">service requested</h5>
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
                            <div class="card card-">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Service rejected</h5>
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
                        <div class="col-12 col-md-12 col-xxl-12 d-flex">
                            <div class="card flex-fill w-100">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Catelog</h5>
                                </div>
                                <table class="table table-striped my-0">
                                    <thead>
                                        <tr>
                                            <th>Catelog name</th>
                                            <th class="text-end">amount</th>
                                            <th class="d-none d-xl-table-cell w-75">Booked time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Semi dulex</td>
                                            <td class="text-end">1500</td>
                                            <td class="d-none d-xl-table-cell">
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary-dark" role="progressbar" style="width: 89%;" aria-valuenow="890" aria-valuemin="0" aria-valuemax="1000">890</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Twin shared</td>
                                            <td class="text-end">1200</td>
                                            <td class="d-none d-xl-table-cell">
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary-dark" role="progressbar" style="width: 27%;" aria-valuenow="270" aria-valuemin="0" aria-valuemax="1000">270</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Casusal</td>
                                            <td class="text-end">500</td>
                                            <td class="d-none d-xl-table-cell">
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary-dark" role="progressbar" style="width: 94%;" aria-valuenow="940" aria-valuemin="0" aria-valuemax="1000">940</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Twin shared</td>
                                            <td class="text-end">1200</td>
                                            <td class="d-none d-xl-table-cell">
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary-dark" role="progressbar" style="width: 27%;" aria-valuenow="270" aria-valuemin="0" aria-valuemax="1000">270</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-xxl-4 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">My Progress</h5>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="chartjs-dashboard-radar"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xxl-3 d-flex">
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
                                    <h5 class="card-title mb-0">Monthly Sales</h5>
                                </div>
                                <div class="card-body d-flex w-100">
                                    <div class="align-self-center chart chart-lg">
                                        <canvas id="chartjs-dashboard-bar"></canvas>
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Radar chart
            new Chart(document.getElementById("chartjs-dashboard-radar"), {
                type: "radar",
                data: {
                    labels: ["Served", "Accpeted", "Requested", "Rejected"],
                    datasets: [{
                        label: "Interests",
                        backgroundColor: "rgba(0, 123, 255, 0.2)",
                        borderColor: "#2979ff",
                        pointBackgroundColor: "#2979ff",
                        pointBorderColor: "#fff",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "#2979ff",
                        data: [79, 74, 73, 65]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    }
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Bar chart
            new Chart(document.getElementById("chartjs-dashboard-bar"), {
                type: 'bar',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "This year",
                        backgroundColor: window.theme.primary,
                        borderColor: window.theme.primary,
                        hoverBackgroundColor: window.theme.primary,
                        hoverBorderColor: window.theme.primary,
                        data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
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
</body>

</html>