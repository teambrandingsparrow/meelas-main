<?php
session_start();
    include 'connection.php';
    include 'checklogin.php';
       $id = mysqli_real_escape_string($conn, $_POST['id']);
       $name = mysqli_real_escape_string($conn, $_POST['name']);
       $type = mysqli_real_escape_string($conn, $_POST['type']);
       $property = mysqli_real_escape_string($conn, $_POST['propertytype']);
       $location = mysqli_real_escape_string($conn, $_POST['location']);
       $address = mysqli_real_escape_string($conn, $_POST['address']);
       $area = mysqli_real_escape_string($conn, $_POST['area']);
       $budget = mysqli_real_escape_string($conn, $_POST['budget']);
       $amenities = mysqli_real_escape_string($conn, $_POST['amenities']);
       $description = mysqli_real_escape_string($conn, $_POST['description']);
       $map = mysqli_real_escape_string($conn, $_POST['url']);
   // $image=mysqli_real_escape_string($conn,$_POST['image']);
$sql="UPDATE `propertiess` SET `propertyid`='$id',`names`='$name',`type`='$type',`propertytype`='$property',`location`='$location',`address`='$address',`area`='$area',`budget`='$budget',`amanities`='$amenities',`description`='$description',`map`='$map'";


if(isset($_FILES['anyfile'])){
    $image_name=$_FILES['anyfile']['name'];
    if(move_uploaded_file($_FILES["anyfile"]["tmp_name"], "uploads/" . $image_name));
    
 if(isset($_FILES['video']['name'])){
        $video =  $_FILES['video']['name'];
        move_uploaded_file($_FILES["video"]["tmp_name"], "uploads/" . $video);
    }if(isset($_FILES['floor']['name'])){
        $floor = $_FILES['floor']['name'];
        move_uploaded_file($_FILES["floor"]["tmp_name"], "uploads/" . $floor);
    }{
$sql .=",`image`='$image_name',`video`='$video',`floorplan`='$floor'";
    }
}



    $edit=$_SESSION["SESSION_EDIT"];
    
    $sql.=" WHERE id_name=$edit";
    
    $result=mysqli_query($conn,$sql);
     if($result){
        header("location:view.php");
        echo "<script>alert 'updated'</script>"; 
     }else{
        echo "error:".mysqli_error($conn);

    }

?>