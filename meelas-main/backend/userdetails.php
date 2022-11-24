<?php
session_start();

 include 'connection.php';
// $msg = "";
// //$mess="";
include 'checklogin.php';
 if (isset($_POST['submit'])) {
    
     $id = mysqli_real_escape_string($conn, $_POST['id']);
     $name = mysqli_real_escape_string($conn, $_POST['name']);
     $type = mysqli_real_escape_string($conn, $_POST['type']);
     $property = mysqli_real_escape_string($conn, $_POST['propertytype']);
     $location = mysqli_real_escape_string($conn, $_POST['location']);
     $address = mysqli_real_escape_string($conn, $_POST['address']);
     $area = mysqli_real_escape_string($conn, $_POST['area']);
     $budget = mysqli_real_escape_string($conn, $_POST['budget']);
     $amenities = mysqli_real_escape_string($conn, $_POST['amenities']);
     $description = mysqli_real_escape_string($conn, $_POST['description']);
     $image_name ='';
    $video = "";
    $floor = "";
    $map = mysqli_real_escape_string($conn, $_POST['url']);
if($_FILES['anyfile']['name']){
    $image_name = $_FILES['anyfile']['name'];
    move_uploaded_file($_FILES["anyfile"]["tmp_name"], "uploads/" . $image_name);

}if($_FILES['video']['name']){
    $video =  $_FILES['video']['name'];
    move_uploaded_file($_FILES["video"]["tmp_name"], "uploads/" . $video);
}if($_FILES['floor']['name']){
    $floor = $_FILES['floor']['name'];
    move_uploaded_file($_FILES["floor"]["tmp_name"], "uploads/" . $floor);
}
    // if (move_uploaded_file($_FILES["anyfile"]["video"]["floor"]["tmp_name"], "uploads/" . $image_name.$video.$floor)) {

        $sql=" INSERT INTO `propertiess`(`propertyid`,`names`,`type`,`propertytype`,`location`,`address`,`area`,`budget`,`amanities`,`description`,`image`, `video`,`floorplan`,`map`) VALUES ('$id','$name','$type','$property','$location','$address','$area','$budget','$amenities','$description','$image_name','$video','$floor','$map')";        
       $result = mysqli_query($conn, $sql);
        $lastid=mysqli_insert_id($conn);
        if($result){
         $_SESSION['SESSION_ID']=$lastid;
  header('location:amenities.php');
        }
       
    

     }
 //}
?>
<!DOCTYPE html>
<html>


<head>
    <script>
        function Validate() {
            var id = document.getElementById('id').value;
            var name = document.getElementById('name').value;
            var type = document.getElementById('type').value;
            var property = document.getElementById('propertytype').value;
            var location = document.getElementById('location').value;
            var add = document.getElementById('add').value;
            var area = document.getElementById('area').value;
            var budget = document.getElementById('budget').value;
            var amenities = document.getElementById('amanities').value;
            var description = document.getElementById('description').value;
            var img = document.getElementById('image').value;
            var video = document.getElementById('video').value;
            var floor = document.getElementById('floor').value;
            var map = document.getElementById('url').value;

$x=true;

            if (id == "") {
                document.getElementById('id_error').innerHTML = " please fill the id field";
                $x=false;
            }
            if (name == "") {
                document.getElementById('name_error').innerHTML = " please fill the name field";
                $x=false;
            }
            if (type == "") {
                document.getElementById('type_error').innerHTML = " please select the type field";
                $x=false;
            }
            if (property == "") {
                document.getElementById('property_error').innerHTML = " please select the propertytype field";
                $x=false;
            }
            if (location == "") {
                document.getElementById('loco_error').innerHTML = " please fill the location field";
                $x=false;
            }
            if (add == "") {
                document.getElementById('add_error').innerHTML = " please fill the address field";
                $x=false;
            }

            if (area == "") {
                document.getElementById('area_error').innerHTML = " please fill the area field";
                $x=false;
            }

            if (budget == "") {
                document.getElementById('budget_error').innerHTML = " please fill the budget field";
                $x=false;
            }

            if (amenities == "") {
                document.getElementById('amen_error').innerHTML = " please fill the amenities field";
                $x=false;
            }

            if (description == "") {
                document.getElementById('description_error').innerHTML = " please fill the description field";
                $x=false;
            }

            if (img == "") {
                document.getElementById('img_error').innerHTML = " please fill the image field";
                $x=false;
            }
            if (video == "") {
                document.getElementById('video_error').innerHTML = " please fill the video field";
                $x=false;
            }
                if (floor == "") {
                document.getElementById('floor_error').innerHTML = " please fill the floor plan field";
                $x=false;
            }
                if (map == "") {
                document.getElementById('url_error').innerHTML = " please fill the map field";
                $x=false;
            }
            if($x==false){
                return false; 
            }else{
                return true;
            }
           
        }
    </script>

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
                            <form method="post" class="form-horizontal" name="myForm" onsubmit="return Validate()" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Property Id</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" placeholder="Enter id" name="id">
                                        <spam id="id_error" class="text-danger font-weight-bold"></spam>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                                        <spam id="name_error" class="text-danger font-weight-bold"></spam>
                                    </div>

                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Type<br /><small class="text-navy"></small></label>

                                    <div class="col-sm-10">
                                        <select class="form-control" name="type" id="type">
                                        <option value="">Please Select Type</option>
                                            <?php

                                            $sql="SELECT * FROM types";
                                            $result=mysqli_query($conn,$sql);
                                            if (mysqli_num_rows($result) > 0) {
                                                foreach ($result as $row) {

                                            ?>
                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                         

                                            
                                               
                                                <?php     
                                                  }
                                         }
                                         ?>
                                          
                                        </select>
                                        <spam id="type_error" class="text-danger font-weight-bold"></spam>
                                    </div>
                                </div>
                                         
                                <div class="form-group"><label class="col-sm-2 control-label">Property Type<br /><small class="text-navy"></small></label>

                                    <div class="col-sm-10">
                                        <select class="form-control" name="propertytype" id="propertytype">
                                           
                                        
                                                <option value="">Please Select Property Type</option>
                                            <?php
                                            
                                            $sql="SELECT * FROM propertytypes";
                                            $result=mysqli_query($conn,$sql);
                                            if (mysqli_num_rows($result) > 0) {
                                                foreach ($result as $row) {

                                            ?>


                                                 <option value="<?php echo $row['id']; ?>"><?php echo $row['name_type']; ?></option> 

                                             
                                                
                                                <?php
                                                }
                                            }
                                            ?>
                                            
                                        </select>
                                        <spam id="property_error" class="text-danger font-weight-bold"></spam>
                                    </div>
                                </div>


                                <div class="form-group"><label class="col-sm-2 control-label">Location</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" placeholder="Enter Location" name="location" id="location">
                                        <spam id="loco_error" class="text-danger font-weight-bold"></spam>
                                    </div>

                                </div>


                                <div class="form-group"><label class="col-sm-2 control-label">Address</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" placeholder=" Enter Address" id="add" name="address">
                                        <spam id="add_error" class="text-danger font-weight-bold"></spam>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Area</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" placeholder=" Enter Area" id="area" name="area">
                                        <spam id="area_error" class="text-danger font-weight-bold"></spam>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Budget</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" placeholder=" Enter Budget" id="budget" name="budget">
                                        <spam id="budget_error" class="text-danger font-weight-bold"></spam>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Amenities</label>

                                    <div class="col-sm-10"><textarea name="amenities" cols="190" rows="" placeholder="Enter Amenities" id="amanities"></textarea>
                                        <spam id="amen_error" class="text-danger font-weight-bold"></spam>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Description</label>

                                    <div class="col-sm-10"><textarea cols="190" name="description" placeholder="Enter Description" id="description"></textarea>
                                        <spam id="description_error" class="text-danger font-weight-bold"></spam>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Add Image</label>
                                    <div class="col-sm-10">
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput">
                                                <i class="glyphicon glyphicon-file fileinput-exists"></i>

                                            </div>
                                            <span class="input-group-addon btn btn-default btn-file">
                                                <span class="fileinput-new">Select file</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="anyfile" id="image">

                                                <spam id="img_error" class="text-danger font-weight-bold"></spam>
                                                <span class="fileinput-filename"></span>
                                            </span>
                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Add Video</label>
                                    <div class="col-sm-10">
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput">
                                                <i class="glyphicon glyphicon-file fileinput-exists"></i>

                                            </div>
                                            <span class="input-group-addon btn btn-default btn-file">
                                                <span class="fileinput-new">Select file</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="video" id="video">

                                                <spam id="video_error" class="text-danger font-weight-bold"></spam>
                                                <span class="fileinput-filename"></span>
                                            </span>
                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Add Floor Plan</label>
                                    <div class="col-sm-10">
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput">
                                                <i class="glyphicon glyphicon-file fileinput-exists"></i>

                                            </div>
                                            <span class="input-group-addon btn btn-default btn-file">
                                                <span class="fileinput-new">Select file</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="floor" id="floor">

                                                <spam id="floor_error" class="text-danger font-weight-bold"></spam>
                                                <span class="fileinput-filename"></span>
                                            </span>
                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group"><label class="col-sm-2 control-label">Location</label>

                                    <div class="col-sm-10"><input type="url" class="form-control" placeholder=" Enter url" id="url" name="url">
                                        <spam id="url_error" class="text-danger font-weight-bold"></spam>
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

