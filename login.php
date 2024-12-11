<?php include 'includes/header.php'; ?>

<div class="container border border-dark rounded p-2 my-3" style="width:1024px;">
    <div class="row">
        <div class="col text-center">
            <h1>Login</h1>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <form action="includes/login-inc.php" method="POST">
                <div class="container my-1 py-2">
                    <div class="row mt-2">
                        <div class="col-6 text-end">    
                            <label for="username">Username:</label>
                        </div>
                        <div class="col-6 text-start">
                            <input type="text" id="username" name="username">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 text-end">    
                            <label for="password">Password:</label>
                        </div>
                        <div class="col-6 text-start">
                            <input type="password" id="password" name="password">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-primary" name="submit">Login</button>
                        </div>
                    </div>

                    <?php 
                        if (isset($_GET["error"])){
                            if($_GET["error"] == "emptyinput"){
                                echo "<p>Please fill in all fields.</p>";
                            }
                            if($_GET["error"] == "incorrectlogin"){
                                echo "<p>Login Credentials were incorrect. Please try again.</p>";
                            }
                        }
                    ?>

                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>