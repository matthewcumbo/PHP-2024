<?php
// Database Handler

$serverName ="localhost";
$dbName = "PHP-2024";
$dbUsername = "root";
$dbPassword = "root";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}

?>