<!DOCTYPE html>
<html>
<body>
    
<h1> MY First PHP Page! </h1>

<?php

echo "Memoon Ali";
echo "<br>";
echo "Memoon Ali";
echo "<br>";


//Declare a variable 

$color = "red";
echo "My new house color is $color";
echo "<br>";


//Comments in the Middle of the Code

$x = 5 /* + 15 */ + 120;
echo "this house this $x  square fits";
echo "<br>";


$x = 5;
$y = "John";
echo "$x + $y";
echo "<br>";



$txt = "UCP";
echo 'I Love ' . $txt . ' !';
echo "<br>";

$x = 35;
$y = 41;
echo $x + $y;
echo "<br>";


$x = 5;      // $x is an integer
$y = "John"; // $y is a string
echo $x;
echo $y;
echo "<br>";



// var_dump() to Get the Data Type


var_dump(23);            echo "<br>";
var_dump("Memoon");       echo "<br>";
var_dump(8.4314);         echo "<br>";
var_dump(FALSE);         echo "<br>";
var_dump([43, 12, 96]);   echo "<br>";
var_dump(NULL);         echo "<br>";


//Global scope variable 

$z= 5; 

function myTest1() {
  // using z inside this function will not work
  echo "Variable z inside function is: $z";
}
myTest1();

echo "Variable z outside function is: $z";

echo "<br>";
echo "<br>";
echo "<br>";



// Local scope 

function myTest2() {
  $v = 5; 
  echo "Variable v inside function is: $v ";
}
myTest2();

// using v outside the function will not work
echo "Variable v outside function is: $v";
echo "<br>";
echo "<br>";


echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

?>

</body>
</html>