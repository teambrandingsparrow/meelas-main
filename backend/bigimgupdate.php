<?php

session_start();
    include 'connection.php';

    include 'checklogin.php';
    $image_name=$_FILES['anyfile']['name'];
   
    if(move_uploaded_file($_FILES["anyfile"]["tmp_name"], "uploads/" . $image_name)){
    $edit=$_SESSION["SESSION_EDIT"];
    
    $sql=" UPDATE `bigbanners` SET `image`='$image_name' WHERE  id='$edit'";
    $result=mysqli_query($conn,$sql);
     if($result){
        header("location:bigbanner.php");
        echo "<script>alert 'updated'</script>"; 
     }else{
        echo "error:".mysqli_error($conn);

    }
}
?>