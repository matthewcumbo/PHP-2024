<?php include 'includes/header.php'; ?>

<!-- 
    We can use a PHP file as a form action  
    This means that the code in that file will be executed upon form submission
-->
<form action="forms2.php" method="post">
<div class="container">
    <div class="row">
        <label for="input-name">Name:</label>
        <input type="text" name="name" id="input-name" placeholder="Joe">
    </div>
    <div class="row">
        <label for="input-surname">Surname:</label>
        <input type="text" name="surname" id="input-surname" placeholder="Borg">
    </div>
    <div class="row">
        <label for="">Having Fun?</label>
        <div class="col">
            <label for="input-option-no">No</label>
            <input type="radio" name="fun" id="input-option-no" value="no" checked>
        </div>
        <div class="col">
                <label for="input-option-yes">Yes</label>
                <input type="radio" name="fun" id="input-option-yes" value="yes">
            </div>
        </div>
    </div>
    <div class="row">
        <label>Favorite Animals:</label>
        <div>
            <label for="input-checkbox-cats">Cats</label>
            <input type="checkbox" name="animal[]" id="input-checkbox-cats" value="cats">
        </div>

        <div>
            <label for="input-checkbox-dogs">Dogs</label>
            <input type="checkbox" name="animal[]" id="input-checkbox-dogs" value="dogs">
        </div>

        <div>
            <label for="input-checkbox-alpacas">Alpacas</label>
            <input type="checkbox" name="animal[]" id="input-checkbox-alpacas" value="alpacas">
        </div>
    </div>
    <div class="row">
    <label for="input-shirt-size">Shirt Size:</label>
    <select name="shirt-size" id="input-shirt-size">
        <option selected disabled>Choose a size</option>
        <option value="s">Small</option>
        <option value="m">Medium</option>
        <option value="l">Large</option>
        <option value="xl">X-Large</option>
    </select>
    </div>
    <div class="row">
        <button type="submit">Submit</button>
    </div>
</div>
</form>


<?php include 'includes/footer.php'; ?>