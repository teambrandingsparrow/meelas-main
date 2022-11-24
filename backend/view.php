<?php
session_start();

include 'connection.php';
include 'checklogin.php';
 $sql = "SELECT * FROM `propertiess` INNER JOIN types ON propertiess.type=types.id INNER JOIN propertytypes ON propertiess.propertytype=propertytypes.id";
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
                                                <th>Property Id</th>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Property Type</th>
                                                <th>Location</th>
                                                <th>Addrerss</th>
                                                <th>Area</th>
                                                <th>Budget</th>
                                                <th>Amenities</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>video</th>
                                                <th>floor Plan</th>
                                                <th>Ubication</th>
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
                                                        <td> <?php echo $row['propertyid']; ?></td>
                                                        <td><?php echo $row['names']; ?></td>
                                                        <td><?php echo $row['name']; ?></td>
                                                        <td><?php echo $row['name_type']; ?></td>
                                                        <td><?php echo $row['location']; ?></td>
                                                        <td><?php echo $row['address']; ?></td>
                                                        <td><?php echo $row['area']; ?></td>
                                                        <td><?php echo $row['budget']; ?></td>
                                                        <td><?php echo $row['amanities']; ?></td>
                                                        <td><?php echo $row['description']; ?></td>
                                                        <td>
                                                            <img src="<?php echo  'uploads/' . $row['image']; ?>" width="50px">

                                                        </td>
                                                        <td>
                                                            <video src="<?php echo  'uploads/' . $row['video']; ?>" width="50px">
                                                        </td>
                                                        <td>
                                                            <img src="<?php echo  'uploads/' . $row['floorplan']; ?>" width="50px">
                                                        </td>
                                                        <td><?php echo $row['map']; ?></td>
                                                        <td>
                                                        <a href="update.php?id=<?php echo $row['id_name']; ?>"><button type="button" style="background:#5cb85c ; border-color: #4cae4c;" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            </button></a>
                                                            <a href="delete.php?dt=<?php echo $row['id_name']; ?>" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>
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