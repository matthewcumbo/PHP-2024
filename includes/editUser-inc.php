<?php 
// we need database handler and functions to be able to connect to db
require_once "dbh.php";
require_once "functions.php";
session_start();
$username = $_SESSION["username"];
$userId = $_SESSION["userId"];

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confpass = $_POST["confpass"];
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $dob = $_POST["dob"];

    $errorQueryString = "";

    // Data Validation before saving in database
    $emptyInputs = emptyInputRegistration($email, $username, $password, $confpass, $firstName, $lastName, $dob);
    $invalidUsername = invalidUsername($username);
    $invalidEmail = invalidEmail($email);
    $passwordsMatch = passwordsMatch($password, $confpass);

    // Build QueryString errors 
    if($emptyInputs || $invalidUsername || $invalidEmail || !$passwordsMatch){
        $errorQueryString.="error=true";
    }

    if($emptyInputs){
        $errorQueryString.="&emptyinput=true";
    }
    if($invalidUsername){
        $errorQueryString.="&invalidusername=true";
    }
    if($invalidEmail){
        $errorQueryString.="&invalidemail=true";
    }
    if(!$passwordsMatch){
        $errorQueryString.="&passwordsdonotmatch=true";
    }

    if($errorQueryString !== ""){
        header("location: ../profile.php?".$errorQueryString);
        exit();
    }

    editUser($conn,$userId,$password,$email,$firstName,$lastName,$dob);

    header("location: ../profile.php?success=true");
}
else{
    header("location: ../profile.php");
}