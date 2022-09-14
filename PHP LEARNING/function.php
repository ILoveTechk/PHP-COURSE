
<?php 
$title = "Function ";
include 'includes/header.php' ?>
<body>

<h1>Functions</h1>

<?php
/*defining a function */

function Message(){
    echo" You are Welcome";
}

/*calling fuction*/
Message();

echo" <hr/> ";

Message();

echo" <br/>";

/*fuction with parameters*/

 function addFunction ($num1 , $num2){
    $sum = $num1 + $num2;

    echo "Sum of $num1 and $num2 is: $sum <br/>";
 }

 function changenum(&$num){
   $num = $num +10;

 } 
 function returnProduct($num1, $num2){
   $prod = $num1 * $num2;
   return $prod;
 }


 $num = 500;
 addFunction(10,20);
 addFunction($num,20);

 changenum($num);
 echo $num . '<br/>';

 $return_value = returnProduct(10, 200);
 echo $return_value . '<br/>';



?>
    
<?php require 'includes/footer.php' ?>