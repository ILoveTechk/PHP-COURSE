<?php 
$title = "String";
include 'includes/header.php' ?>
<body>
    <h1>Working with string</h1>
    <?php
        $phrase1 = "student who came late ";
        $phrase2 = " in class; please stand up!";
        $name = "japheth agbokou";
       
        echo  $phrase1 .", named Tiffany, ". $phrase2;
        echo "<br/>";

        echo "<p> <h1>Strings transformation</h1></p>";
        echo "Uppercase first letter: " .ucfirst($name) . '<br/>';
        echo "Uppercase first letter of each words: " .ucwords($name) . '<br/>';
        echo "Uppercase: " .strtoupper($name) . '<br/>';
        echo "Lowercas: " .strtolower($name) . '<br/>';
        echo "<hr/>";
        echo 'Repeat String: ' . strtoupper(str_repeat('a',15)). '<br>';
        echo" Get a position of a string; " .strpos($name, 'w'). '<br/>';
    
    ?>
    
<?php require 'includes/footer.php' ?>