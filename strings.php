<?php include 'includes/header.php'; ?>

<div>
    <h2>String Functions</h2>

    <?php 
        $fullName = "Matthew Cumbo";
        // strlen function returns the length of a string
        $fullNameLength = strlen($fullName);
        echo "<p>My full name {$fullName} is made up of {$fullNameLength} characters.</p>";

        // Result of a function can be concatenated within an echo, or other functions 
        // echo "My full name {$fullName} is made up of ".strlen($fullName)." characters.";
        
        // substr extracts a substring out of an existing string, 
        // starting at the position provided as parameter, 
        // and the length of the substring is the final parameter
        $firstName = substr($fullName, 0, 7);
        echo "<p>First Name: {$firstName}.</p>";

        // substr without the final parameter means it will extract from the 
        // given position till the end of the string
        $lastName = substr($fullName, 8);
        echo "<p>Last Name: {$lastName}.</p>";
    ?>

</div>
<div>
    <h2>Advanced Functions</h2>
    <?php 
        $shoppingList = "bread,milk,apples";
        // explode function tunrs a string into an array, 
        // using a character within the string as a separator
        $shoppingListArray = explode(",",$shoppingList);
        print_r($shoppingListArray);

        // implode builds a string out of an array, adding a separator between each value
        $outputList = implode(", ",$shoppingListArray);
        echo "<p>{$outputList}</p>";
    ?>
</div>

<?php include 'includes/footer.php'; ?>