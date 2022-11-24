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

$title = 'Property | Meelas International';
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
 include 'header.php';
 ?>
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">
                            Property Management </h1>
                        <span class="color-text-a"></span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">Home</a>
                            </li>

                            <!-- <li class="breadcrumb-item">
                                <a href="">Agents</a>
                            </li> -->

                            <li class="breadcrumb-item active" aria-current="page">
                                Property Management
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
                        <!-- <div class="col-md-6">
              <div class="agent-avatar-box">
                <img src="img/property-1.jpg" alt="" class="agent-avatar img-fluid">
              </div>
            </div> -->
                        <!-- <div class="col-md-6">
            <div class="agent-avatar-box"> -->
                        <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                            <div class="carousel-item-b">
                                <img src="img/prop mana.jpg" alt="">
                            </div>
                            <div class="carousel-item-b">
                                <img src="img/prop mana2.jpg" alt="">
                            </div>
                            <div class="carousel-item-b">
                                <img src="img/prop mana3.jpg" alt="">
                            </div>
                        </div>
                        <!-- </div>
            </div> -->

                        <div class="col-md-5 section-md-t3">
                            <div class="agent-info-box">
                                <div class="agent-title">
                                    <div class="title-box-d">
                                        <h3 class="title-d"> Properties </h3>
                                    </div>
                                </div>

                                <div class="agent-content mb-3"
                                    style="text-align: justify!important; padding-right: 3rem!important; padding-left: 3rem!important;">
                                    <p class="content-d color-text-a">
                                        We have 15 years of experience in property management and have 100 percent
                                        satisfied customers. Commercial and residential services are provided
                                        exclusively based on our customers’ needs. All our customers are studied and
                                        analysed to satisfy them better. The responsibilities relating to understanding
                                        the type of tenants and the necessary documentations are also provided.
                                    </p>
                                    <ul class="info-agents color-a">
                                        <li>Preparing rental agreement online/offline</li>
                                        <li> Facilitate tenant move-in/out</li>

                                        <li>Periodic visits to the property</li>
                                        <li>Repair and maintenance</li>
                                        <li>
                                            We also help to maintain your warehouse or
                                            building or amy other property on behalf of
                                            owner like Property monitoring for plots and
                                            empty houses/flats, taking possession from the
                                            builder, Dealing with developer and paperwork.</li>
                                    </ul>
                                    <p class="content-d color-text-a">
                                        Our expert team focuses on priorities of our clients
                                        from the early stage of the
                                        project itself. Project management at Meelas involves quality services
                                        fulfilling the aspirations of our clients. We cater to your facility
                                        requirements for all types of commercial properties. With the wealth of services
                                        over the years, we are known in providing customized services to our clients. We
                                        have put our hands in a number of property management services for villas,
                                        houses, flats, apartments, commercial spaces and buildings.</p>

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


                                    <br><br>
                                    <h1 style="font-size:25px ;"> Engineering services</h1>
                                    <br>

                                    <p class="content-d color-text-a">
                                        Includes all installation and operational services
                                        like electro mechanical services,
                                        plumbing services, and fire and safety services. Our highly professional team
                                        has
                                        hands on experience in working with a number of clients which is always an added
                                        advantage in delivering the best service.</p>
                                    <br>
                                    <br>

                                    <h1 style="font-size:25px ;">Home/ office care services</h1>
                                    <br>

                                    <p class="content-d color-text-a">
                                        A well maintained home and office spaces is essential for a proper functioning
                                        and better development. We guide you to find best tenants for the properties you
                                        own.</p>

                                    <br>
                                    <br>

                                    <h1 style="font-size:25px ;">Innovative interior works</h1>
                                    <br>

                                    <p class="content-d color-text-a">
                                        A perfect set of interior designs of commercial buildings like office spaces,
                                        workshops, institutions, and industries. Adapting new methods of design
                                        technology. Our expert panel of members provides conceptual design and
                                        development, furniture selection and design, glass works, wall decors, art
                                        installations and many more.</p>

                                    <br>
                                    <br>

                                    <h1 style="font-size:25px ;">Documentation</h1>
                                    <br>

                                    <p class="content-d color-text-a">
                                        All kinds of property related documentation procedures like registration, sales
                                        deeds, rental or lease agreements preparation, affidavits, building tax payment,
                                        and land tax payment.</p>
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