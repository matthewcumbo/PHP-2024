<?php 
// we need database handler and functions to be able to connect to db
require_once "dbh.php";
require_once "functions.php";

// We get a list of all Users from the loadUsers function
$results = loadUsers($conn);

// The mysqli_fetch_assoc function gets the next row in the results, starting with the first one
// While there is still more rows to go through, execute the following code 
while ($row = mysqli_fetch_assoc($results)){
    $userId = $row["userId"];
    $username = $row["username"];
    $password = $row["password"];
    $firstName = $row["firstName"];
    $lastName = $row["lastName"];
    $dob = $row["dob"];
    $profileImageId = $row["profileImageId"];

    echo "<div class='col-6'><h3>{$username}</h3><h5>{$firstName} {$lastName}</h5><p>{$dob}</p></div>";
}

// PHP closing tag is not necessary in files where we only have PHP code