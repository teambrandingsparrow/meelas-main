<?php
 session_start();
 include 'connection.php';
 include 'checklogin.php';
$delete=$_GET['dt'];

$sql= "DELETE portfolios FROM `portfolios`WHERE port_id='$delete'";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:portfolioview.php");
    echo "<script>alert 'deleted'</script>"; 
 }else{
    echo "error:".mysqli_error($conn);


}
?>