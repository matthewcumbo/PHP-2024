<?php 
require_once "dbh.php";
require_once "functions.php";

if(!isset($_POST["submit"])){
    // Page loaded
    $user = loadUser($conn, $userId);
    $username = $user["username"];
}
else{
    // Form posted
    session_start();
    if($_POST["submit"] === "upload"){
        $userId = $_SESSION["userId"];
        
        $fileName = $_FILES["userFile"]["name"];
        $fileTmpName = $_FILES["userFile"]["tmp_name"];
        $fileSize = $_FILES["userFile"]["size"];
        $fileError = $_FILES["userFile"]["error"];
        $fileType = $_FILES["userFile"]["type"];

        $allowed = array("jpg", "jpeg", "png", "webp");
        $fileTypeArray = explode(".", $fileName);
        $fileExtActual = end($fileTypeArray);
        $fileExt = strtolower($fileExtActual);


        if(!in_array($fileExt, $allowed)){
            header("location: ../profile.php?error=filetype");
            exit();
        }
        if($fileError!==0){
            header("location: ../profile.php?error=fileUpload");
            exit();
        }
        if($fileSize > 1000000000){
            // Calculated in bytes
            // 1024 bytes = 1kb
            // 1024kb = 1mb
            header("location: ../profile.php?error=fileSize");
            exit();
        }

        // creates a unique id
        $newFileName = uniqid($userId."-",true).".".$fileExt;
        $uploadDir = "../imageUploads/".$newFileName;

        move_uploaded_file($fileTmpName, $uploadDir);

        $imageId = insertImageUrl($conn, $userId, $uploadDir);
        createImageLink($conn, $userId, $imageId);


        header("location: ../profile.php?success=true");
        exit();
    }
}


