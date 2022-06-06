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
                            Service providers
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <xdiv class="card">
                                <div class="card-header">
                                    <h1 class="mb-0">Catelog Details</h1>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Sr no.</th>
                                                    <th>providers name</th>
                                                    <th>Title</th>
                                                    <th>Detail</th>
                                                    <th>Amount</th>
                                                    <th>Photo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td width="15%">rakesh</td>
                                                    <td>JDM's</td>
                                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nihil dolores </td>
                                                    <td>
                                                        2500
                                                    </td>
                                                    <td><img src="https://picsum.photos/100/100" alt=""></td>
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