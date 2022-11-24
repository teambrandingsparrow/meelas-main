<?php
session_start();
    include 'connection.php';
    include 'checklogin.php';
       $title = mysqli_real_escape_string($conn, $_POST['title']);
       $description = mysqli_real_escape_string($conn, $_POST['description']);
       $date = mysqli_real_escape_string($conn, $_POST['date']);
       $type = mysqli_real_escape_string($conn, $_POST['type']);
       
      
   // $image=mysqli_real_escape_string($conn,$_POST['image']);
$sql="UPDATE `portfolios` SET `title`='$title',`description`='$description',`date`='$date',`type`='$type'";


if(isset($_FILES['anyfile'])){
    $image_name=$_FILES['anyfile']['name'];
    if(move_uploaded_file($_FILES["anyfile"]["tmp_name"], "uploads/" . $image_name)){
$sql .=",`image`='$image_name'";
    }

}


    $edit=$_SESSION["SESSION_EDIT"];
    
    $sql.=" WHERE port_id=$edit";
    
    $result=mysqli_query($conn,$sql);
     if($result){
        header("location:portfolioview.php");
        echo "<script>alert 'updated'</script>"; 
     }else{
        echo "error:".mysqli_error($conn);

    }

?>