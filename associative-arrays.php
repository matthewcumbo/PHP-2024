<?php include 'includes/header.php'; ?>
<h2>Associative Arrays</h2>
<?php 
    // Associative Arrays are collections that use key value pairs
    // Custom data types are used for keys
    // The items inside the array will preserve their order
    $students = [
        "Interactive Media" => 20,
        "Game Art" => 10
    ];

    print_r($students);
    echo "<br/>";

    echo "<p>There are {$students['Interactive Media']} students in Interactive Media.</p>";
    echo "<p>There are {$students['Game Art']} students in Game Art.</p>";

    $students["Game Art"] = 12;
    $students["Graphic Design"] = 5;
    print_r($students);

    /* Home research:
        array_key_exists()
        array_keys()
        array_values()
    */
?>


<?php include 'includes/footer.php'; ?>