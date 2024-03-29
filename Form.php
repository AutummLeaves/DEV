<!DOCTYPE html>
<html lang="en-US"> <!--Taal waarin de pagina wordt weergeven-->
<meta charset="UTF-8" > <!--Encoding die je pagina gebruikt-->
<meta name=description content="PHP Test Page">
<meta name="keywords" content="PHP">

<link rel="icon" href="\docs\Sources\Infinite_tsukuyomi.png">
<link rel="stylesheet" type="text/css" href="style.css">

<style>
.fborder{
    width: 825px;
    padding: 10px;
    border: 5px solid gray;
    margin-top: 25px;
    background-color: #f8faff;
}
</style>


<header>
    <div>
        <img class="flower" src="https://i.imgur.com/WmmnLR1.png" alt="Header" width="100%" height="250px">        
    </div>
</header>

<body class="page">
    <div class="container">
        <div class="fborder">
            <h1>HTML Form</h1>

            <form class="form" action="Form.php" method="post">
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

                <input type="submit" name="submit" value="Submit" accesskey="p">



            </form>

            <br>

            <?php

            $firstname = $_GET["firstName"];
            $lastname = $_GET["lastName"];

            $firstname = $_POST["firstName"];
            $lastname = $_POST["lastName"];
            echo "$firstname $lastname";

            ?>

        </div> 
    </div>
</body>

</html>
