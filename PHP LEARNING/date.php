   <?php 
   $title = "Date Manipulation ";
   include 'includes/header.php' ?>
<body>
    <?php
    $datenow = getdate();
    echo "Today's Date: <br/>";
    echo $datenow['mday'] . '<br/>';
    echo $datenow ['mon'] . '<br/>' ;
     echo $datenow ['year'] . '<br/>' ;

     echo "Today's Date: " . $datenow['mday'] . '/'.$datenow ['mon'] .'/'.$datenow ['year'] ;
    ?>
     
   
<?php require 'includes/footer.php' ?>