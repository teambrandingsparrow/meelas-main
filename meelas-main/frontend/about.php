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
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include 'head.php';
  ?>

<body>

<?php include 'header.php';
?>
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">We Do Great Design For Creative Folks</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                About
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ About Star /-->
  <section class="section-about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="about-img-box">
            <img src="img/inter-3.jpg" alt="" class="img-fluid">
          </div>
          <div class="sinse-box">
            <h3 class="sinse-title">MEELAS INTERNATIONAL
              <span></span>
              <br> Sinse 2017</h3>
            <p style="color: #2d8cc8;">Art & Creative</p>
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="row">
            <div class="col-md-6 col-lg-5">
              <img src="img/inter-4.jpg" alt="" class="img-fluid">
              <div class="title-box-d mt-5">
                <h3 class="title-d">
                  <span class="color-d">Our Vision</span>
              </div>
              <div class="property-description">
                <ul class="info-agents color-a">
                    <li>To develop quality residential and commercial properties 
                      with high standards at affordable prices</li>
                    <li> To achieve Customer Satisfaction</li>
                    <li>To become global leader in excellence of service in the 
                      chosen area of core competence</li>
                  </ul>
              </div>
            </div>
            <div class="col-lg-2  d-none d-lg-block">
              <div class="title-vertical d-flex justify-content-start">
                <span>MEELAS INTERNATIONAL </span>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 section-md-t3">
              <div class="title-box-d">
                <h3 class="title-d">
                  <span class="color-d">About Us</span>
              </div>
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
           
              <div class="title-box-d">
                <h3 class="title-d">
                  <span class="color-d">Our Mission</span>
              </div>
              <div class="property-description">
                <ul class="info-agents color-a">
                    <li>The best interest of clients will always be first as we are 
                      dedicated to the development of long-term client 
                      relationships
                      </li>
                    <li> To provide the most dedicated service with most 
                      professional, informative and loyal to all the valuable 
                      customers.
                      </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ About End /-->

  <!--/ Team Star /-->
  
  <!--/ Team End /-->

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
