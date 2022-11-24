<?php
include './backend/connection.php';
$sql = "SELECT * FROM types";
$resul = mysqli_query($conn, $sql);

 $sql = "SELECT * FROM banners";
 $result = mysqli_query($conn, $sql);


$sql = "SELECT * FROM propertytypes";
$results = mysqli_query($conn, $sql);

$sql = "SELECT * FROM propertiess";
$edit=$_GET['id'];
$_SESSION['SESSION_EDIT']=$edit;
$res = mysqli_query($conn, $sql);
$sql1 = "SELECT * FROM blog where id=$edit";
$blog = mysqli_query($conn, $sql1);
$Row=mysqli_fetch_assoc($blog);
$title = $Row['title'] . ' | Meelas International';
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
                        <h2 class="title-2" style="color:aliceblue">
                            <a href="blog-single.php?id=<?php echo $row['id']; ?>"><?php  $titles = $Row['title'];

                                    $newtext = wordwrap($titles, 15, "<br />\n");
                                    echo $newtext;
                                    

                                    ?></a>

                        </h2>
                        <span class="color-text-a"></span>
                    </div>

                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">Home</a>
                            </li>


                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Agent Single Star /-->
    <section class="agent-single">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="agent-avatar-box">
                                <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                                    <div>
                                        <img src="./backend/uploads/<?php echo $Row['image']; ?>" alt="">
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
                                        <?php echo $Row['description']; ?>
                                    </p>


                                </div>
                            </div>
                        </div>
                    </div>
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