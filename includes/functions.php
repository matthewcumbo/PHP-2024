<?php 
    function userExists($conn, $username){
        $sql = "SELECT username FROM user WHERE username = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../profile.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);

        if($row = mysqli_fetch_assoc($result)){
            return true;
        }
        else{
            return false;
        }
    }

    function loadUsers($conn){
        $sql = "SELECT * FROM user;";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../users.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);
        
        return $result;
    }

    function loadUser($conn, $userId){
        $sql = "SELECT * FROM user WHERE userId = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../profile.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $userId);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);

        if($row = mysqli_fetch_assoc($result)){
            return $row;
        }
        else{
            return false;
        }
    }

    function loadUserByUsername($conn, $username){
        $sql = "SELECT * FROM user WHERE username = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../login.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);

        if($row = mysqli_fetch_assoc($result)){
            return $row;
        }
        else{
            return false;
        }
    }

    function registerUser($conn, $username, $password, $email, $firstName, $lastName, $dob, $profileImageId){
        $sql = "INSERT INTO user (username, password, email, firstName, lastName, dob, profileImageId) VALUES (?,?,?,?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../register.php?error=true&stmtfailed=true");
            exit();
        }

        // Hashed Password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sssssss", $username, $hashedPassword, $email, $firstName, $lastName, $dob, $profileImageId);

        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

    }


    // Validation functions
    function emptyInputRegistration($email, $username, $password, $confpass, $firstname, $lastname, $dob){
        $result = false;

        if(empty($email) || empty($username) || empty($password) || empty($confpass) || empty($firstname) || empty($lastname) || empty($dob)){
            $result = true;
        }

        return $result;
    }

    function invalidUsername($username){
        $result = false;

        // allow letters and numbers, but nothing else
        if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
            $result = true;
        }

        return $result;
    }

    function invalidEmail($email){
        $result = false;

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }

        return $result;
    }

    function passwordsMatch($password, $confpass){
        $result = true;

        if($password !== $confpass){
            $result = false;
        }

        return $result;
    }


    // Login Validtation
    function emptyLoginInput($username, $password){
        $result = false;

        if (empty($username) || empty($password)){
            $result = true;
        }

        return $result;
    }


    // Login Function
    function login($conn, $username, $password){
        if (!userExists($conn, $username)){
            header("location: ../login.php?error=incorrectlogin");
            exit();
        }

        $user = loadUserByUsername($conn, $username);
        $dbPassword = $user["password"];
        $checkedPassword = password_verify($password, $dbPassword);

        if (!$checkedPassword){
            header("location: ../login.php?error=incorrectlogin");
            exit();
        }

        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["userId"] = $user["userId"];

        header("location: ../profile.php");
        exit();
    }







    /* 
    Functions are reusable code blocks
    that can be called from any point in a page
    */

    function shout(){
        echo "<p>Let it all out!</p>"; 
    }

    // This function expects 2 parameters
    // It adds them and echos the result
    function sum($num1, $num2){
        $sum = $num1+$num2;
        echo "<p>The sum is {$sum}.</p>";
    }

    function full_name($first, $last){
        return "{$first} {$last}";
    }
?>