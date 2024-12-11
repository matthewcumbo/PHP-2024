<?php 
// we need database handler and functions to be able to connect to db
require_once "dbh.php";
require_once "functions.php";

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $username = $_POST["username"];
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
    $userExists = userExists($conn, $username);

    // Build QueryString errors 
    if($emptyInputs || $invalidUsername || $invalidEmail || !$passwordsMatch || $userExists){
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
    if($userExists){
        $errorQueryString.="&userExists=true";
    }

    if($errorQueryString !== ""){
        header("location: ../register.php?".$errorQueryString);
        exit();
    }

    registerUser($conn,$username,$password,$email,$firstName,$lastName,$dob,1);

    header("location: ../register.php?success=true");
}
else{
    header("location: ../register.php");
}