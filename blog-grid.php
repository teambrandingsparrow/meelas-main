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
$sql1 = "SELECT * FROM blog";
$blog = mysqli_query($conn, $sql1);
$title = 'Blog | Meelas International';
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
                        <h1 class="title-single">Our Amazing Posts</h1>
                        <span class="color-text-a">Grid News</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                News Grid
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ News Grid Star /-->
    <section class="news-grid grid">
        <div class="container">tact
            <div class="row">
                <?php
          if (mysqli_num_rows($blog) > 0) {

            foreach ($blog as $row) {
  
          ?>
                <div class="col-md-4" onclick="goto(<?php echo $row['id']; ?>)">
                    <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            <img src="./backend/uploads/<?php echo $row['image']; ?>" alt=""
                                class="img-b img-fluid"></a>
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a href="" class="category-b"><?php echo $row['text']; ?></a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2" style="color:aliceblue">
                                        <a href="blog-single.php?id=<?php echo $row['id']; ?>"><?php  $titles = $row['title'];

                                    $newtext = wordwrap($titles, 20, "<br />\n");
                                    echo $newtext;
                                    

                                    ?></a>

                                    </h2>
                                </div>
                                <div class="card-date">
                                    <span class="date-b"><?php echo $row['date']; ?></span>
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
    </section>
    <!--/ News Grid End /-->

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
        location.href = "blog-single.php?id=" + params;
    }
    </script>
</body>

</html>