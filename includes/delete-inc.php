<?php 
// we need database handler and functions to be able to connect to db
require_once "dbh.php";
require_once "functions.php";

// session_start is required to use any session data
session_start();
$userId = $_SESSION["userId"];

// Delete currently logged in user
deleteUser($conn, $userId);

// Here we use the logout-inc.php file to simulate the logout function, since this user is now deleted
include "logout-inc.php";