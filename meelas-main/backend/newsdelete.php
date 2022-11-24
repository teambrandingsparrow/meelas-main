<?php
 session_start();
 include 'connection.php';
 include 'checklogin.php';
$delete=$_GET['dt'];

$sql= "DELETE latestnews FROM `latestnews`WHERE id='$delete'";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:newsview.php");
    echo "<script>alert 'deleted'</script>"; 
 }else{
    echo "error:".mysqli_error($conn);


}
?>