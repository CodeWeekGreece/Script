<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
  header("Location: home.php");
}

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("Location: home.php");
  } else {
    echo "<script>alert('Whoops! Email or Password is Wrong.')</script>";
  }
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>TimeKeeper - Login</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <a href="index.php"><img class="center" src="img/Untitled-1 copy.png" width="150px" alt="img1"></a>
  <div class="login-box" id="myContainer">
    <form action="" method="POST">
      <h1 id="h1">Login to TimeKeeper</h1>
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
      </div>
      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>" required>
      </div>
      <div>
        <button name="submit" class="btnm">Login</button>
      </div>
    </form>
    <a class="none" href="#">
      <h4>Forgot your Password?</h4>
    </a>
  </div>
</body>

</html>