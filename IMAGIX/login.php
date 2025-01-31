<?php 

session_start(); 

include "connect.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    
    $email = $_POST['email'];

    $password =$_POST['password'];

    

        $sql = "SELECT * FROM login_credentails WHERE email='$email' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['password'] === $password) {

                echo "Logged in!";

                $_SESSION['email'] = $row['email'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['userid'];

                header("Location: index.php");

                exit();

            }else{

                header("Location: login_index.php?error=Incorrect Email or password");

                exit();

            }

        }else{

            header("Location: login_index.php?error=Incorrect Email or password");

            exit();

        }

    

}else{

    header("Location: login_index.php");

    exit();

}
?>