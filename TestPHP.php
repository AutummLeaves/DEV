<!DOCTYPE html>
<html lang="en-US"> <!--Taal waarin de pagina wordt weergeven-->
<meta charset="UTF-8" > <!--Encoding die je pagina gebruikt-->
<meta name=description content="PHP Test Page">
<meta name="keywords" content="PHP">

<link rel="icon" href="\docs\Sources\Infinite_tsukuyomi.png">
<link rel="stylesheet" type="text/css" href="style.css">

<body class="page">
    <div class="container">

        <h1>My first PHP page</h1>

        <h2>HTML Form</h2>

        <form class="form" action="" method="post" enctype="text/plain">
            <div class="formgroup">
                <label>First Name</label>
                <input type="text" name="firstName" placeholder="Enter your name">
            </div>

            <br>

            <div class="formgroup">
                <label>Last Name</label>
                <input type="text" name="lastName" placeholder="Enter your last name">
            </div>

            <br>

            <div class="formgroup">
                <label>Email</label>
                <input type="text" name="email" placeholder="Enter your Email">
            </div>

            <br>

            <div class="formgroup">
                <label>Birthday:</label>
                <input type="date" name="birthday">
            </div>

            <br>

            <div class="formgroup">
                <label>Gender</label>
                <select name="gender">
                    <option value="male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <br>

            <div class="radio">
                <input type="radio" name="Idk" value="Iets1" checked> Iets1<br>
                <input type="radio" name="Idk" value="Iets2"> Iets2<br>
                <input type="radio" name="Idk" value="Iets3"> Iets3
            </div>

            <br>

            <div class="formgroup">
                <textarea class="formgroup" name="message" rows="10" cols="95" placeholder="Enter your comment here"></textarea>
            </div>

            <br>

            <input type="submit" name="submit" value="Submit">
            
        </form>
    </div>
</body>


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

</html>
