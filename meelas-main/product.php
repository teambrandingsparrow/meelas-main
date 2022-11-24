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
$title = 'Product | Meelas International';
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
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Product</h1>
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
                                Product Management
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

            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="agent-avatar-box">
                            <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                                <div class="carousel-item-b">
                                    <img src="img/product (2).jpg" alt="">
                                </div>
                                <div class="carousel-item-b">
                                    <img src="img/product-6.jpg" alt="">
                                </div>
                                <div class="carousel-item-b">
                                    <img src="img/product-7.jpg" alt="">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 section-md-t3">
                        <div class="agent-info-box">
                            <div class="agent-title">
                                <div class="title-box-d">

                                </div>
                            </div>
                            <div class="agent-content mb-3" style="text-align: justify!important;">
                                <p class="color-text-a">
                                    If you want to market your product, may it of any kind like hardware machines,
                                    software products,
                                    FMCG product. We provide product marketing services which includes Product Selling,
                                    Promoting,
                                    Profit Scale-up, Franchise-Distribution, etc.

                                </p>
                                <p class="color-text-a">
                                    Apart from project management and property management, Meelas also focuses on
                                    product management,
                                    which includes promoting of products, product selling, profile scale up, franchise
                                    distribution etc.
                                    We provide expert services for product introduction to the market, creating
                                    awareness about the
                                    product, setting up perfect sales team for the product marketing, and finally
                                    analyzing the product
                                    growth. We put focus on hardware machines, software products, and FMCG products.
                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ About End /-->

    <!--/ Team Star /-->

    <!--/ Team End /-->


    <?php
    include 'footer.php';
    ?>
    <!--/ Footer End /-->

    <?php
    include 'script.php';
    ?>

</body>

</html>