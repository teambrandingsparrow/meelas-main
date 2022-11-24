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
$title = 'Programs | Meelas International';
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
                        <h1 class="title-single">Program Management</h1>
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="agent-avatar-box">
                                <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                                    <div class="carousel-item-b">
                                        <img src="img/program-3.jpg" alt="">
                                    </div>
                                    <div class="carousel-item-b">
                                        <img src="img/program-4.jpg" alt="">
                                    </div>
                                    <div class="carousel-item-b">
                                        <img src="img/program-2.jpg" alt="">

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
                                    <p class="color-text-a">All services for launching a new product along with promotion and promotion is
                                        rendered. Since we don’t compromise in quality, all marketing tools are used to
                                        a 100 percent. We provide all our clients a place to stand in the market,
                                        helping them to cling on until they’ve established.</p>
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
                                    <p>
                                        We cater to your requirements for conducting events, exhibitions, festival
                                        celebrations, technical expos
                                        at our commercial plots. Our expert team members are highly experienced in event
                                        planning, coordinating
                                        and delivering the best based on the category of events.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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