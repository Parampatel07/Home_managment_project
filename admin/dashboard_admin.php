<?php
require_once("inc2/header.php");
require_once("../inc/connection.php");
require_once("inc2/check_admin_login.php");
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
                                    <h1 class="display-5 mt-1 mb-3" id="totservicepro"> </h1>
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
                                    <h1 class="display-5 mt-1 mb-3" id="totcatelog"></h1>
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
                                            <h5 class="card-title">Service pending</h5>
                                        </div>
                                        <div class="col-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                    <i class="align-middle" data-feather="activity"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="display-5 mt-1 mb-3" id="serpending"></h1>
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
                                    <h1 class="display-5 mt-1 mb-3" id="serdone"></h1>
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
                                                    <td class="text-end" id="pie_completed"></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fas fa-circle text-warning fa-fw"></i>Requested</td>
                                                    <td class="text-end" id="pie_requested"></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fas fa-circle text-primary fa-fw"></i>Accepted</td>
                                                    <td class="text-end" id="pie_accepted"></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fas fa-circle text-danger fa-fw"></i>Rejected</td>
                                                    <td class="text-end" id="pie_rejected"></td>
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
                                            <th>Ranks</th>
                                            <th>Title</th>
                                            <th class="d-none d-xl-table-cell">Description</th>
                                            <th class="d-none d-xl-table-cell">Image</th>
                                            <!-- <th class="d-none d-xl-table-cell">Total bookings</th> -->
                                        </tr>
                                    </thead>
                                    <tbody id="top_category">

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
                                            <th>
                                                ranks
                                            </th>
                                            <th>Provider</th>
                                            <th class="d-none d-xl-table-cell">Title</th>
                                            <th class="d-none d-xl-table-cell">Image</th>
                                            <th class="d-none d-xl-table-cell">Amount</th>
                                            <!-- <th class="d-none d-xl-table-cell">Total bookings</th> -->
                                        </tr>
                                    </thead>
                                    <tbody id="topcatelog">
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
        var jan = 100;
        var total_data = new Array;
        var total_data_completed = new Array;
        var pie_data = new Array;
        var top_categories = new Array;
        var top_catelog = new Array;

        function topCatelog(name, detail, photo, amount, rank,title) {
            var table_row = `<tr>
                                            <td><h3><span class="badge bg-secondary">${rank}</span></h3></td>
                                            <td>${name}</td>
                                            <td>${title}</td>
                                            <td><img src="images/catelog/${photo}" class="img-fluid" style="border-radius: 50px; height:50px; width:50px;" alt=""></td>
                                            <td class="d-none d-xl-table-cell">${amount}</td>
                                        </tr>`
            $('#topcatelog').append(table_row);
        }

        function topCategories(title, description, image, rank) {
            // var rank=1;
            var table_row = `<tr>
                                            <td><h3><span class="badge bg-secondary">${rank}</span></h3></td>
                                            <td> ${title} </td>
                                            <td class='d-none d-xl-table-cell'>${description}</td>
                                            <td><img src='images/category/${image}' class='img-fluid' style='border-radius: 50px; height:50px;' alt=''></td>
                                        </tr>`;
            $('#top_category').append(table_row);
        }

        function pieChart() {
            // alert(pie_data);
            new Chart(document.getElementById("chartjs-dashboard-pie"), {
                type: 'pie',
                data: {
                    labels: ["Chrome", "Firefox", "IE", "Other"],
                    datasets: [{
                        data: [pie_data[0], pie_data[1], pie_data[2], pie_data[3]],
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
        }

        function LoadGraph() {
            // console.log(total_data);
            // console.log(total_data_completed);
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
                        data: [total_data_completed[0][0], total_data_completed[0][1], total_data_completed[0][2], total_data_completed[0][3], total_data_completed[0][4], total_data_completed[0][5], total_data_completed[0][6], total_data_completed[0][7], total_data_completed[0][8], total_data_completed[0][9], total_data_completed[0][10], total_data_completed[0][11], ],
                        barPercentage: .75,
                        categoryPercentage: .5
                    }, {
                        label: "Booked",
                        backgroundColor: "#E8EAED",
                        borderColor: "#E8EAED",
                        hoverBackgroundColor: "#E8EAED",
                        hoverBorderColor: "#E8EAED",
                        data: [total_data[0][0], total_data[0][1], total_data[0][2], total_data[0][3], total_data[0][4], total_data[0][5], total_data[0][6], total_data[0][7], total_data[0][8], total_data[0][9], total_data[0][10], total_data[0][11]],
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
                                stepSize: 1
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
        }
        $(document).ready(function() {
            // console.log("Jquery working");
            var page = "dashboard_admin_data.php";
            $.get(page, function(data, status) {
                // alert(data);
                data = JSON.parse(data);
                // alert(data[0]['row_count']);
                $('#totservicepro').html(data[0][0]['row_count']);
                $('#totcatelog').html(data[0][1]['row_count']);
                $('#serpending').html(data[0][2]['row_count']);
                $('#serdone').html(data[0][3]['row_count']);
                // console.log(data[1]);
                total_data.push(data[1]);
                total_data_completed.push(data[2]);
                var i = 5;
                for (i = 5; i <= 8; i++) {
                    pie_data.push(data[0][i]['row_count']);
                }
                $('#pie_completed').html(pie_data[2]);
                $('#pie_requested').html(pie_data[0]);
                $('#pie_accepted').html(pie_data[1]);
                $('#pie_rejected').html(pie_data[3]);
                LoadGraph();
                pieChart();
                top_categories = (data[3]);
                // console.log(top_categories);
                var len_top_cate = top_categories.length;
                for (i = 0; i < len_top_cate; i++) {
                    // console.log(i + "this is loop times");
                    topCategories(top_categories[i].title, top_categories[i].description, top_categories[i].photo, i + 1);
                }
                top_catelog = (data[4]);
                // console.log(top_catelog);
                // console.log(top_catelog[0]);
                // len_top_cate=0;
                len_top_cate = top_catelog.length;
                // alert(len_top_cate);
                for (i = 0; i < len_top_cate; i++) {
                    topCatelog(top_catelog[i].service_pro,top_catelog[i].detail,top_catelog[i].photo,top_catelog[i].amount, i + 1,top_catelog[i].title)
                }
            });
        });
    </script>
    <!-- above script is for booked and completed -->
    <!-- above code is for pie chart -->
</body>

</html>