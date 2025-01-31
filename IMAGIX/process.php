<?php 
  $db = mysqli_connect('localhost', 'dbmsproject2', 'Malli9209', 'mydb');
  $email = "";
  if (isset($_POST['register'])) {
  	$email = $_POST['email'];
  	$password = $_POST['password'];

  	
  	$sql_e = "SELECT * FROM login_credentails WHERE email='$email'";
 
  	$res_e = mysqli_query($db, $sql_e);

  	 if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Sorry... email already taken"; 	
  	}else{
           $query = "INSERT INTO login_credentails (email, password) 
      	    	  VALUES ( '$email', '$password')";
           $results = mysqli_query($db, $query);
           header("location: login.php");
           exit();
  	}
  }
?>