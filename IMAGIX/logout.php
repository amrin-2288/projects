<?php
session_start();
if(session_destroy()) {
 header("Location: login_index.php");
}
?>