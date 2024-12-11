<?php 
include 'includes/header.php'; 


if(isset($_SESSION["userId"])){
    // If user is logged in, load user data of logged in user
    $userId = $_SESSION["userId"];
    include 'includes/profile-inc.php';
}
else{
    // If user is not logged in, redirect to login page
    header("location:login.php");
    exit();
}

?>

<div class="container border border-dark rounded p-2 my-3" style="width:1024px;">
    <div class="row">
        <div class="col text-center">
            <h1>Profile</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
                <div class="container my-1 py-2">
                    <?php if(isset($user["imageUrl"])) : ?>
                    <div class="row">
                        <div class="col-12">
                            <!-- 
                                When we store imageUrls in the databse, we can use that as the source for images in our HTML
                                In this case, we are trimming the first part of the URL since it is not needed here
                            -->
                            <img src="<?php echo substr($user["imageUrl"],3); ?>" alt="User's uploaded image" style="width:100px;height:auto;display:block;">
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-6 text-end">
                            <label for="email">Email Address:</label>
                        </div>
                        <div class="col-6">
                            <!-- We can use the data returned from the profile-inc.php file to output in our HTML -->
                            <p id="email" name="email"><?php echo $user["email"]; ?></p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 text-end">
                            <label for="username">Username:</label>
                        </div>
                        <div class="col-6">
                            <p id="username" name="username"><?php echo $username; ?></p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 text-end">
                            <label for="firstname">First Name:</label>
                        </div>
                        <div class="col-6"> 
                            <p id="firstname" name="firstname"><?php echo $user["firstName"]; ?></p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 text-end">
                            <label for="lastname">Last Name:</label>
                        </div>
                        <div class="col-6">
                            <p id="lastname" name="lastname"><?php echo $user["lastName"]; ?></p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 text-end">
                            <label for="dob">Date of Birth:</label>
                        </div>
                        <div class="col-6">
                            <p id="dob" name="dob"><?php echo $user["dob"]; ?></p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>


<div class="container border border-dark rounded p-2 my-3" style="width:1024px;">
    <div class="row">
        <div class="col">
            <form enctype="multipart/form-data"
                action="includes/profile-inc.php" method="POST">
                
                Profile Picture: <input type="file" name="userFile" id="userFile">
                
                <!-- The value of the submit button can be used to verify which form is posted to the back-end code -->
                <button type="submit" name="submit" id="submit" class="btn btn-primary" value="upload">Upload</button>
            </form>
        </div>
    </div>
</div>




<?php include 'includes/footer.php'; ?>