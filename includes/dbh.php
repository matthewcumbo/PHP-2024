<?php
// Database Handler file

// The following are the server and database details
// By default, Database Username is 'root',   
// Password is empty on Windows, or 'root' on iOS
// You should always set these up in the settings of the database via PhpMyAdmin
$serverName ="localhost";
$dbName = "PHP-2024";
$dbUsername = "root";
$dbPassword = "";

// This creates a connection to the database, using the above config
$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

// The following shows us an error if there is one
if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}

?>