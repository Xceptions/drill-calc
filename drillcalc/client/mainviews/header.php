
<?php
    $currentPage = basename($_SERVER['SCRIPT_NAME']);
?>


<div class= 'jumbotron'>
            <h1 id='header'>DRILL CALC</h1>
</div>

<div class="row">
        <a href='homepage.php'>
            <div class="col-xs-4" <?php if ($currentPage == "homepage.php") {echo "id = 'here'";} else {echo "id = there";}?>> 
                   <span class='homelinks'>Homepage</span>
            </div>
        </a>
        <a href='hoistingSystem.php'>
            <div class="col-xs-4" <?php if ($currentPage == "hoistingSystem.php") {echo "id = 'here'";} else {echo "id = 'there'";}?>>
                   <span class='homelinks'>hoisting system</span>
            </div>
        </a>
        <a href='circulatorySystem.php'>
            <div class="col-xs-4" <?php if ($currentPage == "circulatorySystem.php") {echo "id = here";} else {echo "id = there";}?>> 
                   <span class='homelinks'>GH List</span> 
            </div>
        </a>
</div>