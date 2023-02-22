<?php
$servername = "db";
$username = "capp3";
$password="password";
$dbname = "capp3";
// creating connection

$conn= new mysqli ($servername, $username, $password, $dbname);

//check the connection

if ($conn->connect_error){
    die ("connection failed:" . $conn->connect_error);
    }

?>