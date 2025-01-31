<?php

$sname= "localhost";

$unmae= "dbmsproject2";

$password = "Malli9209";

$db_name = "mydb";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}