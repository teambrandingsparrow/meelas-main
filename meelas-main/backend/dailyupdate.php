<?php
session_start();
include 'connection.php';
include 'checklogin.php';
$msg = "";
if (isset($_POST['submit'])) {
   
    $image_name = $_FILES['anyfile']['name'];
    
    if (move_uploaded_file($_FILES["anyfile"]["tmp_name"], "uploads/" . $image_name)) {
        $sql = "INSERT INTO dailyupdate(image) VALUE('$image_name')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $msg = "Added Successfully";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>

    <?php include 'head.php'; ?>

</head>


<body>
    <div id="wrapper">
        <?php include 'sidebar.php' ?>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <?php include 'header.php'; ?>
            <?php if (!isset($_GET['id'])) { ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>  Details</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a>Users Details</a>
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
                            <p><?php echo $msg; ?></p>
                            <form method="post" class="form-horizontal" name="myForm" onsubmit="return Validate()" enctype="multipart/form-data">
                                        
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Add Image</label>
                                    <div class="col-sm-10">
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput">
                                            <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                            <span class="fileinput-filename"></span>
                                        </div>
                                        <span class="input-group-addon btn btn-default btn-file">
                                            <span class="fileinput-new">Select file</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="anyfile">
                                        </span>
                                        <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                            data-dismiss="fileinput">Remove</a>
                                    </div>
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


            <?php
            } else {
                $edit = $_GET['id'];
                $_SESSION['SESSION_EDIT'] = $edit;
                $sql = "SELECT * FROM dailyupdate where id='$edit'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
            ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Update Details</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a>Users Details</a>
                        </li>
                        <li class="active">
                            <strong>Update</strong>
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
                            <form method="post" action="dailyupdated.php" class="form-horizontal" name="myForm"onsubmit="return Validate()" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Add Image</label>
                                    <div class="col-sm-10">
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput">
                                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                <span class="fileinput-filename"></span>
                                            </div>

                                            <span class="input-group-addon btn btn-default btn-file">
                                                <span class="fileinput-new">Select file</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="anyfile"
                                                    value="<?php echo $row['image']; ?>">
                                            </span>
                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                                data-dismiss="fileinput">Remove</a>
                                        </div>
                                        <img src="<?php echo  'uploads/' . $row['image']; ?>" width="100px">
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-offset-2">
                                                <button class="btn btn-white" type="submit">Cancel</button>
                                                <button class="btn btn-primary" name="submit"
                                                    type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            $sql = "SELECT * FROM  dailyupdate";
            $result = mysqli_query($conn, $sql);

            ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>  Details</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a>Users Details</a>
                        </li>
                        <li class="active">
                            <strong>View </strong>
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
                            <div class="wrapper wrapper-content animated fadeInRight">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ibox float-e-margins">

                                            <div class="ibox-content">

                                                <div class="table-responsive">
                                                    <table
                                                        class="table table-striped table-bordered table-hover dataTables-example">
                                                        <thead>
                                                            <tr>
                                                                <th>Si.No </th>

                                                                <th>Image</th>
                                                                <th>Edit/Remove</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            if (mysqli_num_rows($result) > 0) {
                                                                $slno=1;
                                                                foreach ($result as $row) {

                                                            ?>

                                                            <tr class="gradeX">
                                                            <td><?php  echo  $slno++; ?></td>
                                                            

                                                                <td>
                                                                    <img src="<?php echo  'uploads/' . $row['image']; ?>"
                                                                        width="50px">
                                                                </td>
                                                                <td> 
                                                                    <a href="dailyupdate.php?id=<?php echo $row['id']; ?>">
                                                                            <button type="button" style="background:#5cb85c ; border-color: #4cae4c;"
                                                                        class="btn btn-success"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i>
                                                                    </button></a>
                                                                    <a href="dailydeleted.php?dt=<?php echo $row['id']; ?>"onclick="return confirm('Are You Sure?')"> <button type="button" class="btn btn btn-danger"> <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                    </button></a>
                                                                </td>
                                                                <?php
                                                                }
                                                            }
                                                                ?>

                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <?php include 'footer.php';?>

        </div>
    </div>


    <?php include 'script.php'?>
</body>

</html>