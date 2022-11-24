<?php
include './backend/connection.php';
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $sql = "INSERT INTO `contacts`(`Name`, `Email`, `Subject`, `Message`) VALUES ('$name','$email','$subject','$message')";
    $result = mysqli_query($conn, $sql);


}
$sql = "SELECT * FROM types";
$resul = mysqli_query($conn, $sql);

$sql = "SELECT * FROM banners";
$result = mysqli_query($conn, $sql);


$sql = "SELECT * FROM propertytypes";
$results = mysqli_query($conn, $sql);

$sql = "SELECT * FROM propertiess";
$res = mysqli_query($conn, $sql);
$sql = "SELECT * FROM bigbanners";
$big = mysqli_query($conn, $sql);
$title = 'Contact | Meelas International';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
include 'head.php';

?>
    <script>
    function Validate() {
        var name = document.myForm.name.value;
        var email = document.myForm.email.value;
        var subject = document.myForm.subject.value;
        var message = document.myForm.message.value;

        var reg = /^\w+[a-zA-Z]{2,20}$/;
        var result = reg.test(name);
        if (result == false) {

            alert("Enter Name");
            document.myForm.name.focus();
            return false;
        }
        var reg = /^\w+[a-z0-9.a-z0-9#$%&*~-]+@[a-z0-9]+?\.[a-z0-9]{2,20}$/;
        var result = reg.test(email);
        if (result == false) {
            alert("Invalid Email");
            document.myForm.email.focus();
            return false;
        }
        var reg = /^\w+[a-zA-Z0-9]{2,20}$/;
        var result = reg.test(subject);
        if (result == false) {

            alert(" Please Enter Minimum Six Letters");
            document.myForm.subject.focus();
            return false;
        }
        // var reg = /^\w+[a-zA-Z0-9]{5,30}$/;
        // var result = reg.test(message);
        // if (result == false) {

        //     alert(" Please Enter Minimum Six Letters");
        //     document.myForm.message.focus();
        //     return false;
        // }
        return true;
    }
    </script>
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
                        <h1 class="title-single">Contact US</h1>
                        <span class="color-text-a">Meelas International</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Contact
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Contact Star /-->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-map box">
                        <div id="map" class="contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31431.07543211187!2d76.29461180003553!3d10.026394901574129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080da53444d5e9%3A0xb46c57c6b1bc9aff!2sEdappally%2C%20Kochi%2C%20Kerala!5e0!3m2!1sen!2sin!4v1655378827715!5m2!1sen!2sin"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 section-t8">
                    <div class="row">
                        <div class="col-md-7">
                            <form class="form-a" action="" method="post" role="form" name="myForm"
                                onsubmit="return Validate()">
                                <div id="sendmessage">Your message has been sent. Thank you!</div>
                                <div id="errormessage"></div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <input type="text" name="name"
                                                class="form-control form-control-lg form-control-a"
                                                placeholder="Your Name">

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <input name="email" type="email"
                                                class="form-control form-control-lg form-control-a"
                                                placeholder="Your Email">

                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <input type="text" name="subject"
                                                class="form-control form-control-lg form-control-a"
                                                placeholder="Subject">

                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" cols="45" rows="8"
                                                placeholder="Message" required></textarea>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn btn-a">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5 section-md-t3">
                            <div class="icon-box section-b2">
                                <div class="icon-box-icon">
                                    <span class="ion-ios-paper-plane"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Say Hello</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <p class="mb-1">Email.
                                            <span class="color-a">meelascochin@hotmail.com</span>
                                        </p>
                                        <p class="mb-1">Phone.
                                            <span class="color-a">+91 8137843791</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box section-b2">
                                <div class="icon-box-icon">
                                    <span class="ion-ios-pin"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Find us in</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <p class="mb-1">
                                            Edappally<br>
                                            Kochi
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box">
                                <div class="icon-box-icon">
                                    <span class="ion-ios-redo"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Social networks</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <div class="socials-footer">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="https://www.facebook.com/Meelasproperties/" class="link-one">
                                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-one">
                                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="https://www.instagram.com/meelas_international/" target="_blank"" class="link-one">
                                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                               
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
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
            </div>
        </div>
    </section>
    <!--/ Contact End /-->

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