<?php
session_start();
 include 'connection.php';
// $msg = "";
// //$mess="";
include 'checklogin.php';
 $edit=$_GET['id'];
 $_SESSION['SESSION_EDIT']=$edit;
$sql="SELECT * FROM  `amenities` where id='$edit'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
 ?>
<!DOCTYPE html>
<html>


<head>
    <!-- <script>
    function Validate() {
        var title = document.getElementById('title').value;
        var description = document.getElementById('description').value;
        var date = document.getElementById('date').value;
        var type = document.getElementById('type').value;
        var img = document.getElementById('image').value;
        $x = true;

        if (title == "") {
            document.getElementById('title_error').innerHTML = " Please fill the Title field";
            $x = false;
        }
        if (description == "") {
            document.getElementById('description_error').innerHTML = " Please fill the Description field";
            $x = false;
        }
        if (date == "") {
            document.getElementById('date_error').innerHTML = " Please fill the Date field";
            $x = false;
        }
        if (type == "") {
            document.getElementById('type_error').innerHTML = " Please select the Type field";
            $x = false;
        }
        if (img == "") {
            document.getElementById('img_error').innerHTML = " Please fill the Image field";
            $x = false;
        }
        if ($x == false) {
            return false;
        } else {
            return true;
        }

    }
    </script> -->

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
                            <form method="post" action="updatedamen.php"class="form-horizontal" name="myForm" onsubmit="return Validate()"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Area</label>
                                    <div class="col-sm-10">
                                        <input type="area" class="form-control" id="title" placeholder="Enter Area"
                                            name="area"value=" <?php echo $row['area']; ?>" required>

                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Beds</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="Enter Beds"
                                            name="beds" value=" <?php echo $row['beds']; ?>"required>

                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Baths</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="date" placeholder="Enter Baths"
                                            name="baths"value=" <?php echo $row['baths']; ?>"required>
                                      
                                    </div>

                                </div>


                                <div class="form-group"><label class="col-sm-2 control-label">Garage</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="date" placeholder="Enter Garage"
                                            name="garage"value=" <?php echo $row['garage']; ?>"required>
                                      
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