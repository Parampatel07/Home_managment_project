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
                            <xdiv class="card">
                                <div class="card-header">
                                    <h1 class="mb-0">Service Providers List</h1>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Sr no.</th>
                                                    <th>Category</th>
                                                    <th>Title</th>
                                                    <th>Logo</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td width="15%">Mechanic</td>
                                                    <td><a href="service_provider_detail.php">JDM's</a></td>
                                                    <td><img src="https://picsum.photos/100/100" alt=""></td>
                                                    <td>Jojo <br> kimona</td>
                                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nihil dolores </td>
                                                    <td>Param@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td width="15%">Mechanic</td>
                                                    <td>JDM's</td>
                                                    <td><img src="https://picsum.photos/100/100" alt=""></td>
                                                    <td>Jojo <br> kimona</td>
                                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nihil dolores </td>
                                                    <td>Param@gmail.com</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </xdiv>
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