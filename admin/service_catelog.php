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
                                    <h1 class="card-title mb-5">Add Catalogue</h1>
                                    <?php
                                    require_once("../inc/message.php");
                                    ?>
                                </div>
                                <div class="card-body" style="margin-top: -40px;">
                                    <div class="my-5">&nbsp;
                                        <form method="post" name="form1" id="form1" enctype="multipart/form-data">
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
                                                    <label for="image" class="form-label">
                                                        Select photo
                                                    </label>
                                                    <input type="file" class="form-control" accept="image/*" name="image" required>
                                                </div>
                                                <div class="text-end">
                                                    <input class="btn btn-primary" type="submit" id="save" value="Save">
                                                    <input class="btn btn-danger" type="reset" value="Reset" id="reset">
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
                                                    <th>operation</th>
                                                </tr>
                                            </thead>
                                            <tbody id="output">
                                                <!-- <tr>
                                                    <td>1</td>
                                                    <td width="15%">Param patel</td>
                                                    <td><img src="https://picsum.photos/100/100" alt=""></td>
                                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi iste! Exercitationem eligendi recusandae alias odit accusantium distinctio inventore totam?</td>
                                                    <td>45000</td>
                                                </tr> -->
                                                <tr style="display:none;">
                                                    <td>2</td>
                                                    <td width="15%">Param patel</td>
                                                    <td><img src="https://picsum.photos/100/100" alt=""></td>
                                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi iste! Exercitationem eligendi recusandae alias odit accusantium distinctio inventore totam?</td>
                                                    <td>50000</td>
                                                    <td>hiee</td>
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
        function getData() {
            var pageAddress = "submit/show_catelog.php";
            $.ajax({
                url: "submit/show_catelog.php"
            }).done(function(data) {
                // alert(data);
                var data_array = $.parseJSON(data); //convert string into json array 
                var size = data_array.length;
                var j = 1;
                // alert(data_array);
                var i = 0
                // i ni value 19 batade che su kaam e khbar nai ani upar nu kaam kare che 
                for (i = 0; i <= size - 1; i++, j++) {
                    var tr = `<tr>
                                    <td width="5%">${j}</td>
                                    <td width="15%">${data_array[i].title}</td>
                                    <td><img src="images/catelog/${data_array[i].photo}" class='img-fluid' alt=""></td>
                                    <td width="60%">${data_array[i].detail}</td>
                                    <td>${parseInt(data_array[i].amount)}</td>
                                    <td><h3><i class="align-middle me-2 fas fa-fw fa-edit"></i>
                                    <i class="align-middle me-2 fas fa-fw fa-trash-alt"></i></h3>
                                    </td>
                            </tr>`;
                    $("#output").append(tr);
                }
            });
        }
        $(document).ready(function() {
            console.log("Jquery working");
            getData();
            if (typeof hie !== 'undefined') {
                console.log("formate");
            }
            $("#form1").on('submit', (function(e) {
                e.preventDefault();
                $.ajax({
                    url: "submit/insert_catelog.php",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        console.log(data);
                    }
                });

            }));
            $("body").on('click',".fa-edit",function(){
                alert("edit");
            });
            $("body").on('click',".fa-trash-alt",function(){
                alert("delete")
            });
        });
    </script>
</body>

</html>