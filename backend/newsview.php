<?php
session_start();

include 'connection.php';
include 'checklogin.php';
 $sql = "SELECT * FROM `latestnews`";
$result = mysqli_query($conn, $sql);

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


            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Property Details</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a> Details</a>
                        </li>
                        <li class="active">
                            <strong>View </strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>


            <!-- list  details -->


            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Si.No </th>
                                               
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th>News Image</th>
                                            
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
                                                       
                                                        <td><?php echo $row['date']; ?></td>
                                                     
                                                        <td><?php echo $row['description']; ?></td>
                                                        <td>
                                                            <img src="<?php echo  'uploads/' . $row['newsimage']; ?>" width="50px">

                                                        </td>
                                                     
                                                     <td>
                                                        <a href="newsupdate.php?id=<?php echo $row['id']; ?>"><button type="button" style="background:#5cb85c ; border-color: #4cae4c;" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            </button></a>
                                                            <a href="newsdelete.php?dt=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>
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

            <!-- <!-details Ended --> 

            <?php include 'footer.php'; ?>
        </div>
    </div>



    <?php include 'script.php' ?>

</body>

</html>