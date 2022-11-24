<?php
if(isset($_SESSION['valid'])){
    if($_SESSION['valid']!=true)
    header('Location: index.php');
}else{
    header('Location: index.php');
}
?>