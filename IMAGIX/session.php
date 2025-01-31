<?php
include('connect.php');
session_start();
$user_check=$_SESSION['email'];
$ses_sql=mysqli_query($conn,"select userid,email from login_credentails where email='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['email'];
$loggedin_id=$row['userid'];
if(!isset($loggedin_session) || $loggedin_session==NULL) {
 echo "Go back";
 header("Location: login_index.php");
}
?>