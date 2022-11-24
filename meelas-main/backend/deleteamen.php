<?php
 session_start();
 include 'connection.php';
 include 'checklogin.php';
$delete=$_GET['dt'];

$sql= "DELETE amenities FROM `amenities`WHERE id_amen='$delete'";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:viewamenities.php");
    echo "<script>alert 'deleted'</script>"; 
 }else{
    echo "error:".mysqli_error($conn);


}
?>