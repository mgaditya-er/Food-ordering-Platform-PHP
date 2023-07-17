<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Festive&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link rel="icon" href="awesome.webp" type="image/jpeg">
    <title>Congratulations_for-signup</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #9de3ff;
        }

        .container {
            background-color: rgb(195, 198, 226);
            border: 3px solid rgb(1, 26, 252);
            /* we can set padding and margin for top ,bottom,left and right like this */
            /* padding: 9px;
            padding-left: 34px;
            padding-bottom: 34px;
            padding-right: 34px; */
            /* padding: 23px    56px 6px 78px; padding for top right bottom left */
            padding: 34px 19px;
            /* padding: y(top/bottom) x(left/right);  */
            margin: 34px 19px;
            /*margin: x y;*/
            border-radius: 23px;
            width: 533px;

        }

        .container22 {
            border: 3px solid red;
            background-color: rgb(255, 214, 81);
            font-family: 'Festive', cursive;
            font-size: 20px;
            border-radius: 10px;


            border-radius: 15px;
            padding: 20px 35px;
            margin: 10px auto;
            width: 355px;
            color: black;
        }

        .btn {
            background-color: rgb(150, 241, 127);
            border-radius: 3px;
            padding: 6px;
            border: none;
            cursor: pointer;
            font-size: 13px;
        }

        .btn:hover {
            color: khaki;
            background-color: rgb(50, 169, 238);

        }

        .btn:visited {
            background-color: blueviolet;
        }

        a {
            text-decoration: none;
            color: rgb(5, 3, 3);
            background-color: rgb(255, 159, 234);
            padding: 8px 8px;
            margin: 5px 26px;
            font-size: 20px;
        }

        a:hover {
            /* a:hover is used for the instant when we move curser toward button  then what be atomosphere of button element  */
            color: rgb(0, 0, 0);
            background-color: rgb(82, 255, 14);
            font-size: 25px;

        }

        a:visited {
            background-color: rgb(245, 88, 166);
        }

        .img_post {
            /* width: 40%;
            border: 3px solid black;
            border-radius: 14px;
            margin: 10px auto;
            padding: 2px 3px; */
            width: 50%;
            border: 3px solid black;
            background-color: rgb(135, 255, 98);
            border-radius: 33px;
            margin: 43px auto;
            padding: 13px 22px;
            font-size: 23px;
        }

        .img_post img {
            /* border: 3px solid red; */
            width: 100%;
            margin: 2px auto;

        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Account updation Information</h3>
        <p id="first">Based on the given information and biodata given by you ,we have created your account successfully.Now if anay issue occurs then plz inform us.We will be gvery grateful to you for successfully logging this website</p>
    </div>
    <div class="container22" id="cont1">
        <h2 style="font-family: 'Ubuntu Mono', monospace;">
            Congratulations ! We have created your account Successfully.Now you can enjoy this awesome application.
        </h2>
        <p style="margin: 10px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit, odio. Doloribus illo, sit dolorum quibusdam
            repellat unde vero quas reprehenderit, recusandae natus ipsa corrupti fugiat eaque consequuntur molestiae
            odit Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis labore laudantium iure adipisci commodi
            corporis incidunt placeat amet vitae natus assumenda fugit, sed dolorum, hic repudiandae quisquam officia
            tempore nostrum.</p>
    </div>
    <div id="cont1" class="container22">
        <a href="/VIVA_AP/index1.php" target="_blank" style="padding: 14px auto;font-family: 'Ubuntu Mono', monospace;"><strong>Go Ahead</strong></a>
        <button class="btn" target="_blank">Contact us</button>
    </div>

    <div class="img_post" >
        <img src="food_viva12.jfif" alt="eroor_loading">
 

</body>

</html>


<?php
//it is used to manage info across different pages
date_default_timezone_set("Asia/kolkata");
echo "<br>";
echo "<h2>The time is </h2> " . date("h:i:sa");
echo '<br>';
echo '<br>';
echo '<br>';


# code...
$_SESSION['enmal'] = $_POST['email'];
$_SESSION['usrnm'] = $_POST['username'];
$_SESSION['password'] = $_POST['password1'];

if ($_SESSION['enmal'] && $_SESSION['password']) {
    # code...
    echo "welcome  " . $_SESSION['usrnm'];
    echo "<br>";

    echo "your email address is " . $_SESSION['enmal'] . "<br>";
    echo "<br>";

    // echo "your favorite password is ".$_SESSION['password']."<br>";
    echo "your favorite password is " . $_SESSION['password'] . "<br>";

    echo "we have saved your session";
} else {
    # code...
    echo "<h3>plz sign up again.</h3>";
}


?>