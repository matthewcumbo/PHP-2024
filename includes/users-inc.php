<?php 
// we need database handler and functions to be able to connect to db
require_once "dbh.php";
require_once "functions.php";


$results = loadUsers($conn);

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