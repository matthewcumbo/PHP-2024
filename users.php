<?php include 'includes/header.php'; ?>

<?php 
// If user is not logged in, redirect to login page
// $_SESSION global variable is used to store temporary data on the server
// In this case, we are using it to store data about the logged in user
if (!isset($_SESSION["username"])){
    header("location: login.php");
    exit();
}
?>

<div class="container mt-3">
    <div class="row">
        <div class="col">
            <p>Hello, <b><?php echo $_SESSION["username"]; ?></b>.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
        <h1>Users</h1>
        </div>
    </div>
    <div class="row">
        <?php 
            include 'includes/users-inc.php'; 
      
        
        ?>
    </div>
</div>


<?php include 'includes/footer.php'; ?>