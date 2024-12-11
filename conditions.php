<?php include 'includes/header.php'; ?>
<h2>Conditional Statements</h2>

<?php
    // If Condition
    $awake = true;
    if($awake === true){
        echo "<p>Yay, I am awake!</p>";
    }

    // If..Else Condition
    $num1 = 30;
    $num2 = 20;
    if($num1 > $num2){
        echo "<p>{$num1} is greater than {$num2}.</p>";
    }
    else{
        echo "<p>{$num1} is smaller than {$num2}.</p>";
    }

    // If..ElseIf..Else Condition
    // Date function returns a data/time (depends on parameter passed)
    $time = date("H");
    if($time < "10"){
        echo "<p>Good morning!</p>";
    }
    elseif($time == "12"){
        echo "<p>It's High Noon!</p>";
    }
    elseif($time < "20"){
        echo "<p>Have a nice day!</p>";
    }
    else{
        echo "<p>Good night.</p>";
    }

    // Switch Statement
    $favcol = "green";
    switch($favcol){
        case "red":
            echo "<p>You are passionate.</p>";
            break;
        case "blue":
            echo "<p>You are cool.</p>";
            break;
        case "green":
            echo "<p>You are relaxed.</p>";
            break;
        default:
            echo "<p>Favourite colour is not within the list.</p>";
            break;
    }


    // Logical Operators
    if($awake === true && $num1 < $num2){
        echo "<p>I am awake, and num 1 is smaller.</p>";
    }
    if ($favcol == "blue" || $favcol == "green"){
        echo "<p>You prefer cooler colors.</p>";
    }
    
    if($awake !== true){
        echo "<p>Wakey Wakey!!</p>";
    }
    if(!$awake){
        
    }



    // The following are the same
    if ($awake){}
    if ($awake === true){}


?>



<?php include 'includes/footer.php'; ?>