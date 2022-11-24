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
$title = 'Promotion | Meelas International';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
   include 'head.php'
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
                        <h1 class="title-single">
                            Promotions </h1>
                        <span class="color-text-a"></span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="property-grid.php">Services</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Promotions
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Agent Single Star /-->
    <section class="property-single nav-arrow-b">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- <div class="agent-avatar-box">
                                <img src="img/property-1.jpg" alt="" class="agent-avatar img-fluid">
                            </div> -->

                            <div class="agent-avatar-box">
                                <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                                    <div class="carousel-item-b">
                                        <img src="img/promotion1.jpg" alt="">
                                    </div>
                                    <div class="carousel-item-b">
                                        <img src="img/promotion2.jpg" alt="">
                                    </div>
                                    <div class="carousel-item-b">
                                        <img src="img/promotion3.jpg" alt="">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 section-md-t3">
                            <div class="agent-info-box">
                                <div class="agent-title">
                                    <div class="title-box-d">
                                        <h3 class="title-d"> Promotions </h3>
                                    </div>
                                </div>
                                <div class="agent-content mb-3" style="text-align: justify!important;">
                                    <p class="content-d color-text-a">
                                        We can promote your business both via online
                                        and offline marketing. Promoting one’s product
                                        or business has become different in this era.
                                        Online marketing plays a major role in promoting
                                        service these days.
                                    </p>
                                    <p class="content-d color-text-a">
                                        Social medias play vital role in making the
                                        business successful these days. We help you to
                                        find the right strategy and platform for promoting
                                        your business.
                                    </p>
                                    <p class="content-d color-text-a">
                                        The most popular platforms you can use would
                                        include Facebook, Twitter, Instagram, and
                                        Pinterest.

                                    </p>
                                    <p class="content-d color-text-a">
                                        Google ads and paid promotions can give your
                                        business a good reach and we thrive to serve you
                                        the best.
                                    </p>
                                    <p class="content-d color-text-a">
                                        If you don’t want to use paid media, we can still
                                        achieve some traffic by using the right keywords
                                        and promote it
                                    </p>
                                    <p class="content-d color-text-a">
                                        Apart from online promotions, we help you to
                                        advertise and promote by different ideas like
                                        newspaper ads, setting up billboards, etc
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 section-t8">
                    <div class="title-box-d">
                        <h3 class="title-d">Properties</h3>
                    </div>
                </div>
                <div class="row property-grid grid">
                    <div class="col-sm-12">
                        <div class="grid-option">
                            <form>
                                <select class="custom-select">
                                    <option selected>All</option>
                                    <option value="1">New to Old</option>
                                    <option value="2">For Rent</option>
                                    <option value="3">For Sale</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <?php
         include 'propertyinc.php';
         ?>
                </div>
            </div>
        </div>
    </section>
    <!--/ Agent Single End /-->

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