<?php 
$title = "IfStatement";
include 'includes/header.php' ?>
<body>
<?php
$age =14;
if($age <14){
    "echo <h3>YOU HAVE FAILED </h3>" ; 
}
else{
    echo '<h3 style="color:green" >YOU HAVE FAILED</h3>';
}

// if else if else 
$age = 'A';
if ($age == 'A'){
    echo' <h2>You are brilliant</h2>';
}
elseif($age == 'B'){
    echo "<h2>you have done well</h2>";
}

else{
    echo "<h2>you have done well</h2>";
}
?>   
<?php require 'includes/footer.php' ?>