<?php
include '../backend/connection.php';
$sql = "SELECT * FROM types";
$resul = mysqli_query($conn, $sql);

 $sql = "SELECT * FROM banners";
 $result = mysqli_query($conn, $sql);


$sql = "SELECT * FROM propertytypes";
$results = mysqli_query($conn, $sql);

$sql = "SELECT * FROM propertiess";
$res = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   include 'head.php';
   ?>
</head>

<body>

  <?php
  include 'header.php';

  ?>
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Product Management</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="property-grid.html">Service</a>
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
    <section class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="about-img-box">
                        <img src="img/inter-3.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-12 section-t8">
                    <div class="row">
                        <div class="col-md-6 col-lg-5">
                            <img src="img/inter-4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-2  d-none d-lg-block">

                        </div>
                        <div class="col-md-6 col-lg-5 section-md-t3">
                            <div class="title-box-d">
                                <h3 class="title-d">
                                    <span class="color-d">Products</span>
                            </div>
                            <p class="color-text-a">
                                If you want to market your product, may it of
                                any kind like hardware machines, software
                                products, FMCG product. We provide product
                                marketing services which includes Product
                                Selling, Promoting, Profit Scale-up, Franchise-Distribution, etc.
                            </p>
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