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
$title = 'Professional | Meelas International';
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
                        <h1 class="title-single">
                            Professionals </h1>
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
                                <a href="">Agents</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Professionals
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
                            <div class="agent-avatar-box">
                                <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                                    <div class="carousel-item-b">
                                        <img src="img/prof3.jpg" alt="">
                                    </div>
                                    <div class="carousel-item-b">
                                        <img src="img/prof2.jpg" alt="">
                                    </div>
                                    <div class="carousel-item-b">
                                        <img src="img/professionals.jpg" alt="">

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
                                    <p class="content-d color-text-a">
                                        Prior experience in staff management, we conduct professional interviews for
                                        various companies and also have a pool of skilled employees that can be provided
                                        to multiple companies.
                                    </p>
                                    <p class="content-d color-text-a">
                                        Our professional service includes supply on
                                        professional employees on demand. A software
                                        engineer or a plumber/electrician you name it, we
                                        got it covered.
                                    </p>
                                    <p class="content-d color-text-a">

                                        As we got tie-ups with most promising
                                        consultancies and huge network of professionals
                                        we can arrange an eligible candidate to fulfil your
                                        professional needs
                                    </p>
                                    <p class="content-d color-text-a">
                                        We supply professional employees for each and
                                        every professional
                                    </p>
                                    <p class="content-d color-text-a">Our consultancy experts are a call away in
                                        providing required professionals for various job descriptions and profiles.</p>

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