



<?php
session_start();
include './backend/connection.php';
$sql = "SELECT * FROM types";
$resul = mysqli_query($conn, $sql);

$sql = "SELECT * FROM banners";
$result = mysqli_query($conn, $sql);



$sql = "SELECT * FROM propertytypes";
$results = mysqli_query($conn, $sql);


$sql = "SELECT * FROM propertiess";
$res = mysqli_query($conn, $sql);


$edit = $_GET['id'];
$_SESSION['SESSION_EDIT'] = $edit;
$sql1 = "SELECT * FROM `propertiess` INNER JOIN types ON propertiess.type=types.id INNER JOIN amenities ON propertiess.id_name=amenities.store_id where id_name=$edit";

$Results = mysqli_query($conn, $sql1);
$Row = mysqli_fetch_assoc($Results);

if (isset($_POST['submit'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = " INSERT INTO `contactagent`(id_property,`name`,`email`,`message`) VALUES ('$id','$name','$email','$message')";
    $contact = mysqli_query($conn, $sql);
}
$title = $Row['names'] . ' | Meelas International';
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
    <!--/ Intro Single End /-->

    <!--/ Property Single Star /-->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">304 Blaster Up</h1>
                        <span class="color-text-a">Chicago, IL 606543</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="property-grid.php">Properties</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                304 Blaster Up
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="property-single nav-arrow-b">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                        <div class="carousel-item-b">
                            <img src="./backend/uploads/<?php echo $Row['image']; ?>" alt="">
                        </div>
                        <div class="carousel-item-b">
                            <img src="./backend/uploads/<?php echo $Row['floorplan']; ?>" alt="">
                        </div>
                        <!-- <div class="carousel-item-b">
                            <img src="img/post-1.jpg" alt="">
                        </div> -->
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-md-5 col-lg-4">
                            <div class="property-price d-flex justify-content-center foo">
                                <div class="card-header-c d-flex">
                                    <div class="card-box-ico">
                                        <span class="ion-money" style="font-family: sans-serif;">₹</span>
                                    </div>
                                    <div class="card-title-c align-self-center">
                                        <h5 class="title-c"><?php echo $Row['budget'] ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="property-summary">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="title-box-d section-t4">
                                            <h3 class="title-d">Quick Summary</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary-list">
                                    <ul class="list">
                                        <li class="d-flex justify-content-between">
                                            <strong>Property ID:</strong>
                                            <span><?php echo $Row['propertyid']; ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Location:</strong>
                                            <span><?php echo $Row['location']; ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Property Type:</strong>
                                            <span><?php echo $Row['propertytype']; ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Status:</strong>
                                            <span><?php echo $Row['name']; ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Area:</strong>
                                            <span><?php echo $Row['area']; ?>
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Beds:</strong>
                                            <span><?php echo $Row['beds']; ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Baths:</strong>
                                            <span><?php echo $Row['baths']; ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Garage:</strong>
                                            <span><?php echo $Row['garage']; ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 section-md-t3">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Property Description</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="property-description">
                                <p class="description color-text-a">
                                    <?php echo $Row['description']; ?>
                                </p>
                            </div>
                            <div class="row section-t3">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Amenities</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="amenities-list color-text-a">
                                <ul class="list-a no-margin">
                                    <?php
                                    $amen = (explode("-", $Row['amanities']));
                                    foreach ($amen as $row) {
                                    ?>
                                    <li><?php echo  $row ?></li>
                                    <?php } ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 offset-md-1">
                    <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video"
                                role="tab" aria-controls="pills-video" aria-selected="true">Video</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-plans" role="tab"
                                aria-controls="pills-plans" aria-selected="false">Floor Plans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab"
                                aria-controls="pills-map" aria-selected="false">Location</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-video" role="tabpanel"
                            aria-labelledby="pills-video-tab">
                            <iframe src="./backend/uploads/<?php echo $Row['video']; ?>" width="100%" height="460"
                                frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
                            <img src="./backend/uploads/<?php echo $Row['floorplan']; ?>" alt="" class="img-fluid">
                        </div>
                        <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                            <iframe src="<?php echo $Row['map']; ?>" width="100%" height="460" frameborder="0"
                                style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row section-t3">
                        <div class="col-sm-12">
                            <div class="title-box-d">
                                <h3 class="title-d">Contact Agent</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <img src="img/logo.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="property-agent">
                                <h4 class="title-agent">Meelas</h4>

                                <p class="color-text-a">
                                    Meela’s International – the No.1 business group with 12 years
                                    of business consulting experience with the head office located
                                    in Kochi, Ernakulam District. The best real estate agency for
                                    buying, selling, renting properties. Specialized in Property
                                    Management and Interior Designing. Professional project more.
                                </p>
                                <p class="color-text-a">
                                    Management and property management service with 100%
                                    customer satisfaction is the key of our success Journey. We are
                                    dealing with all kinds of your Real Estate Needs with almost
                                    honesty and commitment. We provide services such as
                                    Property (buy, sell, rent), Tenant Management,
                                    Documentation, Plot/Site Monitoring, Home Repair and much
                                </p>

                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between">
                                        <strong>Phone:</strong>
                                        <span class="color-text-a">+91 8137843791</span>
                                    </li>
                                    <!-- <li class="d-flex justify-content-between">
                                        <strong>Mobile:</strong>
                                        <span class="color-text-a">777 222 777 222</span>
                                    </li> -->
                                    <li class="d-flex justify-content-between">
                                        <strong>Email:</strong>
                                        <span class="color-text-a">meelascochin@hotmail.com</span>
                                    </li>
                                    <!-- <li class="d-flex justify-content-between">
                                        <strong>Skype:</strong>
                                        <span class="color-text-a">Meelas</span>
                                    </li> -->
                                </ul>
                                <div class="socials-a">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="https://www.facebook.com/Meelasproperties/" target="_blank">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <!-- <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li> -->
                                        <li class="list-inline-item">
                                            <a href="https://www.instagram.com/meelas_international/" target="_blank">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <!-- <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                                            </a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-4">
                            <div class="property-contact">
                                <form class="form-a" method="post">

                                    <div class="row">
                                        <div class="col-md-12 mb-1">
                                            <div class="form-group">
                                                <input style=display:none; type="text"
                                                    class="form-control form-control-lg form-control-a" id="inputName"
                                                    placeholder="id *" name="id" value="<?php echo $Row['id_name']; ?>"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-1">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg form-control-a"
                                                    id="inputName" placeholder="Name *" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-1">
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-lg form-control-a"
                                                    id="inputEmail1" placeholder="Email *" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-1">
                                            <div class="form-group">
                                                <textarea id="textMessage" class="form-control" placeholder="Comment *"
                                                    name="message" cols="45" rows="8" name="message"
                                                    required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" name="submit" class="btn btn-a">Send Message</button>
                                        </div>
                                    </div>
                                </form>
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