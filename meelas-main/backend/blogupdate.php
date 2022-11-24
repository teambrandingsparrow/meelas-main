<?php

session_start();
    include 'connection.php';

    include 'checklogin.php';
    $image_name=$_FILES['anyfile']['name'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $text = mysqli_real_escape_string($conn, $_POST['text']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    if(move_uploaded_file($_FILES["anyfile"]["tmp_name"], "uploads/" . $image_name)){
    $edit=$_SESSION["SESSION_EDIT"];
    
    $sql=" UPDATE `blog` SET `image`='$image_name',`title`='$title',`description`='$description',`text`='$text',`date`='$date' WHERE  id='$edit'";
    $result=mysqli_query($conn,$sql);
     if($result){
        header("location:blog.php");
        echo "<script>alert 'updated'</script>"; 
     }else{
        echo "error:".mysqli_error($conn);

    }
}
?>