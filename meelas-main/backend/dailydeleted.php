<?php
 session_start();
 include 'connection.php';
 include 'checklogin.php';
$delete=$_GET['dt'];

$sql= "DELETE dailyupdate FROM `dailyupdate`WHERE id='$delete'";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:dailyupdate.php");
    echo "<script>alert 'deleted'</script>"; 
 }else{
    echo "error:".mysqli_error($conn);


}
?>