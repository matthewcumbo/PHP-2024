<?php 
require_once "dbh.php";
require_once "functions.php";

if(!isset($_POST["submit"])){
    // If the Profile page was not submitted, then we simply load the page
    $user = loadUser($conn, $userId);
    $username = $user["username"];
}
else{
    // Form posted
    session_start();
    // If the submitted form's submit button's value is 'upload' :
    if($_POST["submit"] === "upload"){
        $userId = $_SESSION["userId"];
        
        // The $_FILES golbal variable is used for files uploaded by the user
        // This is a temporary upload within the browser memory, however, and is not added to the project yet
        $fileName = $_FILES["userFile"]["name"];
        $fileTmpName = $_FILES["userFile"]["tmp_name"];
        $fileSize = $_FILES["userFile"]["size"];
        $fileError = $_FILES["userFile"]["error"];
        $fileType = $_FILES["userFile"]["type"];

        // We can select what types of files we allow
        $allowed = array("jpg", "jpeg", "png", "webp");
        $fileTypeArray = explode(".", $fileName);
        $fileExtActual = end($fileTypeArray);
        $fileExt = strtolower($fileExtActual);

        // Validation of the chosen file
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

        // creates a unique id so that all uploaded files have a unique file name
        // we also add the User Id to the name so that we can identify it later on
        $newFileName = uniqid($userId."-",true).".".$fileExt;
        $uploadDir = "../imageUploads/".$newFileName;

        // The move_uploaded_file actually adds the chosen file into the project, 
        // depending on the directory we pass as a parameter 
        move_uploaded_file($fileTmpName, $uploadDir);

        // Once the file is uploaded, we also link this image to the user 
        // This link is built into the database 
        $imageId = insertImageUrl($conn, $userId, $uploadDir);
        createImageLink($conn, $userId, $imageId);

        header("location: ../profile.php?success=true");
        exit();
    }
}


