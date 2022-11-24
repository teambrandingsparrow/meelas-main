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
                        <h1 class="title-single">Program Management</h1>
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
                                Program Management
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Property Single Star /-->
    <section class="property-single nav-arrow-b">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                        <div class="carousel-item-b">
                            <img src="img/blogslid1.jpg" alt="">
                        </div>
                        <div class="carousel-item-b">
                            <img src="img/blogslid2.jpg" alt="">
                        </div>
                        <div class="carousel-item-b">
                            <img src="img/blogslid3.jpg" alt="">
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <!-- <div class="col-md-5 col-lg-4">
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Product</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                    <p>If you want to market your product, may it of 
                        any kind like hardware machines, software 
                        products, FMCG product. We provide product 
                        marketing services which includes Product 
                        Selling, Promoting, Profit Scale-up, Franchise-Distribution, etc</p>

                </div>
              </div>
            </div> -->
                        <div class="col-md-7 col-lg-7 section-md-t3">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Programs</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="property-description">
                                <p class="color-text-a">
                                    Our program service is to help you to make
                                    your events, expos and inauguration programs a
                                    successful one
                                </p>
                                <p class="color-text-a">
                                    We have our own event management team
                                    who will take care of all the essentials things that
                                    will make your program a successful program
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- <div class="col-md-12">
          <div class="row section-t3">
            <div class="col-sm-12">
              <div class="title-box-d">
                <h3 class="title-d">Proshares</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="property-agent">
            
                <p class="color-text-a">
                    Investing in property with 100% returns is a 
                    huge process and we help through our proshares 
                    service from which you can invest and get returns 
                    with profit. We also take care of Assets
                    management, Investment plans, Mutual-Funds,
                    Share trading
                </p>
             
          
              </div>
            </div>
          </div>
        </div> -->
            </div>
        </div>
    </section>
    <!--/ Property Single End /-->

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