<?php include 'includes/header.php'; ?>
<h2>For Loops</h2>
<?php 
    // For Loops can be used to execute the same code block for a predetermined number of times
    for ($i = 0; $i < 10; $i++){
        echo "<p>{$i}</p>";
    }

    // Loops are useful for iterating over an array using its index 
    echo "<h3>For Loop</h3>";
    $members = ["John","Jane","Steve","Angela"];
    for($i =0; $i < 2; $i++){
        echo "<p>{$members[$i]}</p>";
    }

    // Foreach Loop Loops over an array, irrespective of size of the array
    echo "<h3>ForEach Loop</h3>";
    foreach($members as $member){
        echo "<p>{$member}</p>";
    }

    echo "<h3>Foreach Loop over an Associative Array</h3>";
    $heroes = [
        "Tony Stark"   => "Iron Man",
        "Bruce Banner" => "The Hulk",
        "Steve Rogers" => "Captain America"
    ];

    // Loops can also use key-value-pairs of an associative array
    foreach($heroes as $name => $hero){
        echo "<p>{$name} is {$hero}.</p>";
    }

    /*
        Home Exercise
        -------------
        While Loops
    */


?>


<?php include 'includes/footer.php'; ?>