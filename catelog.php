<?php
session_start();
require_once("inc/header.php");
require_once("inc/connection.php");
$sql = "SELECT sp.logo,ct.id  as 'categoryid' from service_provider sp,category ct where sp.id=? and sp.categoryid=ct.id";
$stat = $db->prepare($sql);
$stat->setFetchMode(PDO::FETCH_ASSOC);
$stat->bindparam(1, $_REQUEST['service_proid']);
$stat->execute();
$other = $stat->fetch();
// var_dump($other);
if (sizeof($other) != null) {
?>
    <style>
        .background {
            background-image: url('admin/images/service_provider/<?php echo $other['logo']; ?>');
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
            $data = [$_REQUEST['service_proid']];
            $table = FetchRow($sql, $data);
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
                </div>
            </div>
            </div>
            <!-- PAGE-BANNER END -->
            <div class="col-lg-6 offset-lg-2">
                <div class=" ">
                    <h2 class=""><?php echo $table[0]['service_provider']; ?></h2>
                    <ul>
                        <li><a href="index.html"><?php echo $table[0]['slogans'] ?></a></li>
                        <!-- <li>Shop List</li> -->
                    </ul>
                </div>
            </div>

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
            <!-- SERVICE-AREA END -->
        </section>
        <!-- PAGE-CONTENT END -->

    <?php
}
require_once("inc/footer.php");
    ?>
    <?php
    require_once("inc/script.php");
    ?>
    <script>
        $(document).ready(function() {
            console.log("Jquery working");
            $('body').on('click', '.quick_view', function() {
                var id = $(this).attr('data-id');
                console.log(id);
                var page = "ajax/get_amount.php?catelogid=" + id;
                $.get(page, function(data, status) {
                    data = JSON.parse(data);
                    var amount = parseInt(data[0][0]);
                    console.log(amount);
                    $('.amountval').val(amount)
                });
            });

        });
    </script>
    </body>

    </html>