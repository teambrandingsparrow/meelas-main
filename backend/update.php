<?php
session_start();
 include 'connection.php';
 include 'checklogin.php';
 $edit=$_GET['id'];
 $_SESSION['SESSION_EDIT']=$edit;
$sql="SELECT * FROM  `propertiess` where id_name='$edit'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
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
                
            }
            if (name == "") {
                document.getElementById('name_error').innerHTML = " please fill the name field";
                
            }
            if (type == "") {
                document.getElementById('type_error').innerHTML = " please select the type field";
                
            }
            if (property == "") {
                document.getElementById('property_error').innerHTML = " please select the propertytype field";
                
            }
            if (location == "") {
                document.getElementById('loco_error').innerHTML = " please fill the location field";
               
            }
            if (add == "") {
                document.getElementById('add_error').innerHTML = " please fill the address field";
                
            }

            if (area == "") {
                document.getElementById('area_error').innerHTML = " please fill the area field";
                
            }

            if (budget == "") {
                document.getElementById('budget_error').innerHTML = " please fill the budget field";
               
            }

            if (amenities == "") {
                document.getElementById('amen_error').innerHTML = " please fill the amenities field";
               
            }

            if (description == "") {
                document.getElementById('description_error').innerHTML = " please fill the description field";
                
            }

            if (img == "") {
                document.getElementById('img_error').innerHTML = " please fill the image field";
                
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
                            <form method="post" class="form-horizontal" name="myForm" onsubmit="return Validate()" enctype="multipart/form-data"action="updated.php">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Property Id</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" placeholder="Enter id" name="id"value=" <?php echo $row['propertyid']; ?>">
                                        <spam id="id_error" class="text-danger font-weight-bold"></spam>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name"value=" <?php echo $row['names']; ?>">
                                        <spam id="name_error" class="text-danger font-weight-bold"></spam>
                                    </div>

                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Type<br /><small class="text-navy"></small></label>

                                    <div class="col-sm-10">
                                        <select class="form-control" name="type" id="type">
                                        <option value="">Please Select Type</option>
                                        <?php
                                          
                                            $sql="SELECT * FROM  types";
                                            $result=mysqli_query($conn,$sql);
                                            if (mysqli_num_rows($result) > 0) {
                                                foreach ($result as $rows) {

                                            ?>
                                            <option <?php if($row['type']==$rows['id']){ ?> selected <?php } ?> value="<?php echo $rows['id']; ?> "><?php echo $rows['name']; ?></option>

                                            
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
                                                foreach ($result as $rows) {

                                            ?>


                                                <option <?php if($row['propertytype']==$rows['id']){ ?> selected <?php } ?> value="<?php echo $rows['id']; ?>"><?php echo $rows['name_type']; ?></option>

                                             
                                                
                                                <?php
                                                }
                                            }
                                            ?>

                                                
                                            
                                        </select>
                                        <spam id="property_error" class="text-danger font-weight-bold"></spam>
                                    </div>
                                </div>


                                <div class="form-group"><label class="col-sm-2 control-label">Location</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" placeholder="Enter Location" name="location" id="location"value=" <?php echo $row['location']; ?>">
                                        <spam id="loco_error" class="text-danger font-weight-bold"></spam>
                                    </div>

                                </div>


                                <div class="form-group"><label class="col-sm-2 control-label">Address</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" placeholder=" Enter Address" id="add" name="address"value=" <?php echo $row['address']; ?>">
                                        <spam id="add_error" class="text-danger font-weight-bold"></spam>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Area</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" placeholder=" Enter Area" id="area" name="area"value=" <?php echo $row['area']; ?>">
                                        <spam id="area_error" class="text-danger font-weight-bold"></spam>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Budget</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" placeholder=" Enter Budget" id="budget" name="budget"value=" <?php echo $row['budget']; ?>">
                                        <spam id="budget_error" class="text-danger font-weight-bold"></spam>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Amenities</label>

                                    <div class="col-sm-10"><textarea name="amenities" cols="190" rows="" placeholder="Enter Amenities" id="amanities"> <?php echo $row['amanities']; ?></textarea>
                                        <spam id="amen_error" class="text-danger font-weight-bold"></spam>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Description</label>

                                    <div class="col-sm-10"><textarea cols="190" name="description" placeholder="Enter Description" id="description"><?php echo $row['description']; ?></textarea>
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
                                                <input type="file" name="anyfile" id="image"value="<?php echo $row['image'];?>"required>

                                                <spam id="img_error" class="text-danger font-weight-bold"></spam>
                                                <span class="fileinput-filename"></span>
                                            </span>
                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                        <img src="<?php echo  'uploads/'.$row['image'];?>" width="50px">
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
                                                <input type="file" name="video" id="videos" value="<?php echo $row['video'];?>" width="50" height="50"required>

                                                <spam id="video_error" class="text-danger font-weight-bold"></spam>
                                                <span class="fileinput-filename"></span>
                                            </span>
                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                        <video src="<?php echo  'uploads/'.$row['video'];?>" width="100" height="100">
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
                                                <input type="file" name="floor" id="floor"value="<?php echo $row['floorplan'];?>"required>

                                                <spam id="floor_error" class="text-danger font-weight-bold"></spam>
                                                <span class="fileinput-filename"></span>
                                            </span>
                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                        <img src="<?php echo  'uploads/'.$row['floorplan'];?>" width="50px">
                                    </div>
                                </div>
                                
                                <div class="form-group"><label class="col-sm-2 control-label">Location</label>

                                    <div class="col-sm-10"><input type="url" class="form-control" placeholder=" Enter url" id="url" name="url"value="<?php echo $row['map'];?>">
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