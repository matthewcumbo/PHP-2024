<?php

// If a user ended up executing this code without submitting a form, 
// we redirect him to the login page itself
if(isset($_POST["submit"])){
    // We read the data from the login form
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once "dbh.php";
    require_once "functions.php";

    // Validate that all input was valid
    if (emptyLoginInput($username, $password)){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    // Call the Login function
    login($conn, $username, $password);
}
else{
    header("location: ../login.php");
    exit();
}

