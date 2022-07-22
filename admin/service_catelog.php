<?php
require_once("inc2/header.php");
require_once("../inc/connection.php");
?>
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
            require_once("inc2/service_logout.php");
            ?>
            <main class="content">
                <div class="container-fluid">
                    <div class="header">
                        <h1 class="header-title">
                            Catalogue Management
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h1 class="card-title mb-0">Add Catalogue</h1>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">&nbsp;
                                        <form action="" method="POST" name="form1" id="form1" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-6 mb-5">
                                                    <label for="" class="form-label">
                                                        Enter title
                                                    </label>
                                                    <input type="text" class="form-control" name="title" required placeholder="Enter Title for catalogue">
                                                </div>
                                                <div class="col-6 mb-5">
                                                    <label for="" class="form-label">
                                                        Enter details
                                                    </label>
                                                    <textarea class="form-control" placeholder="Textarea" name="description" rows="1"></textarea>
                                                </div>
                                                <div class="col-6 mb-5">
                                                    <label for="" class="form-label">
                                                        Enter amount
                                                    </label>
                                                    <input type="number" class="form-control" name="amount" required placeholder="Enter amount for catalogue">
                                                </div>
                                                <div class="col-6 mb-5">
                                                    <label for="" class="form-label">
                                                        Select photo
                                                    </label>
                                                    <input type="file" class="form-control" accept="image/*" name="image" required>
                                                </div>
                                                <div class="text-end ">
                                                    <input class="btn btn-primary" type="button" id="save" value="Save">
                                                    <input class="btn btn-danger" type="submit" value="Reset" id="reset">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title mb-0">View category</h2>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Sr no.</th>
                                                    <th>Title</th>
                                                    <th>Image</th>
                                                    <th>Description</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td width="15%">Param patel</td>
                                                    <td><img src="https://picsum.photos/100/100" alt=""></td>
                                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi iste! Exercitationem eligendi recusandae alias odit accusantium distinctio inventore totam?</td>
                                                    <td>45000</td>


                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td width="15%">Param patel</td>
                                                    <td><img src="https://picsum.photos/100/100" alt=""></td>
                                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi iste! Exercitationem eligendi recusandae alias odit accusantium distinctio inventore totam?</td>
                                                    <td>50000</td>
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
    <script>
        $(document).ready(function() {
            console.log("Jquery working....");
            $("#save").click(function() {
                var temp = $("#form1").valid();
                console.log(temp);
                if (temp == true) {
                    var pageaddress = "submit/insert_catelog.php";
                    $.post(pageaddress, $("#form1").serialize(), function(data, status) {
                        console.log(data, status);
                        
                    });
                }
            });
        });
    </script>
</body>

</html>