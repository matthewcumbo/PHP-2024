<?php 
  // include statement used to add code from another file
  // all code from the included file will be executed immediately
  // this can be used to efficiently split up our pages into page parts/templates
    include "includes/header.php";
    include "includes/functions.php";
?>

<!-- Content -->
<div class="container">
    <div class="row">
        <div class="col">
            <?php 
                // variables created and given value
                // PHP variables are dynamic, their type inferred by the value given
                $name = "Matthew";
                $age = 32;
                $ageInFiveYears = $age+5;
                $favCol = "Blue";
                
            ?>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php
                          // Output of Variable 
                          echo "{$name} ({$age})"; 
                          echo "In 5 years, I will be {$ageInFiveYears}.";
                          ?>
                        <?php //echo $name . " (" . $age . ")"; ?>
                    </h5>
                    <p class="card-text">
                        <?php echo "Favourite Colour: <span style='color:".$favCol.";'>".$favCol."</span>";?>
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
        <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>
        <div class="col">
        <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>
        <div class="col">
        <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>
        <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
        </div>
    </div>
</div>

<h3>Functions</h3>
<?php 
  // This is how we call functions 
  // Any function that is inside an included file are available to be used
  shout();
  shout();
  shout();
  shout();

  sum(1,2);
  $fullName = full_name("Matthew", "Cumbo");
  echo "<p>My full name is {$fullName}.</p>";
?>



<?php 
    include "includes/footer.php";
?>