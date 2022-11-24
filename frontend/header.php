<?php
include '../backend/connection.php';
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
        $Where = "where id!=''";

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
    
?>
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


                        <input type="text" class="form-control form-control-lg form-control-a" placeholder="Enter location" name="searchTitle">

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
                        <select class="form-control form-control-lg form-control-a" id="bedrooms" name="searchBudget">
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
                <button type="submit" class="btn btn-b" name="search"><i class="fa fa-search" aria-hidden="true"></i>search</button>
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
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a class="navbar-brand " href="index1.php"><img src="img/logo.png" alt=""></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
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
                <li class="nav-item">
                    <a class="nav-link" href="property-grid.php">Buy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog-grid.php">Rent</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

        <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <button type="button" class="btn  watsapp" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-whatsapp" aria-hidden="true"></span>

        </button>

    </div>
</nav>
<!--/ Nav End /-->

<!--/ Carousel Star /-->

<section class="topbarsectin">
    <div class="searchsection">
        <div class="heainding">
            <h3>Welcome back! Let’s continue your search</h3>
        </div>
        <div class="tabs">
            <ul>
                <li><a class="nav-link active" href="#!">Buy</a></li>
                <li><a class="nav-link" href="#!">Rent</a></li>
                <li><a class="nav-link" href="#!">PG</a></li>
                <li><a class="nav-link" href="#!">Plot</a></li>
                <li><a class="nav-link" href="#!">Post Free Property Ad </a></li>
            </ul>
        </div>
        <form class="searchbar" method="post">
            <div class="select">
                <i class="fa fa-home" aria-hidden="true"></i>
                <select name="searchType">
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
            <div class="laine"></div>
            <div class="search">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <input type="text" name="searchTitle" placeholder="Enter City,Locality,Project">
            </div>
            <div class="laine"></div>
            <div class="select">
                <i class="fa fa-home" aria-hidden="true"></i>
                <select name="searchProperty">
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
            <div class="laine"></div>
            <div class="select">
                <i class="fa fa-inr" aria-hidden="true"></i>
                <select name="searchBudget">
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
            <div class="laine"></div>
            <button class="btn btn-danger" type="submit" name="search">
                <i class="fa fa-search" aria-hidden="true"></i>search</button>
        </form>
    </div>

    <div class="slider">

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    $cnt = 0;
                    foreach ($result as $row) {
                        $cnt++;
                ?>
                        <div class="carousel-item  <?php if ($cnt == 1) {
                                                        echo "active";
                                                    } ?>">

                            <!-- <div class="carousel-item active"> -->

                            <img class="d-block w-100" src="../backend/uploads/<?php echo $row['image']; ?>" alt="frist slide">



                        </div>
                <?php

                    }
                } ?>
            </div>
        </div>
    </div>




</section>