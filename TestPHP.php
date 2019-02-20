<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<h2>HTML Form</h2>

<form action="TestPHP.php" method="post">
  First name:<br>
  <input type="text" name="firstname">
  <br>
  Last name:<br>
  <input type="text" name="lastname">
  <br><br>
  <input type="submit" value="Submit">

</form>
    
<?php
echo "My first PHP script! <br>"; // print

// This is a single-line comment

# This is also a single-line comment

/*
This is a multiple-lines comment block
that spans over multiple
lines or line
*/


// Variable 
// Global scope
$txt = "Hello world!"; // String
$x = 5; // int
$y = 10.5; // double


echo "<br>";
echo $x; // print x

echo "<br><br>";

$color = "red";

echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";


function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 
myTest();
echo $y;

echo "<p>Variable x outside function is: $x</p>";

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
echo "$firstname $lastname";


?> 

</body>
</html>
