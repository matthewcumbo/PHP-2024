<?php include 'includes/header.php'; ?>

<?php 
$heroes = [
    0 => 'Iron Man',
    1 => 'The Hulk',
    2 => 'Captain America',
    3 => 'Thor'
];

// $_GET super global is used to get values from the QueryString
// QueryString = parameters passed from one page to another via the url
// example: localhost/user.php?userId=1
// In this example, userId is the parameter name, 1 is its value

if(isset($_GET['hero'])){
    $id = $_GET['hero'];
    echo "<p>You chose <b>{$heroes[$id]}</b>!<p>";
}

echo "<h2>Please select a Super Hero.</h2>";
foreach ($heroes as $index => $hero):

?>

<a href="get.php?hero=<?php echo $index; ?>"><?php echo $hero; ?></a>
<br>

<?php 
endforeach;
?>




<?php include 'includes/footer.php'; ?>