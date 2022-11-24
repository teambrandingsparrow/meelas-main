<?php
 session_start();
 include 'connection.php';
 include 'checklogin.php';
$delete=$_GET['dt'];

$sql= "DELETE propertiess FROM `propertiess`WHERE id_name='$delete'";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:view.php");
    echo "<script>alert 'deleted'</script>"; 
 }else{
    echo "error:".mysqli_error($conn);


}
?>