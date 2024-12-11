<?php

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once "dbh.php";
    require_once "functions.php";

    if (emptyLoginInput($username, $password)){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    login($conn, $username, $password);
}
else{
    header("location: ../login.php");
    exit();
}

