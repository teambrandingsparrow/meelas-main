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
$count =  mysqli_num_rows($res);

$whr = "";
if (isset($_POST['search'])) {
    $sarch = $_POST['searchTitle'];
    $whr  = "where title like '%" . $sarch . "%'";
}
$sql = "SELECT * FROM bigbanners";
$big = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<?php
include 'head.php';
?>


<body>
    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
        <div class="title-box-d">
            <h3 class="title-d">Welcome back!</h3>
        </div>
        <span class="close-box-collapse right-boxed ion-ios-close"></span>
        <div class="box-collapse-wrap form">
            <form class="form-a" action="" method="post">
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
                            <select class="form-control form-control-lg form-control-a" id="Type" name="searchTitle">
                                <?php
                                if (mysqli_num_rows($resul) > 0) {

                                    foreach ($resul as $row) {
                                ?>
                                <option><?php echo $row['name']; ?></option>
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
                                name="searchTitle">
                                <option value="">Budget</option>
                                <?php
                                if (mysqli_num_rows($res) > 0) {

                                    foreach ($res as $row) {
                                ?>
                                <option value="1"><?php echo $row['budget']; ?></option>

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
                            <select class="form-control form-control-lg form-control-a" id="city" name="searchTitle">
                                <?php
                                if (mysqli_num_rows($results) > 0) {

                                    foreach ($results as $row) {
                                ?>
                                <option><?php echo $row['name_type']; ?></option>

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
                <!-- <form action="" method="post">
                <div class="col-md-12">
                                        <input type="search" placeholder="Searching..." name="searchTitle"  class="btn btn-b" value="">
                                        <button type="submit" name="search" value="Search"><i class="fa fa-search"
                            aria-hidden="true"></i></button>
                                    </div>
                                </form> -->
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
            <a class="navbar-brand " href="index1.php"><img src="img/logo.png" alt=""></a>
            <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none"
                data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                <span class="fa fa-search" aria-hidden="true"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index1.php">Home</a>
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
                            <a class="dropdown-item" href="servese.php"> Property Management</a>
                            <a class="dropdown-item" href="ProjectManagement.php"> Project Management</a>
                            <a class="dropdown-item" href="Product.php"> Product Management</a>
                            <a class="dropdown-item" href="Programs.php"> Programs</a>
                            <a class="dropdown-item" href="profin.php">Professionals</a>
                            <a class="dropdown-item" href="proshares.php"> Proshares</a>
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
            <button type="button" class="btn  watsapp" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-expanded="false">
                <span class="fa fa-whatsapp" aria-hidden="true"></span>

            </button>

        </div>
    </nav>



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

                <img class="d-block w-100" src="../backend/uploads/<?php echo $row['image']; ?>" alt="frist slide">
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

    <!--/ Services Star /-->
    <section class="section-services section-t8">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Our Services</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row card-deck">
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <div class="image">
                            <img src="img/post-2.jpg" alt="">
                        </div>
                        <div class="card-body content text-justify">
                            <h3 class="card-title">Property Management</h3>
                            <p class="card-text">Our properties services provide end-to-end property management services
                                that includes site visits, property photography, promoting on multiple channels, </p>
                        </div>
                        <div class="card-footer ">
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <div class="image">
                            <img src="img/post-1.jpg" alt="">
                        </div>
                        <div class="card-body content text-justify">
                            <h3 class="card-title">Project <br> Management</h3>
                            <p class="card-text">Our project service provide a complete management from buying a land
                                for constructing commercial places like Shopping Malls,
                                Branded Showrooms, etc </p>
                        </div>
                        <div class="card-footer ">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <div class="image">
                            <img src="img/post-7.jpg" alt="">
                        </div>
                        <div class="card-body content text-justify">
                            <h3 class="card-title">Program Management</h3>
                            <p class="card-text">

                                Our program service is to help you to make your events, expos and inauguration programs
                                a successful one

                                We have our own event management
                            </p>
                        </div>
                        <div class="card-footer ">

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <div class="image">
                            <img src="img/post-4.jpg" alt="">
                        </div>
                        <div class="card-body content text-justify">
                            <h3 class="card-title">Product <br> Management</h3>
                            <p class="card-text">If you want to market your product, may it of any kind like hardware
                                machines, software products, FMCG product. We provide
                                product marketing services which includes Product Selling, Promoting, Profit Scale-up,
                                Franchise-Distribution, etc. </p>
                        </div>
                        <div class="card-footer ">

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <div class="image">
                            <img src="img/post-5.jpg" alt="">
                        </div>
                        <div class="card-body content text-justify">
                            <h3 class="card-title">Professionals <br> Management</h3>
                            <p class="card-text"> Our professional service includes supply on professional employees on
                                demand. A software engineer or a plumber/electrician you name it, we got it covered.
                                As we got tie-ups with most promising consultancies and huge network of professionals to
                                fulfil your professional needs </p>
                        </div>
                        <div class="card-footer ">

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <div class="image">
                            <img src="img/post-6.jpg" alt="">
                        </div>
                        <div class="card-body content text-justify">
                            <h3 class="card-title">Proshares <br> Management</h3>
                            <p class="card-text">Investing in property with 100% returns is a huge process and we help
                                through our proshares service from which you can invest
                                and get returns with profit. We also take care of Assets management, Investment plans,
                                Mutual-Funds, Share trading </p>
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
                            <a href="property-grid.html">All Property
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="property-carousel" class="owl-carousel owl-theme">
                <?php
$sql="SELECT * FROM `propertiess` INNER JOIN types ON propertiess.type=types.id INNER JOIN amenities ON propertiess.propertyid=amenities.id_amen";
$Results=mysqli_query($conn,$sql);
if (mysqli_num_rows($Results) > 0) {
    $cnt = 0;
    foreach ($Results as $Row) {
        $cnt++;

?>

                <div class="carousel-item-b<?php if ($cnt == 1) {
                                                                        echo "active";
                                                                    } ?>">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="../backend/uploads/<?php echo $Row['image']; ?>" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">

                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#"> <?php   $titles = $Row['names'];

                                     $newtext = wordwrap($titles, 15, "<br />\n");
                                     echo $newtext;?></a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a"><?php echo $Row['name']?> |
                                            ₹<?php echo $Row['budget']?></span>
                                    </div>
                                    <a href="#" class="link-a">Click here to view
                                        <span class="ion-ios-arrow-forward"></span>
                                    </a>
                                </div>


                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Area</h4>
                                            <span><?php echo $Row['area']?>
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Beds</h4>
                                            <span><?php echo $Row['beds']?></span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Baths</h4>
                                            <span><?php echo $Row['baths']?></span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Garages</h4>
                                            <span><?php echo $Row['garage']?></span>
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
                <!-- <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-3.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">157 West
                      <br /> Central Park</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | ₹ 12.000</span>
                  </div>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div> -->
                <!-- <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-7.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">245 Azabu
                      <br /> Nishi Park let</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | ₹ 12.000</span>
                  </div>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div> -->
                <!-- <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-10.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">204 Montal
                      <br /> South Bela Two</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | ₹ 12.000</span>
                  </div>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div> -->
            </div>
        </div>
    </section>
    <!--/ Property End /-->

    <!--/ Agents Star /-->
    <!-- <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Best Agents</h2>
            </div>
            <div class="title-link">
              <a href="agents-grid.html">All Agents
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="img/agent-4.jpg" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Margaret Sotillo
                      <br> Escala</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a">
                  Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                </p>
                <div class="info-agents color-a">
                  <p>
                    <strong>Phone: </strong> +54 356 945234</p>
                  <p>
                    <strong>Email: </strong> agents@example.com</p>
                </div>
              </div>
              <div class="card-footer-d">
                <div class="socials-footer d-flex justify-content-center">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="img/agent-1.jpg" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Stiven Spilver
                      <br> Darw</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a">
                  Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                </p>
                <div class="info-agents color-a">
                  <p>
                    <strong>Phone: </strong> +54 356 945234</p>
                  <p>
                    <strong>Email: </strong> agents@example.com</p>
                </div>
              </div>
              <div class="card-footer-d">
                <div class="socials-footer d-flex justify-content-center">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="img/agent-5.jpg" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Emma Toledo
                      <br> Cascada</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a">
                  Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                </p>
                <div class="info-agents color-a">
                  <p>
                    <strong>Phone: </strong> +54 356 945234</p>
                  <p>
                    <strong>Email: </strong> agents@example.com</p>
                </div>
              </div>
              <div class="card-footer-d">
                <div class="socials-footer d-flex justify-content-center">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
    <!--/ Agents End /-->

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


                            <p>Meela’s International – the No.1 business group with 12 years of business consulting
                                experience with the head office located in Kochi,
                                Ernakulam District. The best real estate agency for buying, selling, renting properties.
                                Specialized in Property Management and Interior
                                Designing. Professional project more. </p>
                            <p>Management and property management service with 100% customer satisfaction is the key of
                                our success Journey. We are dealing with all
                                kinds of your Real Estate Needs with almost honesty and commitment. We provide services
                                such as Property (buy, sell, rent), Tenant
                                Management, Documentation, Plot/Site Monitoring, Home Repair and much</p>
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
                        <img src="img/3.jpg" alt="">
                        <p>100% Trust</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ News End /-->

    <!--/ Testimonials Star /-->


    <!-- <section class="section-testimonials section-t8 nav-arrow-a">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Testimonials</h2>
            </div>
          </div>
        </div>
      </div>
      <div id="testimonial-carousel" class="owl-carousel owl-arrow">
        <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-img">
                  <img src="img/testimonial-1.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                    debitis hic ber quibusdam
                    voluptatibus officia expedita corpori.
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                  <h5 class="testimonial-author">Albert & Erika</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-img">
                  <img src="img/testimonial-2.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                    debitis hic ber quibusdam
                    voluptatibus officia expedita corpori.
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
                  <h5 class="testimonial-author">Pablo & Emma</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->



    <!--/ Testimonials End /-->

    <!--/ footer Star /-->
    <?php
include 'footer.php';
?>
    <?php
 include 'script.php';
 ?>

</body>

</html>