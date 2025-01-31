<?php  
  
session_start();
include('session.php');  
require('db_config.php');  
  
if(isset($_POST) && !empty($_POST['id'])){  
  
        $sql = "DELETE FROM image_gallery WHERE  userid = '$loggedin_id' and id = ".$_POST['id'];  
        $mysqli->query($sql);  
  
        $_SESSION['success'] = 'Deletion of image is successfull.';  
        header("Location:index.php");  
}else{  
    $_SESSION['error'] = 'Please Select Image or Write title';  
    header("Location: index.php");  
}  
  
?> 