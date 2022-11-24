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
$count =  mysqli_num_rows($res);

$whr = "";
if (isset($_POST['search'])) {
  $sarch = $_POST['searchTitle'];
  $whr  = "where title like '%" . $sarch . "%'";
}
$sql = "SELECT * FROM bigbanners";
$big = mysqli_query($conn, $sql);
$sql1 = "SELECT * FROM `propertiess`";
$proper = mysqli_query($conn, $sql1);
$row =  mysqli_num_rows($proper);


// $whr = "";
if (isset($_POST['search'])) {

  $type = $_POST['searchType'];
  $budget = $_POST['searchBudget'];
  $sarch = $_POST['searchTitle'];
  $property = $_POST['searchProperty'];
  if ($type != '' || $budget != '' || $sarch != '' || $property != '')
    $Where = "where id_name!=''";

  if ($type != '')
    $Where .= " and  type='$type'";

  if ($property != '')
    $Where .= " and propertytype='$property'";

  if ($sarch != '')
    $Where .= " and location ='$sarch' ";

  if ($budget != '')
    $Where .= " and budget ='$budget' ";
  // echo $Where;
  // exit;


}
$sql = "SELECT * FROM `latestnews`  ORDER BY latestnews.id DESC LIMIT 2";
$news = mysqli_query($conn, $sql);
$title = 'Index | Meelas International';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
  include 'head.php';
  ?>
    <script>
    $(document).ready(function() {
        $("#button").click(function() {
            $("#btn").show(1000);
        });
        $("#btn").click(function() {
            $("#btn").hide();
        });
    });
    </script>
</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6763T5" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
        <div class="title-box-d">
            <h3 class="title-d">Welcome back!</h3>
        </div>
        <span class="close-box-collapse right-boxed ion-ios-close"></span>
        <div class="box-collapse-wrap form">
            <form class="form-a" action="property-grid.php" method="post">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="form-group">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>


                            <input type="text" class="form-control form-control-lg form-control-a"
                                placeholder="Enter location" name="searchTitle">

                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <select class="form-control form-control-lg form-control-a" id="Type" name="searchType">
                                <option value="">All</option>
                                <?php
                if (mysqli_num_rows($resul) > 0) {

                  foreach ($resul as $row) {
                ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                <?php
                  }
                }
                ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <i class="fa fa-inr" aria-hidden="true"></i>
                            <select class="form-control form-control-lg form-control-a" id="bedrooms"
                                name="searchBudget">
                                <option value="">Budget</option>
                                <?php
                if (mysqli_num_rows($res) > 0) {

                  foreach ($res as $row) {
                ?>
                                <option value="<?php echo $row['budget']; ?>"><?php echo $row['budget']; ?></option>

                                <?php
                  }
                }
                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <div class="form-group">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <select class="form-control form-control-lg form-control-a" id="city" name="searchProperty">
                                <option value="">All</option>
                                <?php
                if (mysqli_num_rows($results) > 0) {

                  foreach ($results as $row) {
                ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['name_type']; ?></option>

                                <?php
                  }
                }
                ?>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-b" name="search"><i class="fa fa-search"
                            aria-hidden="true"></i>search</button>
                </div>

        </div>
        </form>
    </div>
    <!--/ Form Search End /-->

    <!--/ Nav Star /-->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand " href="index.php"><img src="img/logo.png" alt=""></a>
            <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none"
                data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                <span class="fa fa-search" aria-hidden="true"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="property-grid.php">Buy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog-grid.php">Rent</a>
                    </li> -->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="service.php"> Property Management</a>
                            <a class="dropdown-item" href="ProjectManagement.php"> Project Management</a>
                            <a class="dropdown-item" href="product.php"> Product Management</a>
                            <a class="dropdown-item" href="Programs.php"> Programs</a>
                            <a class="dropdown-item" href="professional.php">Professionals</a>
                            <a class="dropdown-item" href="profit.php"> Profit</a>
                            <a class="dropdown-item" href="promotion.php"> Promotions</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>

                </ul>
            </div>

            <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block"
                data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                <span class="fa fa-search" aria-hidden="true"></span>
            </button>
            <a class="btn  watsapp" href="https://wa.me/+918137843791">
                <span class="fa fa-whatsapp" aria-hidden="true" style="color:#fff;"></span>

            </a>

        </div>
    </nav>



    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-8">
                <div id="carouselExampleIndicators" class="carousel slide mt-6" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php
            if (mysqli_num_rows($big) > 0) {
              $cnt = 0;
              foreach ($big as $row) {
                $cnt++;
            ?>
                        <div class="carousel-item <?php if ($cnt == 1) {
                                            echo "active";
                                          } ?>">

                            <img class="d-block w-100" src="./backend/uploads/<?php echo $row['image']; ?>"
                                alt="frist slide">
                        </div>
                        <?php

              }
            } ?>



                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--/ Carousel end /-->
            </div>
            <div class="col-lg-4">
                <div class="recent-posts mb-50">
                    <div class="widget-title">
                        <h3 class="title">Latest Updates</h3>
                    </div>
                    <?php

          if (mysqli_num_rows($news) > 0) {

            foreach ($news as $new) {
          ?>
                    <div class="recent-post-widget no-border">
                        <div class="post-img">
                            <a href="#"><img src="./backend/uploads/<?php echo $new['newsimage']; ?>" alt=""></a>
                        </div>
                        <div class="post-desc">
                            <a href="#"> <?php echo $new['description']; ?></a>
                            <span class="date-post"> <i class="fa fa-calendar"></i> <?php echo $new['date']; ?></span>
                        </div>
                    </div>
                    <?php
            }
          }
          ?>



                </div>
                <?php
        $sql = "SELECT * FROM `dailyupdate`  ORDER BY dailyupdate.id DESC LIMIT 1";
        $banner = mysqli_query($conn, $sql);


        if (mysqli_num_rows($banner) > 0) {

          foreach ($banner as $img) {

        ?>
                <div class="carousel-item-b">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="./backend/uploads/<?php echo $img['image']; ?>" alt="" class="img-a img-fluid">
                        </div>


                    </div>

                </div>
                <?php
          }
        }
        ?>

            </div>
        </div>
    </div>
    <!--/ Carousel end /-->

    <!--/ Services Star /-->
    <section class="section-services section-t8">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a" style="margin-bottom:0;">Our Services</h2>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="row card-deck">
            
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <div class="image">
                            <img src="img/propertymana.jpg" alt="">
                        </div>
                        <div class="card-body content text-justify">
                            <h3 class="card-title">Property Management</h3>
                       <p class="card-text">We have 15 years  of experience in property management and have 100 percent satisfied customers.  Commercial and residential services  are provided exclusively based on our customers’ needs.</p>  <a href="service.php" > Read More...</a>
                        </div>
                        <div class="card-footer ">
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <div class="image">
                            <img src="img/project (1).jpg" alt="">
                        </div>
                        <div class="card-body content text-justify">
                            <h3 class="card-title">Project <br> Management</h3>
                            <p class="card-text">Commercial spaces, shopping malls, showrooms etc. We have due expertise relating to construction, interior designing, staff management, security service and promotions.</p><a href="ProjectManagement.php">Read More...</a>
                        </div>
                        <div class="card-footer ">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <div class="image">
                            <img src="img/events.jpg" alt="">
                        </div>
                        <div class="card-body content text-justify">
                            <h3 class="card-title">Program Management</h3>
                            <p class="card-text">

                            All services for launching a new product along with promotion and promotion is rendered. Since we don’t compromise in quality, all marketing tools are used to a 100 percent.
                            </p><a href="Programs.php"> Read More...</a>
                        </div>
                        <div class="card-footer ">

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <div class="image">
                            <img src="img/product-5.jpg" alt="">
                        </div>
                        <div class="card-body content text-justify">
                            <h3 class="card-title">Product </h3>
                            <p class="card-text">If you want to market your product, may it of any kind like hardware
                                machines, software products, FMCG product. We provide
                                product marketing services which includes Product Selling,</p><a href="product.php">Read More...</a>
                        </div>
                        <div class="card-footer ">

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <div class="image">
                            <img src="img/professional-2.jpg" alt="">
                        </div>
                        <div class="card-body content text-justify">
                            <h3 class="card-title">Professionals </h3>
                            <p class="card-text"> Prior experience in staff management, we conduct professional interviews for various companies and also have a pool of skilled employees that can be provided to multiple companies. </p><a href="professional.php">Read More...</a>
                        </div>
                        <div class="card-footer ">

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <div class="image">
                            <img src="img/pro-share.jpg" alt="">
                        </div>
                        <div class="card-body content text-justify">
                            <h3 class="card-title">Profits</h3>
                            <p class="card-text">Help you make informed investment plans, real estate and property management so that you can make the most profits from your investments. We also serve as an intermediary  </p><a href="profit.php">Read More...</a>
                        </div>
                        <div class="card-footer ">

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--/ Services End /-->

    <!--/ Property Star /-->
    <section class="section-property section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Latest Properties</h2>
                        </div>
                        <div class="title-link">
                            <a href="property-grid.php">All Property
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="property-carousel" class="owl-carousel owl-theme">
                <?php
        $sql = "SELECT * FROM `propertiess` INNER JOIN types ON propertiess.type=types.id INNER JOIN amenities ON propertiess.id_name=amenities.store_id";
        $Results = mysqli_query($conn, $sql);
        if (mysqli_num_rows($Results) > 0) {
          $cnt = 0;
          foreach ($Results as $Row) {
            $cnt++;

        ?>


                <div onclick="goto(<?php echo $Row['id_name']; ?>)" style="cursor: pointer;" class="carousel-item-b<?php if ($cnt == 1) {
                                                                                                                  echo "active";
                                                                                                                } ?>">
                    <div class="card-box-a card-shadow">

                        <div class="img-box-a">

                            <img src="./backend/uploads/<?php echo $Row['image']; ?>" alt="" class="img-a img-fluid">

                        </div>

                        <div class="card-overlay">

                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="property-single.php?id=<?php echo $Row['id_name']; ?>"> <?php $titles = $Row['names'];

                                                                                          $newtext = wordwrap($titles, 15, "<br />\n");
                                                                                          echo $newtext; ?></a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a"><?php echo $Row['name'] ?> |
                                            ₹<?php echo $Row['budget'] ?></span>
                                    </div>
                                    <a href="property-single.php?id=<?php echo $Row['id_name']; ?>" class="link-a">Click
                                        here to view
                                        <span class="ion-ios-arrow-forward"></span>
                                    </a>
                                </div>


                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Area</h4>
                                            <span><?php echo $Row['area'] ?>
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Beds</h4>
                                            <span><?php echo $Row['beds'] ?></span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Baths</h4>
                                            <span><?php echo $Row['baths'] ?></span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Garages</h4>
                                            <span><?php echo $Row['garage'] ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>


                <?php
          }
        }


        ?>

            </div>
        </div>
    </section>
    <!--/ Property End /-->



    <!--/ News Star /-->
    <section class="section-news section-t8">
        <div class="container">


            <div class="aboutus-index">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="title-wrap d-flex justify-content-between">
                                <div class="title-box">
                                    <h2 class="title-a">About Us</h2>
                                </div>

                            </div>


                            <p>Established in 2008, we have about 15 years of experience in the real estate business with 100 fully satisfied customers. Our main focus is on property and project management where we have served over 48 major companies.   </p>
                            <p>It is made sure that we serve only legitimate customers because there is no toleration for time wastage as Time is one of the most important factors in the real estate business, be it completing a project on time or searching for a prospective tenant. Once entrusted upon, we shall be a 100 percent responsible for all the activities that arise which keep our customers unburdened and     completely satisfied.
                                
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="image">
                                <img src="img/post-4.jpg" alt="">
                                <img src="img/post-6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="choose us p-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Why choose us?</h2>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="card p-3">
                        <img src="img/1.jpg" alt="">
                        <p>100% Quality </p>
                    </div>
                </div>
                <div class="col-md-4  mt-3">
                    <div class="card p-3">
                        <img src="img/2.jpg" alt="">
                        <p>Affordable Price</p>
                    </div>
                </div>
                <div class="col-md-4  mt-3">
                    <div class="card p-3 ">
                        <img src="img/3.jpg" alt="">
                        <p>No Legal Hassle</p>
                    </div>
                </div>
                <div class="col-md-4  mt-3">
                    <div class="card p-3">
                        <img src="img/4.jpg" alt="">
                        <p>Customer Services </p>
                    </div>
                </div>
                <div class="col-md-4  mt-3">
                    <div class="card p-3">
                        <img src="img/1.jpg" alt="">
                        <p>Easy Paper Works</p>
                    </div>
                </div>
                <div class="col-md-4  mt-3">
                    <div class="card p-3">
                        <img src="img/icon.jpg" alt="">
                        <p>100% Trust</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--/ Testimonials End /-->

    <!--/ footer Star /-->
    <?php
  include 'footer.php';
  ?>
    <?php
  include 'script.php';
  ?>
    <script>
    function goto(params) {
        location.href = "property-single.php?id=" + params;
    }
    </script>
    </script>

</body>

</html>