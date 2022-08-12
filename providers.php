<?php
session_start();
require_once("inc/header.php");
require_once("inc/connection.php");
?>
<style>
    .backgorund
    {
        background-image: url('admin/images/category/<?php echo $_REQUEST['image']?>');
        /* background-repeat:no-repeat ; */
        background-size: 750px 100%;
        /* vertical-align: baseline; */
    }
</style>
</head>
<body>
    <?php
require_once("inc/menu.php")
?>
    <!-- do work area -->
    <!-- PAGE-CONTENT START -->
    <section class="page-content">
        <!-- PAGE-BANNER START -->
        <?php
$sql="SELECT id,title,slogan,logo from service_provider where categoryid=?";
$data=array($_REQUEST['categoryid']);
$table=FetchRow($sql,$data);
// var_dump($table);
        ?>
        <div class=" margin-bottom-80 backgorund" style="height: 250px; ;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-banner-menu">
                            <!-- <h2 class="page-banner-title">Service providers</h2> -->
                            <ul>
                                <!-- <li><a href="index.html">Number of service providers</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGE-BANNER END -->
        <!-- SHOP-AREA START -->
        <div class="shop-area ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- <span class="shop-border"></span> -->
                    </div>
                    <div class="col-lg-12 order-1 order-lg-2">
                        <!-- Shop-Content start -->
                        <div class="shop-content">
                            <!-- Shop-product start -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="grid-view">
                                    <div class="row shop-grid mb-5 ml-5 mr-5">
                                        <!-- Single-product start -->
                                       <u> <h2 align="center" class="m-5"><?php echo $_REQUEST['categoryname'];?></h2></u>
                                       <?php
                                        foreach($table as $key=>$value)
                                        {

                                        
                                       ?>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="single-product">
                                                <div class="product-photo">
                                                    <a href="#">
                                                        <img class="primary-photo img-fluid" src="admin/images/service_provider/<?php echo $value['logo']; ?>" alt="" style="height:402px; widht:250px;" />
                                                        <img class="secondary-photo img-fluid" src="admin/images/service_provider/<?php echo $value['logo']; ?>" alt="" style="height:402px; widht:250px;" />
                                                    </a>
                                                    <div class="pro-action">
                                                        <a href="catelog.php?service_proid=<?php echo $value['id']; ?>&photo=<?php echo $value['logo'] ?>&categoryid=<?php echo $_REQUEST['categoryid']; ?>" class="action-btn"><i
                                                                class="sp-compare-alt"></i><span>View Catelogs</span></a>
                                                    </div>
                                                </div>
                                                <div class="product-brief">
                                                    <h2><a href="catelog.php"><?= $value['title']; ?></a></h2>
                                                    <p><?= $value['slogan']; ?></p>
                                                    <!-- <h3>5 years of </h3> -->
                                                </div>
                                            </div>
                                        </div>

                                        <?php 
                                        }
                                        ?>
                                        <!-- Single-product end --> 
                                    </div>
                                </div>
                            </div>
                            <!-- Shop-product end -->
                        </div>
                        <!-- Shop-Content end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOP-AREA END -->
        <!-- SERVICE-AREA START -->
        <div class="service-area margin-bottom-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-service">
                            <div class="service-icon">
                                <i class="sp-transport"></i>
                            </div>
                            <div class="service-brief">
                                <h3>Free booking</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, alteration</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-service">
                            <div class="service-icon">
                                <i class="sp-head-phone"></i>
                            </div>
                            <div class="service-brief">
                                <h3>help line</h3>
                                <p>(+112) 1925184203 - call any time for any support Lorem Ipsum available, alteration
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-service">
                            <div class="service-icon">
                                <i class="sp-business"></i>
                            </div>
                            <div class="service-brief">
                                <h3>money back guarantee</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, alteration</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SERVICE-AREA END -->
    </section>
    <!-- PAGE-CONTENT END -->


    <!-- end of do work area -->

    <?php
require_once("inc/footer.php");
?>
    <?php
require_once("inc/script.php");
?>
<script>
    $(document).ready(function(){
        // console.log("Jquery working");
        // $('.background').css('background-image','https://picsum.photos/200/300');
    });
</script>
</body>
</html>