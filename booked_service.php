<?php
require_once("inc/header.php")
?>
</head>

<body>
    <?php
require_once("inc/menu.php")
?>
    <!-- do work area -->
    <!-- PAGE-CONTENT START -->
    <section class="page-content">
        <!-- PAGE-BANNER START -->
        <div class="page-banner-area photo-3 margin-bottom-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-banner-menu">
                            <h2 class="page-banner-title">Booked service</h2>
                            <!-- <ul>
                                <li><a href="index.html">home</a></li>
                                <li>Shoping Cart</li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGE-BANNER END -->
        <!-- SHOPPING-CART-AREA START -->
        <div class="shopping-cart-area margin-bottom-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Catelog</th>
                                            <th class="product-name">Service provider</th>
                                            <th class="product-edit">Book date</th>
                                            <th class="product-price">Service date</th>
                                            <th class="product-quantity">Service time</th>
                                            <th class="product-subtotal">Amount</th>
                                            <th class="product-remove">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="https://picsum.photos/127/135" alt="No image"></td>
                                            <td class="product-price"><span class="amount">Kamlesh joshi</span></td>
                                            <td class="product-price"><span class="amount">26/04/2022</span></td>
                                            <td class="product-price"><span class="amount">19/05/2022</span></td>
                                            <td class="product-price"><span class="amount">4:15 pm</span></td>
                                            <td class="product-price"><span class="amount">1500</span></td>
                                            <td class="product-price bg-success text-light"><span class="amount "> Accepted</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="https://picsum.photos/127/135" alt="No image"></td>
                                            <td class="product-price"><span class="amount">Kamlesh joshi</span></td>
                                            <td class="product-price"><span class="amount">26/04/2022</span></td>
                                            <td class="product-price"><span class="amount">19/05/2022</span></td>
                                            <td class="product-price"><span class="amount">4:15 pm</span></td>
                                            <td class="product-price"><span class="amount">1500</span></td>
                                            <td class="product-price bg-warning text-danger"><span class="amount ">Requested</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PAGE-CONTENT END -->


    <!-- end of do work area -->

    <?php
require_once("inc/footer.php");
?>
    <?php
require_once("inc/script.php");
?>
</body>

</html>