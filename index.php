<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
  header("Location: lists.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TimeKeeper</title>
</head>
<header style="width: 100%;">
    <div>
        <a href="index.php"><img class="homelogo1" src="img/Untitled-1 copy.png" alt="homelogo"></a>
    </div>
    <div class="container navbar">
        <div class="menu">
            <ul>
                <li><a href="login.php" class="signup-btn"><span>Login</span></a></li>
                <li><a href="signup.php" class="orsignup"><span>or SignUp</span></a></li>
            </ul>
        </div>
    </div>
</header>

<body style="margin: 0;">
    <div class="banner">
        <div class="app-text">
            <h1 id="h1home">Welcome to
                <mark class="smth">TimeKeeper</mark>
            </h1>
            <h2 style="font-size:2vw" id="h2home1">A
                <mark class="smth2">new</mark>
                and
                <mark class="smth2">innovative</mark>
                way to manage your
                <mark class="red">meetings</mark>
                and keep your
                <mark class="red">schedule</mark> on time.
            </h2>
            <p class="ptext1">The current version of TimeKeeper is a work in progress. Our "hardworking" developers are trying to bring it to you as soon as they can.</p>
            <h2 style="float:left; font-size:2vw" id="h2home1">
                <mark class="smth2">Benefits</mark>
                for both
                <mark class="red">Consumers</mark>
                and
                <mark class="red">Businesses.</mark>
            </h2>
        </div>
    </div>  
    </div>
    <div class="zoom" style="box-shadow: 0 0 10px #fff; border-radius: 50%; width:100px; height: 100px; position:sticky; background-color:coral; bottom:15%; left:5%;" class="stickybutton1">
        <a href="support.php">
            <i style="text-shadow:0 0 10px #000; margin-left:19%; margin-top:16%; font-size:60px;" class="fas fa-headset"></i>
            <h3 style="margin-top:30px; color:white; text-decoration:underline; font-size:18px;">Contact us!</h3>
    </div>
    </a>
</body>

</html>