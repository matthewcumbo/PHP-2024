<?php 
// we need database handler and functions to be able to connect to db
require_once "dbh.php";
require_once "functions.php";

session_start();
$userId = $_SESSION["userId"];

deleteUser($conn, $userId);
include "logout-inc.php";