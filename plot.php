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
$Where = "";

$title = 'Plot | Meelas International';
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
                        <h1 class="title-single">Our Amazing Properties</h1>
                        <span class="color-text-a">Grid Properties</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Properties Grid
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Property Grid Star /-->
    <section class="property-grid grid">
        <div class="container">
            <div class="row">
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
        //  echo  $sql = "SELECT * FROM `propertiess` INNER JOIN types ON propertiess.type=types.id INNER JOIN amenities ON propertiess.propertyid=amenities.id_amen $Where";exit;
        ?>

                <?php
         $pagination = "SELECT * FROM `propertiess`";
         $blog1 = mysqli_query($conn, $pagination);
         $count =  mysqli_num_rows($blog1);
         
         $limit = 3;
         if (isset($_GET["page"])) {
           $page  = $_GET["page"];
           if ($page == 0)
             $page = 1;
         } else {
           $page = 1;
         }
         
         $record_index = ($page - 1) * $limit;

      $sql = "SELECT * FROM `propertiess` INNER JOIN types ON propertiess.type=types.id INNER JOIN amenities ON propertiess.id_name=amenities.store_id where propertytype=7$Where limit $record_index,$limit";
        $Results = mysqli_query($conn, $sql);
        // $count = mysqli_num_rows($Results);
        if (mysqli_num_rows($Results) > 0) {
          $cnt = 0;
          foreach ($Results as $Row) {
            $cnt++;

           
        ?>
                <div onclick="goto(<?php echo $Row['id_name']; ?>)" style="cursor: pointer;" class="col-md-4">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="./backend/uploads/<?php echo $Row['image']; ?>" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">

                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#"> <?php $titles = $Row['names'];

                                      $newtext = wordwrap($titles, 15, "<br />\n");
                                      echo $newtext; ?></a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a"><?php echo $Row['name'] ?> |
                                            ₹<?php echo $Row['budget'] ?></span>
                                    </div>
                                    <a href="property-single.php?id=<?php echo $Row['id_name'];?>" class="link-a">Click
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


                <div class="row">
                    <div class="col-sm-12">
                        <nav class="pagination-a">
                            <ul class="pagination justify-content-end">

                                <li class="page-item prevuios">
                                    <a class="page-link" href="plot.php?page=<?php echo $page-1?>">
                                        <span class="ion-ios-arrow-back"></span>
                                    </a>
                                </li>
                                <?php
                                        $sql = "SELECT COUNT(*) FROM `propertiess`";
                                        $retval1 = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_row($retval1);
                                        $total_records = $row[0];
                                        $total_pages = ceil($total_records / $limit);
                                        $cnt = $count % 3;
                                        for ($i = 1; $i <= $total_pages; $i++) { ?>
                                <li class="page-item">
                                    <a class="page-link" href="plot.php?page=<?php echo $i ?>"><?php echo $i;?></a>
                                </li>
                                <?php
                                        }
?>
                                <?php if ($total_pages <= $page) {
                                        } else { ?>


                                <li class="page-item next">
                                    <a class="page-link" href="plot.php?page=<?php echo $page+1?>">
                                        <span class="ion-ios-arrow-forward"></span>
                                    </a>
                                    <?php } ?>
                                </li>

                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
    </section>
    <!--/ Property Grid End /-->

    <!--/ footer Star /-->
    <?php
  include 'footer.php';
  ?>
    <!--/ Footer End /-->

    <?php
  include 'script.php';
  ?>
    <script>
    function goto(params) {
        location.href = "property-single.php?id=" + params;
    }
    </script>

</body>

</html>