<?php
session_start();
    include 'connection.php';
    include 'checklogin.php';
    $area = mysqli_real_escape_string($conn, $_POST['area']);
     $beds = mysqli_real_escape_string($conn, $_POST['beds']);
     $baths = mysqli_real_escape_string($conn, $_POST['baths']);
     $garage = mysqli_real_escape_string($conn, $_POST['garage']);
      
$sql="UPDATE `amenities` SET `area`='$area',`beds`='$beds',`baths`='$baths',`garage`='$garage'";

    $edit=$_SESSION["SESSION_EDIT"];
    
    $sql.=" WHERE id=$edit";
    
    $result=mysqli_query($conn,$sql);
     if($result){
        header("location:viewamenities.php");
        echo "<script>alert 'updated'</script>"; 
     }else{
        echo "error:".mysqli_error($conn);

    }

?>