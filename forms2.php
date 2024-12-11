<?php include 'includes/header.php'; ?>

<?php 

// $_SERVER superglobal is used to access data about the current state of the server
// In this case, we're checking that the current request is a POST request
if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    die("You have not submitted the form correctly.");
}

print_r($_POST);

// $_POST superglobal is used to access all the data submitted from the form
$name       = $_POST['name'];
$surname    = $_POST['surname'];
echo "<p>Hello, {$name} {$surname}!</p>";

$fun = $_POST['fun'];
if($fun == 'yes'){
    echo "<p>Yippee!</p>";
}
else{
    echo "<p>oh no.... y u no fun?</p>";
}

if(!isset($_POST['animal'])){
    echo "<p>How can you be so heatless?</p>";
}
else{
    $animals = $_POST['animal'];
    $animals = implode(', ', $animals);
    echo "<p>You like {$animals}.";
}

if(!isset($_POST['shirt-size'])){
    echo "<p>You don't like wearing shirts.....</p>";
}
else{
    $size = $_POST['shirt-size'];
    echo "<p>We will send you a {$size} shirt.";
}




?>




<?php include 'includes/footer.php'; ?>