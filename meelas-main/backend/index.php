<?php
ob_start();
session_start();
include 'connection.php';
$message = "";
if (isset($_POST["sub"])) {
    // echo "<pre>";
    // print_r($_POST);
    // exit;
    if (!empty($_POST['name']) && !empty($_POST['password'])) {
        $user = $_POST['name'];
        $pass = $_POST['password'];



        $sql = "SELECT * FROM users WHERE username='" . $user . "' AND password='" . $pass . "'";
        $query = mysqli_query($conn, $sql);
        $numrows = mysqli_num_rows($query);
        if ($numrows != 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $dbusername = $row['username'];
                $dbpassword = $row['password'];
            }

            if ($user == $dbusername && $pass == $dbpassword) {

                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['name'] = $user;

                /* Redirect browser */
                header("Location: dashboard.php");
            }
        } else {

            $message = "Invalid username or password!";
        }
    } else {
        $message = "All fields are required!";
    }
}

?>


<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MEELAS | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name"><img style="width: 29rem;" src="img/logo.png" alt=""></h1>

            </div>
            <h3>Welcome to Meelas</h3>

            <p>Login in. To see it in action.</p>
            <p style="color: red;"><?php echo "$message";   ?></p>

            <form class="m-t" role="form" action="" method="POST">
                <div class="form-group">
                    <input type="email" name="name" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>

                <button type="submit" name="sub" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
            </form>

        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>




</body>

</html>

             
