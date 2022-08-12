<?php
session_start();
require_once("inc/header.php");
require_once("inc/connection.php");
?>
</head>
<body>
    <?php
    require_once("inc/menu.php");
    require_once("inc/message.php");
    ?>
    <!-- do work area -->
    <div class="slider-area margin-bottom-80">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="theme/img/slider/slider-1/1.jpg" alt="" title="#slider-direction-1" />
                <img src="theme/img/slider/slider-1/2.jpg" alt="" title="#slider-direction-2" />
                <img src="theme/img/slider/slider-1/3.jpg" alt="" title="#slider-direction-3" />
            </div>
            <!-- direction 1 -->
            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-progress"></div>
                <div class="slider-content t-lfl s-tb">
                    <div class="title-container s-tb-c title-compress">
                        <div class="slider-1">
                            <div class="wow fadeInUpBig" data-wow-duration="1.2s" data-wow-delay="0.5s">
                                <h1 class="title1">Book service with us </h1>
                            </div>
                            <div class="image wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.7s">
                                <span><img src="img/slider/slider-1/slider-border.png" alt="" /></span>
                            </div>
                            <div class="wow fadeInUpBig" data-wow-duration="1.8s" data-wow-delay="0.9s">
                                <p class="slider-brief">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sapiente beatae omnis ratione fugiat expedita distinctio laboriosam, quod quia, quas
                                    incidunt doloremque error impedit ut eaque eos porro, esse modi sed!</p>
                            </div>
                            <!-- <div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="1.1s">
										<a href="#" class="shop-now">shop now</a>
									</div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction">
                <div class="slider-progress"></div>
                <div class="slider-content t-lfl s-tb">
                    <div class="title-container s-tb-c title-compress">
                        <div class="slider-1">
                            <div class="wow fadeInUpBig" data-wow-duration="1.2s" data-wow-delay="0.5s">
                                <h1 class="title1">Lots of service provider</h1>
                            </div>
                            <div class="image wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.7s">
                                <span><img src="img/slider/slider-1/slider-border.png" alt="" /></span>
                            </div>
                            <div class="wow fadeInUpBig" data-wow-duration="1.8s" data-wow-delay="0.9s">
                                <p class="slider-brief">Simply dummy text of the printing and typesetting industry.
                                    simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <!-- <div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="1.1s">
										<a href="#" class="shop-now">shop now</a>
									</div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- direction 3 -->
            <div id="slider-direction-3" class="slider-direction">
                <div class="slider-progress"></div>
                <div class="slider-content t-lfl s-tb">
                    <div class="title-container s-tb-c title-compress">
                        <div class="slider-1">
                            <div class="wow fadeInUpBig" data-wow-duration="1.2s" data-wow-delay="0.5s">
                                <h1 class="title1">Enjoy services from home</h1>
                            </div>
                            <div class="image wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.7s">
                                <span><img src="img/slider/slider-1/slider-border.png" alt="" /></span>
                            </div>
                            <div class="wow fadeInUpBig" data-wow-duration="1.8s" data-wow-delay="0.9s">
                                <p class="slider-brief">Simply dummy text of the printing and typesetting industry.
                                    simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <!-- <div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="1.1s">
										<a href="#" class="shop-now">shop now</a>
									</div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of do work area -->
    <!-- BEST-SELL-AREA START -->
    <!-- BEST-SELL-AREA-2 START -->
    <div class="best-sell-2-area  margin-bottom-80 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-2  bordr-rights">
                        <h2 class="border-left-rights" id="categories">Categories</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="active-best-sell-2 navigation-top-right ">
            <!-- Single-best-sell-2 Start -->
            <?php
            $sql = "SELECT c.* from category c";
            $row = FetchRow($sql);
            // var_dump($row);
            ?>
            <!-- Single-best-sell-2 End -->
            <!-- Single-best-sell-2 Start -->
            <?php
            foreach ($row as $key => $value) {
                // var_dump($value);
            ?>
                <div class="single-best-sell-2">
                    <img src="admin/images/category/<?= $value['photo']  ?>" style="height : 257px; widht:337px" alt="" />
                    <div class="best-sell-2-brief">
                        <h3><a href="#"><?= $value['title'] ?></a></h3>
                        <a href="providers.php?categoryid=<?php echo $value['id'] ?>&categoryname=<?php echo $value['title'] ?>&image=<?php echo $value['photo'] ?>" class="shop-now">View Category</a>
                    </div>
                </div>
            <?php
            }
            ?>
            <!-- Single-best-sell-2 End -->
            <!-- Single-best-sell-2 Start -->
            <!-- Single-best-sell-2 End -->
        </div>
    </div>
    <!-- BEST-SELL-AREA-2 END -->
    <!-- BEST-SELL-AREA END -->
    <!-- They are with us  -->
    <!-- BRAND-LOGO-AREA START -->
    <div class="brand-logo-area margin-bottom-80" style="background-color: #F1F1F1 !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="brand-brief">
                        <h2 class="border-left-right">they are with us</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="brand-logo fix">
                        <div class="single-logo">
                            <img src="theme/img/brand/1.png" alt="" />
                        </div>
                        <div class="single-logo">
                            <img src="theme/img/brand/2.png" alt="" />
                        </div>
                        <div class="single-logo">
                            <img src="theme/img/brand/3.png" alt="" />
                        </div>
                        <div class="single-logo">
                            <img src="theme/img/brand/4.png" alt="" />
                        </div>
                        <div class="single-logo">
                            <img src="theme/img/brand/5.png" alt="" />
                        </div>
                        <div class="single-logo">
                            <img src="theme/img/brand/6.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BRAND-LOGO-AREA END -->
    <!-- SHOP-AREA START -->
    <!-- PRODUCT-AREA START -->
    <div class="product-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="border-left-right-btm" id="providers">All Service Provider</h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="active-product" class="product-slider">
            <!-- Single-product start -->
            <?php
            try
            {
                $sql="SELECT sp.id,sp.title,sp.logo,c.title 'category_name' from service_provider sp,category c where sp.categoryid=c.id";
                $row=FetchRow($sql);
                // var_dump($row);
            }
            catch(PDOException $error)
            {
                LogError($error,__FILE__);
            }
            ?>
<?php
foreach($row as $key => $value)
{
    // var_dump($value)
?>

            <div class="single-product">
                <div class="product-photo">
                    <a href="#">
                        <img class="primary-photo" src="admin/images/service_provider/<?= $value['logo'] ?>" style="height: 316px; width: 267px;" alt="" />
                        <img class="secondary-photo" src="admin/images/service_provider/<?= $value['logo'] ?>" style="height: 316px; width: 267px;" alt="" />
                    </a>
                    <div class="pro-action">
                        <a href="catelog.php?service_proid=<?php echo $value['id'] ?>" class="action-btn"><i class="sp-compare-alt"></i><span>View
                                Catelogs</span></a>
                    </div>
                </div>
                <div class="product-brief">
                    
                    <h2><a href="catelog.php">Kamlesh josi</a></h2>
                    <h3>Plumber</h3>
                </div>
            </div>
<?php
}
?>
        </div>
    </div>
    <!-- PRODUCT-AREA END -->
    <!-- TESTIMONIAL-AREA START -->
    <div class="testimonial-area margin-bottom-80" id="test">
        <div class="testimonial">
            <h2><sup><i class="sp-quote"></i></sup> they love us</h2>
            <div class="testimonial-border">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="active-testimonial">
                                <div class="single-testimonial row">
                                    <div class="col-lg-4">
                                        <div class="client-photo">
                                            <img src="https://picsum.photos/150" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="client-opinion">
                                            <h3>jorina doe</h3>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                                rootsContrary to popular belief, Lorem Ipsum is not simply random text.
                                                It has roots. Contrary to popular belief, Lorem Ipsum is not simply
                                                random text. It has roots Contrary to popular belief, </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-testimonial row">
                                    <div class="col-lg-4">
                                        <div class="client-photo">
                                            <img src="https://picsum.photos/151" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="client-opinion">
                                            <h3>jorina doe</h3>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                                rootsContrary to popular belief, Lorem Ipsum is not simply random text.
                                                It has roots. Contrary to popular belief, Lorem Ipsum is not simply
                                                random text. It has roots Contrary to popular belief, </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONIAL-AREA END -->
    <!-- SHOP-AREA END -->
    <!-- They are with us  -->
    <?php
    require_once("inc/footer.php");
    ?>
    <?php
    require_once("inc/script.php");
    ?>
    <script>
        $(document).ready(function() {
            console.log("Jquery working");
        });
    </script>
</body>

</html>