<?php
session_start();
 include 'connection.php';
 include 'checklogin.php';
 $edit=$_GET['id'];
 $_SESSION['SESSION_EDIT']=$edit;
$sql="SELECT * FROM  `latestnews` where id='$edit'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
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
                                enctype="multipart/form-data" action="newsupdated.php">
                                <div class="form-group">

                                    <div class="form-group"><label class="col-sm-2 control-label">Location</label>

                                        <div class="col-sm-10"><input type="date" class="form-control"
                                                placeholder=" Enter date" id="url" name="date"
                                                value="<?php echo $row['date'];?>"required>
                                           
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">Description</label>

                                        <div class="col-sm-10"><textarea cols="190" name="description"
                                                placeholder="Enter Description"
                                                id="description"required><?php echo $row['description'];?></textarea>
                                          
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
                                                    <input type="file" name="anyfile" id="image"
                                                        value="<?php echo $row['newsimage'];?>"required>

                                                   
                                                    <span class="fileinput-filename"></span>
                                                </span>
                                                <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                                    data-dismiss="fileinput">Remove</a>
                                            </div>
                                            <img src="<?php echo  'uploads/'.$row['newsimage'];?>" width="50px">
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