<?php
include './backend/connection.php';
$sql = "SELECT * FROM types";
$resul = mysqli_query($conn, $sql);

 $sql = "SELECT * FROM banners";
 $result = mysqli_query($conn, $sql);


$sql = "SELECT * FROM propertytypes";
$results = mysqli_query($conn, $sql);

$sql = "SELECT * FROM propertiess";
$res = mysqli_query($conn, $sql);
$title = 'ProShares | Meelas International';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
   include 'head.php';
   ?>
</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6763T5" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php
    include 'newheader.php';
   ?>
    <section class="property-single nav-arrow-b">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Profit</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="property-grid.php">Service</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Profit
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ About Star /-->
    <section class="property-single nav-arrow-b">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                        <div class="carousel-item-b">
                            <img src="img/proshare1.jpg" alt="">
                        </div>
                        <div class="carousel-item-b">
                            <img src="img/proshare2.jpg" alt="">
                        </div>
                        <div class="carousel-item-b">
                            <img src="img/proshare3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 section-md-t3 text-justify">
                <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Profit</h3>
                                    </div>
                                </div>
                            </div>
                    <div class=" property-description">


                        <p class="color-text-a">
                            Help you make informed investment plans, real estate and property management so that you can
                            make the most profits from your investments.
                        </p>
                        <!-- <h4>Intraday trading</h4>
                        <p>This is an simple and easy trading method where traders complete the entire transaction in a
                            day. This is perfect for those
                            who can devote full time to trading.</p>
                        <h4>Share trading</h4>
                        <p>We provide expert guidance for buying and selling of company stock or derivative products</p> -->

                    </div>


                </div>
                <div class="col-md-6 col-lg-6 section-md-t3 text-justify">

                    <div class=" property-description">
                        <p>We also serve as an intermediary for people who
                            are looking to invest and those looking for funds. Our contact only resides in legitimate
                            investors who are looking for growth.</p>


                        <!-- <h4>Position trading</h4>
                        <p>It helps to hold the stock for months and this is more effective. Our expert team members
                            help you to learn from the basics with full
                            practical experience.</p>
                        <h4>Long term trading</h4>
                        <p>Holding the stock for years and gaining extra profit with the dividends, bonuses, and the
                            elaboration of the company.</p> -->
                    </div>


                </div>

            </div>


        </div>
    </section>
    <!--/ About End /-->

    <!--/ Team Star /-->

    <!--/ Team End /-->

    <!--/ footer Star /-->

    <?php
   include 'footer.php';
   ?>
    <!--/ Footer End /-->

    <?php
    include 'script.php';
    ?>

</body>

</html>