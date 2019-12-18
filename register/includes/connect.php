<?php

$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "reg";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
$conn->set_charset("utf8");
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }



?>
