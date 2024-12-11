<?php 
// we need database handler and functions to be able to connect to db
require_once "dbh.php";
require_once "functions.php";

// If the user tries to execute this code without posting the form, 
// they are redirected back to the registration page
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

    // If any error is present, redirect to the Registration page with an error in the QueryString
    if($errorQueryString !== ""){
        header("location: ../register.php?".$errorQueryString);
        exit();
    }

    // Call the registerUser function to save the user's data in the database
    registerUser($conn,$username,$password,$email,$firstName,$lastName,$dob,null);

    header("location: ../register.php?success=true");
}
else{
    header("location: ../register.php");
}