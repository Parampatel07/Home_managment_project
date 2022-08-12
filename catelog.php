<?php
session_start();
require_once("inc/header.php");
require_once("inc/connection.php");
$sql="SELECT sp.logo,ct.id  as 'categoryid' from service_provider sp,category ct where sp.id=? and sp.categoryid=ct.id";
$stat=$db->prepare($sql);
$stat->setFetchMode(PDO::FETCH_ASSOC);
$stat->bindparam(1,$_REQUEST['service_proid']);
$stat->execute();
$other=$stat->fetch();
// var_dump($other);
?>
<style>
    .background {
        background-image: url('admin/images/service_provider/<?php echo $other['logo'];?>');
        /* background-repeat:no-repeat ; */
        background-size: 750px 100%;
        /* vertical-align: baseline; */
    }

    .effect:hover {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
        border-radius: 20px;
    }
</style>
</head>
<body>
    <?php
    require_once("inc/menu.php");
    try {
        $sql = "SELECT  sp.title as 'service_provider',sp.slogan as 'slogans',c.* from service_provider sp,catelog c where sp.id=? and sp.id=c.service_proid";
        $data=[$_REQUEST['service_proid']];
        $table = FetchRow($sql,$data);
        // var_dump($table);
        // var_dump($_REQUEST);
    } catch (PDOException $error) {
        LogError($error, __FILE__);
    }
    ?>
    <!-- do work area -->
    <!-- PAGE-CONTENT START -->
    <section class="page-content">
        <!-- PAGE-BANNER START -->
        <div class="background margin-bottom-80" style="height: 250px; ">
            <div class="container">
                <!-- <div class="row"> -->
                <div class="col-lg-12">
                    <div class="page-banner-menu ">
                        <h2 class="page-banner-title"><?php echo $table[0]['service_provider']; ?></h2>
                        <ul>
                            <li><a href="index.html"><?php echo $table[0]['slogans'] ?></a></li>
                            <!-- <li>Shop List</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- PAGE-BANNER END -->
        <!-- SHOP-AREA START -->
        <div class="shop-area margin-bottom-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="shop-border"></span>
                    </div>
                </div>
                <div class="col-lg-12 order-1 order-lg-2">
                    <!-- Shop-Content start -->
                    <div class="shop-content">
                        <!-- Shop-product start -->
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane active" id="list-view">
                                <div class="row shop-list">
                                    <!-- Single-product start -->
                                    <?php
                                    foreach ($table as $key => $values) {
                                    ?>
                                        <div class="col-lg-12 effect p-5">
                                            <div class="single-product ">
                                                <div class="product-photo ">
                                                    <img class="primary-photo" src="admin/images/catelog/<?php echo $values['photo'] ?>" style="height: 364px; width: 364px;" alt="" />
                                                </div>
                                                <div class="product-brief">
                                                    <h2><?= $values['title']; ?></h2>
                                                    <h3><?php echo $values['amount']; ?></h3>
                                                    <div class="porduct-desc">
                                                        <p><?php echo $values['detail']; ?></p>
                                                    </div>
                                                    <div class="pro-quick-view">
                                                        <div class="quick-view">
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="btn btn-success quick_view" data-id="<?php echo $values['id']; ?>" title="Quick View">Quick
                                                                View</a>
                                                        </div>
                                                        <!-- <div class="pro-rating">
                                                        <a href="#"><i class="sp-star rating-1"></i></a>
                                                        <a href="#"><i class="sp-star rating-1"></i></a>
                                                        <a href="#"><i class="sp-star rating-1"></i></a>
                                                        <a href="#"><i class="sp-star rating-1"></i></a>
                                                        <a href="#"><i class="sp-star rating-2"></i></a>
                                                    </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
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
        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="#" src="https://picsum.photos/300/400" />
                                    </div>

                                </div><!-- .product-images -->

                                <div class="product-info">
                                    <h1>Booking Service</h1>
                                    <div class="price-box-3">
                                        <hr />
                                        <div class="s-price-box">
                                            <?php echo $values['title'] ?>
                                        </div>
                                        <hr />
                                    </div>
                                    <form action="booking_service.php" method="POST" name="myform" id="myform">
                                        <div class="row">
                                            <div class="col-lg-6  mb-3">
                                                <label for="" class="form-label">Amount</label>
                                                <input type="number" name="amount" value="" class="form-control amountval" readonly>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label for="" class="form-label">Service Date</label>
                                                <input type="date" name="servicedate" class="form-control" required>
                                            </div>
                                            <div class="col-lg-6  mb-3">
                                                <label for="" class="form-label">Service time</label>
                                                <input type="time" name="servicetime" class="form-control" id="" required>
                                            </div>
                                            <div class="col-lg-6  mb-3">
                                                <label for="" class="form-label">Contact number</label>
                                                <input type="tel" name="contact_number" class="form-control" id="contact_number" placeholder="Your contact here" required>
                                            </div>
                                            <div class="col-lg-12  mb-3">
                                                <label for="" class="form-label">Enter your name </label>
                                                <input type="name" name="contact" class="form-control" id="" placeholder="Name of person to whom service is to be given" required>
                                                <input type="hidden" name="categoryid" value="<?= $other['categoryid']; ?>">
                                                <input type="hidden" name="service_proid" value="<?= $_REQUEST['service_proid']; ?>">
                                            </div>

                                            <div class="col-lg-6 mb-3 text-end">
                                                <label for="">Confirm booking</label>
                                                <input type="submit" class="btn btn-success" value="Book Service">
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- .product-info -->
                            </div><!-- .modal-product -->
                        </div><!-- .modal-body -->
                    </div><!-- .modal-content -->
                </div><!-- .modal-dialog -->
            </div>
            <!-- END Modal -->
        </div>
        <!-- END QUICKVIEW PRODUCT -->
        <!-- BANNER-AREA START -->
        <div class="banner-area fix margin-bottom-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="best-product-banner">
                            <a href="#"><img src="img/banner/best-product-banner.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BANNER-AREA END -->
        <!-- BANNER-AREA START -->
        <div class="banner-area fix margin-bottom-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner-photo">
                            <a href="#"><img src="img/banner/4.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner-6">
                            <div class="section-title-2">
                                <h2 class="border-left-rights">product description</h2>
                            </div>
                            <h3><a href="#">Slim Oxford Shirt</a></h3>
                            <span>$144.44</span>
                            <p>An oxford shirt sharp and reliable essential. durable woven texture in premium two-ply
                                cotton, it is the perfect complement to suiting and urban knits. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BANNER-AREA END -->
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
                                <h3>free shipping</h3>
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
    <?php
    require_once("inc/footer.php");
    ?>
    <?php
    require_once("inc/script.php");
    ?>
    <script>
        $(document).ready(function() {
            console.log("Jquery working");
            $('body').on('click','.quick_view', function(){
                var id=$(this).attr('data-id');
                console.log(id);
                var page = "ajax/get_amount.php?catelogid="+id;
                $.get(page, function(data, status) {
                    data=JSON.parse(data);
                    var amount=parseInt(data[0][0]);
                    console.log(amount);
                    $('.amountval').val(amount)
                });
            });

        });
    </script>
</body>

</html>