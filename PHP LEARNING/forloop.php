<?php 
$title = "For Loop";
include 'includes/header.php' ?>
<body>
    <h2>For loop</h2>
    <?php
    for($count = 0; $count< 10; $count++){
        echo "<p>$count : Nice</p>";
    }

    ?>

    
<?php require 'includes/footer.php' ?>