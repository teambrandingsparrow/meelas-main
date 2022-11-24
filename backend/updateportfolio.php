<?php
session_start();
 include 'connection.php';
 include 'checklogin.php';
 $edit=$_GET['id'];
 $_SESSION['SESSION_EDIT']=$edit;
$sql="SELECT * FROM  `portfolios` where port_id='$edit'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
 ?>
 <!DOCTYPE html>
<html>


<head>
    <script>
    function Validate() {
        var title = document.getElementById('title').value;
        var description = document.getElementById('description').value;
        var date = document.getElementById('date').value;
        var type = document.getElementById('type').value;
      
        $x = true;

        if (title == "") {
            document.getElementById('title_error').innerHTML = " Please Fill The Title Field";
            $x = false;
        }
        if (description == "") {
            document.getElementById('description_error').innerHTML = " Please Fill The Description Field";
            $x = false;
        }
        if (date == "") {
            document.getElementById('date_error').innerHTML = " Please Fill The Date Field";
            $x = false;
        }
        if (type == "") {
            document.getElementById('type_error').innerHTML = " Please Select The Type Field";
            $x = false;
        }
     
        if ($x == false) {
            return false;
        } else {
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
                            <form method="post" class="form-horizontal" action="updatedportfolio.php"name="myForm" onsubmit="return Validate()"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="Enter Title"
                                            name="title" value="<?php echo $row['title']; ?>">
                                        <spam id="title_error" class="text-danger font-weight-bold"></spam>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Description</label>

                                    <div class="col-sm-10"><textarea cols="190" name="description"
                                            placeholder="Enter Description" id="description"><?php echo $row['description']; ?></textarea>
                                        <spam id="description_error" class="text-danger font-weight-bold"></spam>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Date</label>

                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="date" placeholder="Enter Date"
                                            name="date" value="<?php echo $row['date'];?>">
                                        <spam id="date_error" class="text-danger font-weight-bold"></spam>
                                    </div>

                                </div>

                                
                                <div class="form-group"><label class="col-sm-2 control-label">Type<br /><small
                                            class="text-navy"></small></label>

                                    <div class="col-sm-10">
                                        <select class="form-control" name="type" id="type">


                                            <option value="">Please Select Property Type</option>


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
                                                <input type="file" name="anyfile" id="image" value="<?php echo $row['image'];?>">

                                                <div > <spam id="img_error" class="text-danger font-weight-bold"></spam></div>
                                                <span class="fileinput-filename"></span>
                                            </span>
                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                                data-dismiss="fileinput">Remove</a>
                                        </div>
                                       
                                        <img src="<?php echo  'uploads/'.$row['image'];?>" width="50px">
                                      
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