<?php include 'includes/header.php'; ?>

<div class="container border border-dark rounded p-2 my-3" style="width:1024px;">
    <div class="row">
        <div class="col text-center">
            <h1>Edit Profile</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="includes/register-inc.php" method="POST">
                <div class="container my-1 py-2">
                    <div class="row">
                        <div class="col-6 text-end">
                            <label for="email">Email Address:</label>
                        </div>
                        <div class="col-6">
                            <input type="text" id="email" name="email">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 text-end">
                            <label for="username">Username:</label>
                        </div>
                        <div class="col-6">
                            <input type="text" id="username" name="username">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 text-end">
                            <label for="password">Password:</label>
                        </div>
                        <div class="col-6">
                            <input type="password" id="password" name="password">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 text-end">
                            <label for="confpass">Confirm Password:</label>
                        </div>
                        <div class="col-6">
                            <input type="text" id="confpass" name="confpass">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 text-end">
                            <label for="firstname">First Name:</label>
                        </div>
                        <div class="col-6"> 
                            <input type="text" id="firstname" name="firstname">   
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 text-end">
                            <label for="lastname">Last Name:</label>
                        </div>
                        <div class="col-6">
                            <input type="text" id="lastname" name="lastname">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 text-end">
                            <label for="dob">Date of Birth:</label>
                        </div>
                        <div class="col-6">
                            <input type="date" id="dob" name="dob">
                        </div>
                    </div>
                    <!-- Profile Image to be added here -->
                    <div class="row mt-4">
                        <div class="col-6 text-end">
                            <button type="submit" class="btn btn-success" name="submit" id="submit">Submit</button>
                        </div>
                        <div class="col-6">
                            <button type="reset" class="btn btn-danger" name="cancel" id="cancel">Cancel</button>
                        </div>
                    </div>
                    <?php if(isset($_GET["error"])){ ?>
                        <div class="row mt-1">
                            <div class="col">
                                <?php 
                                    if(isset($_GET["emptyinput"])){
                                        echo "<p>Please fill in all fields.</p>";
                                    }
                                    if(isset($_GET["invalidusername"])){
                                        echo "<p>Username cannot contain special symbols.</p>";
                                    }
                                    if(isset($_GET["invalidemail"])){
                                        echo "<p>Email format incorrect.</p>";
                                    }
                                    if(isset($_GET["passwordsdonotmatch"])){
                                        echo "<p>Please make sure your passwords match.</p>";
                                    }
                                ?>
                            </div>
                        </div>
                    <?php 
                        }
                        if (isset($_GET["success"])){
                            echo "<p>Validation Passed!</p>";
                        }
                    ?>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="container border border-dark rounded p-2 my-3" style="width:1024px;">
<div class="row">
        <div class="col text-center">
            <h2>Delete Account</h2>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <form action="" method="POST">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>



<?php include 'includes/footer.php'; ?>