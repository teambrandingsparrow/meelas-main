<?php
session_start();
 include 'connection.php';
// $msg = "";
// //$mess="";
include 'checklogin.php';
 if (isset($_POST['submit'])) {
  

     $area = mysqli_real_escape_string($conn, $_POST['area']);
     $beds = mysqli_real_escape_string($conn, $_POST['beds']);
     $baths = mysqli_real_escape_string($conn, $_POST['baths']);
     $garage = mysqli_real_escape_string($conn, $_POST['garage']);
     $lastid=$_SESSION['SESSION_ID'];

  

       $sql=" INSERT INTO amenities(`area`, `beds`, `baths`, `garage`,store_id) VALUES ('$area','$beds','$baths','$garage','$lastid')";        
       $result = mysqli_query($conn, $sql);
       

     }
 
?>
<!DOCTYPE html>
<html>


<head>
  

    <?php include 'head.php'; ?>
</head>

<body>
    <div id="wrapper">
        <?php include 'sidebar.php'; ?>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <?php include 'header.php'; ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2> Details</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a> Details</a>
                        </li>
                        <li class="active">
                            <strong>Add </strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <!-- <p><?php // echo $msg; 
                                    ?></p> -->
                            <form method="post" class="form-horizontal" name="myForm" onsubmit="return Validate()"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Area</label>
                                    <div class="col-sm-10">
                                        <input type="area" class="form-control" id="title" placeholder="Enter Area"
                                            name="area" required>

                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Beds</label>

                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="title" placeholder="Enter Beds"
                                            name="beds"required>

                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Baths</label>

                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="date" placeholder="Enter Baths"
                                            name="baths"required>
                                      
                                    </div>

                                </div>


                                <div class="form-group"><label class="col-sm-2 control-label">Garage</label>

                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="date" placeholder="Enter Garage"
                                            name="garage"required>
                                      
                                    </div>

                                </div>
                               
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="submit">Cancel</button>
                                        <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'footer.php'; ?>

        </div>
    </div>

    <?php include 'script.php'; ?>
</body>

</html>