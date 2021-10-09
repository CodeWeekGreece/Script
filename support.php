<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: shopadd.php");
}

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    if ($fullname == $fullname) {
        $sql = "INSERT INTO support_form (fullname, email, subject, message)
                VALUES ('$fullname', '$email', '$subject', '$message')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $fullname = $_POST[''];
            $email = $_POST[''];
            $subject = $_POST[''];
            $message = $_POST[''];
            echo "<script>alert('Great! Your support request has been received. Expect us to reply within 24 hours')</script>";

        } else {
            echo "<script>alert('Something went wrong! :( . Please contact our developers at timekeeperdevteam@gmail.com')</script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TimeKeeper - Support Form</title>
</head>

<body>
    <div style="width: 90%; height:800px; margin:60px auto; border-radius:50px; box-shadow: 0 0px 20px 0 rgba(0,0,0,0.7); background-color:coral;" class="support_card">
        <a style="position:absolute; top:8%; left:7%; font-size:22px; color:white;" href="javascript:history.back()">Go Back</a>
        <div style="margin-top:-6%;" class="login-box">
            <form action="" method="POST">
                <h1 style="margin-top:25%; border-bottom: 6px solid white;">Support Form</h1>
                <div class="textbox2">
                    <i class="fas fa-user"></i>
                    <input style="" type="text" name="fullname" placeholder="Full Name." value="<?php echo $fullname; ?>" required>
                </div>
                <div class="textbox2">
                    <i class="fas fa-envelope-square"></i>
                    <input type="text" name="email" placeholder="Email." value="<?php echo $email; ?>" required>
                </div>
                <div class="textbox2">
                    <i class="fas fa-info"></i>
                    <input type="text" name="subject" placeholder="Subject." value="<?php echo $subject; ?>" required>
                </div>
                <div class="textbox3">
                    <i class="fas fa-sticky-note"></i>
                    <textarea style="margin-left: 2%; background-color:transparent; border:none; color:#fff; font-size:18px; height:300px; width:92%;" name="message" value="<?php echo $message; ?>" required placeholder="Message" rows="1" cols="50"></textarea>
                </div>
                <div>
                    <button style="border: 2px solid;" name="submit" class="btnm">Submit Request</button>
                </div>
        </div>
        </form>
    </div>
</body>

</html>