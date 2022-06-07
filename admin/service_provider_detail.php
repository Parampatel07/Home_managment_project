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
                                    <h1 class="mb-0">Service Provider - name of provider</h1>
                                </div>
                                <div class="card-body">
                                    <div class="my-5 table table-responsive ">
                                        <table class="table table-bordered table-striped">
                                            <tr>
                                                <td>
                                                    Title
                                                </td>
                                                <td>
                                                    Rakesh junjunvala co.
                                                </td>
                                                <td>
                                                    Category
                                                </td>
                                                <td>
                                                    Plumber
                                                </td>
                                                <td rowspan="2" colspan="2" style="height: 145px !important; height:125px !important;">
                                                    <table>
                                                        <tr>
                                                            <td class="p-3"><label for="" class="from-label">Logo</label></td>
                                                            <td>
                                                                <div class="text-end">
                                                                    <img src="https://picsum.photos/100/100" style="height: 145px; width:145px;" alt="">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Slogan
                                                </td>
                                                <td colspan="3">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus nesciunt vel rem id voluptatum pariatur placeat quisquam debitis numquam fuga eos veritatis, ratione magni culpa. Architecto neque laboriosam praesentium voluptas?
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="10%">
                                                    name
                                                </td>
                                                <td width="25%">
                                                    rakesh
                                                </td>
                                                <td width="10%">
                                                    surname
                                                </td>
                                                <td width="25%">
                                                    junjunvala
                                                </td>
                                                <td>
                                                    Father name
                                                </td>
                                                <td>
                                                    kamlesh junjunvala
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="">Email</td>
                                                <td colspan="2">Suii1@gmail.com</td>
                                                <td colspan="">Mobile number</td>
                                                <td colspan="2">1234567891</td>
                                            </tr>
                                            <tr>
                                                <td>Address 1</td>
                                                <td colspan="2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita rem ducimus, alias repudiandae veritatis sequi corporis sint optio dicta non, qui labore. Aspernatur voluptatum numquam dolorum impedit reiciendis sapiente asperiores?</td>
                                                <td>Address 2</td>
                                                <td colspan="2">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque tempore omnis eligendi, veritatis ullam earum soluta illum sequi, qui nihil minima minus! Perferendis aspernatur quaerat commodi magnam quidem, voluptatem doloremque.
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </xdiv>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h1 style="display: inline;" class="mb-0">Total Catelog by - name of provider</h1>
                                    <div class="text-end">
                                        <a style="display: inline;" class="btn btn-success" href="specific_service.php">View Total Booked Service</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Sr no.</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Amount</th>
                                                    <th>Image</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td width="15%">Param patel</td>
                                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi iste! Exercitationem eligendi recusandae alias odit accusantium distinctio inventore totam?</td>
                                                    <td>1500</td>
                                                    <td><img src="https://picsum.photos/100/100" alt=""></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td width="15%">Param patel</td>
                                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi iste! Exercitationem eligendi recusandae alias odit accusantium distinctio inventore totam?</td>
                                                    <td>2500</td>
                                                    <td><img src="https://picsum.photos/100/100" alt=""></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td width="15%">Param patel</td>
                                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi iste! Exercitationem eligendi recusandae alias odit accusantium distinctio inventore totam?</td>
                                                    <td>3500</td>
                                                    <td><img src="https://picsum.photos/100/100" alt=""></td>
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
    require_once("inc/script.php");
    ?>
</body>

</html>