<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
  header("Location: logindone.php");
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $cpassword = md5($_POST['cpassword']);

  if ($password == $cpassword) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')"; // Submits the data twice for no reason, bugfix required! - Eniel
      $result = mysqli_query($conn, $sql);
      if ($result) {  
        $result = mysqli_query($conn, $sql);
        header("Location: successsignup.php");
        $username = "";
        $email = "";
        $_POST['password'] = "";
        $_POST['cpassword'] = "";
      } else {
        echo "<script>alert('Whoops! Something Went Wrong.')</script>";
      }
    } else {
      echo "<script>alert('Whoops! Email Already Exists.')</script>";
    }
  } else {
    echo "<script>alert('Password Does Not Match Confirmation Password.')</script>";
  } 
}



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>TimeKeeper - Signup</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <a href="index.php"><img class="center" src="img/Untitled-1 copy.png" width="150px" alt="img1"></a>
  <div class="login-box">
    <form action="" method="POST">
      <h1>Sign Up to TimeKeeper</h1>
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" required>
      </div>
      <div class="textbox">
        <i class="fas fa-envelope-square"></i>
        <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>" required>
      </div>
      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>" required>
      </div>
      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" name="cpassword" placeholder="Confirm your Password" value="<?php echo $cpassword; ?>" required>
      </div>
      <div>
        <button name="submit" class="btnm">SignUp</button>
      </div>
  </div>
  </form>
</body>

</html>