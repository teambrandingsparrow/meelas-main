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
$title = 'Project Management | Meelas International';
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
    <section class="property-single nav-arrow-b">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Project Management</h1>
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
                                Project Management
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
                            <img src="img/projmana3.jpg" alt="">
                        </div>
                        <div class="carousel-item-b">
                            <img src="img/projmana2.jpg" alt="">
                        </div>
                        <div class="carousel-item-b">
                            <img src="img/projmana.jpg" alt="">
                        </div>
                    </div>
                    <div class="row justify-content-between">
                     
                        <div class="col-md-6 col-lg-6 section-md-t3 text-justify">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Projects</h3>
                                    </div>
                                </div>
                            </div>
                            <div class=" property-description">
                                <p class="info-agents color-a">Commercial spaces, shopping malls, showrooms etc. We have
                                    due expertise relating to
                                    construction, interior designing, staff management, security service and promotions.
                                    We have established various relationships in the industry to render all services for
                                    a project, provided we have given our supreme services to more than 45 companies.
                                </p>
                                <ul class="info-agents color-a">
                                  
                                    <li> We take care of the construction works,
                                        material purchase and manpower workers and
                                        hence you don’t need to worry about anything
                                        about making a project to a successful phase</li>
                                </ul>
                                <p class="info-agents color-a">
                                    We have highly professional project management team for all the functions necessary
                                    in setting up a
                                    complete functional project under commercial properties. We strictly adhere to the
                                    rules and norms applicable
                                    for setting up a complete project. We manage projects by applying practical skills,
                                    technical expertise, finance management expertise etc.
                                </p>
                            </div>


                        </div>
                        <div class="col-md-6 col-lg-6 section-md-t3 text-justify">
                            <div class=" property-description">
                                <div class="color-a">
                                   
                                    <h4>Budget Management</h4>
                                    <p>Hiring and managing multiple contractors for proper tracking of the budget,
                                        payment to vendors, material costs and other protocols
                                        to keep up the budget of the project.</p>
                                    <h4>Time Management</h4>
                                    <p>A successful completion of project requires quality time management and effective
                                        skills. Proper coordination and
                                        implementation of right skills at right time is key features of effective time
                                        management.</p>

                                    <h4>Resource Management</h4>
                                    <p>Our professional team ensures proper planning and allocating resources to meet
                                        project objectives. Material and tool, equipment required space and facilities
                                        management. </p>
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