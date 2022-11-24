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
$title = 'About | Meelas International';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
  include 'head.php';
  ?>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6763T5" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include 'newheader.php';
?>
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Your Ideal Real Estate Consultants</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                About
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
                    <div class="sinse-box">
                        <h3 class="sinse-title">MEELAS INTERNATIONAL
                            <span></span>
                            <br> Since 2008
                        </h3>
                        <p style="color: #2d8cc8;">Proshare Service Sector</p>
                    </div>
                </div>
                <div class="col-md-12 section-t8">
                    <div class="row">
                        <div class="col-md-6 col-lg-5">
                            <img src="img/inter-4.jpg" alt="" class="img-fluid">
                            <div class="title-box-d mt-5">
                                <h3 class="title-d">
                                    <span class="color-d">Our Vision</span>
                            </div>
                            <div class="property-description">
                                <ul class="info-agents color-a">
                                    <li style="text-align: justify!important;">To develop quality residential and
                                        commercial properties
                                        with high standards at affordable prices</li>
                                    <li> To achieve Customer Satisfaction</li>
                                    <li>To become global leader in excellence of service in the
                                        choosen area of core competence</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2  d-none d-lg-block">
                            <div class="title-vertical d-flex justify-content-start">
                                <span>MEELAS INTERNATIONAL </span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 section-md-t3">
                            <div class="title-box-d">
                                <h3 class="title-d">
                                    <span class="color-d">About Us</span>
                            </div>
                            <p class="color-text-a" style="text-align: justify!important;">
                            Established in 2008, we have about 15 years of experience in the real estate business with 100 fully satisfied customers. Our main focus is on property and project management where we have served over 48 major companies. It is made sure that we serve only legitimate customers because there is no toleration for time wastage as Time is one of the most important factors in the real estate business, be it completing a project on time or searching for a prospective tenant. Once entrusted upon, we shall be a 100 percent responsible for all the activities that arise which keep our customers unburdened and     completely satisfied. 
                            </p>
                            <p class="color-text-a" style="text-align: justify!important;">
                            An eco-friendly management system is followed in our enterprise striving for a more sustainable growth for all of our future. Are also open to do business with any type of legitimate clients to help and manage them. All of our Commercial/Residential projects are handled deliberately keeping our customers preferences in mind. Many clients require information and therefore we conduct personalized surveys for them so that they are able to develop, grow and enhance more durability for their customers. Are well known for our asset management system Meelas Stays where all services relating to accommodation for reasonable prices can be made available at the right time. 
                            </p>

                            <div class="title-box-d">
                                <h3 class="title-d">
                                    <span class="color-d">Our Mission</span>
                            </div>
                            <div class="property-description">
                                <ul class="info-agents color-a">
                                    <li style="text-align: justify!important;">The best interest of clients will always
                                        be first as we are
                                        dedicated to the development of long-term client
                                        relationships
                                    </li>
                                    <li style="text-align: justify!important;"> To provide the most dedicated service
                                        with most
                                        professional, informative and loyal to all the valuable
                                        customers.
                                    </li>
                                </ul>
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