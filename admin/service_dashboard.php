<?php
require_once("inc2/check_service_login.php");
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
                                    <h1 class="display-5 mt-1 mb-3" id="service_comp"></h1>
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
                                    <h1 class="display-5 mt-1 mb-3" id="tot_accep"></h1>
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
                                    <h1 class="display-5 mt-1 mb-3" id="tot_req"></h1>
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
                                    <h1 class="display-5 mt-1 mb-3" id="tot_reje"></h1>
                                    <div class="mb-0">
                                        <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 8.35% </span>
                                        Lorem ipsum dolor sit amet.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12 col-md-12 col-xxl-12 d-flex">
                            <div class="card flex-fill w-100 shadow">
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
                                    <tbody id="line_chart">

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
        function line_chart(title, amount, booking) {
            var line_row = ` <tr>
                                            <td>${title}</td>
                                            <td class="text-end">${amount}</td>
                                            <td class="d-none d-xl-table-cell">
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary-dark" role="progressbar" style="width: ${booking}%;" aria-valuenow="890" aria-valuemin="0" aria-valuemax="1000">${booking}</div>
                                                </div>
                                            </td>
                                        </tr>`;
            $("#line_chart").append(line_row);
        }
        var cards = new Array;
        var line_graph = new Array;
        $(document).ready(function() {
            console.log("Jquery working");
            var page = "service_dashboard_data.php";
            $.get(page, function(data, status) {
                data = JSON.parse(data);
                // console.log(data);
                cards.push(data[0]);
                // console.log(cards[0][0]);
                $('#tot_req').html(cards[0][0]['row_count']);
                $('#tot_accep').html(cards[0][1]['row_count']);
                $('#service_comp').html(cards[0][2]['row_count']);
                $('#tot_reje').html(cards[0][3]['row_count']);
                line_graph.push(data[1]);
                console.log(line_graph);
                console.log(line_graph[0][0][0]['bookings']);
                // console.log(line_graph[0].length);
                for (i = 0; i < line_graph[0].length; i++) {
                    line_chart(line_graph[0][i][0]['title'], line_graph[0][i][0]['amount'], line_graph[0][i][0]['bookings']);
                }
            });
        });
    </script>
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