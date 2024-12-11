<?php include 'includes/header.php'; ?>

<div>
    <h2>Arrays</h2>
    
    <?php 
        // Arrays are collections that contain many types of values

        // There are two ways of defining arrays
        $numbers = array(1,2,3,4,5);
        $numbers2 = [1,2,3,4,5];
        
        // echo will not work with variables that are not of basic types
        // print_r will output array values in human-readable format
        print_r($numbers);
        echo "<br/>";

        // Arrays start at position zero
        // Values in an array can be accessed using square brackets
        $first = $numbers[0];
        echo "<p>The first number is {$first}.</p>";

        // Remember that the last index is 1 less than the length
        $last = $numbers[4];
        echo "<p>The last number is {$last}.</p>";

        // count function returns number of elements within array
        $count = count($numbers);
        echo "<p>Array has {$count} numbers.</p>";

        // we can add a new element in an array by using empty square brackets
        $numbers[] = 10;
        print_r($numbers);
        echo "<br/>";

        // we can update the value of an element in the array by targeting its position
        $numbers[4] = 7;
        print_r($numbers);
        echo "<br/>";

        // Arrays have a internal pointer, which 'points' at a position within the array
        // It always starts at position 0
        // Next moves the pointer to the next position and returns its value
        $next = next($numbers);
        echo "<p>Next: {$next}</p>";
        $next = next($numbers);
        echo "<p>Next: {$next}</p>";

        // Prev moves the pointer to the previous position and returns its value
        $prev = prev($numbers);
        echo "<p>Previous: {$prev}</p>";
        $prev = prev($numbers);
        echo "<p>Previous: {$prev}</p>";

        // End moves the pointer to the last position and returns its value
        $last = end($numbers);
        echo "<p>End: {$last}</p>";

        // Reset moves the pointer to the first position and returns its value
        $first = reset($numbers);
        echo "<p>Reset: {$first}</p>";

    ?>

</div>



<!-- 

Part 2: Stacking and Queueing
-> Home research
------------------------------
- array_push()
- array_pop()
- array_unshift()
- array_shift()
- array_merge()
- sort()
- rsort()
- array_slice()
- array_splice()

-->

<?php include 'includes/footer.php'; ?>