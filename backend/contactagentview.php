<?php
session_start();
include 'connection.php';
include 'checklogin.php';
$sql = "SELECT * FROM `contactagent` ";
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
                    <h2>portfolio Details</h2>
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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                
                                                
                                              
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
                                                        <td> <?php echo $row['name']; ?></td>
                                                        <td><?php echo $row['email']; ?></td>
                                                        <td><?php echo $row['message']; ?></td>
                                                       
                                                       
                                                       
                                                     
                                                      
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