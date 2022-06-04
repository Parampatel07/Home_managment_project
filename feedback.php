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
        <div class="page-banner-area margin-bottom-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-banner-menu">
                            <h2 class="page-banner-title">Feedback</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGE-BANNER END -->
        <!-- CONTACT-AREA START -->
        <div class="contact-area margin-bottom-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-form-wrap">
                                    <h3><i class="fa fa-envelope-o"></i> Leave a Message</h3>
                                    <div class="row">
                                        <form id="contact-form" action="https://whizthemes.com/mail-php/other/mail.php">
                                            <div class="col-lg-6">
                                                <input name="con_name" type="text" placeholder="Name (required)" />
                                            </div>
                                            <div class="col-lg-6">
                                                <input name="con_email" type="email" placeholder="Email (required)" />
                                            </div>
                                            <div class="col-lg-12">
                                                <input name="con_subject" type="text" placeholder="Subject" />
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea name="con_message" id="message" cols="30" rows="10"
                                                    placeholder="Message"></textarea>
                                                <button type="submit">Submit Form</button>
                                                <p class="form-message"></p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Map area -->
                            <div class="map-area m-5">
                                <div id="googleMap" style="width:100%;height:350px;">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5552.240050901069!2d72.14050045009004!3d21.754094713095412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5a70ae66c5d9%3A0x79e1b3139eda8f90!2sThe%20Easy%20Learn%20Academy!5e0!3m2!1sen!2sin!4v1652935986557!5m2!1sen!2sin"
                                        width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <!-- End Map area -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTACT-AREA END -->
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