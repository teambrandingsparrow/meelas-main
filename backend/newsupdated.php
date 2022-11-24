<?php
session_start();
    include 'connection.php';
    include 'checklogin.php';
      
     $date = mysqli_real_escape_string($conn, $_POST['date']);
     $description = mysqli_real_escape_string($conn, $_POST['description']);
   // $image=mysqli_real_escape_string($conn,$_POST['image']);
$sql="UPDATE `latestnews` SET `date`='$date',`description`='$description',`newsimage`='$image_name'";


if(isset($_FILES['anyfile'])){
    $image_name=$_FILES['anyfile']['name'];
    if(move_uploaded_file($_FILES["anyfile"]["tmp_name"], "uploads/" . $image_name));
    
 {
$sql .=",`newsimage`='$image_name'";
    }
}



    $edit=$_SESSION["SESSION_EDIT"];
    
    $sql.=" WHERE id=$edit";
    
    $result=mysqli_query($conn,$sql);
     if($result){
        header("location:newsview.php");
        echo "<script>alert 'updated'</script>"; 
     }else{
        echo "error:".mysqli_error($conn);

    }

?>