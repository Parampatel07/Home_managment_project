<?php
require_once("inc/header.php");
?>
</head>

<body>
    <div class="splash active">
        <div class="splash-icon"></div>
    </div>
    <div class="wrapper">
        <?php
        require_once("inc/menu.php");
        ?>
        <div class="main">
            <main class="content">
                <div class="container-fluid">
                    <div class="header">
                        <h1 class="header-title">
                            Customer Management
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <xdiv class="card">
                                <div class="card-header">
                                    <h1 class="card-title mb-0">Customer List</h1>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Sr no.</th>
                                                    <th>Name</th>
                                                    <th>Gender</th>
                                                    <th>address</th>
                                                    <th>City</th>
                                                    <th>Mobile</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td width="15%">Param patel</td>
                                                    <td>Male</td>
                                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi iste! Exercitationem eligendi recusandae alias odit accusantium distinctio inventore totam?</td>
                                                    <td>Gujarat</td>
                                                    <td>9016293308</td>
                                                    <td>Param@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td width="15%">Param patel</td>
                                                    <td>Male</td>
                                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi iste! Exercitationem eligendi recusandae alias odit accusantium distinctio inventore totam?</td>
                                                    <td>Gujarat</td>
                                                    <td>9016293308</td>
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
    require_once("inc/script.php");
    ?>
</body>

</html>