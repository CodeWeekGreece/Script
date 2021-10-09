<?php

include 'config.php';

session_start();

error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TimeKeeper</title>
</head>

<body style="margin:0;">
    <div style="height:650px; width:70%; background-color:#E66C37; margin:10% auto; border-radius:50px; display:flex; flex-direction:column;">
        <h1>You are already signed in</h1>
        <h2 style="color:fff; margin-bottom:50px;">Click the icon below to be redirected to the Home page.</h2>
        <a href="home.php"><img style="width: 15%; margin-left:42%;" src="img/Untitled-1 copy.png" alt="Home Logo"></a>
        <a href="logout.php"><button name="submit" class="btn" style="border: none; margin-left:-42%; margin-top:3%; text-decoration:underline;">Or Logout</button></a>
    </div>
</body>

</html>