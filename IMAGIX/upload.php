<?php  
include('session.php');
require('db_config.php');
  
if(isset($_POST) && !empty($_FILES['image']['name']) && !empty($_POST['title'])){  
  
    $name = $_FILES['image']['name'];  
    list($txt, $ext) = explode(".", $name);  
    $image_name = time().".".$ext;  
    $tmp = $_FILES['image']['tmp_name'];  
  
    if(move_uploaded_file($tmp, 'uploads/'.$image_name)){  
  
        $sql = "INSERT INTO image_gallery (userid,title, image) VALUES ('$loggedin_id','".$_POST['title']."', '".$image_name."')";
        $mysqli->query($sql);  
  
        $_SESSION['success'] = 'Uploading of image is successful!';  
        header("Location:index.php");  
    }else{  
        $_SESSION['error'] = 'Uploading of image is failed1';  
        header("Location: index.php");  
    }  
}else{  
    $_SESSION['error'] = 'Please Select Image or Write title!';  
    header("Location: index.php");  
}  
  
?>  