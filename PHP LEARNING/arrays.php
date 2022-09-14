<?php 
$title = "Array";

include 'includes/header.php' ?>
<body>
    <h1>Arrays</h1>
    <?php
    $numbers = array(1,2,3,4,5,7,8,9,10,52,89,55,47,26,48,125,48);
    echo $numbers[5];

    $size = count($numbers);
    echo " <p>Array numbers is size: $size</p> ";
    echo " <br/> ";
    echo "list of array elements";

   for ($count = 0; $count< $size; $count++){
    echo " <p>$numbers[$count]</p> ";
   }


    ?>
    
<?php require 'includes/footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script> 